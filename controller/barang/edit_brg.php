


<?php 
include '../../config/config.php';

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $namaBarang = $_POST['nama_barang']; 
    $stokBarang = $_POST['jumlah_pinjam']; 
    $ruang_id = $_POST['ruang_id']; 
    $description = $_POST['description'];

    // Prepared statement untuk menghindari SQL injection
    $sql = "UPDATE items SET nama_barang = ?, jumlah_pinjam = ?, ruang_id = ?, description = ? WHERE id = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, 'siisi', $namaBarang, $stokBarang, $ruang_id, $description, $id);
    
    if (mysqli_stmt_execute($stmt)) {
        header('Location: ../../ui/barang/barang.php');
        exit();
    } else {
        die("Gagal Menyimpan Perubahan!");
    }
} else {
    die("Akses Ubah Dilarang!");
}
?>

