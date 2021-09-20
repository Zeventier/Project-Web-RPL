<?php
session_start();
include 'koneksi.php';
if (isset($_SESSION['user']) != '') {
    echo '<script>window.location="index.php"</script>';
}
?>
<!DOCTYPE HTML>
<html>

<head>
    <title>Halaman Register</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1>Register</h1>
        <form action="formregister_php.php" method="POST">
            <label>Nama Lengkap</label>
            <br>
            <input type="text" class="form-control" id="inputName" name="inpName" placeholder="Masukkan Nama Lengkap" required>
            <br>
            <label>Username</label>
            <br>
            <input type="username" class="form-control" id="inputUsername" name="inpUname" placeholder="Masukkan Username" required>
            <br>
            <label>Email</label>
            <br>
            <input type="email" class="form-control" id="inputemail" name="inmail" placeholder="Masukkan Email" required>
            <br>
            <label>Password</label>
            <br>
            <input type="password" class="form-control" id="inputPassword" name="inpPass" placeholder="Password" required>
            <br>
            <label>No Telepon</label>
            <br>
            <input type="telp" class="form-control" id="inputtelpon" name="intelp" placeholder="Masukkan No Telepon" required>
            <br>
            <button type="submit" class="btn btn-primary tombol" name="register">Sign Up</button>
            <p> Sudah punya akun?
                <a href="login.php">Login di sini</a>
            </p>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>

</html>