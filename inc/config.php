<?php
session_start();

// Azure Connection
$conn = mysqli_init();
mysqli_ssl_set($conn, NULL, NULL, "/var/www/html/DigiCertGlobalRootCA.crt.pem", NULL, NULL);
mysqli_real_connect($conn, "caprenos-prelims-server.mysql.database.azure.com", "jaxhsfkaqs", "Frb$2ndzAxulg7KP", "caprenos-prelims-database", 3306, MYSQLI_CLIENT_SSL);


if (mysqli_connect_errno($conn)) {
    die("Failed to connect to MySQL: " . mysqli_connect_error());
} else {
    echo "Connection successful!";
}


//local
// $username = "root";
// $host = "localhost";
// $password = '';
// $db_name = "caprenos_db";

// //live
// $username = "checmniu_caprenos_user";
// $host = "localhost";
// $password = 'c5+wRW9qkRJ6';
// $db_name = "checmniu_caprenos_db";

// $conn = mysqli_connect($host, $username, $password, $db_name) or die('Connection Failed!!');
// mysqli_set_charset($conn, "utf8mb4");
