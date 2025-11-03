<?php
include("../inc/config.php");
date_default_timezone_set('America/New_York');
$date = date('y-m-d h:i:s');
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Escape form fields
    $caprenos_log = mysqli_real_escape_string($conn, $_POST['caprenos_log'] ?? '');
    $customer = mysqli_real_escape_string($conn, $_POST['customer'] ?? '');
    $customer_number = mysqli_real_escape_string($conn, $_POST['customer_number'] ?? '');
    $job_sites = mysqli_real_escape_string($conn, $_POST['job_sites'] ?? '');
    $prelim_no = mysqli_real_escape_string($conn, $_POST['prelim_no'] ?? '');
    $contractor =  $_POST['contractor'];
      $owner = $_POST['owner'];
      $lender = $_POST['lender'];
      $ref_no = $_POST['ref_no'];

      


    $sql = "INSERT INTO `tbl_caprenos`(`caprenos_log`, `customer`, `customer_number`, `job_sites`, `prelim`, `contractor`, `owner`, `lender`, `ref`, `created_date`) VALUES ('$caprenos_log','$customer','$customer_number','$job_sites','$prelim_no','$contractor','$owner', '$lender', '$ref_no','$date')";
    if (mysqli_query($conn, $sql)) {        
        echo "success";
    } else {
     echo "Database insert failed!";
     }
}

?>