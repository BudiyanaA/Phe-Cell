<!DOCTYPE html>
<html>
<head>
<title>Status Pelanggan</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script type="text/javascript" src="jquery.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <!-- Latest compiled and minified JavaScript -->
  <link rel="stylesheet" type="text/css" href="style.css">
  <style>
      @import url('https://fonts.googleapis.com/css?family=Nunito|Source+Sans+Pro&display=swap');
      </style>
</head>
<body>
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
    <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark fixed-top" >
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#"><img src="src/Logo Phecell.png" height="30" alt="axis"></a>
      
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="status_transaksi.php">Status Pelanggan<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="promo.php">Promo</a>
            </li>
          </ul>
          <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                  <a class="nav-link" href="#">Hi, Admin!</a>
              </li>
              <li class="nav-item">
                <a class="btn btn-outline-warning" href="logout.php">Logout</a>
              </li>
          </ul>
        </div>
    </nav>
    <br/>
    <br/>
    <br/>
    <h1>STATUS PELANGGAN</h1> 
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-xs-12 " align="center">
      <table class="table table-bordered table-striped table-hover bg-light table-responsive">
			<thead>
				<tr>
					<th class="short">No.</th>
					<th>Nama</th>
					<th>No. Kontak</th>
					<th>Provider</th>
          <th>Nominal</th>
          <th>Harga</th>
        	<th>Potongan</th>
          <th>Harga Total</th>
          <th>Status Pembayaran</th>
          <th>Status Pengiriman</th>
          <th>Hapus Data</th>
				</tr>
			</thead>
			<tbody>
        			<?php 
                include "koneksi.php";
                $query_mysql = mysql_query("SELECT * FROM pesanan NATURAL JOIN customer NATURAL JOIN produk NATURAL JOIN promo ORDER BY waktu DESC")or die(mysql_error());
                $nomor = 1;
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
                    <form action="edit_proses.php" method="post">
                    <td>
											<div class="form-group">
											<select name="status_pembayaran" class="form-control" id="status" style="width: 160px">
												<option value="0" <?php if($data['status_pembayaran'] == '0'){echo 'selected';} ?>>Belum Bayar</option>
												<option value="1" <?php if($data['status_pembayaran'] == '1'){echo 'selected';} ?>>Sudah Bayar</option>
											</select>
											</div>
										</td>
                    <td>
											<div class="form-group">
                      <select name="status_pengiriman" class="form-control" id="Status" style="width: 160px">
                          <option value="0" <?php if($data['status_pengiriman'] == '0'){echo 'selected';} ?>>Belum Terkirim</option>
                          <option value="1" <?php if($data['status_pengiriman'] == '1'){echo 'selected';} ?>>Sudah Terkirim</option>
                      </select>
                      </div>
										</td>
                    <td>
												<!-- <a class="edit" href="edit.php?id=<?php echo $data['id_pesanan']; ?>">Edit</a> | -->
												<a href="delete.php?id=<?php echo $data['id_pesanan']; ?>"><img src="src/delete.png" width="40" alt="Hapus"/></a>
                        <input type="hidden" name="id" value="<?php echo $data['id_pesanan']; ?>">
                        <input type="submit" name="simpan" value="Simpan">				
                    </td>
                    </form>
                </tr>
						<?php } ?>
						</tbody>
		</table>
	  </div>
</body>
</html>

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