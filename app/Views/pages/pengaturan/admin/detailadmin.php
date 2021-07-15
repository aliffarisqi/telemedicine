<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="header-dashboard pt-4 pb-2 bg-white">
    <div class="container">
        <h5>
            <small>
                <a href="<?= base_url('/pengaturan/pengaturanadmin'); ?>">Pengaturan / </a>
                <a href="<?= base_url('/pengaturan/admin/daftaradmin'); ?>">Daftar Admin / </a>
            </small>
            Detail Admin
        </h5>
    </div>
</div>
<div class="container bg-white mt-4 p-4 mb-4 shadow-sm">
    <div class="row">
        <div class="col bg-light m-2 p-4">
            <?php foreach ($dataadmin as $da) : ?>
                <form action="">
                    <div class="form-group">
                        <label for="username" class="text-dark">
                            <h5>Username</h5>
                        </label>
                        <input type="text" class="form-control" id="username" value="<?= $da->username_admin; ?>" disabled>
                    </div>
                    <div class="form-group">
                        <label for="email" class="text-dark">
                            <h5>Email</h5>
                        </label>
                        <input type="text" class="form-control" id="email" value="<?= $da->email_admin; ?>" disabled>
                    </div>
                    <div class="form-group">
                        <label for="puskesmas" class="text-dark">
                            <h5>Puskesmas</h5>
                        </label>
                        <input type="text" class="form-control" id="puskesmas" value="<?= $da->nama_puskesmas; ?>" disabled>
                    </div>
                    <div class="form-group">
                        <label for="puskesmas" class="text-dark">
                            <h5>Status</h5>
                        </label>
                        <input type="text" class="form-control" id="puskesmas" value="<?= $da->status; ?>" disabled>
                    </div>
                </form>
                <hr class="mt-4 mb-4">
                <a href="<?= base_url('/pengaturan/admin/daftaradmin/update/' . $da->id_admin); ?>" class="btn btn-info float-right ml-2">Edit</a>
                <a href="<?= base_url('pengaturan/admin/daftaradmin'); ?>" class="btn btn-primary-blue float-right">Kembali</a>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>