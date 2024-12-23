<?php
// config/settings.php

$servername = "localhost";  // اسم الخادم (عادة يكون localhost)
$username = "root";         // اسم المستخدم لقاعدة البيانات
$password = "77112020";             // كلمة المرور لقاعدة البيانات (إذا كانت فارغة)
$dbname = "erp_system";     // اسم قاعدة البيانات التي سيتم الاتصال بها

// إنشاء الاتصال
$conn = mysqli_connect($servername, $username, $password, $dbname);

// التحقق من الاتصال
if (!$conn) {
    die("فشل الاتصال بقاعدة البيانات: " . mysqli_connect_error());
}
?>
