<?php
/* daftar user baru*/
session_start();
if(!isset($_SESSION['username'])){
	header('location:register.php');
}
if(isset($_POST['tambah'])){
	require_once("koneksi.php");
	echo $_POST['diskon'];
	echo '<br />';
	$nominal	= $_POST['nominal'];
	$diskon		= $_POST['diskon'];
	$username 	= $_SESSION['username'];
	$nomor_hp	= $_POST['no_hp'];
	$provider	= $_POST['provider'];

	$kode1 = (int) date("h");
	$kode2 = (int) date("i");
	$kode3 = (int) date("s");
	$kode = (int) $kode1.$kode2.$kode3;
	$kode++;
	echo $kode;
	$id_pesanan	= $_SESSION['username'].$kode;

	$input = mysql_query("INSERT INTO pesanan VALUES('$id_pesanan', DEFAULT, DEFAULT, DEFAULT, '$nomor_hp', '$nominal', '$username', '$provider', '$diskon', DEFAULT)") or die(mysql_error());
	
	if($input){
		
		echo 'Data berhasil di tambahkan! ';		
		echo '<a href="tambah.php">Kembali</a>';	
	}
	else{
		
		echo 'Gagal menambahkan data! ';
		echo '<a href="tambah.php">Kembali</a>';
	}

}
else{
	echo '<script>window.history.back()</script>';
}
?>