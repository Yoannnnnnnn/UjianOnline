<?php
require_once 'config/db.php';
if (isset($_POST['daftar'])) {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $query = mysqli_query($conn, "INSERT INTO users (username, password, level) VALUES ('$username', '$password', 'siswa')");
    if ($query) {
        echo "<script>alert('Pendaftaran berhasil, silakan login.'); window.location='login/index.php';</script>";
    } else {
        echo "<script>alert('Pendaftaran gagal.');</script>";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Registrasi Siswa</title>
</head>
<body>
<h2>Form Registrasi</h2>
<form method="POST">
  <input type="text" name="username" placeholder="Username" required><br>
  <input type="password" name="password" placeholder="Password" required><br>
  <button type="submit" name="daftar">Daftar</button>
</form>
</body>
</html>
