<?php
include("../config/lib.php");

$nip = safeData($_GET["nip"]);
$sql = "SELECT * FROM guru NATURAL JOIN userprofile WHERE level=2 AND sts_user=1 AND sts_guru=1 AND nip='$nip'";
$q = executeSQL($sql)->fetch_array(); // lakukan eksekusi sql dan jadikan array agar dapat diakses dengan perintah ->fetch_array()

// ambil data yg diperlukan untuk ditampilkan ke form !
$nip = $q["nip"];
$username = $q["username"];
$password = $q["password"];
$nama = $q["nama_guru"];
$alamat = $q["alamat_guru"];

if (isset($_POST["edit"])) { // cek jika tombol edit di tekan

    // ambil data dari form, sesuaikan dengan name yg ada di <input name=''>
    $nama = safeData($_POST["nama"]);
    $password = safeData($_POST["password"]);
    $alamat = safeData($_POST["alamat"]);

    $sql = "UPDATE guru SET nama_guru='$nama', alamat_guru='$alamat' WHERE nip='$nip'";
    $sql1 = "UPDATE userprofile SET password='$password' WHERE username='$username'";

    $q = executeSQL($sql); // eksekusi yg pertama
    $q1 = executeSQL($sql1); // eksekusi yg kedua

    if ($q && $q1) { // jika keduanya berhasil di eksekusi
        header("location:guru.php"); // maka pindah ke halaman guru.php
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
    <h1>Guru Edit</h1>
    <form method="POST">
        <label for="">nip</label><br/>
        <input type="text" name="nip" value="<?php echo $nip ?>" disabled><br/><br/>
        <label for="">Nama</label><br/>
        <input type="text" name="nama" value="<?php echo $nama ?>" required><br/><br/>
        <label for="">Username</label><br/>
        <input type="text" name="username" value="<?php echo $username ?>" disabled><br/><br/>
        <label for="">Password</label><br/>
        <input type="password" name="password" value="<?php echo $password ?>" required><br/><br/>
        <label for="">Alamat</label><br/>
        <textarea name="alamat" id="" cols="30" rows="5" required><?php echo $alamat ?></textarea><br/><br/>
        <input type="submit" name="edit" value="Edit"> &nbsp;&nbsp;
        <a href="guru.php">Kembali</a>
    </form>
</body>
</html>