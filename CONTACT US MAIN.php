<?php
session_start();
include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
<!----------------------------------------buat NAVBAR--------------------------------------------------------------------------->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous" />
<!-- Code untuk Navbar -->
<nav class="navbar navbar-expand-lg navbar-light px-5" style="background-color: #ecf4f4">
  <div class="container-fluid">
    <!-- brand -->
    <a class="navbar-brand fw-bold" href="index.php">Peduli Covid</a>
    <!-- Button agar responsive -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Isi Navbar -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto me-3 mb-2 mb-lg-auto">
        <li class="nav-item">
          <!-- Link untuk ke halaman about -->
          <a class="nav-link fw-bold" href="About us.php">About</a>
        </li>
        <li class="nav-item">
          <!-- Link untuk ke halaman contact -->
          <a class="nav-link fw-bold" href="CONTACT US MAIN.html">Contact</a>
        </li>

        <container class="d-flex">
          <!-- Sebelum login -->
          <!-- Link untuk ke halaman login -->
          <?php if (isset($_SESSION['user']) == '') { ?>
            <a class="btn btn-success" href="Login.php" role="button" style="width: 110px">Log in</a>
            <!-- Setelah login -->
          <?php } else { ?>
            <li class="nav-item dropdown">
              <a class="nav-link fw-bold dropdown-toggle link-dark" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <?php echo "$_SESSION[user]"; ?>
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li>
                  <a class="dropdown-item fw-bold" style="white-space: nowrap" href="profil.php">Profil</a>
                </li>
                <li>
                  <a class="dropdown-item fw-bold" style="white-space: nowrap" href="logout.php">Log out</a>
                </li>
              </ul>
            </li>
          <?php } ?>
      </ul>
      </container>
    </div>
  </div>
</nav>
<!-------------------------------------Batasan-------------------------------------------------------------------->



<head>
  <link rel="stylesheet" type="text/css" href="style CONTACT US.css">
  <title>isi dari Contact Us</title>
  <h1 class="judul">Contact Us </h1>
</head>

<body>
  <div class="Contact-Us__garis_tengah">
    <section class="Contact-Us">
      <div class="Contact-Us__warna_tabel_atas">
        <h1 class="Contact-Us__title">Kontak Admin</h1>
      </div>
      <div class="Contact-Us__Ukuran_isi">
        <li class="Contact-Us__isi">444-444-444-4444</li>
      </div>
    </section>



    <section class="Contact-Us">
      <div class="Contact-Us__warna_tabel_atas">
        <h1 class="Contact-Us__title">Satgas Kalsel</h1>
      </div>
      <div class="Contact-Us__Ukuran_isi">
        <ul class="Contact-Us__list">
          <li class="Contact-Us__isi">0821-5771-8672</li>
        </ul>
      </div>
    </section>




    <section class="Contact-Us">
      <div class="Contact-Us__warna_tabel_atas">
        <h1 class="Contact-Us__title">Satgas Nasional</h1>
      </div>
      <div class="Contact-Us__Ukuran_isi">
        <ul class="Contact-Us__list">
          <li class="Contact-Us__isi">https://covid19.go.id/</li>
        </ul>
      </div>
    </section>

  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>

</html>