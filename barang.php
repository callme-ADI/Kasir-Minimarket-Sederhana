<?php
include "koneksi.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Produk Pembelian</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="kedua">
    <div class="container">
        <h3>Data Produk / Barang Belanja</h3>
        <a class="btn" href="formbarang.php">Tambah Barang Belanja</a> &ensp; &ensp;|
        &ensp; &ensp; <a class="btn" href="struk.php" onclick="showPaymentType()">Membayar Belanja</a> </br> .
        <table>
            <tr>
                <th>Kode</th>
                <th>Nama</th>
                <th>Jenis</th>
                <th>Harga</th>
                <th>Jumlah</th>
                <th>Total</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
            </tr>
            <?php
            $sql = $conn->query("select * from barang");
            while ($rs = $sql->fetch_object()) {
                $total = $rs->harga * $rs->jumlah; // Menghitung total berdasarkan rumus (harga * jumlah)
            ?>
                <tr>
                    <td><?php echo $rs->kode; ?></td>
                    <td><?php echo $rs->nama; ?></td>
                    <td><?php echo $rs->jenis; ?></td>
                    <td><?php echo $rs->harga; ?></td>
                    <td><?php echo $rs->jumlah; ?></td>
                    <td><?php echo $total; ?></td> <!-- Menampilkan total -->
                    <td><a class="btn" href="formbarang.php?kode=<?php echo $rs->kode; ?>">Edit</a></td>
                    <td><a class="btn" href="hapus.php?kode=<?php echo $rs->kode; ?>">Hapus</a></td>
                </tr>
            <?php } ?>
        </table>
    </div>
<!//nama : Fredi Adi Wijaya>
<!//NPM  : 202043501786>
    <script>
        function showPaymentType() {
            var paymentType = prompt("Pilih jenis pembayaran:\n1. Cash\n2. Debit\n3. QR Code");

            if (paymentType === "1") {
                var cashAmount = prompt("Masukkan nominal uang pembayaran:");
                if (cashAmount != null) {
                    // Lakukan sesuatu dengan nilai cashAmount, misalnya mengirimnya ke halaman struk.php
                    window.location.href = "struk.php?paymentType=cash&cashAmount=" + cashAmount;
                }
            } else if (paymentType === "2") {
                // Lakukan sesuatu untuk pembayaran dengan metode debit
                // Misalnya, redirect ke halaman pembayaran dengan debit
                window.location.href = "metode-debit.php";
            } else if (paymentType === "3") {
                // Lakukan sesuatu untuk pembayaran dengan QR Code
                // Misalnya, tampilkan QR Code atau redirect ke halaman pembayaran QR Code
                window.location.href = "metode-qr-code.php";
            }
        }
    </script>
</body>
</html>
