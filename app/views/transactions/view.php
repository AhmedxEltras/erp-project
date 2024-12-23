<!-- app/views/transactions/view.php -->
<?php include '../app/config/settings.php'; ?>
<?php include '../app/views/header.php'; ?>

<div class="container">
    <h2>العمليات المالية</h2>
    <a href="/transactions/add" class="btn btn-primary">إضافة عملية مالية</a>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>النوع</th>
                <th>المبلغ</th>
                <th>الوصف</th>
                <th>التاريخ</th>
                <th>الإجراءات</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($transactions as $transaction): ?>
                <tr>
                    <td><?= $transaction['id']; ?></td>
                    <td><?= ucfirst($transaction['type']); ?></td>
                    <td><?= $transaction['amount']; ?></td>
                    <td><?= $transaction['description']; ?></td>
                    <td><?= $transaction['date']; ?></td>
                    <td>
                        <a href="/transactions/edit/<?= $transaction['id']; ?>" class="btn btn-warning">تعديل</a>
                        <a href="/transactions/delete/<?= $transaction['id']; ?>" class="btn btn-danger">حذف</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php include '../app/views/footer.php'; ?>
