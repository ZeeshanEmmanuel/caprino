<?php
include 'inc/config.php';
date_default_timezone_set('America/New_York');

if ($_POST) {
    $company_name       = $_POST['cname'] ?? '';
    $name               = $_POST['maname'] ?? '';
    $company_phone      = $_POST['maphone'] ?? '';
    $start_date         = $_POST['startdate'] ?? '';
    $estimated_amount   = $_POST['amount'] ?? '';
    $customer_name      = $_POST['customer_name'] ?? '';
    $customer_phone     = $_POST['customer_phone'] ?? '';
    $customer_fax       = $_POST['customer_fax'] ?? '';
    $customer_address   = $_POST['customer_address'] ?? '';
    $customer_address2  = $_POST['customer_address2'] ?? '';
    $customer_city      = $_POST['customer_city'] ?? '';
    $state              = $_POST['state'] ?? '';
    $zip_code           = $_POST['zipcode'] ?? '';
    $materials_deliverd = $_POST['materials'] ?? '';
    $job_site_address   = $_POST['jobsite'] ?? '';
    $contractor_name    = $_POST['contractor_name'] ?? '';
    $contractor_phone   = $_POST['contractor_phone'] ?? '';
    $contractor_fax     = $_POST['contractor_fax'] ?? '';
    $contractor_address = $_POST['contractor_address'] ?? '';
    $contractor_city    = $_POST['contractor_city'] ?? '';
    $contractor_state   = $_POST['contractor_state'] ?? '';
    $contractor_zipcode = $_POST['contractor_zip'] ?? '';
    $owner_name         = $_POST['owner_name'] ?? '';
    $owner_phone        = $_POST['owner_phone'] ?? '';
    $owner_fax          = $_POST['owner_fax'] ?? '';
    $owner_address      = $_POST['owner_address'] ?? '';
    $owner_city         = $_POST['owner_city'] ?? '';
    $owner_state        = $_POST['owner_state'] ?? '';
    $owner_zipcode      = $_POST['owner_zip'] ?? '';
    $lender_name        = $_POST['lender_name'] ?? '';
    $lender_phone       = $_POST['lender_phone'] ?? '';
    $lender_fax         = $_POST['lender_fax'] ?? '';
    $lender_address     = $_POST['lender_address'] ?? '';
    $lender_city        = $_POST['lender_city'] ?? '';
    $lender_state       = $_POST['lender_state'] ?? '';
    $lender_zipcode     = $_POST['lender_zip'] ?? '';
    $special_notes      = $_POST['notes'] ?? '';
    $created_date       = date('Y-m-d H:i:s');

    $query = "INSERT INTO `tbl_miller_act` 
        (`company_name`, `name`, `company_phone`, `start_date`, `estimated_amount`,
        `customer_name`, `customer_phone`, `customer_fax`, `customer_address`, `customer_address2`,
        `customer_city`, `state`, `zip_code`, `materials_deliverd`, `job_site_address`,
        `contractor_name`, `contractor_phone`, `contractor_fax`, `contractor_address`, `contractor_city`, 
        `contractor_state`, `contractor_zipcode`,
        `owner_name`, `owner_phone`, `owner_fax`, `owner_address`, `owner_city`, `owner_state`, `owner_zipcode`,
        `lender_name`, `lender_phone`, `lender_fax`, `lender_address`, `lender_city`, `lender_state`, `lender_zipcode`,
        `special_notes`, `status`, `created_date`) 
    VALUES (
        '$company_name', '$name', '$company_phone', '$start_date', '$estimated_amount',
        '$customer_name', '$customer_phone', '$customer_fax', '$customer_address', '$customer_address2',
        '$customer_city', '$state', '$zip_code', '$materials_deliverd', '$job_site_address',
        '$contractor_name', '$contractor_phone', '$contractor_fax', '$contractor_address', '$contractor_city',
        '$contractor_state', '$contractor_zipcode',
        '$owner_name', '$owner_phone', '$owner_fax', '$owner_address', '$owner_city', '$owner_state', '$owner_zipcode',
        '$lender_name', '$lender_phone', '$lender_fax', '$lender_address', '$lender_city', '$lender_state', '$lender_zipcode',
        '$special_notes', 'active', '$created_date'
    )";

    if (mysqli_query($conn, $query)) {
        echo 1;
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
