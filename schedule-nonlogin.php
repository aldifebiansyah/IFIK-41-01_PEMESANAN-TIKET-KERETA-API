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
            	<li><a class="active" href="registration.php">Daftar</a></li>
                <li><a class="active" href="login.php">Masuk</a></li>
   		    </ul>
        </div>
</div>
    
<div id="menu-samping">
	<ul>
    	<li><a href="non-login.php">Pemesanan</a></li>
        <li><a href="schedule-nonlogin.php">Jadwal</a></li>
        <li><a href="non-login.php">Riwayat</a></li>
        <li><a href="non-login.php">Pengaturan</a></li>
    </ul>
</div>
<div id="content">
	<img src="images/kereta api.png" class="bg">
    <div class="bs-example">
	<div class="col-md-8 col-md-offset-2">
	<div align="center" style="position:absolute;top:-800px;color:#FFF"><h2>Jadwal</h2></div>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    	<table class="table table-bordered table-dark">
  <thead>
    <tr>
      <th scope="col">Nama Kereta</th>
      <th scope="col">Kelas Kereta</th>
      <th scope="col">Tanggal Keberangkatan</th>
      <th scope="col">Tanggal Kedatangan</th>
      <th scope="col">Harga</th>
     </tr>
  </thead>
          <?php do { ?>
            <tr>
              <td><?php echo $row_Recordset1['nama_kereta']; ?></td>
              <td><?php echo $row_Recordset1['kelas_kereta']; ?></td>
              <td><?php echo $row_Recordset1['tgl_keberangkatan']; ?></td>
              <td><?php echo $row_Recordset1['tgl_kedatangan']; ?></td>
              <td><?php echo $row_Recordset1['harga']; ?></td>
              </tr>
            <?php } while ($row_Recordset1 = mysql_fetch_assoc($Recordset1)); ?>
        </table>  
</div>        
</div>
</div>
</div>
<div id="footer">
	<p style="color:#fff;" align="center">Copyright © 2019 KeretaBisa All rights reserved.</p>
</div>
</body>
</html>