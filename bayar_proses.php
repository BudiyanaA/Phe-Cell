<?php
    /* proses pada login*/
    session_start();
    require_once("koneksi.php");
    $billing = $_POST['billing'];
    echo $_POST['billing'];
    $cekuser = mysql_query("SELECT * FROM pesanan WHERE id_pesanan = '$billing'");
    $hasil = mysql_fetch_array($cekuser);
    //dari sini
    if(mysql_num_rows($cekuser) == 0) {
        echo "<div align='center'>Kode Salah! <a href='bayar.php'>Back</a></div>";
    } 
    else {
        if($hasil['status_pembayaran'] == 0) {
            header('location:bayar_gagal.php');
        } 
        else {
            header('location:bayar_sukses.php');
        }
   }
?>