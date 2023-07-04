<?php
session_start();

if(!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

if(isset($_POST['logout'])) {
    session_destroy();
    header("Location: login.php");
    exit();
}
?>
<!//nama : Fredi Adi Wijaya>
<!//NPM  : 202043501786>
<!DOCTYPE html>
<html>
<head>
    <title>Menu</title>
	<link rel="stylesheet" href="style.css">
</head>
<body class="pertama">
    <div class="container">
        <b><h3>Menu Kasir</h3>
        <table>
                <tr>
                    <td><a class="btn" href="formbarang.php"> Input Barang</a> </td>
					<td> <a class="btn" href="barang.php">Data Barang</a> </td>
				</tr>
		</table>
        <form method="POST" action="">
            <div>
                <input type="submit" name="logout" value="Logout">
            </div>
        </form>
    </div>
</body>
</html>
