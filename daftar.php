<?php
session_start();
include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Daftar user</title>
</head>
<body>

    <?php

    if(isset($_POST['username'])){
        $nama = $_POST['nama'];
        $username = $_POST['username'];
        $password = md5($_POST['password']);

        $query = mysqli_query($koneksi,"INSERT INTO user(nama,username,password) values('$nama','$username','$password')");
        if($query){
            echo "<Script>alert('selamat pendaftaran akun berhasil, silahkan login')</Script>";
        } else {
            echo "<script>alert('maaf pendaftaran akun gagal. Silahkan coba lagi')</script>";
            header("location:login.php");
        }
    }

?>



    <form action="" method="post">
        <table align="center">
            <tr>
                <td colspan="2" align="center">Daftar Akun</td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <tr>
                    <td></td>
                    <td> 
                        <button type="submit">Daftar User</button>
                        <a href="login.php">Login</a>
                    </td>
                </tr>
            </tr>
        </table>
    </form>
</body>
</html>