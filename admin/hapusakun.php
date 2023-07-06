<?php

$ambil = $koneksi->query("SELECT * FROM customer WHERE id_pelanggan = '$_GET[id]'");
$pecah = $ambil->fetch_assoc();

$koneksi->query("DELETE FROM customer WHERE id_pelanggan = '$_GET[id]'");

echo "<script>alert('Akun sudah dihapus');</script>";
echo "<script>location='index.php?halaman=pelanggan';</script>";
?>