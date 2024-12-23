<?php 
// عرض تقرير ملخص الإيرادات والمصروفات
include '../config/settings.php'; 
include '../includes/header.php'; 

// جلب البيانات من قاعدة البيانات
$income_query = "SELECT SUM(amount) AS total_income FROM transactions WHERE type = 'income'";
$expense_query = "SELECT SUM(amount) AS total_expenses FROM transactions WHERE type = 'expense'";

$income_result = $pdo->query($income_query);
$expense_result = $pdo->query($expense_query);

$income_data = $income_result->fetch(PDO::FETCH_ASSOC);
$expense_data = $expense_result->fetch(PDO::FETCH_ASSOC);

$total_income = $income_data['total_income'] ? $income_data['total_income'] : 0;
$total_expenses = $expense_data['total_expenses'] ? $expense_data['total_expenses'] : 0;

$net_balance = $total_income - $total_expenses;
?>

<div class="container">
    <h2>تقرير ملخص الإيرادات والمصروفات</h2>
    <table class="table">
        <tr>
            <th>إجمالي الإيرادات</th>
            <td><?= number_format($total_income, 2); ?> جنيه</td>
        </tr>
        <tr>
            <th>إجمالي المصروفات</th>
            <td><?= number_format($total_expenses, 2); ?> جنيه</td>
        </tr>
        <tr>
            <th>الرصيد الصافي</th>
            <td><?= number_format($net_balance, 2); ?> جنيه</td>
        </tr>
    </table>
</div>

<?php include '../includes/footer.php'; ?>
