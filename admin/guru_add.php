<?php
include("../config/lib.php");

if (isset($_POST["simpan"])) {
    $nip = safeData($_POST["nip"]);
    $nama = safeData($_POST["nama"]);
    $username = safeData($_POST["username"]);
    $password = safeData($_POST["password"]);
    $alamat = safeData($_POST["alamat"]);

    $sql = "INSERT INTO guru(nip, nama_guru, alamat_guru, sts_guru) VALUES ('$nip','$nama','$alamat',1)";
    $sql1 = "INSERT INTO userprofile(username, password, level, sts_user, nip) VALUES ('$username','$password',2,1,'$nip')";

    $q = executeSQL($sql); // eksekusi yg pertama
    $q1 = executeSQL($sql1); // eksekusi yg kedua

    if ($q && $q1) { // jika keduanya berhasil di eksekusi
        header("location:guru.php"); // maka pindah ke halaman siswa.php
    }

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DASHBOARD ADMIN</title>
</head>
<body>
    <h1>Guru Add</h1>
    <form method="POST">
        <label for="">NIP</label><br/>
        <input type="text" name="nip" required><br/><br/>
        <label for="">Nama</label><br/>
        <input type="text" name="nama" required><br/><br/>
        <label for="">Username</label><br/>
        <input type="text" name="username" required><br/><br/>
        <label for="">Password</label><br/>
        <input type="password" name="password" required><br/><br/>
        <label for="">Alamat</label><br/>
        <textarea name="alamat" id="" cols="30" rows="5" required></textarea><br/><br/>
        <input type="submit" name="simpan" value="Simpan"> &nbsp;&nbsp;
        <a href="guru.php">Kembali</a>
    </form>
</body>
</html>