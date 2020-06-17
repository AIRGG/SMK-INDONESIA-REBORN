<?php
include("../config/lib.php");

$nip = safeData($_SESSION["nip"]);

if (isset($_POST["simpan"])) {
    $mapel = safeData($_POST["mapel"]);
    $nis = safeData($_POST["siswa"]);
    $uh = safeData($_POST["uh"]);
    $uts = safeData($_POST["uts"]);
    $uas = safeData($_POST["uas"]);
    $na = ($uh + $uts + $uas) / 3;

    $sql = "INSERT INTO nilai (id_nilai,id_mg,nis,uh,uts,uas,na,sts_nilai) VALUES
            (NULL, '$mapel', '$nis', '$uh', '$uts', '$uas', '$na', 1);";

    $q = executeSQL($sql); // eksekusi yg pertama

    if ($q) { // jika keduanya berhasil di eksekusi
        header("location:nilai.php"); // maka pindah ke halaman siswa.php
    }

}

// buat sql untuk mengisi select option nya nanti.
$sql = "SELECT * FROM mapel_guru
NATURAL JOIN mapel
WHERE sts_mg=1 AND sts_mapel=1 AND nip ='$nip'"; // select semua mapel yg diajar sama si guru

$sql1 = "SELECT * FROM kelas_siswa
NATURAL JOIN kelas
NATURAL JOIN siswa
WHERE sts_kelas=1 AND sts_ks=1 AND sts_siswa=1 AND kode_kelas IN (
    SELECT kode_kelas FROM jadwal
    NATURAL JOIN kelas
    NATURAL JOIN mapel_guru
    NATURAL JOIN guru
    WHERE sts_jadwal=1 AND sts_kelas=1 AND sts_mg=1 AND sts_guru=1 
    AND nip='$nip'
)
"; // sql select semua siswa yang diajar sama si guru yg login

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
    <h1>Nilai Add</h1>
    <form method="POST">
        <label for="">Mapel</label><br/>
        <select name="mapel" id="">
            <?php 
            foreach ($q as $k => $v) {
                $nama = $v["nama_mapel"];
                $kode = $v["id_mg"];
                ?>
                <option value="<?php echo $kode ?>">
                    <?php echo $nama ?>
                </option>
            <?php 
        }
        ?>
        </select><br/><br/>
        <label for="">Siswa</label><br/>
        <select name="siswa" id="">
            <?php 
            foreach ($q1 as $k => $v) {
                $nis = $v["nis"];
                $nama_siswa = $v["nama_siswa"];
                $kelas = $v["kelas"];
                $nama = $v["kode_prodi"];
                $ket = $v["ket"];
                $gabung = $kelas . " " . $nama . " " . $ket;
                ?>
                <option value="<?php echo $nis ?>">
                    <?php echo $nama_siswa . " | " . $gabung ?>
                </option>
            <?php 
        }
        ?>
        </select><br/><br/>
        <input type="text" name="uh" placeholder="UH" style="width: 40px;">
        <input type="text" name="uts" placeholder="UTS" style="width: 40px;">
        <input type="text" name="uas" placeholder="UAS" style="width: 40px;"><br/><br/>
        <input type="submit" name="simpan" value="Simpan"> &nbsp;&nbsp;
        <a href="nilai.php">Kembali</a>
    </form>
</body>
</html>