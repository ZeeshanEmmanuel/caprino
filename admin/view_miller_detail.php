<?php
include 'inc/header.php';
$id = $_GET['id'] ?? 0;

$query = "SELECT * FROM tbl_miller_act WHERE id = $id";
$result = mysqli_query($conn, $query);

if (!$result || mysqli_num_rows($result) == 0) {
    echo "<div class='alert alert-warning'>No record found.</div>";
    include 'inc/footer.php';
    exit;
}

$row = mysqli_fetch_assoc($result);
?>

<div class="container my-5">
    <div class="card shadow">
        <div class="card-header bg-info text-white">
            <h4 class="mb-0">Miller Act Form Details</h4>
        </div>
        <div class="card-body">

            <?php
            $sections = [
                'Company Information' => [
                    'Company Name' => $row['company_name'],
                    'Name' => $row['name'],
                    'Company Phone' => $row['company_phone'],
                    'Start Date' => $row['start_date'],
                    'Estimated Amount' => $row['estimated_amount'],
                ],
                'Customer Information' => [
                    'Name' => $row['customer_name'] ?: '-',
                    'Phone' => $row['customer_phone'] ?: '-',
                    'Fax' => $row['customer_fax'] ?: '-',
                    'Address' => $row['customer_address'] ?: '-',
                    'Address 2' => $row['customer_address2'] ?: '-',
                    'City' => $row['customer_city'] ?: '-',
                    'State' => $row['state'] ?: '-',
                    'Zip' => $row['zip_code'] ?: '-'
                ],
                'Contractor Information' => [
                    'Name' => $row['contractor_name'] ?: '-',
                    'Phone' => $row['contractor_phone'] ?: '-',
                    'Fax' => $row['contractor_fax'] ?: '-',
                    'Address' => $row['contractor_address'] ?: '-',
                    'City' => $row['contractor_city'] ?: '-',
                    'State' => $row['contractor_state'] ?: '-',
                    'Zip' => $row['contractor_zipcode'] ?: '-'
                ],
                'Property Owner Information' => [
                    'Name' => $row['owner_name'] ?: '-',
                    'Phone' => $row['owner_phone'] ?: '-',
                    'Fax' => $row['owner_fax'] ?: '-',
                    'Address' => $row['owner_address'] ?: '-',
                    'City' => $row['owner_city'] ?: '-',
                    'State' => $row['owner_state'] ?: '-',
                    'Zip' => $row['owner_zipcode'] ?: '-'
                ],
                'Lender Information' => [
                    'Name' => $row['lender_name'] ?: '-',
                    'Phone' => $row['lender_phone'] ?: '-',
                    'Fax' => $row['lender_fax'] ?: '-',
                    'Address' => $row['lender_address'] ?: '-',
                    'City' => $row['lender_city'] ?: '-',
                    'State' => $row['lender_state'] ?: '-',
                    'Zip' => $row['lender_zipcode'] ?: '-'
                ],
                'Special Notes' => [
                    'Notes' => nl2br($row['special_notes'])
                ]
            ];

            foreach ($sections as $title => $fields):
            ?>
            <div class="card mb-3 border-secondary">
                <div class="card-header bg-light text-secondary font-weight-bold"><?php echo $title; ?></div>
                <div class="card-body">
                    <div class="row">
                        <?php foreach ($fields as $label => $value): ?>
                        <div class="col-md-4 mb-2">
                            <strong><?php echo $label; ?>:</strong> <?php echo htmlspecialchars($value); ?>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>

        </div>
    </div>
</div>

<?php include 'inc/footer.php'; ?>
