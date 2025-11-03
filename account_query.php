<?php 
include 'inc/config.php';
date_default_timezone_set('America/New_York');

if($_POST){
     $name = $_POST['name'] ?? '';
    $title = $_POST['title'] ?? '';
    $company = $_POST['company'] ?? '';
    $street = $_POST['street'] ?? '';
    $city = $_POST['city'] ?? '';
    $state = $_POST['state'] ?? '';
    $zip = $_POST['zip'] ?? '';
    $po_box = $_POST['po_box'] ?? '';
    $m_city = $_POST['m_city'] ?? '';
    $m_state = $_POST['m_state'] ?? '';
    $m_zip = $_POST['m_zip'] ?? '';
    $company_phone = $_POST['company_phone'] ?? '';
    $ext = $_POST['ext'] ?? '';
    $fax = $_POST['fax'] ?? '';
    $email = $_POST['email'] ?? '';
    $categoryOptions = $_POST['categoryOptions'] ?? '';
    $furnish = $_POST['furnish'] ?? '';
    $notice = $_POST['notice'] ?? '';
    $filling = $_POST['filling'] ?? ''; 
    $notice_monthly = $_POST['notice_monthly'] ?? '';
    $about_caprenos = $_POST['about_caprenos'] ?? '';
    $date = date('y-m-d h:i:s');



   




    $query = "INSERT INTO `tbl_new_account`(`name`, `title`, `company_name`, `company_street_address`, `city`, `state`, `zip`, `mailing_street`, `mailing_city`, `mailing_state`, `mailing_zip`, `company_phone`, `ext`, `company_fax`, `company_email`, `company_A`, `materials`, `preliminary_notices`, `filling`, `notices`, `about_caprenos`, `status`, `created_date`) VALUES
    ('$name','$title','$company','$street','$city','$state','$zip','$po_box','$m_city','$m_state','$m_zip','$company_phone','$ext','$fax','$email','$categoryOptions','$furnish','$notice','$filling','$notice_monthly','$about_caprenos','active','$date')";
if (mysqli_query($conn, $query)) {        
        echo 1;
    } else {
        echo 0;
    }



}


?>