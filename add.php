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
</head>
<body>
  <?php echo $_SESSION['username']; ?>
	<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #bb7423;" >
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#" style="color: white">LOGO</a>
      
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="#" style="color: white">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" style="color: #664014">Beli <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" style="color: white">Bayar</a>
            </li>
          </ul>
          <ul class="navbar-nav ml-auto">
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white">Hi, User!</a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Logout</a>
                  </div>
              </li>
        </div>
  </nav>
	<div class="container" style="margin: 10px" align="center">
		<form action="add_proses.php" method="post">
			<label> Pilih Operator</label>
			<br/>
			<div class="btn-group btn-group-toggle" data-toggle="buttons">
        <label class="btn btn-light active">
          <input type="radio" name="provider" value="Tel1" autocomplete="off" checked> <img src="src/axis.png" height="50" alt="Telkomsel">
        </label>
        <label class="btn btn-light">
          <input type="radio" name="provider" value="Ind2" autocomplete="off"> <img src="src/axis.png" height="50" alt="Indosar">
        </label>
        <label class="btn btn-light">
      	  <input type="radio" name="provider" value="Xl03" autocomplete="off"> <img src="src/axis.png" height="50" alt="Xl">
        </label>
        <label class="btn btn-light active">
          <input type="radio" name="provider" value="Axi4" autocomplete="off" checked> <img src="src/axis.png" height="50" alt="Axis">
        </label>
        <label class="btn btn-light">
          <input type="radio" name="provider" value="Tri5" autocomplete="off"> <img src="src/axis.png" height="50" alt="Tri">
        </label>
        <label class="btn btn-light">
      	  <input type="radio" name="provider" value="Sma6" autocomplete="off"> <img src="src/axis.png" height="50" alt="Smartfren">
        </label>
        <label class="btn btn-light">
      	  <input type="radio" name="provider" value="Bol7" autocomplete="off"> <img src="src/axis.png" height="50" alt="Bolt">
        </label>
			</div>
			<br>
			<br/>
      <div>
        <label for="diskon">Username</label>
        <input name="username" type="text" class="form-control" style="width: 200px" placeholder="<?php echo $_SESSION['username']; ?>"  readonly>
			</div>
      <div>
        <label for="diskon">Nomor HP</label>
        <input name="no_hp" type="text" class="form-control" style="width: 200px" >
			</div>
			<div class="form-group">
        <label for="nom">Nominal</label>
        <select name="nominal" class="form-control" id="nom" style="width: 200px">
          <option value="0">-- Pilih Nominal --</option>
          <option value="5000">5000</option>
          <option value="10000">10000</option>
          <option value="20000">20000</option>
          <option value="50000">50000</option>
        </select>
			</div>
			<div>
        <label for="diskon">Reedeem Code</label>
        <input name="diskon" type="text" class="form-control" style="width: 200px">
			</div>
			<br/>
      <button type="submit" name="tambah" class="btn btn-primary">Simpan</button>
		</form>
  </div>
</body>
</html>