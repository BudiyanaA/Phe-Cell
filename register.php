<?php
    /* daftar user baru*/
    session_start();
    if(isset($_SESSION['username'])){
        header('location:index.php');
    }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Register Your Account</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<div class="kotak">
        <h1>REGISTER</h1>
		<h4>Create your account..</h4>

		<form action="proses_register.php" method="post">
			<label>Nama</label>
            <input type="text" name="nama_lengkap" class="form_login" placeholder="Nama Lengkap ..">
            
            <label>Username</label>
            <input type="text" name="username" class="form_login" placeholder="Username">

			<label>Password</label>
            <input type="password" name="password" class="form_login" placeholder="Password ..">
            
            <label>Re-Type Password</label>
			<input type="password" name="password" class="form_login" placeholder="Password ..">

			<input type="submit" class="tombol_regist" value="SUBMIT">

			<br/>
			<br/>
		</form>
		
	</div>


</body>
</html>