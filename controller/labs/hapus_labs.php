<?php
include '../../config/config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    $sql = "DELETE FROM labs WHERE id=$id";
    $query = mysqli_query($conn, $sql);

    if ($query) {
        header('Location: ../../ui/labs/labs.php');
    } else {
        die('Data Gagal Dihapus');
    }
} else {
    die('Akses Hapus Dilarang !!  ' );
}

?>