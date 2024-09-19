<?php 
include '../../config/config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Ruangan</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <h2 class="text-center mb-4">Daftar Ruangan Labs</h2>
    
    <!-- Navigation Button -->
    <nav class="mb-3">
        <a href="form_tambah_labs.php" class="btn btn-primary">Tambah Labs Baru</a>
    </nav>

    <!-- Table -->
    <table class="table table-bordered table-striped table-hover">
        <thead class="table-dark">
            <tr class="text-center">
                <th>ID</th>
                <th>Nama Ruangan</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $sql = "SELECT * FROM labs";
                $query = mysqli_query($conn, $sql);

                while ($labs = mysqli_fetch_array($query)) {
                    echo "<tr class='text-center'>"; // Center the row content
                    echo "<td>".$labs['id']."</td>";
                    echo "<td>".$labs['nama_ruang']."</td>";
                    echo "<td>";
                    echo "<div class='d-flex justify-content-center gap-2'>"; // Center the buttons
                    echo "<a href='form_edit_labs.php?id=".$labs['id']."' class='btn btn-sm btn-warning'>Edit</a>";
                    echo "<a href='../../controller/labs/hapus_labs.php?id=".$labs['id']."' class='btn btn-sm btn-danger'>Hapus</a>";
                    echo "</div>"; // Close the div
                    echo "</td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>

    <!-- Total Ruangan -->
    <p class="mt-3"><strong>Total Ruangan:</strong> <?php echo mysqli_num_rows($query) ?></p>

    <!-- Status Message -->
    <?php if(isset($_GET['status'])): ?>
    <div class="alert <?php echo ($_GET['status'] == 'sukses') ? 'alert-success' : 'alert-danger'; ?>" role="alert">
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Data Ruangan Berhasil Ditambahkan";
            } else {
                echo "Tambah Data Ruangan Gagal";
            }
        ?>
    </div>
    <?php endif; ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
