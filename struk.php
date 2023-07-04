<?php
include "koneksi.php";
?>


<!DOCTYPE html>
<html>
<head>
    <title>Struk Pembayaran</title>
    <style>
        .container {
            max-width: 600px;
            margin: 50px auto;
            text-align: center;
        }
        table {
            width: 100%;
            margin-bottom: 20px;
        }
        table th, table td {
            padding: 10px;
            border: 1px solid #ccc;
        }
    </style>
</head>
<!//nama : Fredi Adi Wijaya>
<!//NPM  : 202043501786>
<body>
    <div class="container">
        <h2>Struk Pembayaran</h2>
        <table>
            <tr>
                <th>Nama Barang</th>
                <th>Jumlah</th>
                <th>Harga</th>
            </tr>
            <?php
            $sql = $conn->query("SELECT * FROM barang");
            $totalBelanja = 0; // Inisialisasi variabel total belanja

            while ($rs = $sql->fetch_object()) {
                echo "<tr>";
                echo "<td>{$rs->nama}</td>";
                echo "<td>{$rs->jumlah}</td>";
                echo "<td>{$rs->harga}</td>";
                echo "</tr>";

                $totalBelanja += $rs->harga * $rs->jumlah; // Menghitung total belanja
            }
            ?>
        </table>

        <b>Total Belanja Anda : <?php echo $totalBelanja; ?></b> <!-- Menampilkan total belanja -->

        <p>Terima kasih telah membeli produk dari kami. Semoga Anda puas dengan layanan yang kami berikan kepada Anda.</p>
        <p>Silakan datang kembali di lain waktu untuk berbelanja di toko kami.</p>
    </div>
	<a href="menu.php">selesai</a>
</body>
</html>
