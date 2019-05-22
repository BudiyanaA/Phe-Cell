<?php
    /* proses pada login*/
    session_start();
    require_once("koneksi.php");
    $id_admin = $_POST['id_admin'];
    $pass = $_POST['password'];
    $cekuser = mysql_query("SELECT * FROM admin WHERE id_admin = '$id_admin'");
    $hasil = mysql_fetch_array($cekuser);
    if(mysql_num_rows($cekuser) == 0) {
        echo "<div align='center'>Username Belum Terdaftar! <a href='login.php'>Back</a></div>";
    } 
    else {
        if($pass <> $hasil['password_admin']) {
            echo "<div align='center'>Password salah! <a href='login.php'>Back</a></div>";
        } 
        else {
            $_SESSION['username'] = $hasil['id_admin'];//keep
            $_SESSION['nama_cust'] = $hasil['nama'];//keep
            header('location:status_transaksi.php');
        }
   }
?>