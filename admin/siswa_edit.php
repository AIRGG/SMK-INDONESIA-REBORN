<?php
include("../config/lib.php"); // include lib nya

$nis = safeData($_GET["nis"]); // ambil data nis dari URL dan simpan di variable $nis
$sql = "SELECT * FROM siswa NATURAL JOIN userprofile WHERE level=3 AND sts_user=1 AND sts_siswa=1 AND nis='$nis'"; // buat sql untuk tampil, dengan cara join sama seperti di siswa.php hanya saja kasih kondisi WHERE berdasarkna $nis
$q = executeSQL($sql)->fetch_array(); // lakukan eksekusi sql dan jadikan array agar dapat diakses dengan perintah ->fetch_array()

// ambil data yg diperlukan untuk ditampilkan ke form !
$nis = $q["nis"];
$username = $q["username"];
$password = $q["password"];
$nama = $q["nama_siswa"];
$alamat = $q["alamat_siswa"];

if (isset($_POST["edit"])) { // cek jika tombol edit di tekan

    // ambil data dari form, sesuaikan dengan name yg ada di <input name=''>
    $nama = safeData($_POST["nama"]);
    $password = safeData($_POST["password"]);
    $alamat = safeData($_POST["alamat"]);

    $sql = "UPDATE siswa SET nama_siswa='$nama', alamat_siswa='$alamat' WHERE nis='$nis'"; // buat sql ke 1 untuk update table 'siswa'
    $sql1 = "UPDATE userprofile SET password='$password' WHERE username='$username'"; // buat lagi sql ke 2 untuk update table 'userprofile'

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
    <h1>Siswa Edit</h1>
    <form method="POST">
        <label for="">NIS</label><br/>
        <input type="text" name="nis" value="<?php echo $nis ?>" disabled><br/><br/>
        <label for="">Nama</label><br/>
        <input type="text" name="nama" value="<?php echo $nama ?>" required><br/><br/>
        <label for="">Username</label><br/>
        <input type="text" name="username" value="<?php echo $username ?>" disabled><br/><br/>
        <label for="">Password</label><br/>
        <input type="password" name="password" value="<?php echo $password ?>" required><br/><br/>
        <label for="">Alamat</label><br/>
        <textarea name="alamat" id="" cols="30" rows="5" required><?php echo $alamat ?></textarea><br/><br/>
        <input type="submit" name="edit" value="Edit"> &nbsp;&nbsp;
        <a href="siswa.php">Kembali</a>
    </form>
</body>
</html>