<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="my-4">Daftar Lokasi</h2>
            <a href="/lokasi/create" class="btn btn-primary mb-2" style="float: right;">Tambah Lokasi</a>
            <table class="table mt-2">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Penanggung Jawab</th>
                        <th scope="col">Keterangan</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1 ?>
                    <?php foreach ($lokasi as $l) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $l['nama_lokasi']; ?></td>
                            <td><?= $l['penanggung_jawab']; ?></td>
                            <td><?= $l['keterangan']; ?></td>
                            <td><a href="/lokasi/<?= $l['id_lokasi']; ?>" class="btn btn-success">Upddate</a>
                                <a href="/lokasi/<?= $l['id_lokasi']; ?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>