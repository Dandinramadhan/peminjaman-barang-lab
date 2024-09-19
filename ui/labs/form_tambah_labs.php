<?php 
    include '../../config/config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Ruangan</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <header>
        <h2 class="text-center mb-4">Form Tambah Ruangan Baru</h2>
    </header>

    <form action="../../controller/labs/tambah_labs.php" method="POST" class="row g-3">
        <!-- Nama Ruang -->
        <div class="col-12">
            <label for="nama_ruang" class="form-label">Nama Ruangan :</label>
            <input type="text" name="nama_ruang" id="nama_ruang" class="form-control" required>
        </div>

        <!-- Tombol Submit -->
        <div class="col-12 text-center mt-3">
            <input type="submit" value="submit" name="submit" class="btn btn-primary">
        </div>
    </form>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
