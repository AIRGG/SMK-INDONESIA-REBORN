<?php
include("../config/lib.php");

if (isset($_GET["aksi"])) {
    $aksi = $_GET["aksi"];

    if ($aksi == "hapus") {
        $kode = safeData($_GET["kode"]);
        $sql = "UPDATE jadwal SET sts_jadwal = 0 WHERE id_jdwl='$kode'";
        $q = executeSQL($sql);

        if ($q) {
            header("location:jadwal.php");
        }
    }
}

$sql = "SELECT * FROM jadwal NATURAL JOIN mapel_guru NATURAL JOIN guru NATURAL JOIN mapel NATURAL JOIN kelas NATURAL JOIN prodi WHERE sts_jadwal=1 AND sts_mg=1 AND sts_guru=1 AND sts_mapel=1 AND sts_kelas=1 AND sts_prodi=1"; // Buat SQL Tamgil Data;
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
    <a href="jadwal_add.php">Tambah Jadwal</a>
    <br />
    <table border="1" cellpadding="5" cellspacing="0">
        <thead>
            <th>No</th>
            <th>Nama Guru</th>
            <th>Mapel</th>
            <th>Kelas</th>
            <th>Action</th>
        </thead>
        <tbody>
            <?php 
            // lakukan perulanagan dengan foreach agar mudah
            foreach ($q as $k => $v) { // $q berasal dari atas hasil eksekusiSQL
                $no = $k + 1; // untuk pembuatan nomer
                $idjdwl = $v["id_jdwl"];
                $kelas = $v["kelas"];
                $nama = $v["nama_prodi"];
                $ket = $v["ket"];
                $gabung = $kelas . " " . $nama . " " . $ket;
                $guru = $v["nama_guru"];
                $mapel = $v["nama_mapel"];
                ?>
            <tr style="text-align:center">
                <td><?php echo $no ?></td>
                <td><?php echo $guru ?></td>
                <td><?php echo $mapel ?></td>
                <td><?php echo $gabung ?></td>
                <td>
                    <a href="jadwal_edit.php?kode=<?php echo $idjdwl ?>">Edit</a>
                    &nbsp;&nbsp;
                    <a href="?aksi=hapus&kode=<?php echo $idjdwl ?>">Hapus</a>
                </td>
            </tr>
            <?php 
        } ?>
        </tbody>
    </table>
</body>

</html>