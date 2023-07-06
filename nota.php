<?php $koneksi = new mysqli("localhost","root","","db_guppybettamangga"); ?>
<?php
session_start();
require 'function.php';



if(empty($_SESSION['username']) OR !isset($_SESSION['username'])){
    echo "<script>alert('Anda belum login, silahkan login terlebih dahulu');</script>";
    echo "<script>location='index.php';</script>";
}else if(isset($_SESSION['username'])){
    if(empty($_SESSION["keranjang"]) OR !isset($_SESSION["keranjang"]))
{
    echo "<script>alert('keranjang kosong, silahkan belanja dulu');</script>";
    echo "<script>location='index.php';</script>";
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nota pembelian</title>
    <script src="https://kit.fontawesome.com/bfcd33216e.js" crossorigin="anonymous"></script>
    <?php require 'templates/navbar.php'; ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<body>
    
<section class="konten">
    <div class="container">
    <br>
<section class="konten">
    <div class="container">
        <h1>Pembelian Berhasil</h1>
        <hr>
        <h1>BETTA GUPPY MANGGA</h1>
        <h4>Desa Pringgacala blok Budiraja caplek RT 03 rw 01 kec Karangampel kab Indramayu</h4><br>
        Tanggal : <?php echo date('d - m - Y') ?>
            <br>Nama Lengkap : <?php echo $_SESSION['nama'];?>
        <table class="table table-bordered">
            <thead>

                <tr>
                    <th>No</th>
                    <th>Kategori</th>
                    <th>Produk</th>
                    <th>Harga</th>
                    <th>Jumlah</th>
                    <th>Subharga</th>
                </tr>
            </thead>
            <tbody>
                <?php $nomor=1; ?>
                <?php $totalbelanja = 0; ?>
                <?php foreach ($_SESSION["keranjang"] as $id_ikan => $jumlah): ?>
                <!--menampilkan produk yang sedang diperulangkan berdasarkan id_ikan -->
                <?php
                $ambil = $koneksi->query("SELECT * FROM ikan WHERE id_ikan='$id_ikan'");
                $ambil2 = $koneksi->query("SELECT * FROM kategori ");
                $pecah = $ambil-> fetch_assoc();
                $pecah2 = $ambil2-> fetch_assoc();
                $subharga = $pecah["harga_ikan"]*$jumlah;
                ?>
                <tr>
                    <td><?php echo $nomor; ?></td>
                    <td><?php echo $pecah2["kategori_ikan"]; ?></td>
                    <td><?php echo $pecah["nama_ikan"]; ?></td>
                    <td>Rp. <?= number_format($pecah['harga_ikan']); ?></td>
                    <td><?php echo $jumlah; ?></td>
                    <td>Rp. <?= number_format($subharga); ?></td>
                </tr>
                <?php $nomor++; ?>
                <?php $totalbelanja+=$subharga; ?>
                <?php endforeach ?>
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="5">Total Belanja</th>
                    <th>Rp. <?php echo number_format($totalbelanja) ?></th>
                </tr>
            </tfoot>
        </table>
        <script type="text/javascript">
            window.print();
        </script>


        
    </div>
</section>
</body>
</html>