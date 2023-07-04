<?php
session_start();

if(isset($_SESSION['username'])) {
    header("Location: menu.php");
    exit();
}

$message = "";

if(isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username === 'stafmarket' && $password === 'staf123') {
        $_SESSION['username'] = $username;
        header("Location: menu.php");
        exit();
    } else {
        $message = "Username atau password salah";
    }
}
?>
<!//nama : Fredi Adi Wijaya>
<!//NPM  : 202043501786>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="login">
    <div class="container">
        <h3>Login</h3>
        <form method="POST" action="">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" class="form-control" required>
            </div>
            <div class="form-group">
                <input type="submit" name="login" value="Login" class="btn btn-primary">
            </div>
            <div class="form-group">
                <?php echo $message; ?>
            </div>
        </form>
    </div>
</body>
</html>
