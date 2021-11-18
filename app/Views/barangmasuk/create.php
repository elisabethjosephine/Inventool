<?= $this->extend('layout/template'); ?>


<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 class="my-4">Form Tambah Data Barang Masuk</h2>
            <form action="/Barang_masuk/save" method="POST">
                <?= csrf_field(); ?>
                <div class="mb-3">
                    <label for="nama_barang" class="form-label">Nama Barang</label>
                    <input type="text" class="form-control" id="nama_barang" name="nama_barang">
                </div>
                <div class="mb-3">
                    <label for="nama_supplier" class="form-label">Nama Supplier</label>
                    <input type="text" class="form-control" id="nama_supplier" name="nama_supplier">
                </div>
                <div class="mb-3">
                    <label for="tgl_masuk" class="form-label">Tanggal Masuk</label>
                    <input type="text" class="form-control" id="tgl_masuk" name="tgl_masuk">
                </div>
                <div class="mb-3">
                    <label for="gambar" class="form-label">Jumlah Masuk</label>
                    <input type="text" class="form-control" id="jml_masuk" name="jml_masuk">
                </div>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>

        </div>
    </div>
</div>
<?= $this->endSection(); ?>