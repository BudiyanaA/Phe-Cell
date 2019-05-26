<!DOCTYPE html>
<html>
<head>
	<title>Promo</title>
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
              <a class="nav-link" href="status_transaksi.php">Status Pelanggan</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="promo.php">Promo <span class="sr-only">(current)</span></a>
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
    <h1>PROMO</h1> 
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-xs-12 " align="center">
      <table class="table table-bordered table-striped table-hover bg-light table-responsive">
              <thead>
                      <tr>
                          <th class="short">No.</th>
                          <th>Kode Promo</th>
                          <th>Jumlah Potongan</th>            
                      </tr>
                  </thead>
                  <tbody>
                  <?php 
                include "koneksi.php";
                $query_mysql = mysql_query("SELECT * FROM promo")or die(mysql_error());
                $nomor = 1;
                while($data = mysql_fetch_array($query_mysql)){
                    ?>
                    <tr>
                        <td><?php echo $nomor++; ?></td>
                        <td><?php echo $data['kd_promo'];?></td>
                        <td><?php echo $data['potongan'];?></td>            
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>