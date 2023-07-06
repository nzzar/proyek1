<?php
$semuadata = [];
$ambil = $koneksi->query("SELECT * FROM kategori");
while($tiap = $ambil->fetch_assoc()){
  $semuadata[] = $tiap;
}

// echo "<pre>";
// print_r($semuadata);
// echo "</pre>";

?>


<h3 style="color: rgb(75, 169, 185);">Data Kategori</h3>
<hr>

<table class="table table-bordered">
  <thead>
    <tr>
      <th>No</th>
      <th>Kategori</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($semuadata as $key => $value): ?>
    <tr>
      <td><?= $key+1; ?>.</td>
      <td><?= $value['kategori_ikan']; ?></td>
      <td>
        <a href="" class="btn btn-warning btn-xs">Ubah</a>
        <a href="" class="btn btn-danger btn-xs">Hapus</a>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>







