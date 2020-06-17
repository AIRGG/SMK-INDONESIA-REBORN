<?php
include("../config/lib.php");

if (isset($_POST["simpan"])) {
    $kelas = safeData($_POST["kelas"]);
    $siswa = safeData($_POST["siswa"]);

    $sql = "INSERT INTO kelas_siswa (id_ks, nis, kode_kelas, sts_ks) VALUES (NULL, '$siswa', '$kelas', 1)";

    $q = executeSQL($sql); // eksekusi yg pertama

    if ($q) { // jika keduanya berhasil di eksekusi
        header("location:kelas_siswa.php"); // maka pindah ke halaman siswa.php
    }

}

// buat sql untuk mengisi select option nya nanti.
$sql = "SELECT * FROM siswa WHERE sts_siswa = 1";
$sql1 = "SELECT * FROM kelas NATURAL JOIN prodi WHERE sts_kelas = 1 AND sts_prodi = 1";

// panggil $q dan $q1 nanti dibawah ketika looping select option
$q = executeSQL($sql);
$q1 = executeSQL($sql1);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DASHBOARD ADMIN</title>
</head>
<body>
    <h1>Kelas Siswa Add</h1>
    <form method="POST">
        <label for="">Siswa</label><br/>
        <select name="siswa" id="">
            <?php 
            foreach ($q as $k => $v) {
                $nis = $v["nis"];
                $nama = $v["nama_siswa"];
                ?>
                <option value="<?php echo $nis ?>">
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
                <option value="<?php echo $kode ?>">
                    <?php echo $gabung ?>
                </option>
            <?php 
        }
        ?>
        </select><br/><br/>
        <input type="submit" name="simpan" value="Simpan"> &nbsp;&nbsp;
        <a href="kelas_siswa.php">Kembali</a>
    </form>
</body>
</html>