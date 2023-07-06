<?php session_start();
include 'function.php';
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <script src="https://kit.fontawesome.com/bfcd33216e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="fontawesome-free-6.1.0-web/css/all.css">
    <title>Guppy</title>
    <?php include_once 'templates/navbar.php'; ?>
</head>


<body style="background: url(img/homebg.png); background-image: url(img/homebg.png);
    background-attachment: fixed;
    background-size: cover;">
    <div class="container mr-3" style="text-align: center; justify-content: center; justify-items: center; max-width: 1700px; width: 100%;">
        <div class="col-lg-10">
            
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <br>
                    <div class="carousel-item active">
                        <img src="img/cupang.png" class="d-block w-100 h-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/cupang2.jpg" class="d-block w-100 h-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/guppy.jpg" class="d-block w-100 h-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/guppy2.jpg" class="d-block w-100 h-100" alt="...">
                    </br>
                    </div>
                </div>
            <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </button>
        </div>


<div class="modal fade" id="cupangcart" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><span id="fishname"></span></h5>
      </div>
      <div class="modal-body">
        <p class="card-text"><span id="deskripsi"></span></p>
        <p class="card-text">Stok: <span id="stok"></span></p>
        <p class="card-text">Harga: Rp. <span id="harga"></span>,-</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>



        <h4 class="text-center font-weight-bold m-4">IKAN GUPPY</h4>

        <div class="row mx-auto">
            <?php
            $ambil = $koneksi->query("SELECT * FROM ikan WHERE id_kategori = 2");
            while($perproduk = mysqli_fetch_assoc($ambil)):
            ?>
            <div class="card mr-2 ml-2" style="width: 16rem; color:black; padding:0px;">
                <img src="foto_produk/<?= $perproduk['foto_ikan']; ?>" class="card-img-top" alt="..." style="max-height: 170px; height:100%;">
                <div class="card-body bg-light">
                    <h5 class="card-title" style="color:black;"><?= $perproduk['nama_ikan']; ?></h5>
                    <p class="card-text" style="text-align: center;"><?= $perproduk['deskripsi_ikan']; ?></p><br>
                    <p>Rp. <?= number_format($perproduk['harga_ikan']); ?>,-</p>
                    <?php
                        if($perproduk['stok_ikan'] == 0){
                            echo '<a href="beli.php?id='.$perproduk["id_ikan"].'; " class="btn btn-success disabled" aria-disabled="true" alt="Stok Habis">Beli</a>';
                        }else{
                            echo '<a href="beli.php?id='.$perproduk["id_ikan"].'; " class="btn btn-success">Beli</a>';
                        }
                    ?>
                    <!--<a href="beli.php?id=<?php echo $perproduk['id_ikan']; ?>" class="btn btn-success" id="beli">Beli</a>-->
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cupangcart" id="<?= $perproduk['id_ikan']; ?>" onclick="showDetails(this);">
                    Detail
                    </button>
                </div>
            </div>
            <?php endwhile ?>
        </div>

        </div>
    </div>

    <footer class="text-white p-3" style="background-color: #202224;">
        <div class="row">
        <div class="col-md-3">
            <h5>LAYANAN PELANGGAN</h5>
            <ul>
            <li>Pusat Bantuan</li>
            <li>Cara Pembelian</li>
            </ul>
        </div>
        <div class="col-md-3">
            <h5>TENTANG KAMI</h5>
            <P>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequatur, repellendus?</P>
        </div>
        <div class="col-md-3"></div>
        </div>
    </footer>

    <div class="copyright text-center text-white font-weight-bold p-2" style="background-color: #488FB1;">
        <p>Bettaguppy.Mangga by kelompok 7 Copyright <i class="far fa-copyright"></i>2022</p>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <script>
        function showDetails(button){
            var fishnumber = button.id;
            $.ajax({
                url: "ikan.php",
                method: "GET",
                data: {"fishnumber": fishnumber},
                success: function (response) {
                    var fish = JSON.parse(response);

                    $("#fishname").text(fish.nama_ikan);
                    $("#deskripsi").text(fish.deskripsi_ikan);
                    $("#stok").text(fish.stok_ikan);
                    $("#harga").text(fish.harga_ikan);
                }
            });
        }
    </script>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
</body>
</html>