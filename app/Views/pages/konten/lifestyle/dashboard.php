<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="header-dashboard pt-4 pb-2 bg-white">
    <div class="container">
        <h5>
            <small>
                <a href="<?= base_url('/konten/konten'); ?>">Konten</a>
            </small>
            / Pertanyaan Lifestyle
        </h5>
    </div>
</div>
<div class="container bg-white mt-4 p-4 mb-4 shadow">
    <div class="row">
        <div class="col dashboard-content mt-2">
            <!-- Form Search -->
            <div class="row mb-4">
                <div class="col-sm-8">
                    <form class="form-inline">
                        <input class="form-control mr-3" type="search" placeholder="Search">
                        <button class="btn btn-primary-blue my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
                <div class="col-sm-4 ">
                    <a href="<?= base_url('/konten/lifestyle/tambahpertanyaan'); ?>" class="btn btn-warna-orange float-right">Tambah Pertanyaan</a>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <table class="table table-bordered">
                        <thead class="bg-table-lifestyle">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Pertanyaan</th>
                                <th scope="col">Jenis</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Merokok</td>
                                <td>Edukasi perilaku</td>
                                <td class="text-center">
                                    <a href="<?= base_url('/konten/lifestyle/lihatpertanyaan'); ?>" class="btn btn-primary-blue">Detail</a>
                                    <a href="<?= base_url('/konten/lifestyle/editpertanyaan'); ?>" class="btn btn-info">Edit</a>
                                    <a href="" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Terpapar Asap Rokok</td>
                                <td>Edukasi perilaku</td>
                                <td class="text-center">
                                    <a href="<?= base_url('/konten/lifestyle/lihatpertanyaan'); ?>" class="btn btn-primary-blue">Detail</a>
                                    <a href="" class="btn btn-info">Edit</a>
                                    <a href="" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Konsumsi Gula</td>
                                <td>Dibatasi</td>
                                <td class="text-center">
                                    <a href="<?= base_url('/konten/lifestyle/lihatpertanyaan'); ?>" class="btn btn-primary-blue">Detail</a>
                                    <a href="" class="btn btn-info">Edit</a>
                                    <a href="" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Konsumsi Buah</td>
                                <td>Ditingkatkan</td>
                                <td class="text-center">
                                    <a href="" class="btn btn-primary-blue">Detail</a>
                                    <a href="" class="btn btn-info">Edit</a>
                                    <a href="" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>