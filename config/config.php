<!-- stores data base config files -->

<?php

$hn= "localhost";
$un = "my_clyde_admin";
$pw = "QwpddO9.1Oj0VjJU";
$db = "my_clyde";

$conn = new mysqli($hn, $un, $pw, $db);

if ($conn->connect_error){
    die("connection failed: " . $db->connect_error) ;
}

?>