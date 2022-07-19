<?php echo'<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <table class="table table-dark">
    <thead>
      <tr>
        <th colspan="5"><h1 align="center">TABEL BOOKING</h1></th>
      </tr>
      <tr>
        <th colspan="5"><h5 align="center">CHAD BARBERSHOP</h5></th>
      </tr>
      <tr>
        <th scope="col">Tanggal Input</th>
        <th scope="col">Nama</th>
        <th scope="col">Tanggal Booking</th>
        <th scope="col">Service</th>
        <th scope="col">Harga</th>
      </tr>
    </thead>
    <tbody>';
    $fp=fopen("data.txt","r");
    while($isi=fgets($fp,80)){
      $pisah=explode("|",$isi);
      echo"
      <tr>
        <td>$pisah[0]</td>
        <td>$pisah[1]</td>
        <td>$pisah[2]</td>
        <td>$pisah[3]</td>
        <td>$pisah[4]</td>
      </tr>";
      }
      echo"</tbody>
    </table>
  <a class='d-flex justify-content-center' href='../index.html'><button class='btn btn-primary'>Halaman Utama</button></a>
    </body>";
     ?>
