<!DOCTYPE html>
<html>
<head>
	<title>Simple CRUD by TUTORIALWEB.NET</title>
</head>
<body>
	<h2>Simple CRUD</h2>
	
	<p><a href="index.php">Beranda</a> / <a href="tambah.php">Tambah Data</a></p>
	
	<h3>Edit Data Siswa</h3>
	
	<?php
	//proses mengambil data ke database untuk ditampilkan di form edit berdasarkan siswa_id yg didapatkan dari GET id -> edit.php?id=siswa_id
	
	//include atau memasukkan file koneksi ke database
	include('koneksi.php');
	
	//membuat variabel $id yg nilainya adalah dari URL GET id -> edit.php?id=siswa_id
	$id = $_GET['id'];
	
	//melakukan query ke database dg SELECT table siswa dengan kondisi WHERE siswa_id = '$id'
	$show = mysql_query("SELECT * FROM pesanan WHERE id_pesanan='$id'");
	
	//cek apakah data dari hasil query ada atau tidak
	if(mysql_num_rows($show) == 0){
		
		//jika tidak ada data yg sesuai maka akan langsung di arahkan ke halaman depan atau beranda -> index.php
		echo '<script>window.history.back()</script>';
		
	}else{
	
		//jika data ditemukan, maka membuat variabel $data
		$data = mysql_fetch_assoc($show);	//mengambil data ke database yang nantinya akan ditampilkan di form edit di bawah
	
	}
	?>
	
	<form action="edit_proses.php" method="post">
		<input type="hidden" name="id" value="<?php echo $id; ?>">	<!-- membuat inputan hidden dan nilainya adalah siswa_id -->
		<table cellpadding="3" cellspacing="0">
			<tr>
				<td>Status Pembayaran</td>
				<td>:</td>
				<td>
					<div class="kustom-select" style="width:150px;">
					<select name="status_pembayaran" required>
					<option value="">Pilih</option>
					<option value="1" <?php if($data['status_pembayaran'] == '1'){echo 'selected';} ?>>Sudah Bayar</option>
					<option value="0" <?php if($data['status_pembayaran'] == '0'){echo 'selected';} ?>>Belum Bayar</option>
					</select>
					</div>
				</td>
			</tr>
			<tr>
				<td>Status Pengiriman</td>
				<td>:</td>
				<td>
					<div class="kustom-select" style="width:150px;">
					<select name="status_pengiriman" required>
						<option value="">Pilih</option>
						<option value="1" <?php if($data['status_pengiriman'] == '1'){echo 'selected';} ?>>Sudah Terkirim</option>
						<option value="0" <?php if($data['status_pengiriman'] == '0'){echo 'selected';} ?>>Belum Terkirim</option>
					</select>
					</div>	
				</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td></td>
				<td><input type="submit" name="simpan" value="Simpan"></td>
			</tr>
		</table>
	</form>
</body>
</html>