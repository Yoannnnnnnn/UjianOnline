<?php
include '../config/db.php';
// Ambil data dari form
$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$role = $_POST['role'];


$conn->query("INSERT INTO users (username, password, role) VALUES ('$username', '$password', '$role')");
header("Location: ../pages/login.php");
?>