<?php
require 'config.php';
session_start();

$errorMessage = ''; // Fix the typo in the variable name

if ($stmt = $conn->prepare('SELECT student_num, psw FROM student WHERE student_num = ?')) {
    // Bind parameters (s = string, i = int, b = blob, etc), in our case, student_num is a string so we use "s"
    $stmt->bind_param('s', $_POST['student_num']); // Corrected 'i' to 's'
    $stmt->execute();
    // Store the result so we can check if the account exists in the database.
    $stmt->store_result(); // Corrected the typo in the method name

    // if stud num exists
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($student_num, $password);
        $stmt->fetch();

        // Account exists, now we verify the password.
        // Note: remember to use password_hash in your registration file to store the hashed passwords.
        if (password_verify($_POST['psw'], $password)) {
            // Verification success! User has logged in!
            // Create sessions so we know the user is logged in, they basically act like cookies but remember the data on the server.
            session_regenerate_id();
            $_SESSION['loggedin'] = TRUE; // Corrected 'loggendin' to 'loggedin'
            $_SESSION['student_num'] = $student_num;

            if ($student_num == 123456) {
                header("Location: ../pages/student/dashboard.php");
            } else {
                header("Location: ../pages/student/dashboard.php");
            }
        } else {
            $errorMessage = 'Incorrect login details';
            header("Location: ../pages/Login.php"); //redirect to the login page   
        }
    } else {
        $errorMessage = 'Incorrect login details';
        header("Location: ../pages/Login.php"); //redirect to the login page  
    }

    // Set the error message in a session variable to be accessed on the login page
    $_SESSION['error_message'] = $errorMessage;
    setcookie("student_num", $_POST['student_num'], time() + 86400, "/");
}


?>
