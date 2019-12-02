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
<form method="post" name="form1" action="<?php echo $editFormAction; ?>">
  <table align="center">
    <tr valign="baseline">
      <td nowrap align="center">Nama_Kereta:</td>
      <td valign="baseline"><table>
        <tr>
          <td><input type="radio" name="Nama_Kereta" value="Serayu" >
            Serayu</td>
        </tr>
        <tr>
          <td><input type="radio" name="Nama_Kereta" value="Bima" >
            Bima</td>
        </tr>
        <tr>
          <td><input type="radio" name="Nama_Kereta" value="Argo Jati" >
            Argo Jati</td>
        </tr>
        <tr>
          <td><input type="radio" name="Nama_Kereta" value="Argo Willis" >
            Argo Willis</td>
        </tr>
        <tr>
          <td><input type="radio" name="Nama_Kereta" value="Sriwijaya" >
            Sriwijaya</td>
        </tr>
      </table></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="Center">Class_Kereta:</td>
      <td valign="baseline"><table>
        <tr>
          <td><input type="radio" name="Class_Kereta" value="Ekonomi" >
            Ekonomi</td>
        </tr>
        <tr>
          <td><input type="radio" name="Class_Kereta" value="Eksekutif" >
            Eksekutif</td>
        </tr>
        <tr>
          <td><input type="radio" name="Class_Kereta" value="Bisnis" >
            Bisnis</td>
        </tr>
        <tr>
          <td><input type="radio" name="Class_Kereta" value="Priority" >
            Priority</td>
        </tr>
        <tr>
          <td><input type="radio" name="Class_Kereta" value="Sleeper" >
            Sleeper</td>
        </tr>
      </table></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Tanggal_Keberangkatan:</td>
      <td><input type="text" name="Tanggal_Keberangkatan" value="" size="32">       <br></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Tanggal_Kedatangan:</td>
      <td><input type="text" name="Tanggal_Kedatangan" value="" size="32">       <br></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">&nbsp;</td>
      <td><input type="submit" value="Submit">       <br></td>
    </tr>
  </table>
  <input type="hidden" name="MM_insert" value="form1">
</form>
</div>

<p>&nbsp;</p>
<div id="footer">
  <p style="color:#fff;" align="center">Copyright © 2019 KeretaBisa All rights reserved.</p>
</div>
</body>
</html>