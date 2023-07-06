<?php
$ambil = $koneksi->query("SELECT * FROM ikan WHERE id_ikan = '$_GET[id]'");
$pecah = $ambil->fetch_assoc();

$datakategori = [];
$ambil = $koneksi->query("SELECT * FROM kategori");
while($tiap = $ambil->fetch_assoc()){
	$datakategori[] = $tiap;
}

// echo "<pre>";
// print_r($pecah);
// echo "</pre>";

// echo "<pre>";
// print_r($datakategori);
// echo "</pre>";

if(isset($_POST['ubah'])){
  $namafoto = $_FILES['foto']['name'];
  $lokasifoto = $_FILES['foto']['tmp_name'];

  // jika foto dirubah
  if(!empty($lokasifoto)){
    move_uploaded_file($lokasifoto, "../foto_produk/$namafoto");

    $koneksi->query("UPDATE ikan SET id_kategori='$_POST[id_kategori]', nama_ikan='$_POST[nama]', harga_ikan='$_POST[harga]', foto_ikan='$namafoto', deskripsi_ikan='$_POST[deskripsi]', stok_ikan='$_POST[stok]' WHERE id_ikan='$_GET[id]'");
  }
  else{
    $koneksi->query("UPDATE ikan SET id_kategori='$_POST[id_kategori]', nama_ikan='$_POST[nama]', harga_ikan='$_POST[harga]', deskripsi_ikan='$_POST[deskripsi]', stok_ikan='$_POST[stok]' WHERE id_ikan='$_GET[id]'");
  }

  echo "<script>alert('Data berhasil diubah');</script>";
  echo "<script>location='index.php?halaman=produk';</script>";
}

?>


<h2>Ubah Produk</h2>

<div class="row">
	<div class="col-md-8">
    <form action="" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label for="">Nama Produk</label>
        <input type="text" name="nama" class="form-control" value="<?= $pecah['nama_ikan']; ?>">
      </div>
      <div class="form-group">
        <label>Kategori</label>
        <select name="id_kategori" id="" class="form-control">
          <option value="">-Pilih kategori-</option>
          <?php foreach($datakategori as $key => $value): ?>
          <option value="<?= $value['id_kategori'] ?>" <?php if($pecah['id_kategori']==$value['id_kategori']){echo "selected";} ?>>
            <?= $value['kategori_ikan']; ?>
          </option>
          <?php endforeach; ?>
        </select>
      </div>
      <div class="form-group">
        <label for="">Harga Rp.</label>
        <input type="number" name="harga" class="form-control" value="<?= $pecah['harga_ikan']; ?>">
      </div>
      </div>
      <div class="form-group">
        <label for="">Foto Produk</label><br>
        <img src="../foto_produk/<?= $pecah['foto_ikan']?>" width="200">
      </div>
      <div class="form-group">
        <label for="">Ganti Foto</label>
        <input type="file" name="foto" class="form-control">
      </div>
      <div class="form-group">
        <label for="">Deskripsi</label>
        <textarea name="deskripsi" class="form-control" rows="10">
          <?= $pecah['deskripsi_ikan']; ?>
        </textarea>
      </div>
      <div class="form-group">
        <label for="">Stok</label>
        <input type="number" name="stok" class="form-control" value="<?= $pecah['stok_ikan']; ?>">
      </div>
      <button name="ubah" class="btn btn-primary">Ubah</button>
    </form>
  </div>
</div>




