<!DOCTYPE html>
<html lang="en-US">

<head>
  <link rel="shortcut icon" href="img/Dokter.png" />
  <meta name="viewport" content="width_device-width, initial-scale=1" />
  <meta charset="utf-8" />
  <title>Log in | Peduli Covid</title>
  <link href="http://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="loginstyle.css" />
</head>

<body id="bg-login">
  <div id="login">
    <h2>Log In</h2>
    <form action="" method="POST">
      <fieldset>
        <label for="email">E-mail/Username</label>
        <p>
          <input type="email" name="email" placeholder="E-mail/Username" />
        </p>
        <label for="password">Password</label>
        <p>
          <input type="password" name="password" placeholder="Password" />
        </p>
        <p><input type="submit" name="login" value="Log In" /></p>
        <div class="login-help">
          <label>Tidak punya akun? </label> <a href="formregister.html">Register Sekarang</a>
        </div>
      </fieldset>
    </form>
  </div>
  <!-- end login -->
</body>

</html>

<?php
  if (isset($_POST['submit'])) {
    session_start();
    include 'koneksi.php';

    $user = mysqli_real_escape_string($conn, $_POST['user']);
    $pass = mysqli_real_escape_string($conn, $_POST['pass']);

    $cek_user = mysqli_query($conn, "SELECT * FROM tb_admin WHERE username = '" . $user . "' AND password = '" . MD5($pass) . "'");
    $row = mysqli_num_rows($cek_user); 

    if($row === 1 ){
      $fetch_pass = mysqli_fetch_assoc($cek_user);
      $cek_pass = $fetch_pass['password'];
      if($cek_pass <> $pass ){
        echo '<script>alert("Password Salah");</script>';
      }else{
        $_SESSION['log'] = true;
        echo '<script>alert("Password Salah");window.location="index.php"</script>';
      } 
    } else {
      echo '<script>alert("Username salah atau belum terdaftar");</script>';
    }
  }
?>
