<?php
    /* form login*/
    session_start();
    if(isset($_SESSION['username'])) {
        header('location:index.php'); 
    }
    require_once("koneksi.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
		@import url('https://fonts.googleapis.com/css?family=Nunito|Source+Sans+Pro&display=swap');
	</style>
</head>
<body>
	
	<h1>PHE CELL </h1>
	<h3>Solusi paket data anda</h3>

	<div class="kotak">
		<form action="proses_login.php" method="post">
			<div>
				<label class="judul-form">Silahkan Login</label>
			</div>
			<label>Username</label>
            <input type="text" name="username" class="form_login" placeholder="Username..">
            
			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Password ..">

			<input type="submit" class="tombol_login" value="LOGIN">
			<br/>
			<br/>
			<label align="center">Belum punya akun? Daftarkan akun anda <a href="register.php" class="link">disini..</a></label>
		</form>
		
	</div>


</body>
</html>