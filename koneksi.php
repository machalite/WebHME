<?php
$server = "localhost";
$username ="root";
$database="dtbaseku";

$konek = mysql_connect($server, $username)
or die("Gagal koneksi ke server MySQL" . mysql_error());

$bukadb=mysql_select_db($database)
or die("Gagal membuka database" . mysql_error());
?>