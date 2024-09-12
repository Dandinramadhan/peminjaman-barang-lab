<?php
    include '../../config/config.php';
    
    // Ambil data dari tabel labs
    $sql = "SELECT id, nama_ruang FROM labs";
    $result = $conn->query($sql);

    $labs = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $labs[] = $row;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Barang</title>
</head>
<body>
    <header>
        <h2>Form Tambah Barang Baru</h2>
    </header>
    <form action="../../controller/barang/tambah_brg.php" method="POST">
        <div>
            <label for="nama_barang">Nama Barang :</label>
            <input type="text" name="nama_barang" id="nama_barang" required>
        </div>

        <br>

        <div>
            <label for="jumlah_pinjam">Stock Barang :</label>
            <input type="number" name="jumlah_pinjam" id="jumlah_pinjam" required>
        </div>

        <br>

        <!-- <div>
            <label for="ruang_id">Lokasi Ruangan :</label>
            <input type="number" name="ruang_id" id="ruang_id" required>
        </div> -->

        <div>
        <label for="nama_ruang">Nama Ruang:</label>
            <select id="nama_ruang" name="nama_ruang" required>
                <?php
                // Tampilkan opsi nama ruang
                foreach ($labs as $lab) {
                    echo "<option value=\"" . $lab['id'] . "\">" . $lab['nama_ruang'] . "</option>";
                }
                ?>
            </select>
            <br>
        </div>

        <br>

        <div>
            <label for="description">Description :</label>
            <input type="Text" name="description" id="description" required>
        </div>
        <br>
        <div>
            <input type="submit" value="submit" name="submit">
        </div>

    </form>
</body>
</html>