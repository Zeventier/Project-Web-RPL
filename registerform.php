<?php

session_start();
header('location:index.php'); //????

$con = mysqli_connect('localhost','root',''); //???

mysqli_select_db($con,'pedulicovid'); //?????? peduli covid?

$fullname = $_POST['inputName'];
$email = $_POST['inputEmail'];
$telp = $_POST['inputTelp'];
$username = $_POST['inputUname'];
$password = $_POST['inputPassw'];

$s = " SELECT * FROM akun WHERE username = '$username'"; //????

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if ($num == 1){
    echo "Username Already Taken";
}
else{
    $reg = " INSERT INTO usertable(nama_lengkap , alamat_email , nomor_telpon , username , password) VALUES('$fullname','$email','$telp','$username','$password')";
    mysqli_query($con, $reg);
    echo "Registration Successful";
}

?>