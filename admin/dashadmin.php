<?php
session_start();
if (!isset($_SESSION['nama'])) {
    header ("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
</head>
<body>
    <form action="controller/logout.php" method="POST">
        <h1>Selamat Datang Admin, <?php echo $_SESSION['nama']; ?>!</h1>
            <button type="submit">Logout</button>
    </form>
</body>
</html>