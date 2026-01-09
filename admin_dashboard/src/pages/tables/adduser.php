<?php
$conn = new mysqli("localhost", "root", "", "historyproject");

if ($conn->connect_error) {
    die("Connection failed");
}

$conn->set_charset("utf8mb4");
?>




<?php
if (isset($_POST['add_user'])) {

    $username = $_POST['username'];
    $email    = $_POST['email'];
    $score   = $_POST['score'];
    $password = $_POST['password'];
   

    $sql = "INSERT INTO users (username, email,password, score)
            VALUES ('$username', '$email','$password', '$score')";

    if ($conn->query($sql)) {
        header("Location: basic-table.php");
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
    <h2>Add new user</h2>
    <form method="POST">
    <input type="text" name="username" placeholder="Username" required>
    <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>

    <input type="number" name="score" placeholder="Score" required>


    <button type="submit" name="add_user">Add</button>
</form>
</body>
</html>