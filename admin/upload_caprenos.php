<?php
include 'inc/header.php';
if (!isset($role) || $role == 'admin') {
    echo '<script>window.location.href = "../login.php";</script>';
    exit;
}


if (isset($_POST['upload'])) {
    if (isset($_FILES['csv_file']['name']) && $_FILES['csv_file']['error'] == 0) {
        $filename = $_FILES['csv_file']['tmp_name'];

        if (($handle = fopen($filename, "r")) !== false) {
            $row = 0;
            while (($data = fgetcsv($handle, 10000, ",")) !== false) {
                $row++;
                // Skip header row
                if ($row == 1) continue;

                // Escape all columns (15 fields)
                $cus_id        = mysqli_real_escape_string($conn, $data[0]);
                $caprenos_log  = mysqli_real_escape_string($conn, $data[1]);
                $customer_name = mysqli_real_escape_string($conn, $data[2]);
                $lender        = mysqli_real_escape_string($conn, $data[3]);
                $owner         = mysqli_real_escape_string($conn, $data[4]);
                $contractor    = mysqli_real_escape_string($conn, $data[5]);
                $jobsite_1     = mysqli_real_escape_string($conn, $data[6]);
                $jobsite_2     = mysqli_real_escape_string($conn, $data[7]);
                $jobsite_3     = mysqli_real_escape_string($conn, $data[8]);
                $jobsite_4     = mysqli_real_escape_string($conn, $data[9]);
                $jobsite_5     = mysqli_real_escape_string($conn, $data[10]);
                $jobsite_6     = mysqli_real_escape_string($conn, $data[11]);
                $jobsite_7     = mysqli_real_escape_string($conn, $data[12]);
                $prelim        = mysqli_real_escape_string($conn, $data[13]);
                $customer_number        = mysqli_real_escape_string($conn, $data[14]);

                // Insert into DB
                $query = "INSERT INTO `tbl_caprenos_form`
                          (`cus_id`, `caprenos_log`, `customer_name`, `lender`, `owner`, `contractor`, 
                           `jobsite_1`, `jobsite_2`, `jobsite_3`, `jobsite_4`, `jobsite_5`, `jobsite_6`, `jobsite_7`, `prelim`, `customer_number`)
                          VALUES 
                          ('$cus_id', '$caprenos_log', '$customer_name', '$lender', '$owner', '$contractor',
                           '$jobsite_1', '$jobsite_2', '$jobsite_3', '$jobsite_4', '$jobsite_5', '$jobsite_6', '$jobsite_7', '$prelim', '$customer_number')";
                
                mysqli_query($conn, $query) or die(mysqli_error($conn));
            }
            fclose($handle);
            echo "<div class='alert alert-success'>CSV imported successfully!</div>";
        } else {
            echo "<div class='alert alert-danger'>Unable to open CSV file.</div>";
        }
    } else {
        echo "<div class='alert alert-warning'>Please choose a CSV file.</div>";
    }
}

?>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-secondary">Upload Data</h6>
    </div>

    <!-- Loader -->
    <div id="loader" class="loader-overlay" style="display:none;">
        <div class="spinner-border text-primary" role="status"></div>
    </div>

    <div class="container mt-4">
        <h3>Upload CSV File</h3>
        <form method="post" enctype="multipart/form-data" id="csvForm">
            <div class="form-group mb-3">
                <input type="file" name="csv_file" class="form-control" accept=".csv" required>
            </div>
            <button type="submit" name="upload" class="btn btn-primary mb-5">Upload & Import</button>
        </form>
    </div>
</div>

<?php include 'inc/footer.php'; ?>

<style>
/* Fullscreen overlay loader */
.loader-overlay {
    position: fixed;
    top: 0; left: 0; right: 0; bottom: 0;
    background: rgba(255, 255, 255, 0.7);
    z-index: 9999;
    display: flex;
    align-items: center;
    justify-content: center;
}
</style>

<script>
$(document).ready(function() {
    $("#csvForm").on("submit", function() {
        $("#loader").fadeIn(); // Show loader on form submit
    });
});
</script>


<?php include 'inc/footer.php'; ?>
