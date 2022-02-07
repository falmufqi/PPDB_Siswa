<?php
include "alert.php";
session_start();
unset($_SESSION["username_siswa"]);
echo "<script>alert('Anda Berhasil Logout');document.location='login_siswa.php'</script>";
?>