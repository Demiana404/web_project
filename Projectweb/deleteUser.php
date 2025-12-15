<?php
session_start();
include "db.php";


if (!isset($_SESSION['role']) || $_SESSION['role'] != 'admin') {
    header("Location: login.php");
    exit;
}


if (isset($_GET['id'])) {
    $id = $_GET['id'];

    
    $checkAdmin = $conn->query("SELECT role FROM users WHERE user_id = $id")->fetch_assoc();
    if ($checkAdmin['role'] == 'admin') {
        echo " لا يمكنك حذف أدمن أساسي";
        exit;
    }

    
    $sql = "DELETE FROM users WHERE user_id = $id";
    if ($conn->query($sql)) {
        header("Location: admin_users.php");
        exit;
    } else {
        echo " خطأ في حذف المستخدم: " . $conn->error;
    }
} 
?>
