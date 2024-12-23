<!-- app/views/transactions/edit.php -->
<?php include '../app/config/settings.php'; ?>
<?php include '../app/views/header.php'; ?>

<div class="container">
    <h2>تعديل العملية المالية</h2>
    <form method="POST" action="/transactions/update/<?= $transaction['id']; ?>">
        <div class="form-group">
            <label for="type">النوع:</label>
            <select name="type" id="type" class="form-control" required>
                <option value="income" <?= ($transaction['type'] == 'income') ? 'selected' : ''; ?>>إيراد</option>
                <option value="expense" <?= ($transaction['type'] == 'expense') ? 'selected' : ''; ?>>مصروف</option>
            </select>
        </div>
        <div class="form-group">
            <label for="amount">المبلغ:</label>
            <input type="number" step="0.01" name="amount" id="amount" class="form-control" value="<?= $transaction['amount']; ?>" required>
        </div>
        <div class="form-group">
            <label for="description">الوصف:</label>
            <textarea name="description" id="description" class="form-control"><?= $transaction['description']; ?></textarea>
        </div>
        <div class="form-group">
            <label for="date">التاريخ:</label>
            <input type="date" name="date" id="date" class="form-control" value="<?= $transaction['date']; ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">تحديث</button>
    </form>
</div>

<?php include '../app/views/footer.php'; ?>
