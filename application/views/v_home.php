<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home</title>
	<!-- Load Bootstrap -->
	<link rel="stylesheet" href="<?= base_url('assets/bootstrap-4.3.1-dist/css/bootstrap.min.css') ?>">

	<!-- Custom style -->
	<style>
		.header {
			background-image: url('<?= base_url() ?>/assets/images/undraw_medicine_b1ol.png');
			background-size: auto 100%;
			background-repeat: no-repeat;
			background-position: right;
		}
	</style>
</head>
<body class="bg-light">

<!-- Header -->
<div class="container px-4 py-5 my-4 jumbotron bg-white header" />
	<h1 class="display-4 my-5">Selamat datang!</h1>
</div>

<!-- Search -->
<div class="container p-4 mb-4 bg-white rounded">
	<h5>Cari obat</h5>

	<form action="<?= site_url('home') ?>" method="get">
		<div class="form-group">
			<div class="input-group">
				<input type="text" class="form-control text-center" name="nama_obat" value="<?php if (isset($_GET['nama_obat'])) echo $_GET['nama_obat']; ?>" placeholder="Ketik nama obat" autofocus />
    			<div class="input-group-prepend">
					<button type="submit" class="btn btn-success rounded-right">Cari</button>
				</div>
				<?php 
					if (isset($_GET['nama_obat'])) { ?>
						<a href="<?= site_url('home') ?>"><button type="button" class="btn btn-link text-danger">Bersihkan pencarian</button></a>
						<?php
					}
				?>
			</div>
		</div>
	</form>
</div>

<!-- Daftar data -->
<div class="container p-4 bg-white rounded">
	<div class="d-flex justify-content-between mb-4">
		<h5>Data obat</h5>
		<a href="<?= site_url('home/tambahobat') ?>"><button class="btn btn-success">Tambah obat</button></a>
	</div>
	
	<table class="table">
		<thead class="thead-light">
			<th>#</th>
			<th>Nama obat</th>
			<th>Deskripsi</th>
			<th>Kategori</th>
			<th>Harga</th>
			<th>Stok</th>
			<th>Expire</th>
			<th>Penyajian</th>
			<th>Pabrik</th>
			<th>Aksi</th>
		</thead>
		<tbody>
			<?php
				$no = 1;
				foreach ($tampil_obat->result() as $obat) { ?>
					<tr>
						<td><?= $no++ ?></td>
						<td><?= $obat->nama_obat ?></td>
						<td><?= $obat->deskripsi ?></td>
						<td><?= $obat->kategori ?></td>
						<td>Rp <?= number_format($obat->harga) ?></td>
						<td><?= number_format($obat->stok) ?></td>
						<td><?= $obat->expire ?></td>
						<td><?= $obat->penyajian ?></td>
						<td><?= $obat->pabrik ?></td>
						<td>
							<a href="<?= site_url('home/editobat') ?>/<?= $obat->id_obat ?>"><button class="btn btn-warning text-white">EDIT</button></a>
							<a href="<?= site_url('home/deleteobat') ?>/<?= $obat->id_obat ?>"><button class="btn btn-danger text-white">HAPUS</button></a>
						</td>
					</tr>
					<?php
				}
			?>
		</tbody>
	</table>

</div>


	
</body>
</html>