<?php
include("../config/lib.php");

if (isset($_GET["aksi"])) {
    $aksi = $_GET["aksi"];

    if ($aksi == "hapus") {
        $nip = safeData($_GET["nip"]);
        $sql = "UPDATE guru SET sts_guru = 0 WHERE nip='$nip'";
        $sql1 = "UPDATE userprofile SET sts_user = 0 WHERE nip='$nip'";
        $q = executeSQL($sql);
        $q1 = executeSQL($sql1);

        if ($q) {
            header("location:guru.php");
        }
    }
}

$sql = "SELECT * FROM guru NATURAL JOIN userprofile WHERE level=2 AND sts_user=1 AND sts_guru=1"; // Buat SQL Tampil Data;
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
    <h1>Guru</h1>
    <a href="guru_add.php">Tambah Guru</a>
    <br />
    <table border="1" cellpadding="5" cellspacing="0">
        <thead>
            <th>No</th>
            <th>NIP</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Username</th>
            <th>Password</th>
            <th>Action</th>
        </thead>
        <tbody>
            <?php 
            // lakukan perulanagan dengan foreach agar mudah
            foreach ($q as $k => $v) { // $q berasal dari atas hasil eksekusiSQL
                $no = $k + 1; // untuk pembuatan nomer
                $nip = $v["nip"];
                $nama = $v["nama_guru"];
                $alamat = $v["alamat_guru"];
                $username = $v["username"];
                $password = $v["password"];
                ?>
            <tr style="text-align:center">
                <td><?php echo $no ?></td>
                <td><?php echo $nip ?></td>
                <td><?php echo $nama ?></td>
                <td><?php echo $alamat ?></td>
                <td><?php echo $username ?></td>
                <td><?php echo $password ?></td>
                <td>
                    <a href="guru_edit.php?nip=<?php echo $nip ?>">Edit</a>
                    &nbsp;&nbsp;
                    <a href="?aksi=hapus&nip=<?php echo $nip ?>">Hapus</a>
                </td>
            </tr>
            <?php 
        } ?>
        </tbody>
    </table>
</body>

</html>