<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="header-dashboard pt-4 pb-2 bg-white">
    <div class="container">
        <h5>
            <small>
                <a href="<?= base_url('/pengaturan/pengaturanadmin'); ?>">Pengaturan / </a>
                <a href="<?= base_url('/pengaturan/admin/daftaradmin'); ?>">Daftar Admin / </a>
            </small>
            Tambah Admin
        </h5>
    </div>
</div>
<div class="container bg-white mt-4 p-4 mb-4 shadow-sm">
    <div class="row">
        <div class="col bg-light m-2 p-4">
            <form action="<?= base_url('pengaturan/admin/daftaradmin/tambahproses'); ?>" method="POST" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <div class="form-group">
                    <label for="username" class="text-dark">
                        <h6>Username</h6>
                    </label>
                    <input type="text" class="form-control <?= ($validation->hasError('username')) ? 'is-invalid' : ''; ?>" id="username" value="<?= old('username'); ?>" name="username" placeholder="nama lengkap ...">
                    <div class="invalid-feedback">
                        <?= $validation->getError('username'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="text-dark">
                        <h6>email</h6>
                    </label>
                    <input type="text" class="form-control <?= ($validation->hasError('email')) ? 'is-invalid' : ''; ?>" id="email" value="<?= old('email'); ?>" name="email" placeholder="email ...">
                    <div class="invalid-feedback">
                        <?= $validation->getError('email'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="puskesmas" class="text-dark">
                        <h6>Puskesmas</h6>
                    </label>
                    <select class="form-control " id="puskesmas" name="puskesmas">
                        <?php foreach ($datapuskesmas as $da) : ?>
                            <option value="<?= $da['id_puskesmas']; ?>"><?= $da['nama_puskesmas']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="status" class="text-dark">
                        <h6>Status</h6>
                    </label>
                    <select class="form-control " id="status" name="status">
                        <option value="Super Admin">Super Admin</option>
                        <option value="Admin">Admin</option>
                    </select>
                </div>
                <hr class="mt-4">
                <div class="row ml-2 mr-2 mt-4 bg-white p-2 shadow-sm">
                    <div class="col">
                        <div class="form-group">
                            <label for="password" class="text-dark">
                                <h6>Password</h6>
                            </label>
                            <input type="password" class="form-control <?= ($validation->hasError('password')) ? 'is-invalid' : ''; ?>" id="password" value="<?= old('password'); ?>" name="password" placeholder="password ...">
                            <div class="invalid-feedback">
                                <?= $validation->getError('password'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="re-password" class="text-dark">
                                <h6>ketik ulang password</h6>
                            </label>
                            <input type="password" class="form-control <?= ($validation->hasError('re-password')) ? 'is-invalid' : ''; ?>" id="re-password" value="<?= old('re-password'); ?>" name="re-password" placeholder="re-password ...">
                            <div class="invalid-feedback">
                                <?= $validation->getError('re-password'); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="mt-4 mb-4">
                <button type="submit" class="btn btn-warna-orange ml-2 float-right">Tambah</button>
                <a href="<?= base_url('pengaturan/admin/daftaradmin'); ?>" class="btn btn-primary-blue float-right mr-2">Kembali</a>
            </form>


        </div>
    </div>
</div>
<?= $this->endSection(); ?>