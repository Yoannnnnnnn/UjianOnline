<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Register</title>
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
      max-width: 400px;
      margin: 60px auto;
      padding: 30px;
      background-color: #ffffff;
      border-radius: 12px;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
      text-align: center;
    }
    input[type="text"], input[type="password"] {
      width: 90%;
      padding: 10px;
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
    p {
      margin-top: 18px;
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
  <form action="../process/register_process.php" method="POST">
    <h2>Register</h2>
    <input type="text" name="username" required placeholder="Username" />
    <input type="password" name="password" required placeholder="Password" />
    <input type="hidden" name="role" value="siswa" />
    <button type="submit">Register</button>
    <p>Sudah punya akun? <a href="login.php">Kembali ke Login</a></p>
    <button type="button" onclick="window.location.href='../index.php'" style="margin-top:10px;background:#95a5a6;">Kembali ke Halaman Utama</button>
  </form>
</body>
</html>