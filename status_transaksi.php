<!DOCTYPE html>
<html>
<head>
	<title>Status Pelanggan</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="inapp">
    <?php
    	if(isset($_GET['pesan'])){
            $pesan = $_GET['pesan'];
            if($pesan == "input"){
                echo "Data berhasil di input.";
            }else if($pesan == "update"){
                echo "Data berhasil di update.";
            }else if($pesan == "hapus"){
                echo "Data berhasil di hapus.";
            }
        }
    ?>
    <a href="input.php">+ Tambah Data Baru</a>
	<div>
		<a>Status Pemesanan</a>
		<table id="outtable">
			<thead>
				<tr>
					<th class="short">No.</th>
					<th class="normal">Nama Customer</th>
					<th class="normal">No. Kontak</th>
					<th class="normal">Provider</th>
                    <th class="normal">Nominal</th>
                    <th class="normal">Harga</th>
                    <th class="normal">Potongan</th>
                    <th class="normal">Harga Total</th>
                    <th class="normal">Status Pembayaran</th>
                    <th class="normal">Status Pengiriman</th>
                    <th class="normal">Sunting Transaksi</th>
				</tr>
            </thead>
            <?php 
                include "koneksi.php";
                $query_mysql = mysql_query("SELECT * FROM pesanan NATURAL JOIN customer NATURAL JOIN produk NATURAL JOIN promo")or die(mysql_error());
                $nomor = 1;
                // $query_cust = mysql_query("SELECT * FROM customer WHERE customer.username = pesanan.username")or die(mysql_error());
                // $data_cust = mysql_fetch_array($query_cust);
                while($data = mysql_fetch_array($query_mysql)){
                ?>
                <tr>
                    <td><?php echo $nomor++; ?></td>
                    <td><?php echo $data['nama_cust']; ?></td>
                    <td><?php echo $data['nomor_hp']; ?></td>
                    <td><?php echo $data['nama_operator']; ?></td>
                    <td><?php echo $data['nominal'];?></td>
                    <td><?php echo $data['nominal']+$data['harga_tambahan'];?></td>
                    <td><?php echo "-".$data['potongan'];?></td>
                    <td><?php echo $data['nominal']+$data['harga_tambahan']-$data['potongan'];?></td>
                    <td><?php if($data['status_pembayaran']){echo "LUNAS";} else {echo "BELUM";}?></td>
                    <td><?php if($data['status_pengiriman']){echo "OK";} else {echo "NO";}?></td>
                    <td>
                        <a class="edit" href="edit.php?id=<?php echo $data['id']; ?>">Edit</a> |
                        <a class="hapus" href="hapus.php?id=<?php echo $data['id']; ?>">Hapus</a>					
                    </td>
                </tr>
            <?php } ?>
			<!-- <tbody>
				<tr>
					<td>1</td>
					<td>Agung</td>
					<td>081234567891</td>
					<td>Indosat</td>
					<td>5000</td>
					<td>6500</td>
				</tr>
	  
				<tr>
					<td>2</td>
					<td>Budi</td>
					<td>081234567999</td>
					<td>XL</td>
					<td>10000</td>
					<td>11500</td>
				</tr>
	  
				<tr>
					<td>3</td>
					<td>Bia</td>
					<td>081287654321</td>
					<td>Simpati</td>
					<td>5000</td>
					<td>7500</td>
				</tr>
	  
				<tr>
					<td>4</td>
					<td>Dip</td>
					<td>081223783425</td>
					<td>Simpati</td>
					<td>10000</td>
					<td>12500</td>
				</tr>
			</tbody> -->
		</table>
	   </div>
</body>

<?php 
if(isset($_GET['pesan'])){
	$pesan = $_GET['pesan'];
	if($pesan == "input"){
		echo "Data berhasil di input.";
	}else if($pesan == "update"){
		echo "Data berhasil di update.";
	}else if($pesan == "hapus"){
		echo "Data berhasil di hapus.";
	}
}
?>