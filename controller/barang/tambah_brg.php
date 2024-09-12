<?php
include '../../config/config.php';

if (isset($_POST['submit'])) {
    $namaBarang = $_POST['nama_barang']; 
    $stokBarang = $_POST['jumlah_pinjam']; 
    $ruang_id = $_POST['nama_ruang']; 
    $description = $_POST['description']; 

    $sql = "INSERT INTO items (nama_barang, jumlah_pinjam, ruang_id, description) VALUES ('$namaBarang', '$stokBarang', '$ruang_id', '$description')";
    // echo $sql;
    $query = mysqli_query($conn, $sql);

    if ($query) {
        header('Location: ../../ui/barang/barang.php?status=sukses');
    } else {
        header('Location: ../../ui/barang/barang.php?status=gagal');
    }
}
?>