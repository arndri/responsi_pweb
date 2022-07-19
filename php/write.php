<?php
$fp=fopen("data.txt","a+");
if(isset($_POST['Submit'])){
  $nama=$_POST['nama'];
  $tanggal=$_POST['tanggal'];
  $service=$_POST['service'];
  $harga=$_POST['harga'];
}
$layanan="";
if($service=="cut"){
  $layanan="Gentlemens Cut";
}
else if($service=="shave"){
  $layanan="Gentlemens Shave";
}
else{
  $layanan="Coloring";
}
$tanggal_input=date("d-m-Y");
fputs($fp,"$tanggal_input|$nama|$tanggal|$layanan|$harga\n");
fclose($fp);
print("<!DOCTYPE html>
<html lang='en' dir='ltr'>
  <head>
    <meta charset='utf-8'>
    <title></title>
    <link rel='stylesheet' href='../css/styles.css'>
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css' integrity='sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T' crossorigin='anonymous'>
  <body>
<div class='d-flex justify-content-center' style='padding-top:200px;'>
  <div class='card'>
  <div class='card-header'>
    <h3>Data Berhasil Disimpan</h3>
  </div>
  <div class='card-body'>
    <p class='invisible'>invisible text</p>
    <p>Booking berhasil, kami menanti kehadiran anda.</p>
    <p></p>
    <p class='invisible'>invisible text</p>
    <a href='../index.html'><button class='btn btn-primary'>Halaman Utama</button></a>
    <a href='table.php'><button class='btn btn-primary'>Tabel Booking</button></a>
  </div>
</div></div>
  </body>
</html>");

?>
