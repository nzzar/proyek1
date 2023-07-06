<?php
// koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "db_guppybettamangga");

function query($query){
    global $koneksi;
    $ambil = mysqli_query($koneksi, $query);
    $rows = [];
    while ( $row = mysqli_fetch_assoc($ambil) ) {
        $rows[] = $row;
    }
    return $rows;
}


?>