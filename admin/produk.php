<h2 style="color: rgb(75, 169, 185);">Data Produk</h2>

<table class="table table-bordered">
	<thead>
		<tr>
		<th>No</th>
		<th>Nama</th>
		<th>Kategori</th>
		<th>Harga</th>
		<th>Foto</th>
		<th>Stok</th>
		<th>aksi</th>
		</tr> 
	</thead>
	<tbody>

		<?php $no=1; ?>
		<?php $ambil = $koneksi->query("SELECT * FROM ikan LEFT JOIN kategori ON ikan.id_kategori=kategori.id_kategori") ?>
		<?php while($pecah = $ambil->fetch_assoc()): ?>
		<tr>
			<td><?= $no; ?></td>
			<td><?= $pecah["nama_ikan"]; ?></td>
			<td><?= $pecah['kategori_ikan']; ?></td>
			<td>Rp. <?= number_format($pecah["harga_ikan"]); ?>,-</td>
			<td>
				<img src="../foto_produk/<?= $pecah["foto_ikan"]; ?>" width="100">
			</td>
			<td><?= $pecah['stok_ikan']; ?></td>
			<td>
				<a href="index.php?halaman=ubahproduk&id=<?= $pecah['id_ikan']; ?>" class="btn btn-warning btn-xs">ubah</a> | 
				<a href="index.php?halaman=detailproduk&id=<?= $pecah['id_ikan']; ?>" class="btn btn-info btn-xs">detail</a> | 
				<a href="index.php?halaman=hapusproduk&id=<?= $pecah['id_ikan']; ?>" onclick="return confirm('Yakin akan menghapus data?')" class="btn btn-danger btn-xs">hapus</a>
			</td>
		</tr>
		<?php $no++; ?>
		<?php endwhile; ?>

	</tbody>
</table>

<a href="index.php?halaman=tambahproduk" class="btn btn-primary">Tambah Data Produk</a>