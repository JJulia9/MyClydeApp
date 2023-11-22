<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require 'config.php';
session_start();

$errorMessage = ''; // Fix the typo in the variable name

if (isset($_POST['student_num'])) {
    if ($stmt = $conn->prepare('SELECT student_num, psw FROM student WHERE student_num = ?')) {
        // Bind parameters (s = string, i = int, b = blob, etc), in our case, student_num is a string so we use "s"
        $stmt->bind_param('s', $_POST['student_num']); // Corrected 'i' to 's'
        $stmt->execute();
        // Store the result so we can check if the account exists in the database.
        $stmt->store_result(); // Corrected the typo in the method name

        // Debugging: Print the number of rows returned by the query
        echo 'Number of rows returned: ' . $stmt->num_rows . '<br>';

        // if stud num exists
        if ($stmt->num_rows > 0) {
            $stmt->bind_result($student_num, $password);
            $stmt->fetch();

            // Debugging: Print the hashed password from the database
            echo 'Hashed Password from Database: ' . $password . '<br>';

            // Debugging: Print the password sent via the form
            echo 'Password from Form: ' . $_POST['psw'] . '<br>';

            // Account exists, now we verify the password.
            // Note: remember to use password_hash in your registration file to store the hashed passwords.
            if (password_verify($_POST['psw'], $password)) {
                // Debugging: Print a message if password verification is successful
                echo 'Password Verification Successful!<br>';

                // Verification success! User has logged in!
                // Create sessions so we know the user is logged in, they basically act like cookies but remember the data on the server.
                session_regenerate_id();
                $_SESSION['loggedin'] = TRUE; // Corrected 'loggendin' to 'loggedin'
                $_SESSION['student_num'] = $student_num;

                if ($student_num == 123456) {
                    header("Location: ../pages/student/dashboard.php");
                    exit; // Add exit after header redirect
                } else {
                    header("Location: ../pages/student/dashboard.php");
                    exit; // Add exit after header redirect
                }
            } else {
                $errorMessage = 'Incorrect login details';
            }
        } else {
            $errorMessage = 'Incorrect login details';
        }

        // Set the error message in a session variable to be accessed on the login page
        $_SESSION['error_message'] = $errorMessage;
        setcookie("student_num", $_POST['student_num'], time() + 86400, "/");
    }
}

// If we reached here, there's an issue. Print a message for debugging.
echo 'Authentication failed. Check your code and ensure it reaches this point.';
?>
