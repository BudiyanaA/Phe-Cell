<?php
    /* form login*/
    session_start();
    if(isset($_SESSION['id_admin'])) {
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
	
	<h1>PHE CELL Administrator</h1>

	<div class="kotak">
		<form action="proses_login_admin.php" method="post">
			<div>
				<label class="judul-form">Silahkan Login</label>
			</div>
			<label>ID Admin</label>
            <input type="text" name="id_admin" class="form_login" placeholder="Username..">
            
			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Password ..">

			<input type="submit" class="tombol_login" value="LOGIN">
			<br/>
			<br/>
		</form>
		
	</div>


</body>
</html>