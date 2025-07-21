<?php
session_start();
if (!isset($_SESSION['level']) || $_SESSION['level'] != 'guru') {
    die("Akses ditolak.");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Guru</title>
</head>
<body>
<h2>Dashboard Guru</h2>
<p>Selamat datang, <?php echo $_SESSION['username']; ?>!</p>
<ul>
    <li><a href="kelola_soal.php">Kelola Soal</a></li>
    <li><a href="../logout.php">Logout</a></li>
</ul>
</body>
</html>