<?php
include("../config/lib.php");

if (isset($_POST["simpan"])) {
    $mapel = safeData($_POST["mapel"]);
    $guru = safeData($_POST["guru"]);

    $sql = "INSERT INTO mapel_guru (id_mg, kode_mapel, nip, sts_mg) VALUES (NULL, '$mapel', '$guru', 1)";

    $q = executeSQL($sql); // eksekusi yg pertama

    if ($q) { // jika keduanya berhasil di eksekusi
        header("location:mapel_guru.php"); // maka pindah ke halaman siswa.php
    }

}

// buat sql untuk mengisi select option nya nanti.
$sql = "SELECT * FROM guru WHERE sts_guru = 1";
$sql1 = "SELECT * FROM mapel WHERE sts_mapel = 1";

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
    <h1>Mapel Guru Add</h1>
    <form method="POST">
        <label for="">Mapel</label><br/>
        <select name="mapel" id="">
            <?php 
            foreach ($q1 as $k => $v) {
                $nama = $v["nama_mapel"];
                $kode = $v["kode_mapel"];
                ?>
                <option value="<?php echo $kode ?>">
                    <?php echo $nama ?>
                </option>
            <?php 
        }
        ?>
        </select><br/><br/>
        <label for="">Guru</label><br/>
        <select name="guru" id="">
            <?php 
            foreach ($q as $k => $v) {
                $nama = $v["nama_guru"];
                $nip = $v["nip"];
                ?>
                <option value="<?php echo $nip ?>">
                    <?php echo $nama ?>
                </option>
            <?php 
        }
        ?>
        </select><br/><br/>
        <input type="submit" name="simpan" value="Simpan"> &nbsp;&nbsp;
        <a href="mapel_guru.php">Kembali</a>
    </form>
</body>
</html>