<?php
include 'config.php';
$username = $_POST['username'];
$password = $_POST['password'];

$result = $koneksi->query("SELECT * FROM users WHERE username = '$username'");
$user = $result->fetch_assoc();

if ($user && password_verify($password, $user['password'])) {
    $_SESSION['user_id'] = $user['id'];
    header("Location: dashboard.php");
} else {
    echo "Login gagal.";
}
?>
