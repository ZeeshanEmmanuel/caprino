<?php
include 'inc/header.php';
if (!isset($role) || $role == 'contractor') {
    echo '<script>window.location.href = "../login.php";</script>';
    exit;
}
?>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-secondary">Show Miller Act Form Data</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="millerTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Company Name</th>
                        <th>Name</th>
                        <th>Start Date</th>
                        <th>Estimated Amount</th>
                        <th>Created Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $show_miller = "SELECT id, company_name, name, start_date, estimated_amount, created_date FROM tbl_miller_act ORDER BY created_date DESC";
                    $result = mysqli_query($conn, $show_miller);
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $id = $row['id'];
                            $company_name = $row['company_name'];
                            $name = $row['name'];
                            $start_date = $row['start_date'];
                            $estimated_amount = $row['estimated_amount'];
                            $created_date = $row['created_date'];
                    ?>
                    <tr>
                        <td><?php echo $id ?></td>
                        <td><?php echo htmlspecialchars($company_name) ?></td>
                        <td><?php echo htmlspecialchars($name) ?></td>
                        <td><?php echo htmlspecialchars($start_date) ?></td>
                        <td><?php echo htmlspecialchars($estimated_amount) ?></td>
                        <td><?php echo htmlspecialchars($created_date) ?></td>
                        <td>
                            <a href="view_miller_detail.php?id=<?php echo $id ?>" class="badge badge-info">View Details</a>
                        </td>
                    </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include 'inc/footer.php'; ?>

<script>
$(document).ready(function() {
    $('#millerTable').DataTable();
});
</script>
