<?php
include 'inc/header.php';
if (!isset($role) || $role == 'admin') {
    echo '<script>window.location.href = "../login.php";</script>';
    exit;
}

include 'inc/config.php';

// Fetch records
$sql = "SELECT cus_id, caprenos_log, customer_name, customer_number, lender, owner, contractor,
               CONCAT_WS('<br>', jobsite_1, jobsite_2, jobsite_3, jobsite_4, jobsite_5, jobsite_6, jobsite_7) AS jobsites,
               prelim
        FROM tbl_caprenos_form
        ORDER BY caprenos_log ASC";
$result = mysqli_query($conn, $sql);
?>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-secondary">Caprenos Prelims</h6>
    </div>

<!-- Loader -->
<div id="loader" class="loader-overlay">
  <div class="loader-content">
    <div class="spinner-border text-primary" role="status"></div>
    <span class="loader-text">Loading data...</span>
  </div>
</div>


    <div class="card-body">
        <div class="table-responsive" style="display:none;" id="tableWrapper">
            <table id="recordsTable" class="table table-bordered table-striped table-hover" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Caprenos Log #</th>
                        <th>Customer</th>
                        <th>Customer Number</th>
                        <th>Job Sites</th>
                        <th>Prelim #</th>
                        <th>Contractor</th>
                        <th>Owner</th>
                        <th>Lender</th>
                    </tr>
                    <tr>
                        <th><div class="input-group input-group-sm"><span class="input-group-text"><i class="fa fa-filter"></i></span><input type="text" placeholder="Caprenos Log" class="form-control" /></div></th>
                        <th><div class="input-group input-group-sm"><span class="input-group-text"><i class="fa fa-filter"></i></span><input type="text" placeholder="Customer" class="form-control" /></div></th>
                          <th><div class="input-group input-group-sm"><span class="input-group-text"><i class="fa fa-filter"></i></span><input type="text" placeholder="Customer Number" class="form-control" /></div></th>
                        <th><div class="input-group input-group-sm"><span class="input-group-text"><i class="fa fa-filter"></i></span><input type="text" placeholder="Jobsites" class="form-control" /></div></th>
                        <th><div class="input-group input-group-sm"><span class="input-group-text"><i class="fa fa-filter"></i></span><input type="text" placeholder="Prelim" class="form-control" /></div></th>
                        <th><div class="input-group input-group-sm"><span class="input-group-text"><i class="fa fa-filter"></i></span><input type="text" placeholder="Contractor" class="form-control" /></div></th>
                        <th><div class="input-group input-group-sm"><span class="input-group-text"><i class="fa fa-filter"></i></span><input type="text" placeholder="Owner" class="form-control" /></div></th>
                        <th><div class="input-group input-group-sm"><span class="input-group-text"><i class="fa fa-filter"></i></span><input type="text" placeholder="Lender" class="form-control" /></div></th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                        <tr>
                            <td><?= htmlspecialchars($row['caprenos_log']) ?></td>
                            <td><?= htmlspecialchars($row['customer_name']) ?></td>
                             <td><?= htmlspecialchars($row['customer_number']) ?></td>
                            <td><?= $row['jobsites'] ?></td>
                            <td><?= htmlspecialchars($row['prelim']) ?></td>
                            <td><?= htmlspecialchars($row['contractor']) ?></td>
                            <td><?= htmlspecialchars($row['owner']) ?></td>
                            <td><?= htmlspecialchars($row['lender']) ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include 'inc/footer.php'; ?>

<script>
$(document).ready(function() {
    // Table is hidden at first
    $('#tableWrapper').hide();

    var table = $('#recordsTable').DataTable({
        orderCellsTop: true,
        fixedHeader: true,
        pageLength: 10,
        order: [],
        initComplete: function() {
            // Hide loader, show table
            $('#loader').fadeOut();
            $('#tableWrapper').fadeIn();
        }
    });

    // Apply search from second header row
    $('#recordsTable thead tr:eq(1) th').each(function (i) {
        $('input', this).on('keyup change', function () {
            if (table.column(i).search() !== this.value) {
                table
                    .column(i)
                    .search(this.value)
                    .draw();
            }
        });
    });
});

</script>
