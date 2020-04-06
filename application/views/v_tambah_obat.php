<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Obat</title>
	<!-- Load Bootstrap -->
	<link rel="stylesheet" href="<?= base_url('assets/bootstrap-4.3.1-dist/css/bootstrap.min.css') ?>">
</head>
<body class="bg-light">

<!-- Tambah data -->
<div class="container p-4 my-4 bg-white rounded">
    <h5 class="mb-4">Tambah obat</h5>
    
    <form action="<?= site_url('home/insertobat') ?>" method="post">
        <div class="form-group">
            <label for="inputNamaObat">Nama obat</label>
            <input type="text" class="form-control" id="inputNamaObat" name="nama_obat" placeholder="Masukkan nama obat" />
        </div>
        <div class="form-group">
            <label for="inputDeskripsi">Deskripsi</label>
            <textarea class="form-control" name="deskripsi" id="inputDeskripsi" rows="3" placeholder="Masukkan deskripsi obat"></textarea>
        </div>
        <div class="form-group">
            <label for="inputKategori">Kategori</label>
            <input type="text" class="form-control" id="inputKategori" name="kategori" placeholder="Masukkan kategori obat" />
        </div>
        <div class="form-group">
            <label for="inputHarga">Harga</label>
            <input type="number" class="form-control" id="inputHarga" name="harga" placeholder="Masukkan harga obat" />
        </div>
        <div class="form-group">
            <label for="inputStok">Stok</label>
            <input type="number" class="form-control" id="inputStok" name="stok" placeholder="Masukkan stok obat" />
        </div>
		<div class="form-group">
            <label for="inputExpire">Expire</label>
            <input type="date" class="form-control" id="inputExpire" name="expire" placeholder="Masukkan tanggal expire obat" />
        </div>
		<div class="form-group">
            <label for="inputPenyajian">Penyajian</label>
            <input type="text" class="form-control" id="inputPenyajian" name="penyajian" placeholder="Masukkan penyajian" />
        </div>
		<div class="form-group">
            <label for="inputPabrik">Pabrik</label>
            <input type="text" class="form-control" id="inputPabrik" name="pabrik" placeholder="Masukkan pabrik" />
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
</div>

</body>
</html>