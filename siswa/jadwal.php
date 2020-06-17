<?php
include("../config/lib.php");

$nis = safeData($_SESSION["nis"]);

$sql = "SELECT * FROM jadwal
    NATURAL JOIN mapel_guru
    NATURAL JOIN kelas
    NATURAL JOIN kelas_siswa 
    NATURAL JOIN siswa 
    NATURAL JOIN prodi
    NATURAL JOIN guru
    NATURAL JOIN mapel
    WHERE sts_jadwal=1 AND sts_mg=1 AND sts_kelas=1 AND sts_prodi=1 AND sts_guru=1 AND sts_mapel=1 AND nis='$nis'
";
$q = executeSQL($sql); // Eksekusi SQL Tamgil Data nya
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DASHBOARD</title>
</head>
<style>
    ul {
        display: inline;
        list-style-type: none;
    }

    li {
        float: left;
    }

    li a {
        text-decoration: none;
        padding: 10px;
        background-color: grey;
        color: white;
    }

    li a:hover {
        color: black;
        background-color: white;
    }
</style>

<body>
    <?php include("dist_nav.php") ?>
    <h1>Jadwal</h1>
    <!-- <a href="nilai_add.php">Tambah Nilai</a> -->
    <br />
    <table border="1" cellpadding="5" cellspacing="0">
        <thead>
            <th>No</th>
            <th>Nama Guru</th>
            <th>Kelas</th>
            <th>Mapel</th>
        </thead>
        <tbody>
            <?php 
            // lakukan perulanagan dengan foreach agar mudah
            foreach ($q as $k => $v) { // $q berasal dari atas hasil eksekusiSQL
                $no = $k + 1; // untuk pembuatan nomer
                $nama_guru = $v["nama_guru"];
                $nama = $v["kode_prodi"];
                $kelas = $v["kelas"];
                $ket = $v["ket"];
                $gabung = $kelas . " " . $nama . " " . $ket;
                $mapel = $v["nama_mapel"];
                ?>
            <tr style="text-align:center">
                <td><?php echo $no ?></td>
                <td><?php echo $nama_guru ?></td>
                <td><?php echo $gabung ?></td>
                <td><?php echo $mapel ?></td>
            </tr>
            <?php 
        } ?>
        </tbody>
    </table>
</body>

</html>