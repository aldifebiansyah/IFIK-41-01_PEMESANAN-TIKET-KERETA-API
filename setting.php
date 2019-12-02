<!DOCTYPE html>
<html lang="en">
	<link href="index.css" rel="stylesheet" type="text/css">
<head>	
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scalle=1.0">
<meta name="author" content="Wino Rama Putra" >
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
            	<li><a class="active" href="index.php">Keluar</a></li>
                <li><a class="active" href="home.php">Beranda</a></li>
   		    </ul>
        </div>
</div>
    
<div id="menu-samping">
	<ul>
    	<li><a href="Pemesanan.php">Pemesanan</a></li>
        <li><a href="schedule.php">Jadwal</a></li>
        <li><a href="ticket.php">Riwayat</a></li>
        <li><a href="setting.php">Pengaturan</a></li>
    </ul>
</div>
<div id="content">
	<img src="images/kereta api.png" class="bg">
     <div class="bs-example">
	<div class="col-md-8 col-md-offset-2">
    	<div align="center" style="position:absolute;top:-800px;color:#FFF"><h2>Pengaturan Akun</h2></div>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
         <div class="pengaturan-akun">
          <form action="<?php echo $editFormAction; ?>" method="post" name="form1" id="form1">
  <table align="center" bgcolor="#0099FF">
  <div class="form-group">
    <label for="noktp">No KTP :</label>
    <input type="text" class="form-control" name="nik" value="" id="noktp" aria-describedby="emailHelp">
  </div>

  <div class="form-group">
    <label for="nama">Nama Lengkap :</label>
    <input type="text" class="form-control" name="nama" value="" id="nama" aria-describedby="emailHelp">
  </div>
  
  <div class="form-group">
    <label for="email">Email :</label>
    <input type="email" class="form-control" name="email" value="" id="email" aria-describedby="emailHelp">
  </div>

  <button type="submit" value="Simpan" class="btn btn-primary">Simpan</button>

  </table>
  <input type="hidden" name="MM_insert" value="form1" />
</form>   
		</div>
    </div>
</div>
</div>
</div>
</div>
  
<div id="footer">
	<p style="color:#fff;" align="center">Copyright © 2019 KeretaBisa All rights reserved.</p>
</div>
</body>
</html>