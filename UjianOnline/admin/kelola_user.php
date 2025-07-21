<?php
session_start();
if (!isset($_SESSION['level']) || $_SESSION['level'] != 'admin') {
    die("Akses ditolak.");
}
require_once '../config/db.php';
$users = mysqli_query($conn, "SELECT * FROM users");
?>
<!DOCTYPE html>
<html>
<head><title>Kelola User</title></head>
<body>
<h2>Data User</h2>
<table border="1">
<tr><th>Username</th><th>Level</th></tr>
<?php while ($u = mysqli_fetch_assoc($users)) { ?>
<tr><td><?= $u['username'] ?></td><td><?= $u['level'] ?></td></tr>
<?php } ?>
</table>
<a href="dashboard.php">Kembali</a>
</body></html>