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
if (isset($_POST['login'])) {
  include "koneksi.php";
  //Process for login
  // 1. Get the data from login form
  $username = $_POST['username'];
  $password = md5($_POST['password']);

  // 2. SQL to check whether the user with username exixts or not
  $cek_user = mysqli_query($conn, "SELECT * FROM pedulicovid WHERE username='$username'AND password='$password'");

  // 3. Count rows to check whether the user exists or not
  $row = mysqli_num_rows($cek_user);

  if ($row === 1) {
    //User avaliable and login success
    $_SESSION['login'] = "<div class='success'>Login Successful.</div>";
    $_SESSION['user'] = $username; //to check whether the user is logged in or not and logout will unset it

    //Redirect to home page/ Dashboard
    header('location: ../index.php');
  } else {
    // User not avaliable and login fail
    //User avaliable and login success
    $_SESSION['login'] = "<div class='error'>Username or Password did not match.</div>";
    //Redirect to home page/ Dashboard
    header('location:../login.php');
  }
}


?>