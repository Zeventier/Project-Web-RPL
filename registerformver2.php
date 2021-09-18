<?php
include("koneksi.php"); //?????????????
session_start();

$fullname = $_POST['inputName'];
$email = $_POST['inputEmail'];
$telp = $_POST['inputTelp'];
$username = $_POST['inputUname'];
$password = $_POST['inputPassw'];

$select_stmt = $pdo_conn->prepare('SELECT*FROM akun WHERE username ="$username"');
$select_stmt->execute();

$row = $select_stmt->fetch(PDO::FETCH_ASSOC);

if (!empty($row['username', 'email', 'telp', 'fullname'])) {
    echo "Username Telah di gunakan";
} else if ($username == null || $password == null) {
    echo "Data Tidak Boleh Kosong";
} else {
    $sql = "INSERT INTO akun (nama_lengkap, alamat_email, momor_telpon, username, password) VALUES ('$fullname', '$email', '$telp', '$username', '$password')";
    $insert_stmt = $pdo_conn->prepare($sql);
    $insert_stmt->bindParam(':inputName', $fullname);
    $insert_stmt->bindParam(':inputEmail', $email);
    $insert_stmt->bindParam(':inputTelp', $telp);
    $insert_stmt->bindParam(':inputUname', $username);
    $insert_stmt->bindParam(':inputPassw', $password);

    if ($insert_stmt->execute()) {
        $_SESSION['akun'] = $username;
        $insertMsg = "Akun Berhasil di buat";
        header("location: index.html#login"); //??????????
    }
}
