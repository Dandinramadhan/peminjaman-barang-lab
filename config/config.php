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
    die('Koneksi gaga+l: ' . $conn->connect_error);
}

// Informasi koneksi berhasil
// echo 'Koneksi berhasil!';

// Ambil data dari tabel labs
// $sql = "SELECT id, nama_ruang FROM labs";
// $result = $conn->query($sql);

// $labs = [];
// if ($result->num_rows > 0) {
//     while ($row = $result->fetch_assoc()) {
//         $labs[] = $row;
//     }
// }

// Tutup koneksi jika tidak diperlukan lagi
// $conn->close();
?>
