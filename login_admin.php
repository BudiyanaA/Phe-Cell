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
	<title>PHE CELL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	
	<h1>PHE CELL Admin</h1>

	<div class="kotak">
		<p class="tulisan_login">Silahkan login</p>

		<form action="proses_login_admin.php" method="post">
			<label>ID Admin</label>
            <input type="text" name="id_admin" class="form_login" placeholder="Username atau email ..">
            
			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Password ..">

			<input type="submit" class="tombol_login" value="LOGIN">

            <p align="center">Belum Punya akun? <a href=register.php><b>Daftar</b></a></p>
		</form>
		
	</div>


</body>
</html>