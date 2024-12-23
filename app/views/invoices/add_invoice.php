<!-- app/views/invoices/add_invoice.php -->
<?php include '../app/config/settings.php'; ?>
<?php include '../app/views/header.php'; ?>

<div class="container">
    <h2>إضافة فاتورة جديدة</h2>
    <form method="POST" action="/invoices/create">
        <div class="form-group">
            <label for="student_name">اسم الطالب:</label>
            <input type="text" name="student_name" id="student_name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="amount">المبلغ:</label>
            <input type="number" step="0.01" name="amount" id="amount" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="status">الحالة:</label>
            <select name="status" id="status" class="form-control" required>
                <option value="paid">مدفوعة</option>
                <option value="partial">جزئية</option>
                <option value="unpaid">غير مدفوعة</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success">إضافة</button>
    </form>
</div>

<?php include '../app/views/footer.php'; ?>
