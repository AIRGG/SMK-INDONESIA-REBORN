<?php
include("../config/lib.php");

if (isset($_GET["aksi"])) {
    $aksi = $_GET["aksi"];

    if ($aksi == "hapus") {
        $kode = safeData($_GET["kode"]);
        $sql = "UPDATE prodi SET sts_prodi = 0 WHERE kode_prodi='$kode'";
        $q = executeSQL($sql);

        if ($q) {
            header("location:prodi.php");
        }
    }
}

$sql = "SELECT * FROM prodi WHERE sts_prodi=1"; // Buat SQL Tampil Data;
$q = executeSQL($sql); // Eksekusi SQL Tampil Data nya
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
    <h1>Prodi</h1>
    <a href="prodi_add.php">Tambah Prodi</a>
    <br />
    <table border="1" cellpadding="5" cellspacing="0">
        <thead>
            <th>No</th>
            <th>Kode Prodi</th>
            <th>Nama Prodi</th>
            <th>Action</th>
        </thead>
        <tbody>
            <?php 
            // lakukan perulanagan dengan foreach agar mudah
            foreach ($q as $k => $v) { // $q berasal dari atas hasil eksekusiSQL
                $no = $k + 1; // untuk pembuatan nomer
                $kode = $v["kode_prodi"];
                $nama = $v["nama_prodi"];
                ?>
            <tr style="text-align:center">
                <td><?php echo $no ?></td>
                <td><?php echo $kode ?></td>
                <td><?php echo $nama ?></td>
                <td>
                    <a href="prodi_edit.php?kode=<?php echo $kode ?>">Edit</a>
                    &nbsp;&nbsp;
                    <a href="?aksi=hapus&kode=<?php echo $kode ?>">Hapus</a>
                </td>
            </tr>
            <?php 
        } ?>
        </tbody>
    </table>
</body>

</html>