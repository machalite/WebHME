<?php
include_once "koneksi.php";

$id_ubah = $_POST['kode'];
$nama = $_POST['nama'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];
$deskripsi = $_POST['deskripsi'];

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

  $query="UPDATE barang SET
 	nama_barang = '$nama',
	harga = '$harga',
	jlh_stok = '$stok',
	deskripsi = '$deskripsi'
	WHERE kd_barang = $id_ubah";
  
  mysql_query($query, $konek)
    or die ("Perubahan data gagal" . mysql_error());
?>

<script type="text/javascript">
alert("Data berhasil diubah");
</script>

<?php
  include "inventory.php";
  exit;
}
?>
