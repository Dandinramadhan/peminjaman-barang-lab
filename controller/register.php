
<?php
session_start();
include '../config/config.php';

if (isset($_SESSION['nama'])) {
    header("Location: ../index.php");
    exit();
}

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = hash('sha256', $_POST['password']);
    $cpassword = hash('sha256', $_POST['cpassword']);
    $role = $_POST['role'];

    if ($password == $cpassword) {
        $sql = "SELECT * FROM user WHERE username='$username'";
        $result = mysqli_query($conn, $sql);

        if (!$result->num_rows > 0) {
            $sql = "INSERT INTO user (nama, username, password, role) VALUES ('$nama', '$username', '$password', '$role')";
            $result = mysqli_query($conn, $sql);

            if ($result) {
                // Registrasi berhasil, arahkan ke halaman login
                header("Location: ../index.php?message=Registrasi Berhasil");
                exit();
            } else {
                echo "<script>alert('Terjadi Kesalahan saat melakukan registrasi.')</script>";
            }
        } else {
            echo "<script>alert('Username sudah terdaftar.')</script>";
        }
    } else {
        echo "<script>alert('Password tidak sesuai.')</script>";
    }
}
?>

