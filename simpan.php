<?php
include "koneksi.php";

$sql=$conn->query("select * from barang where kode='".$_POST['kode']."'");
$jml=$sql->num_rows;
if($jml>0){
    $conn->query("update barang set nama='".$_POST['nama']."',jenis='".$_POST['jenis']."',harga='".$_POST['harga']."',
    jumlah='".$_POST['jumlah']."' where kode='".$_POST['kode']."' ");
}else{
    $conn->query("insert into barang(kode,nama,jenis,harga,jumlah) values('".$_POST['kode']."','".$_POST['nama']."','".$_POST['jenis']."',
    '".$_POST['harga']."','".$_POST['jumlah']."') ");
}
header("location:barang.php");
?>
<!//nama : Fredi Adi Wijaya>
<!//NPM  : 202043501786>
