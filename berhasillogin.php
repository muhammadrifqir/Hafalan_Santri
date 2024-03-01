<?php
session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: login 1.html");
    exit(); // Terminate script execution after the redirect
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login 1.html">
    <link rel="stylesheet" type="#" href="login 1style.css">
    <title>Berhasil Login</title>
</head>

<body>
    <div class="container-logout">
        <form action="logout.php" method="POST" class="login-email">
            <h1>Selamat Datang, <?php echo $_SESSION['username']; ?>!</h1>
            <div class="input-group">
                <button type="submit" class="btn">Logout</button>
            </div>
        </form>
    </div>
</body>

</html>