<?php 
include '../../config/config.php';

if (!isset($_GET['id'])) {
    header('Location: labs.php');
    exit();
}

$id = $_GET['id'];

$sql = "SELECT * FROM labs WHERE id = ?";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, 'i', $id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$barang = mysqli_fetch_array($result);

if (mysqli_num_rows($result) < 1) {
    die("Data Tidak Ditemukan!");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit Daftar Ruangan</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <header>
        <h2 class="text-center mb-4">Edit Data Ruangan</h2>
    </header>

    <form action="../../controller/labs/edit_labs.php" method="post" class="row g-3">
        <!-- Hidden Input for ID -->
        <input type="hidden" name="id" id="id" value="<?php echo htmlspecialchars($barang['id']); ?>" />

        <!-- Nama Ruang -->
        <div class="col-12">
            <label for="nama_ruang" class="form-label">Nama Ruang :</label>
            <input type="text" name="nama_ruang" id="nama_ruang" class="form-control" value="<?php echo htmlspecialchars($barang['nama_ruang']); ?>" required>
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
