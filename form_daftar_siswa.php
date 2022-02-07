<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="img/logo.png">
<title>Pendaftaran Akun Siswa</title>
    <!-- Load file CSS Bootstrap offline -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<div class="container">
<h2 align="center"><font face="Tahoma" color="green">Form Pendaftaran Siswa</font></h2>
    <form action="proses_pendaftar_siswa.php" method="post">
        <div class="form-group">
            <label>NISN</label>
            <input type="number" name="nisn_siswa" class="form-control" placeholder="Masukan NISN" required/>
        </div>
        <div class="form-group">
            <label>Nama Lengkap</label>
            <input type="text" name="nm_siswa" class="form-control" placeholder="Masukan Nama Lengkap" required/>
        </div>
        <div class="form-group">
        <label>Jenis Kelamin</label></br>
        <input type="radio" name="jk_siswa" value="Laki-Laki"> Laki-Laki
        <input type="radio" name="jk_siswa" value="Perempuan"> Perempuan<br>
        </div>
	<div class="form-group">
            <label>Username</label>
            <input type="text" name="username_siswa" class="form-control" placeholder="Masukan Username" required/>
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password_siswa" class="form-control" placeholder="Masukan Password" required/>
        </div>
	
        <button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>
        <a href="login_siswa.php" class="btn btn-success btn-block">Kembali</a>

    </form>
</div>
</body>
</html>