<?php
include "koneksi.php";
if (isset($_POST['update'])) {

    $username = $_POST['Username'];
    $identitas = $_POST['Identitas'];
    $nama_lengkap = $_POST['NamaLengkap'];
    $tanggal_lahir = $_POST['TanggalLahir'];
    $nomor_telpon = $_POST['NomorTelepon'];
    $email = $_POST['Email'];

    $sql = "UPDATE akun SET identitas_akun='$identitas', nama_lengkap='$nama_lengkap', tanggal_lahir='$tanggal_lahir',nomor_telpon='$nomor_telpon', alamat_email='$email' WHERE username='$username' ";

    if ($conn->query($sql) == TRUE) {
        echo "<script>alert('data berhasil diupdate.');window.location='profil.php'</script>";
    } else {
        echo "<script>alert('data gagal diubah.');window.location='profil.php'</script>";
    }
}
?>
<html>

<head>
    <title>
        Edit Profil
    </title>
    <style>
        body {
            background-color: whitesmoke;
        }

        input {
            width: 40%;
            height: 5%;
            border: 1px;
            border-radius: 05px;
            padding: 8px 15px 8px 15px;
            margin: 10px 0px 15px 0px;
            box-shadow: 1px 1px 2px 1px grey;
        }
    </style>

<body>
    <center>
        <h1>Edit Data Profil</h1>
        <form action="" method="POST">
            <input type="text" name="Username" placeholder="Masukkan Username Anda" /><br />
            <input type="text" name="Identitas" placeholder="Ganti Identitas" /><br />
            <input type="text" name="NamaLengkap" placeholder="Ganti Nama Lengkap" /><br />
            <input type="date" name="TanggalLahir" placeholder="Ganti Tanggal Lahir" /><br />
            <input type="text" name="NomorTelepon" placeholder="Ganti Nomor Telepon"/><br/>
            <input type="text" name="Email" placeholder="Ganti Email" /><br />

            <input type="Submit" name="update" value="Apply" />
        </form>
    </center>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</head>

</html>
