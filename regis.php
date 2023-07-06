<?php
//koneksi ke database
require 'function.php';

// Jika tombol daftar ditekan
if(isset($_POST['register'])){

  // Mengambil isian nama, email, password, alamat, telepon
  $nama = htmlspecialchars($_POST['nama']);
  $username = htmlspecialchars($_POST['user']);
  $email = htmlspecialchars($_POST['email']);
  $password = htmlspecialchars($_POST['password']);
  $password2 = htmlspecialchars($_POST['password2']);
  $telepon = htmlspecialchars($_POST['telepon']);


   //cek password
  if($password !== $password2){
    echo "<script>
      alert('konfirmasi password tidak sesuai');
      location=register.php;
    </script>";
    return false;
  }
  //enkripsi password
  $password = password_hash($password, PASSWORD_DEFAULT);

  // Cek apakah email sudah digunakan atau belum
  $ambil = mysqli_query($koneksi, "SELECT username_pelanggan FROM customer WHERE username_pelanggan='$username'");
  if (mysqli_fetch_assoc($ambil)){
    echo "<div class='alert alert-danger'>Pendaftaran gagal, email sudah digunakan!</div>";
		echo "<meta http-equiv='refresh' content='1;url=register.php'>";
    return false;
  }
  else{
    // Insert ke tabel pelanggan
    mysqli_query($koneksi, "INSERT INTO customer VALUES('', '$email', '$nama', '$password', '$username', '$telepon')");
    echo "<div class='alert alert-success'>Pendaftaran sukses, Silahkan login</div>";
	echo "<meta http-equiv='refresh' content='1;url=login.php'>";
  }

}

?>