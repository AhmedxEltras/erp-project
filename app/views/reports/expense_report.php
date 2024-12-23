<!-- app/views/reports/expense_report.php -->
<?php include '../app/config/settings.php'; ?>
<?php include '../app/views/header.php'; ?>

<div class="container">
    <h2>تقرير المصروفات</h2>
    <p>إجمالي المصروفات: <?= $expenseReport['total_expense']; ?></p>
</div>

<?php include '../app/views/footer.php'; ?>
