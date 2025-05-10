<?php
include 'config.php';
$nama = $_POST['nama'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$koneksi->query("INSERT INTO users (nama, username, email, password) VALUES ('$nama', '$username', '$email', '$password')");
header("Location: index.php");
?>
