<?php
include 'config.php';

if (isset($_POST['tambah'])) {
    $nama = $_POST['nama_barang'];
    $stok = $_POST['stok'];
    $kondisi = $_POST['kondisi_barang'];
    $tanggal = $_POST['tanggal_cek'];
    $user_id = $_SESSION['user_id'];

    $koneksi->query("INSERT INTO barang (nama_barang, stok, kondisi_barang, tanggal_cek, user_id) VALUES ('$nama', $stok, '$kondisi', '$tanggal', $user_id)");
    header("Location: dashboard.php");
}

if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];
    $koneksi->query("DELETE FROM barang WHERE id=$id");
    header("Location: dashboard.php");
}
?>
