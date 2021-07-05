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
                <div class="col-sm-8">
                    <form class="form-inline">
                        <input class="form-control mr-3" type="search" placeholder="Search">
                        <button class="btn btn-primary-blue my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
                <div class="col-sm-4 ">
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
                                        <a href="<?= base_url('/konten/lifestyle/lihatpertanyaan/detail/' . $dpl['id_datalifestyle']); ?>" class="btn btn-primary-blue">Detail</a>
                                        <a href="<?= base_url('/konten/lifestyle/editpertanyaan/update/' . $dpl['id_datalifestyle']); ?>" class="btn btn-info">Edit</a>
                                        <a href="<?= base_url('/konten/lifestyle/lihatpertanyaan/delete/' . $dpl['id_datalifestyle']); ?>" class="btn btn-danger" onclick="return confirm('apakah anda yakin ? ');">Delete</a>
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