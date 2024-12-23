<?php
// تضمين ملف الاتصال بقاعدة البيانات
include('/config/settings.php');  // تأكد من أن المسار صحيح

// استعلامات لعرض البيانات
// إجمالي الإيرادات
$incomeQuery = "SELECT SUM(amount) AS total_income FROM transactions WHERE type = 'income'";
$incomeResult = mysqli_query($conn, $incomeQuery);
$incomeData = mysqli_fetch_assoc($incomeResult);

// إجمالي المصروفات
$expenseQuery = "SELECT SUM(amount) AS total_expense FROM transactions WHERE type = 'expense'";
$expenseResult = mysqli_query($conn, $expenseQuery);
$expenseData = mysqli_fetch_assoc($expenseResult);

// عدد الفواتير المستحقة
$invoiceQuery = "SELECT COUNT(*) AS pending_invoices FROM invoices WHERE status = 'Pending'";
$invoiceResult = mysqli_query($conn, $invoiceQuery);
$invoiceData = mysqli_fetch_assoc($invoiceResult);
?>
<?php
// تضمين الاتصال بقاعدة البيانات
include('config/settings.php');

// استعلامات لعرض البيانات
// إجمالي الإيرادات
$incomeQuery = "SELECT SUM(amount) AS total_income FROM transactions WHERE type = 'income'";
$incomeResult = mysqli_query($conn, $incomeQuery);
$incomeData = mysqli_fetch_assoc($incomeResult);

// إجمالي المصروفات
$expenseQuery = "SELECT SUM(amount) AS total_expense FROM transactions WHERE type = 'expense'";
$expenseResult = mysqli_query($conn, $expenseQuery);
$expenseData = mysqli_fetch_assoc($expenseResult);

// عدد الفواتير المستحقة
$invoiceQuery = "SELECT COUNT(*) AS pending_invoices FROM invoices WHERE status = 'Pending'";
$invoiceResult = mysqli_query($conn, $invoiceQuery);
$invoiceData = mysqli_fetch_assoc($invoiceResult);
?>

<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>الصفحة الرئيسية</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

    <!-- تضمين الهيدر -->
    <?php include('includes/header.php'); ?>

    <div class="container">
        <h1>لوحة التحكم</h1>

        <div class="dashboard-stats">
            <div class="stat-box">
                <h3>إجمالي الإيرادات</h3>
                <p><?php echo number_format($incomeData['total_income'], 2); ?> ج.م</p>
            </div>
            <div class="stat-box">
                <h3>إجمالي المصروفات</h3>
                <p><?php echo number_format($expenseData['total_expense'], 2); ?> ج.م</p>
            </div>
            <div class="stat-box">
                <h3>الفواتير المستحقة</h3>
                <p><?php echo $invoiceData['pending_invoices']; ?> فاتورة</p>
            </div>
        </div>

        <div class="actions">
            <a href="transactions/view.php" class="btn">عرض العمليات المالية</a>
            <a href="invoices/view_invoices.php" class="btn">عرض الفواتير</a>
            <a href="reports/income_report.php" class="btn">تقرير الإيرادات</a>
            <a href="reports/expense_report.php" class="btn">تقرير المصروفات</a>
        </div>
    </div>

    <!-- تضمين الفوتر -->
    <?php include('includes/footer.php'); ?>

</body>
</html>
