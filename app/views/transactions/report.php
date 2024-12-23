<!-- تقرير العمليات المالية -->
<?php include '../config/settings.php'; ?>
<?php include '../includes/header.php'; ?>

<div class="container">
    <h2>تقرير العمليات المالية</h2>
    <p>إجمالي الإيرادات: <?= $income_total; ?></p>
    <p>إجمالي المصروفات: <?= $expense_total; ?></p>
</div>

<?php include '../includes/footer.php'; ?>
