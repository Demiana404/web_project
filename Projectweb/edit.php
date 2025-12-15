<?php
session_start();
include "db.php";



 if (!isset($_SESSION['role']) || $_SESSION['role'] != 'admin') {
     header("Location: login.php");
     exit;
 }


if (!isset($_GET['id'])) {
    echo " لم يتم تحديد المستخدم";
    exit;
}

$id = (int)$_GET['id'];


$result = $conn->query("SELECT * FROM users WHERE user_id = $id");
$user = $result->fetch_assoc();

if (!$user) {
    echo "المستخدم غير موجود";
    exit;
}


if (isset($_POST['update_user'])) {

    $role = $_POST['role'];
    $score = (int)$_POST['score'];
    $current_level = (int)$_POST['current_level'];

    $sql = "UPDATE users 
            SET role='$role',
                score=$score,
                current_level=$current_level
            WHERE user_id=$id";

    if ($conn->query($sql)) {
        echo "تم تحديث بيانات المستخدم بنجاح";
        header("Refresh:2; url=admin_users.php");
        exit;
    } else {
        echo " خطأ في التحديث: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="editStyle.css">
</head>
<body>
    <h2>تعديل بيانات المستخدم</h2>

<form method="POST">

    <label>Role:</label><br>
    <select name="role">
        <option value="user" <?= $user['role']=='user'?'selected':''; ?>>User</option>
        <option value="admin" <?= $user['role']=='admin'?'selected':''; ?>>Admin</option>
    </select><br><br>

    <label>Score:</label><br>
    <input type="number" name="score" value="<?= $user['score']; ?>" required><br><br>

    <label>Current Level:</label><br>
    <input type="number" name="current_level" value="<?= $user['current_level']; ?>" required><br><br>

    <button type="submit" name="update_user">حفظ التعديلات</button>
</form>
</body>
</html>
