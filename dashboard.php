<?php
include 'config.php'; // Koneksi database

// Cek apakah pengguna sudah login
if (!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html> <!-- Deklarasi tipe dokumen HTML5 -->
<html lang="id"> <!-- Membuka tag html -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Menyertakan file CSS jika ada -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header class="header-bar">
  <a href="logout.php" class="btn-logout">Logout</a>
</header>

<!-- Form untuk menambah barang -->
<form class="form-box" method="POST" action="proses_barang.php">
  <h2>Tambah Data Barang</h2>
  <input class="form-input" type="text" name="nama_barang" placeholder="Nama Barang" required>
  <input class="form-input" type="number" name="stok" placeholder="Stok" required>
  <input class="form-input" type="text" name="kondisi_barang" placeholder="Kondisi" required>
  <input class="form-input" type="date" name="tanggal_cek" required>
  <button class="btn-submit" type="submit" name="tambah">Tambah</button>
</form>

<!-- Tabel untuk menampilkan barang -->
<div class="table-section">
  <table class="data-table">
    <thead>
      <tr>
        <th>Nama</th>
        <th>Stok</th>
        <th>Kondisi</th>
        <th>Tanggal</th>
        <th>User</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $id = $_SESSION['user_id'];
      $data = $koneksi->query("SELECT barang.*, users.username FROM barang JOIN users ON barang.user_id = users.id");
      while ($row = $data->fetch_assoc()) {
        echo "<tr>
          <td>{$row['nama_barang']}</td>
          <td>{$row['stok']}</td>
          <td><span class='badge'>{$row['kondisi_barang']}</span></td>
          <td>{$row['tanggal_cek']}</td>
          <td>{$row['username']}</td>
          <td><a class='btn-delete' href='proses_barang.php?hapus={$row['id']}'>Hapus</a></td>
        </tr>";
      }
      ?>
    </tbody>
  </table>
</div>


</body>
</html> <!-- Menutup tag html -->

