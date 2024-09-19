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
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <header>
        <h2 class="text-center mb-4">Tambah Barang Baru</h2>
    </header>

    <form action="../../controller/barang/tambah_brg.php" method="POST" class="row g-3">
        <!-- Nama Barang -->
        <div class="col-12">
            <label for="nama_barang" class="form-label fs-5 text">Nama Barang :</label>
            <input type="text" name="nama_barang" id="nama_barang" class="form-control" required>
        </div>

        <!-- Stock Barang -->
        <div class="col-12">
            <label for="jumlah_pinjam" class="form-label fs-5 text">Stock Barang :</label>
            <input type="number" name="jumlah_pinjam" id="jumlah_pinjam" class="form-control" required>
        </div>

        <!-- Nama Ruang -->
        <div class="col-12">
            <label for="nama_ruang" class="form-label fs-5 text">Nama Ruang:</label>
            <select id="nama_ruang" name="nama_ruang" class="form-select" required>
                <?php
                foreach ($labs as $lab) {
                    echo "<option value=\"" . $lab['id'] . "\">" . $lab['nama_ruang'] . "</option>";
                }
                ?>
            </select>
        </div>

        <!-- Deskripsi Barang -->
        <div class="col-12">
            <label for="description" class="form-label fs-5 text">Deskripsi :</label>
            <input type="text" name="description" id="description" class="form-control" required>
        </div>

        <!-- Tombol Submit -->
        <div class="col-12 text-center mt-3">
            <input type="submit" value="Submit" name="submit" class="btn btn-primary">
        </div>
    </form>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
