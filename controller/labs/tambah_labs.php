<?php
include '../../config/config.php';

if (isset($_POST['submit'])) {
    $namaruangan = $_POST['nama_ruang'];

    $sql = "INSERT INTO labs (nama_ruang) VALUES ('$namaruangan')";

    $query = mysqli_query($conn, $sql);

    if ($query) {
        header('Location: ../../ui/labs/labs.php?status=sukses');
    } else {
        header('Location: ../../ui/labs/labs.php?status=gagal');
    }
}
?>