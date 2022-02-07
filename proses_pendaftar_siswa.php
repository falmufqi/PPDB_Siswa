<?php

include "koneksi.php";
session_start();

$nisn_siswa=$_POST["nisn_siswa"];
$nm_siswa=$_POST["nm_siswa"];
$jk_siswa=$_POST["jk_siswa"];
$username_siswa=$_POST["username_siswa"];
$password_siswa=password_hash($_POST["password_siswa"],PASSWORD_BCRYPT);

  $sql="insert into login_siswa (nisn_siswa, nm_siswa, jk_siswa, username_siswa ,password_siswa) values
		('$nisn_siswa','$nm_siswa','$jk_siswa','$username_siswa','$password_siswa')";

  $hasil=mysqli_query($koneksi,$sql);

  if ($hasil) {
	echo "<script>alert('Anda Berhasil Daftar');document.location = 'login_siswa.php'</script>";
	exit;
  }
else {
	echo "<script>alert('Anda Gagal Daftar');document.location = 'form_daftar_siswa.php'</script>";
	exit;
}  

?>