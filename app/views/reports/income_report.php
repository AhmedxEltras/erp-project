<!-- app/views/reports/income_report.php -->
<?php include '../app/config/settings.php'; ?>
<?php include '../app/views/header.php'; ?>

<div class="container">
    <h2>تقرير الإيرادات</h2>
    <p>إجمالي الإيرادات: <?= $incomeReport['total_income']; ?></p>
</div>

<?php include '../app/views/footer.php'; ?>
