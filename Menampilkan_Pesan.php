<!DOCTYPE html>
<html lang="en">
	<link href="index.css" rel="stylesheet" type="text/css">
<head>	
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scalle=1.0">
<meta name="author" content="aldi febiansyah" >
<meta name="description" content="ini adalah website booking kereta api">
<title>KeretaBisa</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</head>
<body>
<div id="header">
    	<img src="images/Logo.jpg" class="logo" alt="KitaBisa">
        <div class="menu-atas">
        	<ul>
            	<li><a class="active" href="registration.php">Daftar</a></li>
     			<li><a class="active" href="login.php">Masuk</a></li>
   		    </ul>
        </div>
</div>
    
<div id="menu-samping">
	<ul>
    	<li><a href="#">Pemesanan</a></li>
        <li><a href="#">Jadwal</a></li>
        <li><a href="ticket.php">Riwayat</a></li>
        <li><a href="#">Pengaturan</a></li>
    </ul>
</div>
<div id="content">
	<img src="images/kereta api.png" class="bg">
    <div class="bs-example">
	<div class="col-md-8 col-md-offset-2">
	<div align="center" style="position:absolute;top:-800px;color:#FFF"><h2>Hasil</h2></div>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Nama Kereta</th>
      <th scope="col">Jenis Kereta</th>
      <th scope="col">Jam Keberangkatan</th>
      <th scope="col">Tanggal Keberangkatan</th>
      <th scope="col">Kota Asal</th>
      <th scope="col">Kota Tujuan</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Serayu</td>
      <td>Ekonomi</td>
      <td>12.00</td>
      <td>28-Februari-2019</td>
      <td>Bandung</td>
      <td>Jakarta</td>
    </tr>
  </tbody>
</table>
    <button type="submit" class="btn btn-primary">pesan</button>
    <button type="submit" class="btn btn-primary">kembali</button>
</div>
<div id="footer">
	<p style="color:#fff;" align="center">Copyright © 2019 KeretaBisa All rights reserved.</p>
</div>
</body>
</html>