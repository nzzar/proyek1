<?php
require 'koneksi.php';

$idIkan = $_GET["fishnumber"];
$result = mysqli_query($koneksi, "SELECT * FROM ikan WHERE id_ikan=$idIkan");

$fish = mysqli_fetch_object($result);
echo json_encode($fish);
?>