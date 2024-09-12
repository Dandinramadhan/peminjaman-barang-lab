
<?php
session_start();
include '../config/config.php';

// Periksa apakah sesi sudah ada
if (isset($_SESSION['nama'])) {
    header("Location: ../dashboard.php");
    exit();
}

// Proses login
if (isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    // $password = mysqli_real_escape_string($conn, $_POST['password']);
    $password = hash('sha256', $_POST['password']);
    
    $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    if ($result && $result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['nama'] = $row['nama'];
        header("Location: ../dashboard.php");
        exit();
    } else {
        echo "<script>alert('Username atau Password salah, coba lagi.')</script>";
    }
}

// Jangan lupa untuk menutup koneksi jika diperlukan di bagian akhir script
$conn->close();
?>
