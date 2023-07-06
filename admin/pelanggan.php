<h2 style="color: rgb(75, 169, 185);">Data Pelanggan</h2>

<table class="table table-bordered">
	<thead>
		<tr>
		<th>No</th>
		<th>Username</th>
		<th>Nama Customer</th>
		<th>No Telepon</th>
		<th>Email</th>
		<th>Aksi</th>
		</tr> 
	</thead>
	<tbody>

		<?php $no=1; ?>
		<?php $ambil = $koneksi->query("SELECT * FROM customer"); ?>
		<?php while($pecah = $ambil->fetch_assoc()): ?>
		<tr>
			<td><?= $no; ?></td>
			<td><?= $pecah["username_pelanggan"]; ?></td>
			<td><?= $pecah["nama_customer"]; ?></td>
			<td><?= $pecah["telepon_pelanggan"]; ?></td>
			<td><?= $pecah["email_pelanggan"]; ?></td>
			<td>
			<a href="index.php?halaman=hapusakun&id=<?= $pecah['id_pelanggan']; ?>" onclick="return confirm('Yakin akan menghapus akun?')" class="btn btn-danger btn-xs">Hapus</a>
			</td>
		</tr>
		<?php $no++; ?>
		<?php endwhile; ?>

	</tbody>
</table>