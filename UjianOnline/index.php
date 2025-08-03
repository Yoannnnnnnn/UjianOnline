<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Halaman Utama Ujian Online</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f0f2f5;
      margin: 0;
      padding: 0;
    }
    .container {
      max-width: 900px;
      margin: 40px auto;
      background: #fff;
      border-radius: 16px;
      box-shadow: 0 2px 16px rgba(0,0,0,0.12);
      padding: 40px 30px;
      display: flex;
      gap: 40px;
      flex-wrap: wrap;
      justify-content: space-between;
    }
    .section {
      flex: 1 1 250px;
      min-width: 250px;
      background: #f8faff;
      border-radius: 12px;
      box-shadow: 0 1px 6px rgba(0,0,0,0.07);
      padding: 24px 18px;
      margin-bottom: 20px;
    }
    h2 {
      color: #3498db;
      margin-bottom: 18px;
      text-align: center;
    }
    form {
      display: flex;
      flex-direction: column;
      gap: 12px;
    }
    input[type="text"], input[type="password"] {
      padding: 10px;
      border-radius: 6px;
      border: 1px solid #ccc;
      font-size: 16px;
    }
    button {
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
    ul {
      padding-left: 18px;
    }
    .profile {
      text-align: center;
    }
    .profile img {
      width: 80px;
      height: 80px;
      border-radius: 50%;
      margin-bottom: 12px;
      background: #eee;
      object-fit: cover;
    }
    .profile h3 {
      margin: 0 0 8px 0;
      color: #2c3e50;
    }
    .profile p {
      color: #555;
      font-size: 15px;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="section" style="display:flex;flex-direction:column;align-items:center;justify-content:center;">
      <h2>Login</h2>
      <a href="pages/register.php" style="margin-bottom:16px;display:inline-block;color:#3498db;text-decoration:underline;">Belum punya akun? Daftar di sini</a>
      <button onclick="window.location.href='pages/login.php'" style="padding:14px 32px;background:#3498db;color:#fff;border:none;border-radius:8px;font-size:18px;font-weight:bold;cursor:pointer;transition:background 0.3s;">Menuju Login</button>
    </div>
    <div class="section">
      <h2>Panduan Ujian</h2>
      <ul>
        <li>Login menggunakan akun yang sudah terdaftar.</li>
        <li>Baca soal dengan teliti sebelum menjawab.</li>
        <li>Setiap ujian memiliki batas waktu, pastikan mengerjakan sebelum waktu habis.</li>
        <li>Jawaban yang sudah dikirim tidak dapat diubah.</li>
        <li>Hasil ujian dapat dilihat setelah ujian selesai.</li>
      </ul>
    </div>
    <div class="section profile">
      <img src="img/logosmk.png" alt="Profil Sekolah" />
      <h2 style="margin-bottom:8px;">Profil Sekolah SMKN 2 Padang</h2>
      <p>
        Sebelum berubah nama menjadi <b>SMKN 2 Padang</b>, pada awal berdirinya bernama <b>SMEA Negeri 1 Padang</b> yang diprakarsai oleh Bapak Ali Loeis dan Bapak Mr. Agus Thaib. Diresmikan dengan surat keputusan Menteri P.P.K. tanggal 3 Juli 1952 No. 2777/B.<br><br>
        Sampai saat ini SMKN 2 Padang sudah 17 kali berganti kepemimpinan. Berikut nama-nama Kepala Sekolah dari awal berdiri sampai sekarang:
      </p>
      <ul style="text-align:left;max-width:350px;margin:16px auto 0 auto;line-height:1.7;">
        <li>Ali Loeis</li>
        <li>Mr. Agus Thaib</li>
        <li>Widoto</li>
        <li>Soetan Syahrial</li>
        <li>Drs. Muchtaruddin</li>
        <li>Drs. Jasmi Ilyas</li>
        <li>Drs. Mohd. Nudjus, SH.</li>
        <li>Drs. Anasmen</li>
        <li>Drs. Yunizar Kobra</li>
        <li>Drs. H. Amril M.Y Dt. Garang, M.Pd</li>
        <li>Drs. H. Yusrizal, M.M.</li>
        <li>Drs. Edi Suheri, M.M.</li>
        <li>Suharto Sisar, S.Pd, M.T.</li>
        <li>Drs. Yunaldi</li>
        <li>Abdullah, S.Pd, M.M.</li>
        <li>Raymond, M.Pd</li>
        <li>Drs. Rusmadi, M.Pd</li>
        <li>Sahfalefi, M.Pd</li>
      </ul>
    </div>
  </div>
</body>
</html>
