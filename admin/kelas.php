<?php
include("../config/lib.php");

if (isset($_GET["aksi"])) {
    $aksi = $_GET["aksi"];

    if ($aksi == "hapus") {
        $kode = safeData($_GET["kode"]);
        $sql = "UPDATE kelas SET sts_kelas = 0 WHERE kode_kelas='$kode'";
        $q = executeSQL($sql);

        if ($q) {
            header("location:kelas.php");
        }
    }
}

$sql = "SELECT * FROM kelas NATURAL JOIN prodi WHERE sts_kelas=1 AND sts_prodi=1"; // Buat SQL Tamgil Data;
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
    <h1>KeLas</h1>
    <a href="kelas_add.php">Tambah Kelas</a>
    <br />
    <table border="1" cellpadding="5" cellspacing="0">
        <thead>
            <th>No</th>
            <th>Kode Kelas</th>
            <th>Nama Kelas</th>
            <th>Action</th>
        </thead>
        <tbody>
            <?php 
            // lakukan perulanagan dengan foreach agar mudah
            foreach ($q as $k => $v) { // $q berasal dari atas hasil eksekusiSQL
                $no = $k + 1; // untuk pembuatan nomer
                $kode_kelas = $v["kode_kelas"];
                $kode_prodi = $v["kode_prodi"];
                $kelas = $v["kelas"];
                $nama = $v["nama_prodi"];
                $ket = $v["ket"];
                $gabung = $kelas . " " . $nama . " " . $ket;
                ?>
            <tr style="text-align:center">
                <td><?php echo $no ?></td>
                <td><?php echo $kode_prodi ?></td>
                <td><?php echo $gabung ?></td>
                <td>
                    <a href="kelas_edit.php?kode=<?php echo $kode_kelas ?>">Edit</a>
                    &nbsp;&nbsp;
                    <a href="?aksi=hapus&kode=<?php echo $kode_kelas ?>">Hapus</a>
                </td>
            </tr>
            <?php 
        } ?>
        </tbody>
    </table>
</body>

</html>