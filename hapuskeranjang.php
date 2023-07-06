<?php
session_start();
$id_ikan=$_GET["id"];
unset($_SESSION["keranjang"][$id_ikan]);

echo "<script>alert(' produk dihapus dari keranjang');</script>";
echo "<script>location='keranjang.php';</script>";
?>