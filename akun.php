<?php

session_start();
require 'function.php';

if(!isset($_SESSION['login'])){
    echo "<script>alert('Silahkan Login Terlebih Dahulu');</script>";
    echo "<script>location='login.php';</script>";
}else if(isset($_SESSION['login'])){
    $_SESSION = [];
    session_destroy();
    echo "<script>location='login.php';</script>";
    exit;
}


?>