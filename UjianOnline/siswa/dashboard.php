<?php
session_start();
if (!isset($_SESSION['level']) || $_SESSION['level'] != 'siswa') {
    die("Akses ditolak.");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Siswa</title>
</head>
<body>
<h2>Dashboard Siswa</h2>
<p>Selamat datang, <?php echo $_SESSION['username']; ?>!</p>
<ul>
    <li><a href="ikut_ujian.php">Ikut Ujian</a></li>
    <li><a href="hasil_ujian.php">Lihat Hasil Ujian</a></li>
    <li><a href="../logout.php">Logout</a></li>
</ul>
</body>
</html>