<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="header-dashboard pt-4 pb-2 bg-white">
    <div class="container">
        <h5>
            <small>
                <a href="<?= base_url('/pengaturan/pengaturanadmin'); ?>">Pengaturan</a>
            </small>
            / Daftar admin
        </h5>
    </div>
</div>
<div class="container bg-white mt-4 p-4 mb-4 shadow-sm">
    <div class="row">
        <div class="col dashboard-content mt-2">
            <!-- Form Search -->
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif; ?>
            <div class="row mb-4">
                <div class="col">
                    <div class="row">
                        <div class="col">
                            <form>
                                <div class="row">
                                    <div class="col-9">
                                        <input class="form-control m-0" type="search" placeholder="Search">
                                    </div>
                                    <div class="col-3">
                                        <button class="btn btn-primary-blue" type="submit"><i class="fas fa-search"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col float left">
                    <a href="<?= base_url('/konten/obat/daftarobat/tambahobat'); ?>" class="btn btn-warna-orange float-right">Tambah admin</a>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <table class="table table-bordered">
                        <thead class="bg-table-lifestyle">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">status</th>
                                <th scope="col" class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Bayu Alif Farisqi</td>
                                <td>super admin</td>
                                <td class="text-center">
                                    <a href="" class="btn btn-primary-blue">Detail</a>
                                    <a href="" class="btn btn-info">info</a>
                                    <a href="" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Rifqi Luthfi Naldi</td>
                                <td>super admin</td>
                                <td class="text-center">
                                    <a href="" class="btn btn-primary-blue">Detail</a>
                                    <a href="" class="btn btn-info">info</a>
                                    <a href="" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Qurrota Nastiti</td>
                                <td>admin</td>
                                <td class="text-center">
                                    <a href="" class="btn btn-primary-blue">Detail</a>
                                    <a href="" class="btn btn-info">info</a>
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