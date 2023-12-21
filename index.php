<?php

session_start();
if(!isset($_SESSION['user'])){
    echo "<script>alert('Anda Harus login terlebih dahulu!')</script>";
    header('Location: login.php');
    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Membuat Halaman login</title>
</head>
<body style="text-align: center;">
    <h1>Halaman Administrator</h1>
    <a href="index.php">Home</a>
    <a href="logout.php">Logout</a>
    <hr>
    <h3>Selamat Datang <?php  echo $_SESSION['user']['nama']; ?></h3>
    tampilan ini akan tampil setelah user login
</body>
</html>