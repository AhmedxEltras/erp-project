<!-- app/views/transactions/add.php -->
<?php include '../app/config/settings.php'; ?>
<?php include '../app/views/header.php'; ?>

<div class="container">
    <h2>إضافة عملية مالية</h2>
    <form method="POST" action="/transactions/create">
        <div class="form-group">
            <label for="type">النوع:</label>
            <select name="type" id="type" class="form-control" required>
                <option value="income">إيراد</option>
                <option value="expense">مصروف</option>
            </select>
        </div>
        <div class="form-group">
            <label for="amount">المبلغ:</label>
            <input type="number" step="0.01" name="amount" id="amount" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="description">الوصف:</label>
            <textarea name="description" id="description" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="date">التاريخ:</label>
            <input type="date" name="date" id="date" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">إضافة</button>
    </form>
</div>

<?php include '../app/views/footer.php'; ?>
