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
                            <form method="POST">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <button class="btn btn-primary-blue" type="submit" id="button-addon1"><i class="fas fa-search"></i></button>
                                    </div>
                                    <input type="text" class="form-control" placeholder="cari admin ..." aria-label="Example text with button addon" aria-describedby="button-addon1" name="keyword">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col float left">
                    <a href="<?= base_url('/pengaturan/admin/daftaradmin/tambah'); ?>" class="btn btn-warna-orange float-right">Tambah admin</a>
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
                            <?php if ($dataadmin) { ?>
                                <?php $num = 1 + (5 * ($currentpage - 1));; ?>
                                <?php foreach ($dataadmin as $da) : ?>
                                    <tr>
                                        <td><?= $num++; ?></td>
                                        <td><?= $da['username_admin']; ?></td>
                                        <td><?= $da['status']; ?></td>
                                        <td class="text-center">
                                            <a href="<?= base_url('pengaturan/admin/daftaradmin/detail/' . $da['id_admin']); ?>" class="btn btn-primary-blue">Detail</a>
                                            <a href="<?= base_url('pengaturan/admin/daftaradmin/update/' . $da['id_admin']); ?>" class="btn btn-info">Edit</a>
                                            <a href="" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php } else { ?>
                                <tr>
                                    <td colspan="4" class="p-5">
                                        <h5 class="warna-abu-font text-center"><i class="far fa-folder-open mr-2"></i>belum ada data</h5>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <div class="row">
                        <div class="col">
                            <?= $pager->links('admin', 'pager_satu'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>