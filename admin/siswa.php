<?php
include("../config/lib.php"); // Include dulu Lib nya

if (isset($_GET["aksi"])) { // Cek dulu, ada gk sih aksi dari si user
    $aksi = $_GET["aksi"]; //  kalo ada ambil aksinya apa

    if ($aksi == "hapus") { // cek si aksi ini apa
        $nis = safeData($_GET["nis"]); // jika aksi nya 'hapus' maka ambil nis nya lalu amankan dengan fungsi safeData() dari lib.php dan simpan pada varibale $nis
        $sql = "UPDATE siswa SET sts_siswa = 0 WHERE nis='$nis'"; // buat sql dan taruh variabel $nis yg tadi sudah dibuat
        $q = executeSQL($sql); // lakukan eksekusi query

        if ($q) { // jika eksekusi berhasil
            header("location:siswa.php"); // maka reload 'kehalaman ini lagi (siswa.php)' agar datanya berubah
        }
    }
}

// jika tidak ada aksi dari user maka tampilkan semua data
$sql = "SELECT * FROM siswa NATURAL JOIN userprofile WHERE level=3 AND sts_user=1 AND sts_siswa=1"; // Buat SQL Tampil Data;
$q = executeSQL($sql); // Eksekusi SQL Tampil Data nya
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DASHBOARD ADMIN</title>
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

    <!-- PERBATASAN WILAYAH -->
    <h1>Siswa</h1>
    <a href="siswa_add.php">Tambah Siswa</a>
    <br />
    <table border="1" cellpadding="5" cellspacing="0">
        <thead>
            <th>No</th>
            <th>NIS</th>
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
                $nis = $v["nis"];
                $nama = $v["nama_siswa"];
                $alamat = $v["alamat_siswa"];
                $username = $v["username"];
                $password = $v["password"];
                ?>
            <tr style="text-align:center">
                <td><?php echo $no ?></td>
                <td><?php echo $nis ?></td>
                <td><?php echo $nama ?></td>
                <td><?php echo $alamat ?></td>
                <td><?php echo $username ?></td>
                <td><?php echo $password ?></td>
                <td>
                    <a href="siswa_edit.php?nis=<?php echo $nis ?>">Edit</a>
                    &nbsp;&nbsp;
                    <a href="?aksi=hapus&nis=<?php echo $nis ?>">Hapus</a>
                </td>
            </tr>
            <?php 
        } ?>
        </tbody>
    </table>
</body>

</html>