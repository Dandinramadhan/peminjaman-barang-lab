<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register View</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="wrapper">
        <span class="icon-close">
            <ion-icon name="close"></ion-icon>
        </span>
        
        <div class="form-box-register">
            <form action="controller/register.php" method="POST">
                <!-- EMAIL  -->
                <div class="input-box mb-3">
                    <div class="input-group">
                        <span class="input-group-text">
                            <ion-icon name="mail-outline"></ion-icon>
                        </span>
                        <input type="text" class="dandin" name="Email" placeholder="Email" id="" required>
                    </div>
                </div>

                <!-- USERNAME -->
                <div class="input-box mb-3">
                    <div class="input-group">
                        <span class="input-group-text">
                            <ion-icon name="person"></ion-icon>
                        </span>
                        <input type="text" class="dandin" name="username" placeholder="Username" id="" required>
                    </div>
                </div>

                <!-- PASSWORD -->
                <div class="input-box mb-3">
                    <div class="input-group">
                        <span class="input-group-text">
                            <ion-icon name="lock-closed"></ion-icon>
                        </span>
                        <input type="password" class="dandin" name="password" placeholder="Password" id="" required>
                    </div>
                </div>

                <!-- CONFIRM PASSWORD -->
                <div class="input-box mb-3">
                    <div class="input-group">
                        <span class="input-group-text">
                            <ion-icon name="lock-closed"></ion-icon>
                        </span>
                        <input type="password" class="dandin" name="cpassword" placeholder="Check Password" id="" required>
                    </div>
                </div>

                <!-- ROLE SELECTION -->
                <div class="mb-3">
                    <select class="form-select form-select-sm" name="role" id="" required>
                        <option value="" disabled selected>Pilih Role dari user</option>
                        <option value="siswa">SISWA</option>
                    </select>
                </div>

                <button type="submit" name="submit" class="btn btn-success w-100">Register</button>

                <div class="login-register mt-1">
                    <p>Sudah punya akun? <a href="index.php">Login</a></p>
                </div>
            </form>
        </div>
    </div>
    <script src="js/bootstrap.bundle.min.js"></script>

    <!-- ini bagian css inputan -->
<style>
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}

body {
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
  background: url(style/assets/mountain.png) no-repeat;
  background-size: cover;
  background-position: center;
}

.wrapper {
  position: relative;
  width: 350px;
  background: rgba(255, 255, 255, 0.1);
  border: 2px solid rgba(255, 255, 255, 0.3);
  border-radius: 10px;
  padding: 20px;
  backdrop-filter: blur(10px);
  box-shadow: 0 0 100vhpx rgba(0, 0, 0, 0.5);
}

.icon-close {
  position: absolute;
  top: 10px;
  right: 10px;
  font-size: 1.5em;
  color: white;
  cursor: pointer;
}

.input-box {
  margin-bottom: 15px;
}

.input-group-text {
  background-color: rgba(255, 255, 255, 0.1);
  border: none;
  color: #fff;
}

.form-control {
  background: transparent;
  border: none;
  color: #fff;
  border-bottom: 1px solid #fff;
}

.form-control:focus {
  box-shadow: none;
  border-color: #fff;
}

::placeholder {
  color: #fff;
}

.btn {
  border-radius: 20px;
}

.login-register p {
  color: #fff;
  text-align: center;
}
.login-register p a {
  color: #fff;
  text-decoration: underline;
}

.login-register p a:hover {
  text-decoration: none;
}
</style>
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

