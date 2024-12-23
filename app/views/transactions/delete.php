<?php 
// حذف عملية مالية
include '../config/settings.php'; 
include '../includes/header.php'; 

if (isset($_GET['id'])) {
    $transaction_id = $_GET['id'];

    // تأكيد إذا كانت العملية موجودة
    $query = "SELECT * FROM transactions WHERE id = :id";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':id', $transaction_id);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        // حذف العملية
        $delete_query = "DELETE FROM transactions WHERE id = :id";
        $delete_stmt = $pdo->prepare($delete_query);
        $delete_stmt->bindParam(':id', $transaction_id);

        if ($delete_stmt->execute()) {
            echo "<div class='alert alert-success'>تم حذف العملية بنجاح.</div>";
        } else {
            echo "<div class='alert alert-danger'>حدث خطأ أثناء حذف العملية.</div>";
        }
    } else {
        echo "<div class='alert alert-warning'>العملية المالية غير موجودة.</div>";
    }
} else {
    echo "<div class='alert alert-danger'>لم يتم تحديد العملية المالية للحذف.</div>";
}

include '../includes/footer.php'; 
?>
