<?php
session_start();

session_destroy();

header('Location: home');

?>
//can leave it open because it will redirect to login page nothing running after