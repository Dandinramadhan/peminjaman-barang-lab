<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register View</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <div class="wrapper">
        <span class="icon-close">
            <ion-icon name="close" ></ion-icon>
        </span>
        
        <div class="form-box-register">
            <!---TITLE BOX -->
            <h2 class="lgn">Register</h2>

            <!---INPUTAN -->
            <form action="controller/register.php" method="POST">
                <!-- EMAIL  -->
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="mail-outline"></ion-icon>
                    </span>
                    <input type="text" name="nama" placeholder="Nama" id="" required>
                    <label for="">Email</label>
                </div>

                <!-- USERNAME -->
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="person"></ion-icon>
                    </span>
                    <input type="text" name="username" placeholder="Username" id="" required>
                    <label for="">Username</label>
                </div>

                <!-- PASSWORD -->
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="lock-closed"></ion-icon>
                    </span>
                    <input type="password" name="password" placeholder="Password" id="" required>    
                    <label for="">Password</label>
                </div>
                <!-- CHECK PASSWORD -->
                <div class="input-box">
                    <span class="icon">
                            <ion-icon name="lock-closed"></ion-icon>
                    </span>
                    <input type="password" name="cpassword" placeholder="Confirm Password" id="" required>
                    <label for="">Check Password</label>
                </div>

                <select name="role" id="" required>
                    <option value="" disabled selected>Pilih Role dari user</option>
                    <option value="siswa">SISWA</option>
                </select>
                <button type="submit" name="submit" class="btn" >Register</button>
                <div class="login-register">
                    <p>Sudah punya akun? <a href="index.php">Login</a></p>
                </div>
            </form>
        </div>
    </div>
</body>
<script
      type="module"
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"
    ></script>
</html>
<!-- KODE DIATAS SUDAH BENAR -->

