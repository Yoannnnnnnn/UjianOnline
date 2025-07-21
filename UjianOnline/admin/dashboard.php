<?php
session_start();
if (!isset($_SESSION['level']) || $_SESSION['level'] != 'admin') {
    die("Akses ditolak.");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Admin</title>
</head>
<body>
<h2>Dashboard Admin</h2>
<p>Selamat datang, <?php echo $_SESSION['username']; ?>!</p>
<ul>
    <li><a href="kelola_user.php">Kelola User</a></li>
    <li><a href="pengaturan_ujian.php">Pengaturan Ujian</a></li>
    <li><a href="../logout.php">Logout</a></li>
</ul>
</body>
</html>
