<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css"> <!-- Link ke file CSS -->
</head>
<body>

<div class="register-container">
    <form method="POST" action="proses_register.php">
        <h2>Daftar Akun</h2>
        <input class="form-input" type="text" name="nama" placeholder="Nama" required>
        <input class="form-input" type="text" name="username" placeholder="Username" required>
        <input class="form-input" type="email" name="email" placeholder="Email" required>
        <input class="form-input" type="password" name="password" placeholder="Password" required>
        <button class="btn-submit" type="submit">Daftar</button>
    </form>
    <p>Sudah punya akun? <a href="index.php">Login di sini</a></p>
</div>

</body>
</html>
