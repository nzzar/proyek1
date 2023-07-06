<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact & Address</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="fontawesome-free-6.1.0-web/css/all.css">
    <script src="https://kit.fontawesome.com/bfcd33216e.js" crossorigin="anonymous"></script>
    <?php require 'templates/contact.php'; ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
</head>

<body>
    <?php include 'templates/navbar.php'; ?>
    <br>
    <div class="condress">
        <div class="contac_addres">
            <div class="wa"> 
                <a href="https://bit.ly/3tQ0IF7"><i class="fa-brands fa-whatsapp-square fa-10x"></i><p>Whatsapp</p><P>083148001281</P></a>
            </div>
            <div class="ig">
                <a href="https://www.instagram.com/bettaguppy.mangga/"><i class="fa-brands fa-instagram-square fa-10x"></i><p>Instagram</p> <P>@bettaguppy.mangga</P></a>
            </div>
            <div class="fb">
                <a href="https://web.facebook.com/profile.php?id=100070916838679"><i class="fa-brands fa-facebook fa-10x"></i><p>Facebook</p><P>Betta GuppyMangga</P></a>
            </div>
            <div class="loc1">
                <P><i class="fa-solid fa-location-dot fa-lg"></i> &nbspDesa Pringgacala blok Budiraja caplek RT 03 rw 01 kec Karangampel kab Indramayu</P>
            </div>
            <div class="loc">
                <i class="fa-solid fa-location-dot fa-8x"></i><P>Desa Pringgacala blok Budiraja caplek RT 03 rw 01 kec Karangampel kab Indramayu</P>
            </div>
            <div class="loc2">
                <P><i class="fa-solid fa-location-dot fa-lg"></i> &nbspDesa Pringgacala blok Budiraja caplek RT 03 rw 01 kec Karangampel kab Indramayu</P>
            </div>
            
        </div>
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7928.
            809688561317!2d108.4567114223609!3d-6.470292270748471!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.
            1!3m3!1m2!1s0x2e6eeba32f0ba8ed%3A0x2e3cc6a775c07220!2sRT.%2003%2F01%20Desa%20Pringgacala!5e0
            !3m2!1sid!2sid!4v1648316547029!5m2!1sid!2sid"> </iframe>
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
    
</body>
</html>