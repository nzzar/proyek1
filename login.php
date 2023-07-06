<?php

session_start();
/*if(isset($_SESSION['login'])){
    echo "<script>location='index.php';</script>";
}*/

//koneksi ke database
require 'function.php';


// jika tombol login ditekan
if(isset($_POST['login'])){

$username = $_POST['username'];
$userpass = $_POST['password'];

  // Melakukan query pada tabel pelanggan
    $result = mysqli_query($koneksi, "SELECT username_pelanggan, password_pelanggan, nama_customer, id_pelanggan FROM customer WHERE username_pelanggan='$username'");
    list($username, $password, $nama_customer, $id_pelanggan) = mysqli_fetch_array($result);
    $data = mysqli_query($koneksi, "SELECT nama_customer FROM customer WHERE username_pelanggan='$username'");
  // Mengecek akun yang cocok (email & password)
    if (mysqli_num_rows($result) > 0){
        //cek password
        if ( password_verify($userpass, $password) ) {
            echo "<script>alert('LOGIN SUKSES')</script>";
            echo "<script>location='index.php';</script>";
            
            
            // simpan di session
            $_SESSION['login'] = true;
            $_SESSION['nama'] = $nama_customer;
            $_SESSION['id'] = $id_pelanggan;
            $_SESSION['username'] = $username;
            // Jika sudah belanja
        if(isset($_SESSION['keranjang']) OR !empty($_SESSION['keranjang'])){
            echo "<meta http-equiv='refresh' content='1;url=checkout.php'>";
        }
        else{
            echo "<meta http-equiv='refresh' content='1;url=riwayat.php'>";
        }
            die();
        }
        else{
            echo "<script>alert('Password / Username yang anda masukan salah!')</script>";
            echo "<script>location='login.php';</script>";
            }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login GBM</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="container">
        <div class="title">Login</div>
        <form action="" method="post">
            <div class="user-detail">
                <div class="input-box">
                    <span class="details">Username</span>
                    <input type="text" placeholder="Insert Username" name="username" required>
                </div>
                <div class="input-box">
                    <span class="details">Password</span>
                    <input type="password" placeholder="Insert Password" name="password"required>
                </div>
            </div>
            <div class="button">
                <input type="submit" value="Login" name="login">
            </div>
        </form>
        <div class="forget">
            <span class="text">
                <a href="/"><p align="center">Lupa Password ?</p></a>
            </span>
            <span class="regis">
                <p align="center">Belum punya akun? daftar <a href="register.php">disini</a></p>
            </span>
        </div>
    </div>
</body>
</html>