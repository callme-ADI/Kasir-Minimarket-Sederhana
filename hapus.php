<?php
include "koneksi.php";
$conn->query("delete from barang where kode='".$_GET['kode']."'");
header("location:barang.php");
?>
<!//nama : Fredi Adi Wijaya>
<!//NPM  : 202043501786>