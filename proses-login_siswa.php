<?php
$username_siswa = $_POST['username_siswa'];
$password_siswa = $_POST['password_siswa'];
$query = new mysqli('localhost', 'root', '', 'db_tk1');

$result = $query->query("SELECT * FROM login_siswa WHERE username_siswa='$username_siswa'");
$row = $result->fetch_assoc();

if (!$row) {
    echo "<script>alert('Username atau Password anda Salah!');document.location = 'login_siswa.php'</script>";
} else {
    $res_username_siswa = $row['username_siswa'];
    $res_password_siswa = $row['password_siswa'];


    if (password_verify($password_siswa, $res_password_siswa)) {
        session_start();
        $_SESSION['username_siswa'] = $username_siswa;
        $_SESSION['password_siswa'] = $password_siswa;
        echo "<script>alert('Anda Berhasil Login');document.location = 'home_siswa.php'</script>";
    } else {
        echo "<script>alert('Username atau Password anda Salah!');document.location = 'login_siswa.php'</script>";
    }
}
