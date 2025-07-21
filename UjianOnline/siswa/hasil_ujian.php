<?php
session_start();
if (!isset($_SESSION['level']) || $_SESSION['level'] != 'siswa') {
    die("Akses ditolak.");
}
require_once '../config/db.php';
$hasil = mysqli_query($conn, "SELECT * FROM hasil WHERE username='{$_SESSION['username']}'");
?>
<!DOCTYPE html>
<html>
<head><title>Hasil Ujian</title></head>
<body>
<h2>Hasil Ujian Anda</h2>
<table border="1">
<tr><th>No</th><th>Nilai</th></tr>
<?php $no = 1; while ($h = mysqli_fetch_assoc($hasil)) { ?>
<tr><td><?= $no++ ?></td><td><?= $h['nilai'] ?></td></tr>
<?php } ?>
</table>
<a href="dashboard.php">Kembali</a>
</body></html>
