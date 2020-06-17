<?php
include("../config/lib.php");

$kode = safeData($_GET["kode"]);
$sql = "SELECT * FROM prodi WHERE sts_prodi=1 AND kode_prodi='$kode'";
$q = executeSQL($sql)->fetch_array(); // lakukan eksekusi sql dan jadikan array agar dapat diakses dengan perintah ->fetch_array()

// ambil data yg diperlukan untuk ditampilkan ke form !
$kode = $q["kode_prodi"];
$nama = $q["nama_prodi"];

if (isset($_POST["edit"])) { // cek jika tombol edit di tekan

    // ambil data dari form, sesuaikan dengan name yg ada di <input name=''>
    $nama = safeData($_POST["nama"]);

    $sql = "UPDATE prodi SET nama_prodi='$nama' WHERE kode_prodi='$kode'";

    $q = executeSQL($sql); // eksekusi yg pertama

    if ($q) { // jika berhasil di eksekusi
        header("location:prodi.php"); // maka pindah ke halaman prodi.php
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
    <h1>Prodi Edit</h1>
    <form method="POST">
        <label for="">kode</label><br/>
        <input type="text" name="kode" value="<?php echo $kode ?>" disabled><br/><br/>
        <label for="">Nama</label><br/>
        <input type="text" name="nama" value="<?php echo $nama ?>" required><br/><br/>
        <input type="submit" name="edit" value="Edit"> &nbsp;&nbsp;
        <a href="prodi.php">Kembali</a>
    </form>
</body>
</html>