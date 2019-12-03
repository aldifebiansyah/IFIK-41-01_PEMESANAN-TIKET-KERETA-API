<?php require_once('Connections/koneksi.php'); ?>
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
  $insertSQL = sprintf("INSERT INTO jadwal (nama_kereta, kota_asal, kota_tujuan, jam_keberangkatan, tgl_keberangkatan, kelas_kereta) VALUES (%s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['nama_kereta'], "text"),
                       GetSQLValueString($_POST['kota_asal'], "text"),
                       GetSQLValueString($_POST['kota_tujuan'], "text"),
                       GetSQLValueString($_POST['jam_keberangkatan'], "text"),
                       GetSQLValueString($_POST['tgl_keberangkatan'], "text"),
                       GetSQLValueString($_POST['kelas_kereta'], "text"));

  mysql_select_db($database_koneksi, $koneksi);
  $Result1 = mysql_query($insertSQL, $koneksi) or die(mysql_error());
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
  $insertSQL = sprintf("INSERT INTO jadwal (nama_kereta, kota_asal, kota_tujuan, jam_keberangkatan, tgl_keberangkatan, kelas_kereta) VALUES (%s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['nama_kereta'], "text"),
                       GetSQLValueString($_POST['kota_asal'], "text"),
                       GetSQLValueString($_POST['kota_tujuan'], "text"),
                       GetSQLValueString($_POST['jam_keberangkatan'], "text"),
                       GetSQLValueString($_POST['tgl_keberangkatan'], "text"),
                       GetSQLValueString($_POST['kelas_kereta'], "text"));

  mysql_select_db($database_koneksi, $koneksi);
  $Result1 = mysql_query($insertSQL, $koneksi) or die(mysql_error());

  $insertGoTo = "Hasil_Pemesanan.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}

mysql_select_db($database_koneksi, $koneksi);
$query_Recordset1 = "SELECT * FROM jadwal";
$Recordset1 = mysql_query($query_Recordset1, $koneksi) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);
?>
<!DOCTYPE html>
<html lang="en">
	<link href="index.css" rel="stylesheet" type="text/css">
<head>	
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scalle=1.0">
<meta name="author" content="Aldi Febiansyah" >
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
    	<li><a href="Pemesanan.php">Pemesanan</a></li>
        <li><a href="schedule-nonlogin.php">Jadwal</a></li>
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
      <form method="post" name="form1" action="<?php echo $editFormAction; ?>">
        <table align="center" bgcolor="transparent">
  <div class="form-group col">
      <label for="inputState">Nama Kereta</label>
      <select id="inputState" class="form-control">
        <option selected>Kahuripan</option>
        <option>Pasundan</option>
        <option>Serayu</option>
        <option>Jayabaya</option>
        <option>Argo willis</option>
      </select>
    </div>
<div class="form-group">
    <label for="kota_asal">Kota Asal</label>
    <input type="text" class="form-control" name="kota_asal" value="" id="kota_asal" aria-describedby="emailHelp">
  </div>
<div class="form-group">
    <label for="kota_tujuan">Kota Tujuan</label>
    <input type="text" class="form-control" name="kota_tujuan" value="" id="kota_tujuan" aria-describedby="emailHelp">
  </div>
    <div class="form-group col">
      <label for="jam_keberangkatan">Jam Keberangkatan</label>
      <select id="jam_keberangkatan" class="form-control">
        <option selected>08:00</option>
        <option>10:00</option>
        <option>12:00</option>
        <option>14:00</option>
        <option>15:00</option>
        <option>17:00</option>
        <option>18:00</option>
        <option>20:00</option>
      </select>
    </div>
    <div class="form-group">
    <label for="tgl_keberangkatan">Tanggal Keberangkatan</label>
    <input type="text" class="form-control" name="tgl_keberangkatan" value="" id="tgl_keberangkatann" aria-describedby="emailHelp">
 	</div>
  <div class="form-group col">
      <label for="kelas_kereta">Kelas Kereta</label>
      <select id="kelas_kereta" class="form-control">
        <option selected>Eksekutif</option>
        <option>Bisnis</option>
        <option>Priority</option>
        <option>Ekonomi</option>
      </select>
    </div>
  <button type="submit" value="Pesan" class="btn btn-primary">Pesan</button>
</form>
        </table>
        <input type="hidden" name="MM_insert" value="form1">
      </form>
      <p>&nbsp;</p>
    </div>


<div id="footer">
  <p style="color:#fff;" align="center">Copyright © 2019 KeretaBisa All rights reserved.</p>
</div>
</body>
</html>
<?php
mysql_free_result($Recordset1);
?>
