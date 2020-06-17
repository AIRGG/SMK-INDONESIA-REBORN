<?php
include("../config/lib.php");

$kode = safeData($_GET["kode"]);

if (isset($_POST["edit"])) {
    $kelas = safeData($_POST["kelas"]);
    $siswa = safeData($_POST["siswa"]);

    $sql = "UPDATE kelas_siswa SET nis = '$siswa', kode_kelas = '$kelas' WHERE kelas_siswa.id_ks = '$kode'";

    $q = executeSQL($sql); // eksekusi yg pertama

    if ($q) { // jika keduanya berhasil di eksekusi
        header("location:kelas_siswa.php"); // maka pindah ke halaman siswa.php
    }

}

// buat sql untuk mengisi select option nya nanti.
$sql = "SELECT * FROM siswa WHERE sts_siswa = 1";
$sql1 = "SELECT * FROM kelas NATURAL JOIN prodi WHERE sts_kelas = 1 AND sts_prodi = 1";

$sql2 = "SELECT * FROM kelas_siswa NATURAL JOIN siswa NATURAL JOIN kelas NATURAL JOIN prodi WHERE sts_ks=1 AND sts_siswa=1 AND sts_kelas=1 AND sts_prodi=1 AND id_ks='$kode'";

// panggil $q dan $q1 nanti dibawah ketika looping select option
$q = executeSQL($sql);
$q1 = executeSQL($sql1);
$q2 = executeSQL($sql2);
$data = $q2->fetch_array();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DASHBOARD ADMIN</title>
</head>
<body>
    <h1>Kelas Add</h1>
    <form method="POST">
        <label for="">Siswa</label><br/>
        <select name="siswa" id="">
            <?php 
            foreach ($q as $k => $v) {
                $nis = $v["nis"];
                $nama = $v["nama_siswa"];
                ?>
                <option value="<?php echo $nis ?>" <?php echo ($data["nis"] == $nis) ? "selected" : '' ?>>
                    <?php echo $nama ?>
                </option>
            <?php 
        }
        ?>
        </select><br/><br/>
        <label for="">Kelas</label><br/>
        <select name="kelas" id="">
            <?php 
            foreach ($q1 as $k => $v) {
                $kode = $v["kode_kelas"];
                $nama = $v["nama_prodi"];
                $kelas = $v["kelas"];
                $nama = $v["nama_prodi"];
                $ket = $v["ket"];
                $gabung = $kelas . " " . $nama . " " . $ket;
                ?>
                <option value="<?php echo $kode ?>" <?php echo ($data["kode_kelas"] == $kode) ? "selected" : '' ?>>
                    <?php echo $gabung ?>
                </option>
            <?php 
        }
        ?>
        </select><br/><br/>
        <input type="submit" name="edit" value="Edit"> &nbsp;&nbsp;
        <a href="kelas_siswa.php">Kembali</a>
    </form>
</body>
</html>