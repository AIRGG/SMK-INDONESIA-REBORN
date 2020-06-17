<?php
include("../config/lib.php");

if (isset($_POST["simpan"])) {
    $kelas = safeData($_POST["kelas"]);
    $prodi = safeData($_POST["prodi"]);
    $ket = safeData($_POST["ket"]);

    $sql = "INSERT INTO kelas (kode_kelas, kode_prodi, kelas, ket, sts_kelas) VALUES (NULL, '$prodi', '$kelas', '$ket', 1)";

    $q = executeSQL($sql); // eksekusi yg pertama

    if ($q) { // jika keduanya berhasil di eksekusi
        header("location:kelas.php"); // maka pindah ke halaman siswa.php
    }

}

// buat sql untuk mengisi select option nya nanti.
$sql = "SELECT * FROM prodi WHERE sts_prodi = 1";

// panggil $q dan $q1 nanti dibawah ketika looping select option
$q = executeSQL($sql);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DASHBOARD ADMIN</title>
</head>
<body>
    <h1>Kelas Add</h1>
    <form method="POST">
        <label for="">Kelas</label><br/>
            <select name="kelas" id="">
                <option value="X">X</option>
                <option value="XI">XI</option>
                <option value="XII">XII</option>
        </select><br/><br/>
        <label for="">Prodi</label><br/>
        <select name="prodi" id="">
            <?php 
            foreach ($q as $k => $v) {
                $kode = $v["kode_prodi"];
                $nama = $v["nama_prodi"];
                ?>
                <option value="<?php echo $kode ?>">
                    <?php echo $nama ?>
                </option>
            <?php 
        }
        ?>
        </select><br/><br/>
        <label for="">Keterangan</label><br/>
            <select name="ket" id="">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
        </select><br/><br/>
        <input type="submit" name="simpan" value="Simpan"> &nbsp;&nbsp;
        <a href="kelas.php">Kembali</a>
    </form>
</body>
</html>