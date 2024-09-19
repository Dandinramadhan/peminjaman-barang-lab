<?php
session_start();
include '../config/config.php';

// Periksa apakah sesi sudah ada
// if (isset($_SESSION['nama'])) {
//     header("Location: ../dashboard.php");
//     exit();
// }

// Proses login
if (isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = hash('sha256', $_POST['password']);
    $pass = mysqli_real_escape_string($conn, $password);
    $role = mysqli_real_escape_string($conn, $_POST['role']);
    
    $sql = " SELECT * FROM user WHERE username='$username' AND role='$role' ";
    // echo $sql;
    $result = mysqli_query($conn, $sql);

    $result = mysqli_fetch_array($sql);
    if ($result) {
        if ($password ==$result['password']) {
            $_SESSION['username'] = $result['username'];
            $_SESSION['nama'] = $result['nama'];
            $_SESSION['role'] = $result['role'];
        }
        if ($role == "admin") {
        header('Location: ../admin/dashadmin.php');
        } elseif ($role == "siswa") {
        header('Location: ../dahsboard.php');
        } else {
        echo "<script>alert('Sorry, Username & Password Salahh'); document.location='../index.php'</script>";
        }
        
        // if ($result && $result->num_rows > 0) {
        //     $row = mysqli_fetch_assoc($result);
        //     $_SESSION['nama'] = $row['nama'];
        //     header("Location: ../dashboard.php");
        //     exit();
        // } else {
        //     echo "<script>alert('Username atau Password salah, coba lagi.')</script>";
        // }
    } else {
        echo "<script>alert('Username atau Password Belum Daftar.')</script>";
    }

}

// Jangan lupa untuk menutup koneksi jika diperlukan di bagian akhir script
$conn->close();
?>
