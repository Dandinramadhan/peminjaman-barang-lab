<?php
include '../../config/config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Barang</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
</head>
<body>

    <!-- sidebar -->
    <nav class="navbar navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <h2>
                <a class="navbar-brand" href="#">Peminjaman Barang Lab Admin</a>
            </h2>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Dark offcanvas</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Dropdown
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <!-- isi tabel -->
    <div class="container mt-5 pt-5">
        <h2 class="mb-4">Daftar Barang</h2>
        <nav class="mb-4">
            <button class="btn btn-primary">
                <a href="form_tambah_brg.php" class="text-white text-decoration-none">Tambah Barang Baru</a>
            </button>
        </nav>

        <table class="table table-bordered table-striped">
            <thead class="table-dark">
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
                    $sql = "SELECT items.id, items.nama_barang, items.jumlah_pinjam, labs.nama_ruang, items.description FROM items INNER JOIN labs ON items.ruang_id = labs.id";
                    $query = mysqli_query($conn, $sql);

                    while ($barang = mysqli_fetch_array($query)) {
                        echo "<tr>";
                        echo "<td>".$barang['id']."</td>";
                        echo "<td>".$barang['nama_barang']."</td>";
                        echo "<td>".$barang['jumlah_pinjam']."</td>";
                        echo "<td>".$barang['nama_ruang']."</td>";
                        echo "<td>".$barang['description']."</td>";
                        echo "<td>";
                        echo "<a href='form_edit_brg.php?id=".$barang['id']."' class='btn btn-warning btn-sm'>Edit</a> ";
                        echo "<a href='../../controller/barang/hapus_brg.php?id=".$barang['id']."' class='btn btn-danger btn-sm'>Hapus</a>";
                        echo "</td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
        <p>Total Barang: <?php echo mysqli_num_rows($query) ?></p>

        <?php if(isset($_GET['status'])): ?>
        <div class="alert alert-info">
            <?php
                if($_GET['status'] == 'sukses'){
                    echo "Data Barang Berhasil Ditambahkan";
                } else {
                    echo "Tambah Data Barang Gagal";
                }
            ?>
        </div>
        <?php endif; ?>

    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
