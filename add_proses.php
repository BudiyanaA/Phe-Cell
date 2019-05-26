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
	$id_pesanan	= $_SESSION['username'].$kode;

	$input = mysql_query("INSERT INTO pesanan VALUES('$id_pesanan', DEFAULT, DEFAULT, DEFAULT, '$nomor_hp', '$nominal', '$username', '$provider', '$diskon', DEFAULT)") or die(mysql_error());
	$query_operator = mysql_query("SELECT harga_tambahan, nama_operator FROM produk WHERE id_produk = '$provider'") or die(mysql_error());
	$operator = mysql_fetch_array($query_operator);
	$query_potongan = mysql_query("SELECT * FROM promo WHERE kd_promo = '$diskon'") or die(mysql_error());
	$potongan = mysql_fetch_array($query_potongan);
	if($input){
		
		echo 'Data berhasil di tambahkan! ';
		$_SESSION['nomor_hp'] = $nomor_hp;
		$_SESSION['provider'] = $operator['nama_operator'];
		$_SESSION['nominal'] = $nominal;
		$_SESSION['harga'] = $operator['harga_tambahan'] + $nominal;	
		$_SESSION['potongan'] = $potongan['potongan'];
		$_SESSION['total'] = $operator['harga_tambahan'] + $nominal - $potongan['potongan'];
		$_SESSION['kode_bayar'] = $id_pesanan;	
		header('location:struk.php');
	}
	else{
		
		echo 'Gagal menambahkan data! ';
		echo '<a href="add.php">Kembali</a>';
	}

}
else{
	echo '<script>window.history.back()</script>';
}
?>