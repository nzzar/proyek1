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
    <title>Keranjang</title>
    <script src="https://kit.fontawesome.com/bfcd33216e.js" crossorigin="anonymous"></script>
    <!-- navbar-->
    <?php require 'templates/navbar.php'; ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<body>
<section class="konten">
    <div class="container">
        <h1>Keranjang Belanja</h1>
        <hr>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kategori</th>
                    <th>Produk</th>
                    <th>Harga</th>
                    <th>Jumlah</th>
                    <th>Subharga</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
            <?php $nomor=1; ?>
                <?php foreach ($_SESSION["keranjang"] as $id_ikan => $jumlah): ?>
                <!--menampilkan produk yang sedang diperulangkan berdasarkan id_ikan -->
                <?php
                $ambil = $koneksi->query("SELECT * FROM ikan WHERE id_ikan='$id_ikan'");
                $ambil2 = $koneksi->query("SELECT kategori.kategori_ikan AS kategori_ikan FROM ikan JOIN kategori ON ikan.id_kategori=kategori.id_kategori WHERE ikan.id_ikan='$id_ikan'");
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
                    <td>
                        <a href="hapuskeranjang.php?id=<?php echo $id_ikan ?>" class="btn btn-danger btn-xs">Hapus</a>
                    </td>
                </tr>
                <?php $nomor++; ?>
                <?php endforeach ?>
            </tbody>
        </table>

        <a href="availbetta.php" class="btn btn-secondary">Lanjutkan Belanja</a>
        <a href="checkout.php" class="btn btn-primary">Checkout</a>
    </div>
</section>
</body>
</html>
