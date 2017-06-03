<?php
include_once "koneksi.php";

$kd_hapus = $_POST['del-kode'];

$query="DELETE FROM barang WHERE kd_barang=$kd_hapus";
  
mysql_query($query, $konek)
    or die ("Penghapusan data gagal" . mysql_error());
?>

<script type="text/javascript">
alert("Data berhasil dihapus");
</script>

<?php
  include "inventory.php";
  exit;
?>
