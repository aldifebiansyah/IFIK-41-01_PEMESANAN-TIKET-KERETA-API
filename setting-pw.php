<!DOCTYPE html>
<html lang="en">
	<link href="setting-pw.css" rel="stylesheet" type="text/css">
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
            	<li><a class="active" href="index.php">Keluar</a></li>
                <li><a class="active" href="home.php">Beranda</a></li>
   		    </ul>
        </div>
</div>
    
<div id="menu-samping">
	<ul>
    	<li><a href="#">Pemesanan</a></li>
        <li><a href="#">Jadwal</a></li>
        <li><a href="ticket.php">Riwayat</a></li>
        <li><a href="setting.php">Pengaturan</a></li>
    </ul>
</div>
<div id="content">
	<img src="images/kereta api.png" class="bg">
    <div class="pengaturan">
    	<ul>
            <li><a class="active" href="setting-acc.php">Pengaturan Akun</a></li>
            <li><a class="active" href="setting-pw.php">Ubah Kata Sandi</a></li>
   		</ul>
    </div>
    <div class="pengaturan-ks">
    	<form>
       		Masukkan Kata Sandi <input type="password" placeholder="Masukkan Kata Sandi Baru" ><br>
        	Ulangi Kata Sandi <input type="password" placeholder="Masukkan Kata Sandi Lagi"><br>
        <input type="submit" value="Simpan">
        </form>
    </div>
</div>
<div id="footer">
	<p style="color:#fff;" align="center">Copyright © 2019 KeretaBisa All rights reserved.</p>
</div>
</body>
</html>