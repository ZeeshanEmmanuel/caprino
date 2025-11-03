<?php
include 'inc/config.php';

// Unset all of the session variables
$_SESSION = array();
// Destroy the session
session_destroy();
// Redirect to login page or any other page as needed
header("Location:login.php");
exit;