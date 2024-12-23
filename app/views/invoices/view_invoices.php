<!-- app/views/invoices/view_invoices.php -->
<?php include '../app/config/settings.php'; ?>
<?php include '../app/views/header.php'; ?>

<div class="container">
    <h2>الفواتير</h2>
    <a href="/invoices/add" class="btn btn-primary">إضافة فاتورة جديدة</a>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>اسم الطالب</th>
                <th>المبلغ</th>
                <th>الحالة</th>
                <th>الإجراءات</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($invoices as $invoice): ?>
                <tr>
                    <td><?= $invoice['id']; ?></td>
                    <td><?= $invoice['student_name']; ?></td>
                    <td><?= $invoice['amount']; ?></td>
                    <td><?= ucfirst($invoice['status']); ?></td>
                    <td>
                        <a href="/invoices/update/<?= $invoice['id']; ?>" class="btn btn-warning">تحديث الحالة</a>
                        <a href="/invoices/delete/<?= $invoice['id']; ?>" class="btn btn-danger">حذف</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php include '../app/views/footer.php'; ?>
