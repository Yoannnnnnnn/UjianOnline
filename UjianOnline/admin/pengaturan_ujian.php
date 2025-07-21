<?php
session_start();
if (!isset($_SESSION['level']) || $_SESSION['level'] != 'admin') {
    die("Akses ditolak.");
}
?>
<!DOCTYPE html>
<html>
<head><title>Pengaturan Ujian</title></head>
<body>
<h2>Pengaturan Ujian</h2>
<p>Fitur ini dapat digunakan untuk mengatur jadwal ujian, waktu, dan durasi.</p>
<form>
  <label>Nama Ujian:</label><br>
  <input type="text" name="nama"><br>
  <label>Durasi (menit):</label><br>
  <input type="number" name="durasi"><br>
  <button type="submit">Simpan</button>
</form>
<a href="dashboard.php">Kembali</a>
</body></html>