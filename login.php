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

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form2")) {
  $insertSQL = sprintf("INSERT INTO registrasi (email, password) VALUES (%s, %s)",
                       GetSQLValueString($_POST['email'], "text"),
                       GetSQLValueString($_POST['password'], "text"));

  mysql_select_db($database_koneksi, $koneksi);
  $Result1 = mysql_query($insertSQL, $koneksi) or die(mysql_error());

  $insertGoTo = "index.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}

mysql_select_db($database_koneksi, $koneksi);
$query_Recordset1 = "SELECT registrasi.nik, registrasi.password FROM registrasi";
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
	<div align="center" style="position:absolute;top:-800px;color:#FFF"><h2>Masuk</h2></div>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <form action="<?php echo $editFormAction; ?>" method="post" name="form1" id="form1">
  <table align="center" bgcolor="#0099FF">
  <div class="form-group">
    <label for="email">Email :</label>
    <input type="text" class="form-control" name="email" value="" id="email" aria-describedby="emailHelp">
  </div>
  </div>
  <div class="form-group">
    <label for="password">Password :</label>
    <input type="text" class="form-control" name="password" value="" id="password" aria-describedby="emailHelp">
  </div>
  <a href="forget-pw.php" style="float:right;color:red">Lupa Kata Sandi ?</a> <br>
  <a herf="home.php" button type="submit" value="login" class="btn btn-primary">Masuk</a>

        </table>
        <input type="hidden" name="MM_insert" value="form1">
      </form>
      <p>&nbsp;</p>
    </div>
</div>
</div>
</div>
<div id="footer">
	<p style="color:#fff;" align="center">Copyright © 2019 KeretaBisa All rights reserved.</p>
</div>
</body>
</html>
<?php
mysql_free_result($Recordset1);
?>
