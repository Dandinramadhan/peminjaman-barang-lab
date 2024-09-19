<?php
// Konfigurasi database
$host = 'localhost'; // Host database
$username = 'root';  // Username database
$password = '';      // Password database
$database = 'db_testpinjambarang'; // Nama database

// Buat koneksi
$conn = new mysqli($host, $username, $password, $database);

// Periksa koneksi
if ($conn->connect_error) {
    die('Koneksi gagal: ' . $conn->connect_error);
}

// Informasi koneksi berhasil
// echo 'Koneksi berhasil!';

// Tutup koneksi jika tidak diperlukan lagi
// $conn->close();
?>
