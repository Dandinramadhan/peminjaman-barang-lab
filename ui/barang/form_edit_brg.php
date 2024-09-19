<?php 
include '../../config/config.php';

if (!isset($_GET['id'])) {
    header('Location: barang.php');
    exit();
}

$id = $_GET['id'];

$sql = "SELECT * FROM items WHERE id = ?";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, 'i', $id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$barang = mysqli_fetch_array($result);

if (mysqli_num_rows($result) < 1) {
    die("Data Tidak Ditemukan!");
}

// Ambil data dari tabel labs
$sqla = "SELECT id, nama_ruang FROM labs";
$result = $conn->query($sqla);

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
    <title>Form Edit Barang</title>
    <link rel="stylesheet" href="../../style2.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <header>
        <h2 class="text-center mb-4">Edit Data Barang</h2>
    </header>
    
    <form action="../../controller/barang/edit_brg.php" method="post" class="row g-3">
        <input type="hidden" name="id" id="id" value="<?php echo htmlspecialchars($barang['id']); ?>" />
        
        <!-- Nama Barang -->
        <div class="col-12">
            <label style="color: #FADFA1" for="nama_barang" class="form-label fs-4 text fw-medium ">Nama Barang :</label>
            <input type="text" name="nama_barang" id="nama_barang" class="form-control" value="<?php echo htmlspecialchars($barang['nama_barang']); ?>" required>
        </div>

        <!-- Stock Barang -->
        <div class="col-12">
            <label for="jumlah_pinjam" class="form-label fs-4 text fw-medium text-white">Stock Barang :</label>
            <input type="number" name="jumlah_pinjam" id="jumlah_pinjam" class="form-control" value="<?php echo htmlspecialchars($barang['jumlah_pinjam']); ?>" required>
        </div>

        <!-- Nama Ruang -->
        <div class="col-12">
            <label for="nama_ruang" class="form-label fs-4 text fw-medium text-white">Nama Ruang:</label>
            <select id="nama_ruang" name="ruang_id" class="form-select" required>
                <?php
                foreach ($labs as $lab) {
                    $selected = ($barang['ruang_id'] == $lab['id']) ? ' selected' : '';
                    echo "<option value=\"" . $lab['id'] . "\"" . $selected . ">" . $lab['nama_ruang'] . "</option>";
                }
                ?>
            </select>
        </div>

        <!-- Deskripsi Barang -->
        <div class="col-12">
            <label for="description" class="form-label fs-4 text fw-medium text-white">Deskripsi :</label>
            <input type="text" name="description" id="description" class="form-control" value="<?php echo htmlspecialchars($barang['description']); ?>" required>
        </div>

        <!-- Tombol Simpan -->
        <div class="col-12 text-center mt-3">
            <input type="submit" value="Simpan" name="submit" class="btn btn-primary">
        </div>
    </form>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
