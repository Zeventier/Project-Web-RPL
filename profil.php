<?php
session_start();
include 'koneksi.php';
if ($_SESSION['user'] == '') {
    echo '<script>window.location="login.php"</script>';
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <link rel="shortcut icon" href="img/kategori.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width_device-width, initial-scale=1">
    <title>Peduli Covid - Profil</title>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
</head>

<body>
    <!--header -->
    <nav class="navbar navbar-expand-lg navbar-light px-5" style="background-color: #ecf4f4">
        <div class="container-fluid">
            <!-- brand -->
            <a class="navbar-brand fw-bold" href="#">Peduli Covid</a>
            <!-- Button agar responsive -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Isi Navbar -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto me-3 mb-2 mb-lg-auto">
                    <li class="nav-item">
                        <!-- Link untuk ke halaman about -->
                        <a class="nav-link fw-bold" href="About us.html">About</a>
                    </li>
                    <li class="nav-item">
                        <!-- Link untuk ke halaman contact -->
                        <a class="nav-link fw-bold" href="CONTACT US MAIN .html">Contact</a>
                    </li>
                </ul>
                <container class="d-flex">
                    <!-- Sebelum login -->
                    <!-- Link untuk ke halaman login -->
                    <a class="btn btn-success" href="logout.php" role="button" style="width: 110px">Log out</a>
                    <!-- Setelah login -->

                </container>
            </div>
        </div>
    </nav>
    <!-- content-->
    <div class="section" style="background-color: #ecf4f4; padding-top: 1.5rem;">
        <section class="jumbotron text-center">
            <img src="https://freepikpsd.com/media/2019/10/follower-png-6.png" alt="profile" width="150" class="rounded-circle img-thumbnail">
            <h1 class=" display-4"><?php echo $_SESSION['user'] = $username ?></h1>
        </section>
        <div class="container">
            <h3>Profile</h3>
            <div class="box">
                <div class="btn btn-success" style="margin-bottom:1rem;">
                    <a href="update.php" style="color:#ffff; ">Edit Profile</a>
                </div>
                <div class="container" style="background-color: #ffff;">
                    <table border="0" class="table" style="border-radius: 10px; border: 10px solid transparent">
                        <tr>
                            <td><b>Identitas</td>
                        </tr>
                        <?php
                        $identitas_akun = mysqli_query($conn, "SELECT * FROM akun where identitas_akun = username");
                        if (mysqli_num_rows($identitas_akun) > 0) {
                            while ($row = mysqli_fetch_array($identitas_akun)) {
                        ?>
                                <tr>
                                    <td><?php echo $row['identitas_akun'] ?></td>
                                </tr>
                            <?php }
                        } else { ?>
                            <tr>
                                <td>Tidak ada data</td>
                            </tr>
                        <?php } ?>
                        <tr>
                            <td><b>Nama</td>
                        </tr>
                        <?php
                        $nama_lengkap = mysqli_query($conn, "SELECT * FROM akun where nama_lengkap = username");
                        if (mysqli_num_rows($nama_lengkap) > 0) {
                            while ($row = mysqli_fetch_array($nama_lengkap)) {
                        ?>
                                <tr>
                                    <td><?php echo $row['nama_lengkap'] ?></td>
                                </tr>
                            <?php }
                        } else { ?>
                            <tr>
                                <td>Tidak ada data</td>
                            </tr>
                        <?php } ?>
                        <tr>
                            <td><b>Tanggal Lahir</td>
                        </tr>
                        <?php
                        $no = 1;
                        $tanggal_lahir = mysqli_query($conn, "SELECT * FROM akun where tanggal_lahir = username");
                        if (mysqli_num_rows($tanggal_lahir) > 0) {
                            while ($row = mysqli_fetch_array($tanggal_lahir)) {
                        ?>
                                <tr>
                                    <td><?php echo $row['tanggal_lahir'] ?></td>
                                </tr>
                            <?php }
                        } else { ?>
                            <tr>
                                <td>Tidak ada data</td>
                            </tr>
                        <?php } ?>
                        <tr>
                            <td><b>Email</td>
                        </tr>
                        <?php
                        $no = 1;
                        $alamat_email = mysqli_query($conn, "SELECT * FROM akun where alamat_email = username");
                        if (mysqli_num_rows($alamat_email) > 0) {
                            while ($row = mysqli_fetch_array($alamat_email)) {
                        ?>
                                <tr>
                                    <td><?php echo $row['alamat_email'] ?></td>
                                </tr>
                            <?php }
                        } else { ?>
                            <tr>
                                <td>Tidak ada data</td>
                            </tr>
                        <?php } ?>
                        <tr>
                            <td><b>Nomor Telepon</td>
                        </tr>
                        <?php
                        $no = 1;
                        $nomor_telpon = mysqli_query($conn, "SELECT * FROM akun where nomor_telpon = username");
                        if (mysqli_num_rows($nomor_telpon) > 0) {
                            while ($row = mysqli_fetch_array($nomor_telpon)) {
                        ?>
                                <tr>
                                    <td><?php echo $row['nomor_telpon'] ?></td>
                                </tr>
                            <?php }
                        } else { ?>
                            <tr>
                                <td>Tidak ada data</td>
                            </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    <footer>
        <div class="container">
            <small>Copyright &copy; 2021 - Peduli Covid</small>
        </div>
    </footer>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
</body>

</html>