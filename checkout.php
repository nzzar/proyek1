<?php
session_start();
require 'koneksi.php';

if(empty($_SESSION['username']) OR !isset($_SESSION['username'])){
    echo "<script>alert('Anda belum login, silahkan login terlebih dahulu');</script>";
    echo "<script>location='index.php';</script>";
}else if(isset($_SESSION['username'])){
    if(empty($_SESSION["keranjang"]) OR !isset($_SESSION["keranjang"]))
{
    echo "<script>alert('Anda belum berbelanja, silahkan belanja terlebih dahulu');</script>";
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
    <title>Checkout</title>
    <script src="https://kit.fontawesome.com/bfcd33216e.js" crossorigin="anonymous"></script>
    <!-- navbar-->
    <?php require 'templates/navbar.php'; ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<body>
    <br>
<section class="konten">
    <div class="container">
        <div class="text-center">
        <h1>BETTA GUPPY MANGGA</h1>
        <h4>Desa Pringgacala blok Budiraja caplek RT 03 rw 01 kec Karangampel kab Indramayu</h4><br>
        </div>
        
        
        <div class="col-sm-6">
        <form action="" method="post">
            Tanggal : <?php echo date('d - m - Y') ?>
            <br>Nama Lengkap : <span><input type="text" readonly value="<?= $_SESSION['nama']; ?>" class="form-control"></input></span>
        </div>
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
                </tr>
            </thead>
            <tbody>
                <?php $nomor=1; ?>
                <?php $totalbelanja = 0; ?>
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
            <button class="btn btn-primary" name="checkout">Checkout</button>
        </form>
        
    </div>
</section>

<?php
    if(isset($_POST["checkout"])){
        $id_pelanggan = $_SESSION["id"];
        $tanggal_pembelian = date('Y-m-d');
        $total_pembelian = $totalbelanja;
    
      // Menyimpan data ke tabel pembelian
      mysqli_query($koneksi, "INSERT INTO pembelian(id_pelanggan, tanggal_pembelian, total_pembelian) VALUES('$id_pelanggan', '$tanggal_pembelian', '$total_pembelian')");

      // Mendapatkan id_pembelian yang baru terjadi
      $id_pemebelian_barusan = $koneksi->insert_id;

      foreach($_SESSION["keranjang"] as $id_ikan => $jumlah){

        // Mendapatkan data produk berdasarkan id_produk
        $ambil = mysqli_query($koneksi, "SELECT * FROM ikan WHERE id_ikan='$id_ikan'");
        $perproduk = $ambil->fetch_assoc();
        
        $nama = $perproduk['nama_ikan'];
        $harga = $perproduk['harga_ikan'];
        $subharga = $perproduk['harga_ikan']*$jumlah;

        $koneksi->query("INSERT INTO pembelian_produk(id_pembelian, id_ikan, jumlah, nama, harga) VALUES('$id_pemebelian_barusan', '$id_ikan', '$jumlah', '$nama', '$harga')");

        // Update stok
        $koneksi->query("UPDATE ikan SET stok_ikan=stok_ikan - $jumlah WHERE id_ikan='$id_ikan'");
      }

      // Mengosongkan keranjang belanja
    //   unset($_SESSION["keranjang"]);

      // Tampilan dialihkan ke halaman nota dari pembelian barusan
      echo "<script>alert('Pembelian sukses');</script>";
      echo "<script>location='nota.php?id=$id_pemebelian_barusan';</script>";
    }
    
    ?>

</body>
</html>