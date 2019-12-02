<!DOCTYPE html>
<html lang="en">
	<link href="home.css" rel="stylesheet" type="text/css">
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
    <div class="bs-example">
	<div class="col-md-8 col-md-offset-2">
	<div align="center" style="position:absolute;top:-800px;color:#FFF"><h2>Promo</h2></div>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Carousel indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>   
        <!-- Wrapper for carousel items -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="images/Promo-1.png" alt="First Slide">
                  <div class="carousel-caption">
                  <h3><a href="#" style="text-decoration:none;color:#FFF;border:1px thin black;border-radius:8px;margin:auto;background-color;#000;background-image:linear-gradient(#000000, #FF4500)">Lihat</a></h3>
             	</div>
            </div>
            <div class="item">
                <img src="images/Promo-2.png" alt="Second Slide">
                <div class="carousel-caption">
                  <h3><a href="#" style="text-decoration:none;color:#FFF;border:1px thin black;border-radius:8px;margin:auto;background-color;#000;background-image:linear-gradient(#000000, #FF4500)">Lihat</a></h3>
                </div>
            </div>
            <div class="item">
                <img src="images/Promo-3.png" alt="Second Slide">
                <div class="carousel-caption">
                  <h3><a href="#" style="text-decoration:none;color:#FFF;border:1px thin black;border-radius:8px;margin:auto;background-color;#000;background-image:linear-gradient(#000000, #FF4500)">Lihat</a></h3>
                </div>
            </div>
    
      </div>
        <!-- Carousel controls -->
        <a class="carousel-control left" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="carousel-control right" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
   		 </div>
</div>
</div>
</div>
<div id="footer">
	<p style="color:#fff;" align="center">Copyright © 2019 KeretaBisa All rights reserved.</p>
</div>
</body>
</html>