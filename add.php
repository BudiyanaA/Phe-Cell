<?php
    /* daftar user baru*/
    session_start();
    if(!isset($_SESSION['username'])){
        header('location:register.php');
    }
?>
<!DOCTYPE html>
<html>
<head>
  <title>Pesanan</title>
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
  <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark fixed-top" >
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#"><img src="src/Logo Phecell.png" height="30" alt="axis"></a>
      
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="menu_transaksi.php">Home</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="add.php">Beli <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="bayar.php">Bayar</a>
            </li>
          </ul>
          <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                  <a class="nav-link" href="#">Hi, <?php echo $_SESSION['nama_cust'];?></a>
              </li>
              <li class="nav-item">
                <a class="btn btn-outline-warning" href="logout.php">Logout</a>
              </li>
          </ul>
        </div>
    </nav>
  <div class="container" style="margin-top: 20px">
    <div class="row justify-content-center align-items-center">
    <div style="margin: 0 auto;text-align:center">
            <br/>
            <br/>
            <img src="src/logotulisan_v2/Tulisan/pilihpesan.png" width="250">
          </div>
      <form action="add_proses.php" method="post" align="center" style="margin: 10px">
        <div align="center">
          <label for="nomor">No. HP</label>
          <input name="no_hp" type="text" class="form-control" style="width: 200px" maxlength="12" >
        </div>
        <label><br/>Pilih Operator</label>
			  <br/>
        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                  <label class="btn btn-light active">
                    <input type="radio" name="provider" id="option1" value="Bol7" autocomplete="off" checked> <img src="src/1_bolt.png" height="100" alt="axis">
                  </label>
                  <label class="btn btn-light">
                    <input type="radio" name="provider" id="option2" value="Sma6" autocomplete="off"> <img src="src/2_smartfren.png" height="100" alt="axis">
                  </label>
                  <label class="btn btn-light">
                    <input type="radio" name="provider" id="option3" value="Tri5" autocomplete="off"> <img src="src/3_tri.png" height="100" alt="axis">
                  </label>
                  <label class="btn btn-light">
                    <input type="radio" name="provider" id="option4" value="Axi4" autocomplete="off"> <img src="src/4_axis.png" height="100" alt="axis">
                  </label>
                  <label class="btn btn-light">
                    <input type="radio" name="provider" id="option5" value="Tel1" autocomplete="off"> <img src="src/5_telkomsel.png" height="100" alt="axis">
                  </label>
                  <label class="btn btn-light">
                    <input type="radio" name="provider" id="option6" value="Ind2" autocomplete="off"> <img src="src/6_indosat.png" height="100" alt="axis">
                  </label>
                  <label class="btn btn-light">
                    <input type="radio" name="provider" id="option7" value="Xl03" autocomplete="off"> <img src="src/7_xl.png" height="100" alt="axis">
                  </label>
        </div>
			<br>
			<br/>
			<div class="form-group" align="center">
        <label for="nom">Nominal</label>
        <select name="nominal" class="form-control" id="nom" style="width: 200px">
          <option value="0">-- Pilih Nominal --</option>
          <option value="5000">5000</option>
          <option value="10000">10000</option>
          <option value="20000">20000</option>
          <option value="50000">50000</option>
        </select>
			</div>
			<div align="center">
        <label for="diskon">Reedeem Code</label>
        <input name="diskon" type="text" class="form-control" style="width: 200px">
			</div>
			<br/>
      <button type="submit" name="tambah" class="btn btn-primary">Simpan</button>
		</form>
  </div>
  </div>
</body>
</html>