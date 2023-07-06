<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Betta Guppy Mangga</title>
    <script src="https://kit.fontawesome.com/bfcd33216e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <?php require_once 'indexcss.php'; ?>
    <?php require 'templates/navbar.php'; ?>
</head>

<body>
        <div class="container2">
        <br><br><br><br>
        <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="2000">
                <img src="img/bettawp.jpg" class="d-block w-100" alt="..." style="max-width: 1700px; max-height: 800px;">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                <img src="img/guppy3.jpg" class="d-block w-100" alt="..." style="max-width: 1700px; max-height: 800px;">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                <img src="img/gapiwp.jpg" class="d-block w-100" alt="..." style="max-width: 1700px; max-height: 800px;">
                </div>
            </div>
        </div>
        <aside>
        <label><a href="/">Informasi Menarik Lainnya</a></label>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum, nisi ratione? Sunt vero ratione quo exercitationem. Odio velit a provident aspernatur perspiciatis hic modi! Nostrum dolorum similique maiores quod? Aperiam!</p>
        </aside>
        <div id="content">
            <article id="cupang" >
                <a href="informasi.php"><img src="img/cupang.png" alt="cupang" title="Available Betta"></a>
                <figcaption class="a"><a href="informasi.php">Betta Fish (Ikan Cupang)</a></figcaption>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam velit omnis, explicabo quas ullam tempore officiis consectetur nam modi dicta nesciunt? Vel voluptate sint cumque iure unde quam excepturi dolores.</p>
            </article>
            <article id="cupang2" >
                <a href="informasi.php"><img src="img/cupang2.jpg" alt="cupang" title="Informasi Ikan Hias"></a>
                <figcaption class="a"><a href="informasi.php">Informasi Ikan Hias</a></figcaption>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam velit omnis, explicabo quas ullam tempore officiis consectetur nam modi dicta nesciunt? Vel voluptate sint cumque iure unde quam excepturi dolores.</p>
            </article>
            <article id="guppy">
                <a href="informasi.php"><img src="img/guppy.jpg" alt="guppy" title="Available Guppy"></a>
                <figcaption class="a"><a href="informasi.php">Guppy Fish (Ikan Guppy)</a></figcaption>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, nostrum dolor? Quo, ad numquam laboriosam id possimus cum dolorem, perferendis libero maxime necessitatibus voluptatem, reiciendis delectus magni esse fuga excepturi.</p>
            </article>
            <article id="guppy2">
                <a href="informasi.php"><img src="img/guppy2.jpg" alt="guppy" title="Merawat Guppy & Cupang"></a>
                <figcaption class="a"><a href="informasi.php">Cara Merawat Ikan Hias</a></figcaption>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, nostrum dolor? Quo, ad numquam laboriosam id possimus cum dolorem, perferendis libero maxime necessitatibus voluptatem, reiciendis delectus magni esse fuga excepturi.</p>
            </article>
        </div>
        
        </div>
        
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

</body>

</html>