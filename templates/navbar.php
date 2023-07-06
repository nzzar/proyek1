<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>
<?php include 'navbarcss.php'?>
<nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: #202224; ">
    <div class="container">
            <h3><img src="img/cupanglogo.png" height="40" width="40" class="mr-sm-2"></h3>
            <a class="navbar-brand font-weight-bold" href="index.php" style="color: aliceblue;">Betta Guppy Mangga</a>    
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto mr-4">
                <li class="nav-item active">
                <a class="nav-link" href="availbetta.php" style="color: aliceblue;">Available Betta <span class="sr-only" style="color: aliceblue;">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="availguppy.php" style="color: aliceblue;">Available Guppy <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="keranjang.php" style="color: aliceblue;">Cart <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="informasi.php" style="color: aliceblue;">Information <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="contac.php" style="color: aliceblue;">Contact & Address <span class="sr-only">(current)</span></a>
                </li>
            </ul>
            <div class="dropdown mt-3">
                    <a href="#" style="text-decoration: none; color:#fff; font-weight=200;" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-circle-user fa-lg" style="color: #ffff;"></i>
                    <figcaption class="usernama"><?php
                        if(!isset($_SESSION['username'])){
                            echo "<p>Login</p>";
                        }else{
                            echo $_SESSION['username'];
                        }
                        ?>
                    </figcaption>
                </a>
                
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <li><a class="dropdown-item" href="#">Profil</a></li>
                    <li><a class="dropdown-item" href="keranjang.php">Keranjang</a></li>
                    <?php
                        $linkaddress = 'login.php';
                        if(!isset($_SESSION['username'])){
                            echo "<li><a class='dropdown-item' href='".$linkaddress."'>Login</a></li>";
                        }else{
                            echo '<li><a class="dropdown-item" href="akun.php" onclick="return confirm("Apakah anda yakin?");">Logout</a></li>';
                        }
                        ?>
                    
                </ul>
            </div>
            <!--<div class="icon mt-4">
                <a href="akun.php" onclick="return confirm('Apakah anda yakin?')" style="text-decoration: none; color:#fff; font-weight=200;"><i class="fa fa-circle-user fa-lg" style="color: #ffff;"></i>
                    <figcaption class="usernama"><?php
                        if(!isset($_SESSION['username'])){
                            echo "<p>Login</p>";
                        }else{
                            echo $_SESSION['username'];
                        }
                        ?>
                    </figcaption>
                </a>
            </div>-->
        </div>
    </div>
</nav>


<br><br><br>