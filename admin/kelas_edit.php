<?php
include("../config/lib.php");

$kode = safeData($_GET["kode"]);

if (isset($_POST["edit"])) {
    $kelas = safeData($_POST["kelas"]);
    $prodi = safeData($_POST["prodi"]);
    $ket = safeData($_POST["ket"]);

    $sql = "UPDATE kelas SET kode_prodi = '$prodi', kelas = '$kelas', ket = '$ket' WHERE kelas.kode_kelas = '$kode'";

    $q = executeSQL($sql); // eksekusi yg pertama

    if ($q) { // jika keduanya berhasil di eksekusi
        header("location:kelas.php"); // maka pindah ke halaman siswa.php
    }

}

// buat sql untuk mengisi select option nya nanti.
$sql = "SELECT * FROM prodi WHERE sts_prodi = 1";

$sql1 = "SELECT * FROM kelas WHERE kode_kelas = '$kode'";

// panggil $q dan $q1 nanti dibawah ketika looping select option
$q = executeSQL($sql);

$data = executeSQL($sql1)->fetch_array();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DASHBOARD ADMIN</title>
</head>
<body>
    <h1>Kelas Siswa Edit</h1>
    <form method="POST">
        <label for="">Kelas</label><br/>
            <select name="kelas" id="">
                <option value="X" <?php echo ($data["kelas"] == "X") ? 'selected' : ""; ?>>X</option>
                <option value="XI" <?php echo ($data["kelas"] == "XI") ? 'selected' : ""; ?>>XI</option>
                <option value="XII" <?php echo ($data["kelas"] == "XII") ? 'selected' : ""; ?>>XII</option>
        </select><br/><br/>
        <label for="">Prodi</label><br/>
        <select name="prodi" id="">
            <?php 
            foreach ($q as $k => $v) {
                $kode = $v["kode_prodi"];
                $nama = $v["nama_prodi"];
                $ket = $v["ket"];
                ?>
                <option value="<?php echo $kode ?>" <?php echo ($data["kode_prodi"] == $kode) ? "selected" : '' ?>>
                    <?php echo $nama ?>
                </option>
            <?php 
        }
        ?>
        </select><br/><br/>
        <label for="">Keterangan</label><br/>
            <select name="ket" id="">
                <option value="1" <?php echo ($data["ket"] == "1") ? "selected" : '' ?>>1</option>
                <option value="2" <?php echo ($data["ket"] == "2") ? "selected" : '' ?>>2</option>
                <option value="3" <?php echo ($data["ket"] == "3") ? "selected" : '' ?>>3</option>
                <option value="4" <?php echo ($data["ket"] == "4") ? "selected" : '' ?>>4</option>
                <option value="5" <?php echo ($data["ket"] == "5") ? "selected" : '' ?>>5</option>
        </select><br/><br/>
        <input type="submit" name="edit" value="Edit"> &nbsp;&nbsp;
        <a href="kelas.php">Kembali</a>
    </form>
</body>
</html>