<?php
include("config/lib.php");

if (isset($_POST["login"])) {
    $user = safeData($_POST["username"]);
    $pass = safeData($_POST["password"]);
    $sql = "SELECT * FROM userprofile WHERE sts_user=1  AND username='$user' AND password='$pass'";
    $q = executeSQL($sql);

    if ($q->num_rows == 1) {
        $data = $q->fetch_array();

        $_SESSION["status"] = "udah login";
        $_SESSION["username"] = $data['username'];
        $_SESSION["level"] = $data["level"];
        $_SESSION["nip"] = $data["nip"];
        $_SESSION["nis"] = $data["nis"];

        if ($data["level"] == 1) {
            header("location:admin");
        }
        if ($data["level"] == 2) {
            header("location:guru");
        }
        if ($data["level"] == 3) {
            header("location:siswa");
        }
    } else {
        echo "GAGAL LOGIN";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
</head>
<body>
    <h1>Halaman Login</h1>
    <form method="POST">
        <label for="">Username</label><br/>
        <input type="text" name="username"><br/><br/>
        <label for="">Password</label><br/>
        <input type="password" name="password"><br/><br/>
        <input type="submit" name="login" value="Btn Login">
    </form>
</body>
</html>