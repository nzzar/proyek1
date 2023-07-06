<h2>Detail Pembelian</h2>

<?php
$ambil = $koneksi->query("SELECT * FROM pembelian JOIN customer ON pembelian.id_pelanggan = customer.id_pelanggan WHERE pembelian.id_pembelian = '$_GET[id]'");
$detail = $ambil->fetch_assoc();

?>

<!-- <pre><?php // print_r($detail); ?></pre> -->

<div class="row" style="margin-bottom:10px;">
	<div class="col-md-4">
		<h3>Pembelian</h3>
		tanggal : <?= $detail["tanggal_pembelian"]; ?><br>
		total : Rp.<?= number_format($detail["total_pembelian"]); ?>,- <br>
		Status : <?= $detail['status_pembelian']; ?>
	</div>
	<div class="col-md-4">
		<h3>Pelanggan</h3>
		<strong><?= $detail["nama_customer"]; ?></strong><br>
		<?= $detail["telepon_pelanggan"]; ?><br>
		<?= $detail["email_pelanggan"]; ?>
	</div>
</div>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama Produk</th>
			<th>Harga</th>
			<th>Jumlah</th>
			<th>Subtotal</th>
		</tr> 
	</thead>
	<tbody>

		<?php $no=1; ?>
		<!-- menggabungkan (join) tabel produk dengan tabel pembelian_produk -->
		<?php $ambil = $koneksi->query("SELECT * FROM pembelian_produk JOIN ikan ON pembelian_produk.id_ikan = ikan.id_ikan WHERE pembelian_produk.id_pembelian = '$_GET[id]'"); ?>
		<?php while($pecah = $ambil->fetch_assoc()): ?>
		<tr>
			<td><?= $no; ?>.</td>
			<td><?= $pecah["nama_ikan"]; ?></td>
			<td>Rp. <?= number_format($pecah["harga_ikan"]); ?>,-</td>
			<td><?= $pecah["jumlah"]; ?></td>
			<td>Rp. <?= number_format($pecah["jumlah"]*$pecah["harga_ikan"]); ?>,-</td>
		</tr>
		<?php $no++; ?>
		<?php endwhile; ?>

	</tbody>
</table>