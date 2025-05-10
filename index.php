<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="login-body">

    <div class="login-container">
        <h2 class="login-title">Login</h2>

        <!-- Form login -->
        <form method="POST" action="proses_login.php" class="login-form">
            <input class="login-input" type="text" name="username" placeholder="Username" required>
            <input class="login-input" type="password" name="password" placeholder="Password" required>
            <button class="login-button" type="submit">Login</button>
        </form>

        <!-- Tombol untuk pendaftaran -->
        <p class="register-text">Belum punya akun?</p>
        <a href="register.php" class="register-link">Daftar di sini</a>
    </div>

</body>
</html>
