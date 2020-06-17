<?php
include("../config/lib.php");

if (isset($_POST["simpan"])) {
    $kode = safeData($_POST["kode"]);
    $nama = safeData($_POST["nama"]);

    $sql = "INSERT INTO prodi(kode_prodi, nama_prodi, sts_prodi) VALUES ('$kode','$nama',1)";

    $q = executeSQL($sql); // eksekusi yg pertama

    if ($q) { // jika keduanya berhasil di eksekusi
        header("location:prodi.php"); // maka pindah ke halaman siswa.php
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
    <h1>Prodi Add</h1>
    <form method="POST">
        <label for="">Kode Prodi</label><br/>
        <input type="text" name="kode" required><br/><br/>
        <label for="">Nama Prodi</label><br/>
        <input type="text" name="nama" required><br/><br/>
        <input type="submit" name="simpan" value="Simpan"> &nbsp;&nbsp;
        <a href="prodi.php">Kembali</a>
    </form>
</body>
</html>