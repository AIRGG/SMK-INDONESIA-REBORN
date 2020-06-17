<?php
include("../config/lib.php");

$nis = safeData($_SESSION["nis"]);

if (isset($_GET["aksi"])) {
    $aksi = $_GET["aksi"];

    if ($aksi == "hapus") {
        $kode = safeData($_GET["kode"]);
        $sql = "UPDATE nilai SET sts_nilai = 0 WHERE id_nilai='$kode'";
        $q = executeSQL($sql);

        if ($q) {
            header("location:nilai.php");
        }
    }
}

$sql = "SELECT * FROM nilai 
        NATURAL JOIN siswa 
        NATURAL JOIN mapel_guru 
        NATURAL JOIN guru 
        NATURAL JOIN mapel
        WHERE sts_nilai = 1 AND sts_mg=1 AND sts_mapel=1 AND sts_guru=1 AND sts_siswa=1
        AND nis='$nis'
";
// $sql = "SELECT *, 
//             (SELECT concat(kelas, ' ', nama_prodi, ' ', ket) as nm 
//             FROM jadwal NATURAL JOIN kelas NATURAL JOIN kelas_siswa NATURAL JOIN prodi 
//             WHERE nis=siswa.nis AND id_mg=nilai.id_mg) as kelasnya 
//         FROM nilai NATURAL JOIN siswa NATURAL JOIN mapel_guru NATURAL JOIN mapel NATURAL JOIN guru 
//         WHERE sts_nilai=1 AND sts_siswa=1 AND sts_mg=1 AND sts_mapel=1 AND sts_guru=1 AND nip='$nip'
// "; // Buat SQL Tamgil Data;
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
    <h1>Nilai</h1>
    <br />
    <table border="1" cellpadding="5" cellspacing="0">
        <thead>
            <th>No</th>
            <th>Nama Guru</th>
            <th>Mapel</th>
            <th>Nilai UH</th>
            <th>Nilai UTS</th>
            <th>Nilai UAS</th>
            <th>Nilai Akhir</th>
        </thead>
        <tbody>
            <?php 
            // lakukan perulanagan dengan foreach agar mudah
            foreach ($q as $k => $v) { // $q berasal dari atas hasil eksekusiSQL
                $no = $k + 1; // untuk pembuatan nomer
                $idnilai = $v["id_nilai"];
                $siswa = $v["nama_guru"];
                $mapel = $v["nama_mapel"];
                $uh = $v["uh"];
                $uts = $v["uts"];
                $uas = $v["uas"];
                $na = $v["na"];
                ?>
            <tr style="text-align:center">
                <td><?php echo $no ?></td>
                <td><?php echo $siswa ?></td>
                <td><?php echo $mapel ?></td>
                <td><?php echo $uh ?></td>
                <td><?php echo $uts ?></td>
                <td><?php echo $uas ?></td>
                <td><?php echo $na ?></td>
            </tr>
            <?php 
        } ?>
        </tbody>
    </table>
</body>

</html>