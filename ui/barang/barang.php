<?php
include '../../config/config.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Barang</title>
</head>
<body>
    <h2>Daftar Barang</h2>
    <nav>
        <!-- <a href="form_tambah_brg.php">[+] Tambah Barang Baru</a> -->
        <button><a href="form_tambah_brg.php">[+] Tambah Barang Baru</a></button>
    </nav>
    <br>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Barang</th>
                <th>Stock</th>
                <th>Ruang</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
                // $sql = "SELECT * FROM items";
                $sql = "SELECT items.id, items.nama_barang, items.jumlah_pinjam, labs.nama_ruang, items.description FROM items INNER JOIN labs ON items.ruang_id = labs.id";
                // echo $sql;
                $query = mysqli_query($conn, $sql);

                while ($barang = mysqli_fetch_array($query)) {
                    echo "<tr>";

                    echo "<td>".$barang['id']. "</td>";
                    echo "<td>".$barang['nama_barang']. "</td>";
                    echo "<td>".$barang['jumlah_pinjam']. "</td>";
                    echo "<td>".$barang['nama_ruang']. "</td>";
                    echo "<td>".$barang['description']. "</td>";

                    echo "<td>";
                    echo " <a href='form_edit_brg.php?id= ".$barang['id']."'>Edit</a> | ";
                    echo " <a href='../../controller/barang/hapus_brg.php?id= ".$barang['id']."'>Hapus</a> | ";
                    echo "</td>";

                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
    <p>Total Barang: <?php echo mysqli_num_rows($query) ?></p>
    <?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Data Barang Berhasil Ditambahkan";
            } else {
                echo "Tambah Data Barang Gagal";
            }
        ?>
    </p>
    <?php endif; ?>

</body>
</html>