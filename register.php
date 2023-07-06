<?php 
date_default_timezone_set("Asia/Bangkok");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register GBM</title>
    <link rel="stylesheet" href="register.css">
    <link rel="" href="">
</head>
<body>

    <div class="container">
        <div class="title">Register</div>
        <form action="regis.php" method="post">
            <div class="user-detail">
                <div class="input-box">
                    <span class="details">Nama Lengkap</span>
                    <input type="text" placeholder="Insert Full Name" name="nama" required >
                </div>
                <div class="input-box">
                    <span class="details">Username</span>
                    <input type="text" placeholder="Insert Username" name="user" required >
                </div>
                <div class="input-box">
                    <span class="details">Email</span>
                    <input type="email" placeholder="Insert Email" name="email" required >
                </div>
                <div class="input-box">
                    <span class="details">Password</span>
                    <input type="password" placeholder="Insert Password" name="password" required >
                </div>
                <div class="input-box">
                    <span class="details">Confirm Password</span>
                    <input type="password" placeholder="Insert Password" name="password2" required >
                </div>
                <div class="input-box">
                    <span class="details">Phone Number</span>
                    <input type="text" placeholder="Insert Phone Number" name="telepon" required >
                </div>
            </div>
            <div class="button">
                <input type="submit" value="Register" name="register">
            </div>
        </form>
        <div class="forget">
            <span class="regis">
                <p align="center">Sudah punya akun ? <a href="login.php">Login</a></p>
            </span>
        </div>
    </div>
</body>
</html>