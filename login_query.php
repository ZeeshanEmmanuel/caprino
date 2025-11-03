<?php
include 'inc/config.php';

if ($_POST) {
    $email = $_POST['login_email'];
    $password = md5($_POST['login_password']);

    // Check if user exists with email and password
    $chkUser = "SELECT * FROM `tbl_register` WHERE `email` = '$email' AND `password` = '$password'";
    $result = mysqli_query($conn, $chkUser);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

        // If user found but not active
        if ($row['status'] != 'active') {
            echo "inactive";
            exit;
        }

        // Save to SESSION
        $userId = $row['id'];
        $userRole = $row['role'];
        $username = $row['name'];
        
        
       

        $_SESSION['USER_ID'] = $userId;
        $_SESSION['USER_ROLE'] = $userRole;
        $_SESSION['USER_NAME'] = $username;

        // Return role (admin/user)
        echo $userRole;
    } else {
        echo "invalid";
    }
}
?>
