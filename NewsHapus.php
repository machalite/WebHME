<?php
include_once "koneksi.php";

$idhapus=$_GET['idhapus'];

if(empty($idhapus)){
  echo "Data yang dihapus belum dipilih";
}
else {
  $sql_hapus="DELETE FROM news WHERE id_news='$idhapus'";
  mysql_query($sql_hapus, $konek)
   or die ("Gagal menghapus" . mysql_error());

echo "Penghapusan data berhasil";
include "NewsTampil.php";
exit;
}
?>