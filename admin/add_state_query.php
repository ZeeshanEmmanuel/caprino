<?php
include("../inc/config.php");
date_default_timezone_set('America/New_York');
$date = date('Y-m-d H:i:s');
ini_set('display_errors', 1);
error_reporting(E_ALL);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $statesText = trim($_POST['states'] ?? '');

    if ($statesText === '') {
        echo "No states provided!";
        exit;
    }

    // Split by line, remove empty lines
    $states = array_filter(array_map('trim', explode("\n", $statesText)));

    if (empty($states)) {
        echo "No valid states found!";
        exit;
    }

    // Build value list for batch insert
    $values = [];
    foreach ($states as $state) {
        $escapedState = mysqli_real_escape_string($conn, $state);
        $values[] = "('$escapedState', '$date')";
    }

    $sql = "INSERT INTO tbl_state (state_name, created_date) VALUES " . implode(", ", $values);

    if (mysqli_query($conn, $sql)) {
        echo "success";
    } else {
        echo "Database insert failed: " . mysqli_error($conn);
    }
}
?>
