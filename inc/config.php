<?php
session_start();

//local
// $username = "root";
// $host = "localhost";
// $password = '';
// $db_name = "caprenos_db";



//live
$username = "checmniu_caprenos_user";
$host = "localhost";
$password = 'c5+wRW9qkRJ6';
$db_name = "checmniu_caprenos_db";

$conn = mysqli_connect($host, $username, $password, $db_name) or die('Connection Failed!!');
mysqli_set_charset($conn, "utf8mb4");
?>
