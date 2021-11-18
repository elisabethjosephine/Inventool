<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card mt-5" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="/img/<?= $supplier['gambar']; ?>" class="img-fluid rounded-start">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?= $supplier['nama_supplier']; ?></h5>
                            <p class="card-title"><?= $supplier['telp_supplier']; ?></p>
                            <p class="card-text"><?= $supplier['alamat_supplier']; ?></p>
                            <a href="#" class="btn" style="background-color: #dc3545">Hapus</a>
                            <a href=" #" class="btn" style="background-color:#FFC107;">Ubah</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>