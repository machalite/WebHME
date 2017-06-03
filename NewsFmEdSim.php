<?php
include_once "koneksi.php";

$TxtIdH = $_POST['TxtIdH'];
$TxtJudul = $_POST['TxtJudul'];
$TxtBerita = $_POST['TxtBerita'];
$TxtPengirim = $_POST['TxtPengirim'];

if (empty ($TxtJudul)){
   echo "Data Judul masih kosong";
}
else if (empty ($TxtBerita)){
   echo "Data Berita masih kosong";
}
else if (empty ($TxtPengirim)){
   echo "Data Pengirim masih kosong";
}
else if (empty ($TxtIdH)){
   echo "Kode ID yang diubah kosong";
}
else{

  $sql_ubah="UPDATE news SET
 	judul = '$TxtJudul',
	berita = '$TxtBerita',
	pengirim = '$TxtPengirim',
	date = '".date('Y-m-d')."'
	WHERE id_news='$TxtIdH'";
  
  mysql_query($sql_ubah, $konek)
    or die ("Perubahan data gagal" . mysql_error());

  echo "Data berhasil diubah";
  include "NewsTampil.php";
  exit;
}
?>
