<?php

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'pedulicovid');

   $fullname = $_POST['inpName'];
   $username = $_POST['inpUname'];
   $email = $_POST['inmail'];   
   $password = $_POST['inpPass'];
   $telp = $_POST['intelp'];

$s = " SELECT * FROM akun WHERE username = '$username'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if ($num == 1){
    echo "<script>alert('Username already taken.');window.location='formregister.html'</script>";
}
else{
    $reg = " INSERT INTO akun (nama_lengkap, username, alamat_email, password, nomor_telpon) VALUES ('$fullname', '$username', '$email', '$password', '$telp')";
    mysqli_query($con, $reg);
    echo "<script>alert('Registrasi berhasil.');window.location='index.php'</script>";
    //header('location:index.php');
}

?>