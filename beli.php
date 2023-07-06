<?php
session_start();

if(!isset($_SESSION['username'])){
    echo "<script>alert('Silahkan login sebemlum membeli!')</script>";
    echo "<script>location='index.php'</script>";
    exit;
}else{
    // mendapatkan id_produk dari url
    $id_ikan = $_GET['id'];
    
    // jika sudah ada produk itu dikeranjang, maka produk itu jumlahnya di +1
    if(isset($_SESSION['keranjang'][$id_ikan]))
    {
        $_SESSION['keranjang'][$id_ikan]+=1;
    }
    //selain itu (belum ada dikeranjang), maka produk itu dianggap dibeli 1
    else
    {
        $_SESSION['keranjang'][$id_ikan] = 1;
    } 
    
    
    //echo "<pre>";
    //print_r($_SESSION);
    //echo "</pre>";
    
    //larikan ke halaman keranjang
    echo "<script>alert('produk telah masuk ke keranjang belanja');</script>";
    echo "<script>location='keranjang.php';</script>";
}
    ?>

