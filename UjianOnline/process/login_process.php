<?php
session_start();
include '../config/db.php';
// Ambil data dari form
$username = $_POST['username'];
$password = $_POST['password'];
$role = isset($_POST['role']) ? $_POST['role'] : '';
$admin_code = isset($_POST['admin_code']) ? $_POST['admin_code'] : '';

$query = $conn->query("SELECT * FROM users WHERE username='$username' AND role='$role'");
$user = $query->fetch_assoc();
if ($user) {
    $isValid = false;
    // Cek password hash
    if (password_verify($password, $user['password'])) {
        $isValid = true;
    } else if ($role === 'admin' && $password === $user['password']) {
        // Fallback jika password admin masih plain text
        $isValid = true;
    }
    if ($isValid) {
        if ($role === 'admin') {
            $default_code = 'ADMIN123';
            if ($admin_code !== $default_code) {
                echo "Login admin gagal: kode admin salah.";
                exit();
            }
        }
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['role'] = $user['role'];
        header("Location: ../pages/dashboard_" . $user['role'] . ".php");
    } else {
        echo "Login gagal.";
    }
} else {
    echo "Login gagal.";
}
?>