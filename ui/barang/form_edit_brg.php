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
</head>
<body>
    <header>
        <h2>Edit Data Barang</h2>
    </header>
    <form action="../../controller/barang/edit_brg.php" method="post">
        <input type="hidden" name="id" id="id" value="<?php echo htmlspecialchars($barang['id']); ?>" />
        
        <div>
            <label for="nama_barang">Nama Barang :</label>
            <input type="text" name="nama_barang" id="nama_barang" value="<?php echo htmlspecialchars($barang['nama_barang']); ?>">
        </div>

        <br>

        <div>
            <label for="jumlah_pinjam">Stock Barang :</label>
            <input type="number" name="jumlah_pinjam" id="jumlah_pinjam" value="<?php echo htmlspecialchars($barang['jumlah_pinjam']); ?>">
        </div>

        <br>

        <div>
            <label for="nama_ruang">Nama Ruang:</label>
            <select id="nama_ruang" name="ruang_id" required>
                <?php
                // Tampilkan opsi nama ruang
                foreach ($labs as $lab) {
                    $selected = ($barang['ruang_id'] == $lab['id']) ? ' selected' : '';
                    echo "<option value=\"" . $lab['id'] . "\"" . $selected . ">" . $lab['nama_ruang'] . "</option>";
                }
                ?>
            </select>
            <br>
        </div>

        <br>

        <div>
            <label for="description">Deskripsi :</label>
            <input type="text" name="description" id="description" value="<?php echo htmlspecialchars($barang['description']); ?>">
        </div>

        <br>

        <div>
            <input type="submit" value="Simpan" name="submit">
        </div>
    </form>
</body>
</html>
