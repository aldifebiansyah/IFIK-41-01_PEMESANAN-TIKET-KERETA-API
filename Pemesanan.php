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

mysql_select_db($database_koneksi, $koneksi);
$query_Recordset1 = "SELECT jadwal.nama_kereta, jadwal.kota_asal, jadwal.kota_tujuan, jadwal.jam_keberangkatan, jadwal.tgl_keberangkatan, jadwal.kelas_kereta FROM jadwal";
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
        <table align="center">
          <tr valign="baseline">
            <td nowrap align="right">Nama Kereta:</td>
            <td valign="baseline"><table>
              <tr>
                <td><input type="radio" name="nama_kereta" value="" >
                  Kahuripan</td>
              </tr>
              <tr>
                <td><input type="radio" name="nama_kereta" value="" >
                  Pasundan</td>
              </tr>
              <tr>
                <td><input type="radio" name="nama_kereta" value="" >
                  Serayu</td>
              </tr>
              <tr>
                <td><input type="radio" name="nama_kereta" value="" >
                  Jayabaya</td>
              </tr>
              <tr>
                <td><input type="radio" name="nama_kereta" value="" >
                  Argo Wilis</td>
              </tr>
            </table></td>
          </tr>
          <tr valign="baseline">
            <td nowrap align="right">Kota Asal:</td>
            <td><input type="text" name="kota_asal" value="" size="32"></td>
          </tr>
          <tr valign="baseline">
            <td nowrap align="right">Kota Tujuan:</td>
            <td><input type="text" name="kota_tujuan" value="" size="32"></td>
          </tr>
          <tr valign="baseline">
            <td nowrap align="right">Jam Keberangkatan:</td>
            <td valign="baseline"><table>
              <tr>
                <td><input type="radio" name="jam_keberangkatan" value="" >
                  08:00</td>
              </tr>
              <tr>
                <td><input type="radio" name="jam_keberangkatan" value="" >
                  10:00</td>
              </tr>
              <tr>
                <td><input type="radio" name="jam_keberangkatan" value="" >
                  12:00</td>
              </tr>
              <tr>
                <td><input type="radio" name="jam_keberangkatan" value="" >
                  14:00</td>
              </tr>
              <tr>
                <td><input type="radio" name="jam_keberangkatan" value="" >
                  15:00</td>
              </tr>
              <tr>
                <td><input type="radio" name="jam_keberangkatan" value="" >
                  17:00</td>
              </tr>
              <tr>
                <td><input type="radio" name="jam_keberangkatan" value="" >
                  18:00</td>
              </tr>
              <tr>
                <td><input type="radio" name="jam_keberangkatan" value="" >
                  20:00</td>
              </tr>
            </table></td>
          </tr>
          <tr valign="baseline">
            <td nowrap align="right">Tanggal Keberangkatan:</td>
            <td><input type="text" name="tgl_keberangkatan" value="" size="32"></td>
          </tr>
          <tr valign="baseline">
            <td nowrap align="right">Kelas Kereta:</td>
            <td valign="baseline"><table>
              <tr>
                <td><input type="radio" name="kelas_kereta" value="" >
                  Eksekutif</td>
              </tr>
              <tr>
                <td><input type="radio" name="kelas_kereta" value="" >
                  Bisnis</td>
              </tr>
              <tr>
                <td><input type="radio" name="kelas_kereta" value="" >
                  Priority</td>
              </tr>
              <tr>
                <td><input type="radio" name="kelas_kereta" value="" >
                  Ekonomi</td>
              </tr>
            </table></td>
          </tr>
          <tr valign="baseline">
            <td nowrap align="right">&nbsp;</td>
            <td><input type="submit" value="Pesan"></td>
          </tr>
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
