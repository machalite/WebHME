<?php
include_once "koneksi.php";

$id_beli=$_GET['kode'];
$jumlah=$_GET['jumlah'];

$query="SELECT * FROM jasa WHERE kd_jasa=$id_beli";
$fetch_query=mysql_query($query, $konek)
or die ("Gagal menampilkan query" . mysql_error());

$tampil=mysql_fetch_array($fetch_query);

$nama=$tampil['nama_jasa'];
$harga=$tampil['harga'];
$total=$jumlah*$harga;

	$laporan="INSERT INTO penjualan VALUES ('','$nama','$harga',$jumlah,$total,curdate(),curtime())";

	$laporan_query=mysql_query($laporan, $konek)
	or die ("Gagal melakukan laporan." . mysql_error());
?>

<script type="text/javascript">
alert("Pembelian berhasil dilakukan");
</script>

<?php
  include "jasa.php";
  exit;
?>



	
	
