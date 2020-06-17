<?php
include("../config/lib.php");

if (isset($_GET["aksi"])) {
    $aksi = $_GET["aksi"];

    if ($aksi == "hapus") {
        $id = safeData($_GET["id"]);
        $sql = "UPDATE mapel_guru SET sts_mg = 0 WHERE id_mg='$id'";
        $q = executeSQL($sql);

        if ($q) {
            header("location:mapel.php");
        }
    }
}

$sql = "SELECT * FROM mapel_guru NATURAL JOIN mapel NATURAL JOIN guru WHERE sts_mg = 1 AND sts_mapel = 1 AND sts_guru = 1"; // Buat SQL Tamgil Data;
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
    <h1>Mapel Guru Add</h1>
    <a href="mapel_guru_add.php">Tambah Mapel Guru</a>
    <br />
    <table border="1" cellpadding="5" cellspacing="0">
        <thead>
            <th>No</th>
            <th>Nama Mapel</th>
            <th>Nama Guru</th>
            <th>Action</th>
        </thead>
        <tbody>
            <?php 
            // lakukan perulanagan dengan foreach agar mudah
            foreach ($q as $k => $v) { // $q berasal dari atas hasil eksekusiSQL
                $no = $k + 1; // untuk pembuatan nomer
                $id_mg = $v["id_mg"];
                $nama_mapel = $v["nama_mapel"];
                $nama_guru = $v["nama_guru"];
                ?>
            <tr style="text-align:center">
                <td><?php echo $no ?></td>
                <td><?php echo $nama_mapel ?></td>
                <td><?php echo $nama_guru ?></td>
                <td>
                    <a href="mapel_guru_edit.php?id=<?php echo $id_mg ?>">Edit</a>
                    &nbsp;&nbsp;
                    <a href="?aksi=hapus&id=<?php echo $id_mg ?>">Hapus</a>
                </td>
            </tr>
            <?php 
        } ?>
        </tbody>
    </table>
</body>

</html>