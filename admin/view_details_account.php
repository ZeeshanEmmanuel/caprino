<?php
include 'inc/header.php';

$id = $_GET['id'] ?? 0;
$query = "SELECT * FROM tbl_new_account WHERE id = $id";
$result = mysqli_query($conn, $query);

if (!$result || mysqli_num_rows($result) == 0) {
    echo "<div class='alert alert-warning'>No account found.</div>";
    include 'inc/footer.php';
    exit;
}

$row = mysqli_fetch_assoc($result);
?>

<div class="container my-5">
    <div class="card shadow">
        <div class="card-header bg-info text-white">
            <h4 class="mb-0">Account Form Details</h4>
        </div>
        <div class="card-body">

            <?php
            $sections = [
                'Basic Information' => [
                    'Name' => $row['name'],
                    'Title' => $row['title'],
                    'Company Name' => $row['company_name'],
                    'Company Street Address' => $row['company_street_address'],
                    'City' => $row['city'],
                    'State' => $row['state'],
                    'Zip' => $row['zip']
                ],
                'Mailing Address' => [
                    'P.O. Box' => $row['mailing_street'] ?: '-',
                    'City' => $row['mailing_city'] ?: '-',
                    'State' => $row['mailing_state'] ?: '-',
                    'Zip' => $row['mailing_zip'] ?: '-'
                ],
                'Contact Information' => [
                    'Company Phone' => $row['company_phone'] ?: '-',
                    'Ext' => $row['ext'] ?: '-',
                    'Company Fax' => $row['company_fax'] ?: '-',
                    'Company Email' => $row['company_email'] ?: '-'
                ],
                'Preliminary Notice Info' => [
                    'Is your company a' => $row['company_A'] ?: '-',
                    'Materials or Service Furnished' => $row['materials'] ?: '-',
                    'Filing Preliminary Notices Now?' => $row['preliminary_notices'] ?: '-',
                    'If yes, how are you filing?' => $row['filling'] ?: '-',
                    'Approx. Notices Sent Monthly' => $row['notices'] ?: '-',
                    'How did you hear about CAPRENOS?' => $row['about_caprenos'] ?: '-'
                ]
            ];

            foreach ($sections as $title => $fields):
            ?>
            <div class="card mb-3 border-secondary">
                <div class="card-header bg-light text-secondary font-weight-bold"><?php echo $title; ?></div>
                <div class="card-body">
                    <div class="row">
                        <?php foreach ($fields as $label => $value): ?>
                        <div class="col-md-6 mb-2">
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
