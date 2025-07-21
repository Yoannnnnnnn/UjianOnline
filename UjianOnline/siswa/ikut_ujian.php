<?php
session_start();
if (!isset($_SESSION['level']) || $_SESSION['level'] != 'siswa') {
    die("Akses ditolak.");
}
require_once '../config/db.php';
$soal = mysqli_query($conn, "SELECT * FROM soal");
if (isset($_POST['submit'])) {
    $benar = 0;
    $total = 0;
    foreach ($_POST['jawaban'] as $id => $jawab) {
        $q = mysqli_query($conn, "SELECT * FROM soal WHERE id=$id");
        $s = mysqli_fetch_assoc($q);
        if (strtoupper($jawab) == strtoupper($s['kunci'])) {
            $benar++;
        }
        $total++;
    }
    $nilai = ($benar / $total) * 100;
    mysqli_query($conn, "INSERT INTO hasil (username, nilai) VALUES ('{$_SESSION['username']}', '$nilai')");
    echo "<script>alert('Tes selesai! Nilai: $nilai'); window.location='dashboard.php';</script>";
}
?>
<!DOCTYPE html>
<html>
<head><title>Ikut Ujian</title></head>
<body>
<h2>Soal Ujian</h2>
<form method="POST">
<ol>
<?php while ($s = mysqli_fetch_assoc($soal)) { ?>
<li>
  <p><?= $s['soal'] ?></p>
  <input type="text" name="jawaban[<?= $s['id'] ?>]" placeholder="Jawaban (A/B/C/D)" required>
</li>
<?php } ?>
</ol>
<button type="submit" name="submit">Kumpulkan</button>
</form>
</body></html>