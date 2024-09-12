<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <div class="wrapper">
        <div class="form-box login">
            <h2 class="lgn">LOGIN</h2>
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
                    <input type="password" name="password" id="" placeholder="password" required>
                    <label for="">Password</label>
                </div>
                <!-- <div class="remember-forgot">
                    <a href="#">Forgot Password?</a>
                </div> -->
                <button name="submit" type="submit" class="btn">Login</button>
                <p>Belum Punya Akun ?<a class="link-reg"href="register_view.php">Silahkan Register</a></p>
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
</body>
</html>
<!-- KODE YANG SUDAH BENAR -->

