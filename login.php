<!DOCTYPE html>
<html lang="en">
	<link href="login.css" rel="stylesheet" type="text/css">
<head>	
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scalle=1.0">
<meta name="author" content="Wino Rama Putra" >
<meta name="description" content="ini adalah website booking kereta api">
<title>KeretaBisa</title>

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
	<form action="welcome.php" method="post">
	Nama Pengguna<input type="text" name="namapengguna" placeholder="Masukkan Nama Pengguna/Email"><br>
	Kata Sandi<input type="password" name="katasandi" placeholder="Masukkan Kata Sandi"><br>
	<a href="#"><legend class="forgot-pass">Dapatkan Kata Sandi?</legend></a>
    <input type="submit" value="Masuk">
	</form>

</div>
<div id="footer">
	<p style="color:#fff;" align="center">Copyright © 2019 KeretaBisa All rights reserved.</p>
</div>
</body>
</html>