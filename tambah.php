<?php
include_once "koneksi.php";

$nama = $_POST['ins-nama'];
$harga = $_POST['ins-harga'];
$stok = $_POST['ins-stok'];
$deskripsi = $_POST['ins-deskripsi'];
$gambar = $_POST['gambar'];

if (empty ($nama)){
   echo "Nama barang masih kosong";
}
else if (empty ($harga)){
   echo "Harga barang masih kosong";
}
else if (empty ($stok)){
   echo "Jumlah stok masih kosong";
}
else{

  $query="INSERT INTO barang VALUES('','$nama',$harga,$stok,'$gambar','$deskripsi')";
  
  mysql_query($query, $konek)
    or die ("Penambahan data gagal" . mysql_error());
}
?>

<script type="text/javascript">
alert("Data berhasil ditambahkan");
</script>

<?php
  include "inventory.php";
  exit;
?>
