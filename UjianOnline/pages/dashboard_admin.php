<?php
session_start();
if ($_SESSION['role'] !== 'admin') {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Dashboard Admin</title>
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
    .dashboard a {
      display: block;
      margin: 12px 0;
      padding: 12px;
      text-decoration: none;
      background-color: #3498db;
      color: white;
      border-radius: 8px;
      font-weight: bold;
      transition: background 0.3s ease;
    }
    .dashboard a.logout {
      background-color: #e74c3c;
    }
    .dashboard a:hover {
      opacity: 0.9;
    }
  </style>
</head>
<body>
  <div class="dashboard">
    <h2>Dashboard Admin</h2>
    <a href="soal.php">Kelola Soal</a>
    <a href="logout.php" class="logout">Logout</a>
  </div>
</body>
</html>