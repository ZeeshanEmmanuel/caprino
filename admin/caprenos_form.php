<?php 
include 'inc/header.php';

if (!isset($role) || $role == 'admin') {
    echo '<script>window.location.href = "../login.php";</script>';
    exit;
}
?>



<style>
    .caprenos-table {
        width: 100%;
        border-collapse: collapse;
        font-family: Arial, sans-serif;
        font-size: 14px;
    }
    .caprenos-table th, .caprenos-table td {
        border: 1px solid #ccc;
        padding: 6px;
        text-align: left;
    }
    .caprenos-table th {
        background: #f5f5f5;
        font-weight: bold;
    }
    .filter-input, .form-input {
        width: 95%;
        padding: 4px;
        font-size: 13px;
        border: 1px solid #aaa;
        border-radius: 3px;
    }
    .refresh-btn {
        float: right;
        margin: 5px;
        padding: 5px 10px;
        font-size: 13px;
        border: 1px solid #666;
        border-radius: 4px;
        background: #eee;
        cursor: pointer;
    }
    .no-records {
        text-align: center;
        padding: 20px;
        color: #666;
    }
    .submit-btn {
        margin-top: 15px;
        padding: 8px 15px;
        background: #2c7be5;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
</style>

<div style="padding:10px; background:#fff; border:1px solid #ccc;">
    <label>
        <input type="checkbox" id="includeHistory"> Include Historical Data
    </label>
    <button class="refresh-btn">Refresh</button>

    <!-- Start Form -->
    <form method="POST" id="caprenos_form" action="javascript:;">
        <table class="caprenos-table" style="margin-top:10px;">
            <thead>
                <tr>
                    <th>View Prelim</th>
                    <th>Forms</th>
                    <th>Caprenos Log #</th>
                    <th>Customer</th>
                    <th>Customer Number</th>
                    <th>Job Sites</th>
                    <th>Prelim #</th>
                    <th>Contractor</th>
                    <th>Owner</th>
                    <th>Lender</th>
                    <th>Ref #</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><!-- just heading, no input --></td>
                    <td><!-- just heading, no input --></td>
                    <td><input type="text" name="caprenos_log" id="caprenos_log" class="form-input"></td>
                    <td><input type="text" name="customer" id="customer" class="form-input"></td>
                    <td><input type="text" name="customer_number" id="customer_number" class="form-input"></td>
                    <td><input type="text" name="job_sites" id="job_sites" class="form-input"></td>
                    <td><input type="text" name="prelim_no" id="prelim_no" class="form-input"></td>
                    <td><input type="text" name="contractor" id="contractor" class="form-input"></td>
                    <td><input type="text" name="owner" id="owner" class="form-input"></td>
                    <td><input type="text" name="lender" id="lender" class="form-input"></td>
                    <td><input type="text" name="ref_no" id="ref_no" class="form-input"></td>
                </tr>
            </tbody>
        </table>

        <button type="submit" class="submit-btn">Save</button>
    </form>
    <!-- End Form -->
    
    
    <br><br>

    <!-- Records Table -->
    <table class="caprenos-table">
        <thead>
            <tr>
                <th>View Prelim</th>
                <th>Forms</th>
                <th>Caprenos Log #</th>
                <th>Customer</th>
                <th>Customer Number</th>
                <th>Job Sites</th>
                <th>Prelim #</th>
                <th>Contractor</th>
                <th>Owner</th>
                <th>Lender</th>
                <th>Ref #</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM tbl_caprenos ORDER BY id DESC limit 13958";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>
                        <td></td>
                        <td></td>
                        <td>{$row['caprenos_log']}</td>
                        <td>{$row['customer']}</td>
                        <td>{$row['customer_number']}</td>
                        <td>{$row['job_sites']}</td>
                        <td>{$row['prelim']}</td>
                        <td>{$row['contractor']}</td>
                        <td>{$row['owner']}</td>
                        <td>{$row['lender']}</td>
                        <td>{$row['ref']}</td>
                    </tr>";
                }
            } else {
                echo "<tr><td colspan='11' class='no-records'>No records to display.</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>

<?php include 'inc/footer.php'; ?>
