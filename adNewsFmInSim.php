<?php
include_once "koneksi.php";

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
else{

  $sql_simpan="INSERT INTO news  
    (id_news,judul,berita,pengirim,dibaca,date) 
    VALUES ('','$TxtJudul','$TxtBerita','$TxtPengirim','0','".date('Y-m-d')."')";
  
  mysql_query($sql_simpan, $konek)
    or die ("Memasukkan data gagal" . mysql_error());

  echo "Data berhasil disimpan";
include_once "adNewsTampil.php";
exit;

}
?>