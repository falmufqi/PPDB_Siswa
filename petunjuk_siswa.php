<html>
	<?php
	ob_start();
	include "koneksi.php";
	?>
	 <link rel="stylesheet" href="css/aboutuser.css">
<head>
	<style type="text/css">
		div#content{float:left; padding:0px 0 15px 0; margin:70px 50px 0 50px; background-color:#FFF;}
	</style>
</head>
<body>

<div id="content" align="left">
	<form action="login_siswa.php" method="POST"> 
		<table cellpadding="0" cellspacing="5" bgcolor="#2F4F4F">
			<tr height="36" bgcolor="#F8F8FF">
				<th colspan="5">Petunjuk Pengisian</th>
			</tr>
			<tr>
				<td>
					<table>
						<tr><br/>
						<tr>
            <td width="20" style="color:white">1.</td>
            <td width="450" style="color:white"> Silahkan masukan data anda sesuai jalur masuk.</td>
        </tr>
        <tr>
            <td style="color:white">2.</td>
            <td style="color:white"> Maksimal 1 akun hanya bisa menginputkan 1 data.</td>
        </tr>
        <tr>
            <td style="color:white">3.</td>
            <td style="color:white"> Jika merasa ada yang salah saat menginputkan data, maka langsung infokan kepada admin.</td>
        </tr>
        <tr>
            <td style="color:white">4.</td>
            <td style="color:white"> Jika sudah silahkan LogOut.</td>
        </tr>
					</table>
				</td>
			</tr>
		</table>
	</form>
</div>
</body>
</html>