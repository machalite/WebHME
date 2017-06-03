<?php
include_once "koneksi.php";

$id_beli=$_GET['kode'];
$jumlah=$_GET['jumlah'];

$query="SELECT * FROM barang WHERE kd_barang=$id_beli";
$fetch_query=mysql_query($query, $konek)
or die ("Gagal menampilkan query" . mysql_error());

$tampil=mysql_fetch_array($fetch_query);

$nama=$tampil['nama_barang'];
$harga=$tampil['harga'];
$total=$jumlah*$harga;

if($jumlah>$tampil['jlh_stok'])
{
	echo "Jumlah pembelian tidak boleh melebihi jumlah stok !!";
	include "barang.php";
	exit;
}
	
else
{
	

	$beli="UPDATE barang SET jlh_stok=jlh_stok-$jumlah WHERE kd_barang=$id_beli";

	$beli_query=mysql_query($beli, $konek)
	or die ("Gagal melakukan pembelian." . mysql_error());

	$laporan="INSERT INTO penjualan VALUES ('','$nama','$harga',$jumlah,$total,curdate(),curtime())";

	$laporan_query=mysql_query($laporan, $konek)
	or die ("Gagal melakukan laporan." . mysql_error());
}
?>



<script type="text/javascript">
alert("Pembelian berhasil dilakukan");
</script>

<?php
  include "produk.php";
  exit;
?>




	
	
