<?php
session_start();
include '../config/db.php';
$user_id = $_SESSION['user_id'];
$soal = $conn->query("SELECT * FROM soal");
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    foreach ($_POST as $soal_id => $jawaban) {
        $q = $conn->query("SELECT jawaban FROM soal WHERE id=$soal_id");
        $kunci = $q->fetch_assoc()['jawaban'];
        $benar = $jawaban == $kunci ? 1 : 0;
        $conn->query("INSERT INTO jawaban (user_id, soal_id, jawaban, benar)
                      VALUES ($user_id, $soal_id, '$jawaban', $benar)");
    }
    header("Location: hasil.php");
    exit();
}
?>
<style>
  body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #f0f2f5;
    margin: 0;
    padding: 0;
  }
  h2 {
    text-align: center;
    margin-top: 40px;
    color: #2c3e50;
  }
  form {
    max-width: 600px;
    margin: 40px auto;
    padding: 30px;
    background-color: #ffffff;
    border-radius: 12px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    text-align: left;
  }
  input[type="radio"] {
    margin-right: 8px;
  }
  button {
    width: 100%;
    padding: 12px;
    background-color: #3498db;
    color: white;
    border: none;
    border-radius: 8px;
    font-weight: bold;
    font-size: 16px;
    cursor: pointer;
    transition: background 0.3s ease;
    margin-top: 20px;
  }
  button:hover {
    opacity: 0.9;
  }
  #timer {
    font-size: 18px;
    color: #e74c3c;
  }
</style>
<script>
let totalSeconds = 45 * 60; // 45 menit
function startTimer() {
  const timerDisplay = document.getElementById('timer');
  const form = document.getElementById('ujianForm');
  let interval = setInterval(function() {
    let minutes = Math.floor(totalSeconds / 60);
    let seconds = totalSeconds % 60;
    timerDisplay.textContent = minutes + ':' + (seconds < 10 ? '0' : '') + seconds;
    if (totalSeconds <= 0) {
      clearInterval(interval);
      alert('Waktu ujian telah habis!');
      form.submit();
    }
    totalSeconds--;
  }, 1000);
}
window.onload = startTimer;
</script>
<div style="text-align:right;font-weight:bold;">Sisa waktu: <span id="timer">45:00</span></div>
<form method="POST" id="ujianForm">
<?php while($row = $soal->fetch_assoc()): ?>
  <p><?= $row['pertanyaan'] ?></p>
  <label><input type="radio" name="<?= $row['id'] ?>" value="a" required /> A. <?= $row['opsi_a'] ?></label><br>
  <label><input type="radio" name="<?= $row['id'] ?>" value="b" /> B. <?= $row['opsi_b'] ?></label><br>
  <label><input type="radio" name="<?= $row['id'] ?>" value="c" /> C. <?= $row['opsi_c'] ?></label><br>
  <label><input type="radio" name="<?= $row['id'] ?>" value="d" /> D. <?= $row['opsi_d'] ?></label><br><hr>
<?php endwhile; ?>
  <button type="submit">Selesai</button>
</form>