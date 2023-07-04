<?php
include "koneksi.php";
if(isset($_GET['kode'])){
    $kode=$_GET['kode'];
}else{
    $kode="";
}
$nama="";
$jenis="";
$harga="";
$jumlah="";

$sql=$conn->query("select * from barang where kode='".$kode."'");
while($rs=$sql->fetch_object()){
    $nama=$rs->nama;
    $jenis=$rs->jenis;
    $harga=$rs->harga;
	$jumlah=$rs->jumlah;
    
}
?>
<!//nama : Fredi Adi Wijaya>
<!//NPM  : 202043501786>
<!DOCTYPE html>
<html>
<head>
    <title>Input Data Barang Pembelian</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="pertama">
    <div class="container">
        <h3>Input Data Barang Pembelian</h3>
        <a class="btn" href="barang.php">Tampilkan Data Barang</a>
        <form method="POST" action="simpan.php">
            <table>
                <tr>
                    <td>Kode</td>
                    <td><input type="text" name="kode" value="<?php echo $kode;?>"></td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama" value="<?php echo $nama;?>"></td>
                </tr>
                <tr>
                    <td>Jenis</td>
                    <td><input type="text" name="jenis" value="<?php echo $jenis;?>"></td>
                </tr>
                <tr>
                    <td>Harga</td>
                    <td><input type="text" name="harga" value="<?php echo $harga;?>"></td>
                </tr>
				<tr>
                    <td>Jumlah</td>
                    <td><input type="text" name="jumlah" value="<?php echo $jumlah;?>"></td>
                </tr>                
                <tr>
                    <td></td>
                    <td><input class="btn" type="submit" value="Simpan"></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>
