<?php

$host="localhost";
$dbname="final_db";
$user= "root";
$password='';

try {
    $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";
    $pdo = new PDO($dsn, $user, $password);
    
    // إعدادات لـ PDO
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // لو عايزة تتأكدي إن الاتصال تم بنجاح، ممكن تسيبي السطر ده مؤقتاً:
     echo "Connection successful!"; 

} catch (PDOException $e) {
    // لو حصل خطأ في الاتصال، هيظهر هنا
    die("Connection failed: " . $e->getMessage());
}
?>