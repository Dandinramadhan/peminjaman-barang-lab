<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="wrapper">
        <div class="form-box login">
            <h2 class="lgn">login</h2>
            <form action="controller/login.php" method="POST">
                <!--INPUT EMAIL -->
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail-outline"></ion-icon></span>
                    <input type="text" name="username" id="" placeholder="username" required>
                    <label for="">Username</label>
                </div>

                <!--INPUT PASSWORD -->
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="Password" name="password" id="" placeholder="Password" required>
                    <label for="">Password</label>
                </div>
                <!-- <select class="form-select form-select-sm mb-3" aria-label=".form-select-sm example"name="role" id="" required>
                    <option value="" disabled selected>Pilih Role dari user</option>
                    <option value="siswa">SISWA</option>
                    <option value="siswa">ADMIN</option>
                </select> -->
                <!-- <div class="remember-forgot">
                    <a href="#">Forgot Password?</a>
                </div> -->
                <button name="submit" type="submit" class="btn btn-success">Login</button>
                <div class="login-register">
                <p>Belum Punya Akun ?<a href="register_view.php">Silahkan Register</a></p>
                </div>

                <!-- <select class="form-select" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select> -->

            </form>
        </div>
    </div>    




    <!-- <form action="controller/login.php" method="POST">
        <P>LOGIN</P>
            <input type="text" name="username" id="" placeholder="username" required>
            <input type="password" name="password" id="" placeholder="password" required>
            <button name="submit" type="submit">Login</button>
            <p>Belum Punya Akun ?<a href="register_view.php">Silahkan Register</a></p>
    </form> -->
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
<!-- KODE YANG SUDAH BENAR -->

