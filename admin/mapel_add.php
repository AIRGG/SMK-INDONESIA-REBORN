<?php
include("../config/lib.php");

if (isset($_POST["simpan"])) {
    $kode = safeData($_POST["kode"]);
    $nama = safeData($_POST["nama"]);

    $sql = "INSERT INTO mapel(kode_mapel, nama_mapel, sts_mapel) VALUES ('$kode','$nama',1)";

    $q = executeSQL($sql); // eksekusi yg pertama

    if ($q) { // jika keduanya berhasil di eksekusi
        header("location:mapel.php"); // maka pindah ke halaman siswa.php
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
    <h1>Mapel Add</h1>
    <form method="POST">
        <label for="">Kode Mapel</label><br/>
        <input type="text" name="kode" required><br/><br/>
        <label for="">Nama Mapel</label><br/>
        <input type="text" name="nama" required><br/><br/>
        <input type="submit" name="simpan" value="Simpan"> &nbsp;&nbsp;
        <a href="mapel.php">Kembali</a>
    </form>
</body>
</html>