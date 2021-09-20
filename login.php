<?php
session_start();
include 'koneksi.php';
if (isset($_SESSION['user']) != '') {
  echo '<script>window.location="index.php"</script>';
}
?>

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
        <label for="username">Username</label>
        <p>
          <input type="text" name="username" placeholder="Username" />
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  <!-- end login -->
</body>

</html>

<?php
if (isset($_POST['login'])) {
  session_start();
  include "koneksi.php";
  //Process for login
  // 1. Get the data from login form
  $username = $_POST['username'];
  $password = $_POST['password'];

  // 2. SQL to check whether the user with username exixts or not
  $cek_user = mysqli_query($conn, "SELECT * FROM akun WHERE username='$username' AND password='$password'");

  // 3. Count rows to check whether the user exists or not
  $row = mysqli_num_rows($cek_user);

  if ($row == 1) {
    //User avaliable and login success
    $_SESSION['login'] = "<div class='success'>Login Successful.</div>";
    $_SESSION['user'] = $username; //to check whether the user is logged in or not and logout will unset it

    //Redirect to home page/ Dashboard
    header('location: index.php');
  } else {
    // User not avaliable and login fail
    //User avaliable and login success
    $_SESSION['login'] = "<div class='error'>Username or Password did not match.</div>";
    //Redirect to home page/ Dashboard
    header('location: login.php');
  }
}
?>