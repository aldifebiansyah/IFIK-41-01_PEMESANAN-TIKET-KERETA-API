<?php require_once('Connections/KoneksiPemesanan.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
  $insertSQL = sprintf("INSERT INTO pemesanan (Nama_Kereta, Class_Kereta, Tanggal_Keberangkatan, Tanggal_Kedatangan) VALUES (%s, %s, %s, %s)",
                       GetSQLValueString($_POST['Nama_Kereta'], "text"),
                       GetSQLValueString($_POST['Class_Kereta'], "text"),
                       GetSQLValueString($_POST['Tanggal_Keberangkatan'], "date"),
                       GetSQLValueString($_POST['Tanggal_Kedatangan'], "date"));

  mysql_select_db($database_KoneksiPemesanan, $KoneksiPemesanan);
  $Result1 = mysql_query($insertSQL, $KoneksiPemesanan) or die(mysql_error());
}
?>
<!DOCTYPE html>
<html lang="en">
	<link href="Pemesanan.css" rel="stylesheet" type="text/css">
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
	<div align="center" style="position:absolute;top:-800px;color:#FFF"><h2>Pemesanan</h2></div>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
<form>
  <div class="form-group">
      <label for="inputState"><font color="#FFFFFF">Nama Kereta</font></label>
      <select id="inputState" class="form-control">
        <option selected>Serayu</option>
        <option>Kahuripan</option>
        <option>Bima</option>
        <option>Jayabaya</option>
        <option>Kaligung</option>
      </select>
  </div>
  <div class="form-group">
      <label for="inputState"><font color="#FFFFFF">Class Kereta</font></label>
      <select id="inputState" class="form-control">
        <option selected>Ekonomi</option>
        <option>Bisnis</option>
        <option>Priority</option>
        <option>Eksekutif</option>
        <option>Sleeper</option>
      </select>
  </div>
   <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputTahunKeberangkatan"><font color="#FFFFFF">Tahun Keberangkatan</font></label>
      <input type="date" class="form-control" id="inputTahunKeberangkatan" placeholder="2017">
    </div>
    <div class="form-group col-md-4">
      <label for="inputBulanKeberangkatan"><font color="#FFFFFF">Bulan Keberangkatan</font></label>
      <input type="date" class="form-control" id="inputBulanKeberangkatan" placeholder="Februari">
    </div>
    <div class="form-group col-md-4">
      <label for="inputTanggalKeberangkatan"><font color="#FFFFFF">Tanggal Keberangkatan</font></label>
      <input type="date" class="form-control" id="inputTanggalKeberangkatan" placeholder="28">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputTahunKedatangan"><font color="#FFFFFF">Tahun Kedatangan</font></label>
      <input type="date" class="form-control" id="inputTahunKedatangan" placeholder="2017">
    </div>
    <div class="form-group col-md-4">
      <label for="inputBulanKedatangan"><font color="#FFFFFF">Bulan Kedatangan</font></label>
      <input type="date" class="form-control" id="inputBulanKedatangan" placeholder="Maret">
    </div>
    <div class="form-group col-md-4">
      <label for="inputTanggalKedatangan"><font color="#FFFFFF">Tanggal Kedatangan</font></label>
      <input type="date" class="form-control" id="inputTanggalKedatangan" placeholder="01">
    </div>
  </div>
   <div class="form-group">
     <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
</div>
  <button type="submit" class="btn btn-primary">Sign in</button>
</form>
</div>

<p>&nbsp;</p>
<div id="footer">
  <p style="color:#fff;" align="center">Copyright © 2019 KeretaBisa All rights reserved.</p>
</div>
</body>
</html>