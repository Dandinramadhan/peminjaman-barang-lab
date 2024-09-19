<?php 
include '../../config/config.php';

if (isset($_POST['submit'])) {
    $id = $_POST['id'];  // Ini adalah integer
    $namaruang = $_POST['nama_ruang'];  // Ini adalah string

    // Prepared statement untuk menghindari SQL injection
    $sql = "UPDATE labs SET nama_ruang = ? WHERE id = ?";
    $stmt = mysqli_prepare($conn, $sql);

    // Bind parameter: 's' untuk string (nama_ruang) dan 'i' untuk integer (id)
    mysqli_stmt_bind_param($stmt, 'si', $namaruang, $id);
    
    // Eksekusi query
    if (mysqli_stmt_execute($stmt)) {
        header('Location: ../../ui/labs/labs.php');
        exit();
    } else {
        die("Gagal Menyimpan Perubahan!");
    }
} else {
    die("Akses Ubah Dilarang!");
}