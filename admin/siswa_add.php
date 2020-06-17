<?php
include("../config/lib.php"); // include lib nya

if (isset($_POST["simpan"])) { // cek jika tombol simpan di tekan
    // ambil data dari form, sesuaikan dengan name yg ada di <input name=''>
    $nis = safeData($_POST["nis"]);
    $nama = safeData($_POST["nama"]);
    $username = safeData($_POST["username"]);
    $password = safeData($_POST["password"]);
    $alamat = safeData($_POST["alamat"]);

    $sql = "INSERT INTO siswa(nis, nama_siswa, alamat_siswa, sts_siswa) VALUES ('$nis','$nama','$alamat',1)"; // buat sql ke 1 untuk insert ke table 'siswa'
    $sql1 = "INSERT INTO userprofile(username, password, level, sts_user, nis) VALUES ('$username','$password',3,1,'$nis')"; // buat lagi sql ke 2 untuk insert ke table 'userprofile'

    $q = executeSQL($sql); // eksekusi yg pertama
    $q1 = executeSQL($sql1); // eksekusi yg kedua

    if ($q && $q1) { // jika keduanya berhasil di eksekusi
        header("location:siswa.php"); // maka pindah ke halaman siswa.php
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
    <h1>Siswa Add</h1>
    <form method="POST">
        <label for="">NIS</label><br/>
        <input type="text" name="nis" required><br/><br/>
        <label for="">Nama</label><br/>
        <input type="text" name="nama" required><br/><br/>
        <label for="">Username</label><br/>
        <input type="text" name="username" required><br/><br/>
        <label for="">Password</label><br/>
        <input type="password" name="password" required><br/><br/>
        <label for="">Alamat</label><br/>
        <textarea name="alamat" id="" cols="30" rows="5" required></textarea><br/><br/>
        <input type="submit" name="simpan" value="Simpan"> &nbsp;&nbsp;
        <a href="siswa.php">Kembali</a>
    </form>
</body>
</html>