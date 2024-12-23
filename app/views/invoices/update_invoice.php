<!-- app/views/invoices/update_invoice.php -->
<?php include '../app/config/settings.php'; ?>
<?php include '../app/views/header.php'; ?>

<div class="container">
    <h2>تحديث حالة الفاتورة</h2>
    <form method="POST" action="/invoices/updateStatus/<?= $invoice['id']; ?>">
        <div class="form-group">
            <label for="status">الحالة:</label>
            <select name="status" id="status" class="form-control" required>
                <option value="paid" <?= ($invoice['status'] == 'paid') ? 'selected' : ''; ?>>مدفوعة</option>
                <option value="partial" <?= ($invoice['status'] == 'partial') ? 'selected' : ''; ?>>جزئية</option>
                <option value="unpaid" <?= ($invoice['status'] == 'unpaid') ? 'selected' : ''; ?>>غير مدفوعة</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">تحديث</button>
    </form>
</div>

<?php include '../app/views/footer.php'; ?>
