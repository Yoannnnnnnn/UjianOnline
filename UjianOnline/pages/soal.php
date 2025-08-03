<?php
include '../config/db.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $p = $_POST['pertanyaan'];
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];
    $d = $_POST['d'];
    $jawaban = $_POST['jawaban'];
    $conn->query("INSERT INTO soal (pertanyaan, opsi_a, opsi_b, opsi_c, opsi_d, jawaban)
                  VALUES ('$p', '$a', '$b', '$c', '$d', '$jawaban')");
    $notif = 'Soal berhasil ditambahkan!';
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Kelola Soal</title>
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
    .dashboard {
      max-width: 400px;
      margin: 60px auto;
      padding: 30px;
      background-color: #ffffff;
      border-radius: 12px;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
      text-align: center;
    }
    form {
      margin-top: 20px;
    }
    textarea, input[type="text"] {
      width: 90%;
      padding: 10px;
      margin: 10px 0;
      border-radius: 6px;
      border: 1px solid #ccc;
      font-size: 16px;
    }
    select {
      width: 95%;
      padding: 8px;
      margin: 10px 0;
      border-radius: 6px;
      border: 1px solid #ccc;
      font-size: 16px;
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
    }
    button:hover {
      opacity: 0.9;
    }
    a {
      color: #3498db;
      text-decoration: none;
    }
    a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="dashboard">
    <h2>Tambah Soal</h2>
    <?php if (isset($notif)): ?>
      <div style="background:#d4edda;color:#155724;padding:12px;border-radius:8px;margin-bottom:16px;">
        <?= $notif ?>
      </div>
    <?php endif; ?>
    <form method="POST">
      <textarea name="pertanyaan" required></textarea>
      <input type="text" name="a" placeholder="Opsi A" />
      <input type="text" name="b" placeholder="Opsi B" />
      <input type="text" name="c" placeholder="Opsi C" />
      <input type="text" name="d" placeholder="Opsi D" />
      <select name="jawaban">
        <option value="a">A</option><option value="b">B</option>
        <option value="c">C</option><option value="d">D</option>
      </select>
      <button type="submit">Tambah</button>
    </form>
    <a href="dashboard_admin.php">Kembali ke Dashboard</a>
  </div>
</body>
</html>