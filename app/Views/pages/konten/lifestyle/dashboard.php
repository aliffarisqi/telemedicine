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
                    <a href="<?= base_url('/konten/lifestyle/tambahpertanyaan/'); ?>" class="btn btn-warna-orange float-right">Tambah Pertanyaan</a>
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
                            <?php $i = 1; ?>
                            <?php foreach ($datapertanyaanlifestyle as $dpl) : ?>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td><?= $dpl['data_pertanyaan']; ?></td>
                                    <td><?= $dpl['jenis_pertanyaan']; ?></td>
                                    <td class="text-center">
                                        <a href="<?= base_url('/konten/lifestyle/lihatpertanyaan/detail/' . $dpl['id_datalifestyle']); ?>" class="mb-2 btn btn-primary-blue">Detail</a>
                                        <a href="<?= base_url('/konten/lifestyle/editpertanyaan/update/' . $dpl['id_datalifestyle']); ?>" class="mb-2 btn btn-info">Edit</a>
                                        <a href="<?= base_url('/konten/lifestyle/lihatpertanyaan/delete/' . $dpl['id_datalifestyle']); ?>" class="mb-2 btn btn-danger" onclick="return confirm('apakah anda yakin Untuk Menghapus Pertanyaan ini ? ');">Delete</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>