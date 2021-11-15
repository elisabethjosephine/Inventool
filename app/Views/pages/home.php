<?= $this->extend('layout/template') ?>


<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">

            <a class="short" href="">selengkapnya</a>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <h2 class="my-3">Daftar Barang Masuk</h2>
            <table class="table mt-2">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td colspan="2">Larry the Bird</td>
                        <td>@twitter</td>
                    </tr>
                </tbody>
            </table>
            <a class="short" href="">selengkapnya</a>
        </div>
    </div>
</div>



<?= $this->endSection(); ?>