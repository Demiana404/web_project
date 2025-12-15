<?php
$conn = new mysqli("localhost", "root", "", "history_game");

if ($conn->connect_error) {
    die("Connection failed");
}

$conn->set_charset("utf8mb4");
?>




<?php
if (isset($_POST['add_user'])) {

    $username = $_POST['username'];
    $email    = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $role     = $_POST['role'];

    $sql = "INSERT INTO users (username, email, password, role)
            VALUES ('$username', '$email', '$password', '$role')";

    if ($conn->query($sql)) {
        header("Location: admin_users.php");
        exit;
    } else {
        echo "Error";
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
    <h2>اضافة مستخدم جديد</h2>
    <form method="POST">
    <input type="text" name="username" placeholder="Username" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" required>

    <select name="role">
        <option value="user">User</option>
        <option value="admin">Admin</option>
    </select>

    <button type="submit" name="add_user">إضافة</button>
</form>
</body>
</html>

