<!DOCTYPE html>
<html>
<head>
	<title>Status Pelanggan</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
  <script type="text/javascript" src="jquery.js"></script>
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
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
		  <nav class="navbar navbar-default navbar navbar-fixed-top">
        <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand">PHE CELL</a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">				
                        <li class="active"><a>Status Pelanggan <span class="sr-only">(current)</span></a></li>
                        <li><a href="#">Tentang Kami</a></li> 
                        <li><a href="#">Kontak</a></li> 
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a>Hi, Admin!</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>
    </nav>
    <br/>
    <br/>
    <br/>
    <a href="add.php">+ Tambah Data Baru</a>
	<div>
		<a class="text-lg-center text-uppercase">Status Pemesan</a>
		<table class="table table-bordered table-striped table-hover">
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
                    <td>
											<div class="kustom-select" style="width:150px;">
											<select>
											<option value="0">Belum Bayar</option>
											<option value="1">Sudah Bayar</option>
											<option value="0">Belum Bayar</option>
											</select>
											</div>
										</td>
                    <td>
											<div class="kustom-select" style="width:150px;">
											<select>
											<option value="0">Belum Terkirim</option>
											<option value="1">Sudah Terkirim</option>
											<option value="0">Belum Terkirim</option>
											</select>
											</div>	
										</td>
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
	   <script>
			var x, i, j, selElmnt, a, b, c;
			/*look for any elements with the class "kustom-select":*/
			x = document.getElementsByClassName("kustom-select");
			for (i = 0; i < x.length; i++) {
			  selElmnt = x[i].getElementsByTagName("select")[0];
			  /*for each element, create a new DIV that will act as the selected item:*/
			  a = document.createElement("DIV");
			  a.setAttribute("class", "select-selected");
			  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
			  x[i].appendChild(a);
			  /*for each element, create a new DIV that will contain the option list:*/
			  b = document.createElement("DIV");
			  b.setAttribute("class", "select-items select-hide");
			  for (j = 1; j < selElmnt.length; j++) {
				/*for each option in the original select element,
				create a new DIV that will act as an option item:*/
				c = document.createElement("DIV");
				c.innerHTML = selElmnt.options[j].innerHTML;
				c.addEventListener("click", function(e) {
					/*when an item is clicked, update the original select box,
					and the selected item:*/
					var y, i, k, s, h;
					s = this.parentNode.parentNode.getElementsByTagName("select")[0];
					h = this.parentNode.previousSibling;
					for (i = 0; i < s.length; i++) {
					  if (s.options[i].innerHTML == this.innerHTML) {
						s.selectedIndex = i;
						h.innerHTML = this.innerHTML;
						y = this.parentNode.getElementsByClassName("same-as-selected");
						for (k = 0; k < y.length; k++) {
						  y[k].removeAttribute("class");
						}
						this.setAttribute("class", "same-as-selected");
						break;
					  }
					}
					h.click();
				});
				b.appendChild(c);
			  }
			  x[i].appendChild(b);
			  a.addEventListener("click", function(e) {
				  /*when the select box is clicked, close any other select boxes,
				  and open/close the current select box:*/
				  e.stopPropagation();
				  closeAllSelect(this);
				  this.nextSibling.classList.toggle("select-hide");
				  this.classList.toggle("select-arrow-active");
				});
			}
			function closeAllSelect(elmnt) {
			  /*a function that will close all select boxes in the document,
			  except the current select box:*/
			  var x, y, i, arrNo = [];
			  x = document.getElementsByClassName("select-items");
			  y = document.getElementsByClassName("select-selected");
			  for (i = 0; i < y.length; i++) {
				if (elmnt == y[i]) {
				  arrNo.push(i)
				} else {
				  y[i].classList.remove("select-arrow-active");
				}
			  }
			  for (i = 0; i < x.length; i++) {
				if (arrNo.indexOf(i)) {
				  x[i].classList.add("select-hide");
				}
			  }
			}
			/*if the user clicks anywhere outside the select box,
			then close all select boxes:*/
			document.addEventListener("click", closeAllSelect);
		</script>
	<!--	<script src="bootstrap/bootstrap.min.js"></script>	-->
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