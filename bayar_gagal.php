<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Konfirmasi Pembayaran</title>
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
              <a class="nav-link" href="menu_transaksi">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="add.php">Beli</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="bayar.php">Bayar<span class="sr-only">(current)</span></a>
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
    <div class="box">
        <img src="src/logotulisan_v2/Kotak-Transparan/kotakgagal.png">
        <a class="tulisan-box" style="color: white"><b>!!! GAGAL !!!</b></a>
        <p class="isi-box">Kode Pembayaran salah atau anda belum membayarnya ke Bank</p>
        <a class="kembali btn btn-danger" style="color: white" href="bayar.html">Kembali</a>
    </div> 
</body>
</html>