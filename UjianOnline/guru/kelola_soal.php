<?php
session_start();
if (!isset($_SESSION['level']) || $_SESSION['level'] != 'guru') {
    die("Akses ditolak.");
}
require_once '../config/db.php';
if (isset($_POST['simpan'])) {
    $soal = $_POST['soal'];
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];
    $d = $_POST['d'];
    $kunci = $_POST['kunci'];
    mysqli_query($conn, "INSERT INTO soal (soal, a, b, c, d, kunci) VALUES ('$soal','$a','$b','$c','$d','$kunci')");
}
$soal = mysqli_query($conn, "SELECT * FROM soal");
?>
<!DOCTYPE html>
<html>
<head><title>Kelola Soal</title></head>
<body>
<h2>Input Soal</h2>
<form method="POST">
<textarea name="soal" required></textarea><br>
<input name="a" placeholder="Jawaban A" required><br>
<input name="b" placeholder="Jawaban B" required><br>
<input name="c" placeholder="Jawaban C" required><br>
<input name="d" placeholder="Jawaban D" required><br>
<input name="kunci" placeholder="Kunci (A/B/C/D)" required><br>
<button name="simpan">Simpan</button>
</form>
<h3>Daftar Soal</h3>
<ol>
<?php while ($s = mysqli_fetch_assoc($soal)) { echo "<li>{$s['soal']}</li>"; } ?>
</ol>
<a href="dashboard.php">Kembali</a>
</body></html>
