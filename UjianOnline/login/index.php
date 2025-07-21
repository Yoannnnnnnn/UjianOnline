<?php
session_start();
require_once '../config/db.php';
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = mysqli_query($conn, "SELECT * FROM users WHERE username='$username'");
    $data = mysqli_fetch_assoc($query);
    if ($data && password_verify($password, $data['password'])) {
        $_SESSION['username'] = $data['username'];
        $_SESSION['level'] = $data['level'];
        if ($data['level'] == 'admin') {
            header('Location: ../admin/dashboard.php');
        } elseif ($data['level'] == 'guru') {
            header('Location: ../guru/dashboard.php');
        } elseif ($data['level'] == 'siswa') {
            header('Location: ../siswa/dashboard.php');
        }
        exit;
    } else {
        echo "<script>alert('Login gagal!');</script>";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login EduTes</title>
</head>
<body>
<h2>Login</h2>
<form method="POST">
  <input type="text" name="username" placeholder="Username" required><br>
  <input type="password" name="password" placeholder="Password" required><br>
  <button type="submit" name="login">Login</button>
</form>
</body>
</html>