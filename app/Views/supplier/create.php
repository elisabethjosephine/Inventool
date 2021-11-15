<?= $this->extend('layout/template'); ?>


<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 class="my-4">Form Tambah Data Supplier</h2>
            <form action="/supplier/save" method="POST" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <div class="mb-3">
                    <label for="nama_supplier" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama_supplier" name="nama_supplier" autofocus value="<?= old('nama_supplier'); ?>" required>
                </div>
                <div class="mb-3">
                    <label for="alamat_supplier" class="form-label">Alamat</label>
                    <input type="text" class="form-control" name="alamat_supplier" id="alamat_supplier" value="<?= old('alamat_supplier'); ?>" required>
                </div>
                <div class="mb-3">
                    <label for="telp_supplier" class="form-label">Telepon</label>
                    <input type="text" class="form-control" name="alamat_supplier" id="alamat_supplier" value="<?= old('alamat_supplier'); ?>" required>
                </div>
                <div class="mb-3 ">
                    <label for="gambar" class="form-label">Gambar</label>
                    <div class="col-sm-2 mb-3">
                        <img src="/img/default.png" class="img-thumbnail img-preview">
                    </div>
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="gambar">Upload</label>
                        <input type="file" class="form-control <?= ($validation->hasError('gambar')) ? 'is-invalid' : ''; ?>" id="gambar" name="gambar" onchange="previewImg()">
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>

        </div>
    </div>
</div>
<?= $this->endSection(); ?>