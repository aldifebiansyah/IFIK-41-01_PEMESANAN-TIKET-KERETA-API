<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_KoneksiPemesanan = "localhost";
$database_KoneksiPemesanan = "pemesanan";
$username_KoneksiPemesanan = "root";
$password_KoneksiPemesanan = "";
$KoneksiPemesanan = mysql_pconnect($hostname_KoneksiPemesanan, $username_KoneksiPemesanan, $password_KoneksiPemesanan) or trigger_error(mysql_error(),E_USER_ERROR); 
?>