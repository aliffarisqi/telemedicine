<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="header-dashboard pt-4 pb-2 bg-white">
    <div class="container">
        <h5>
            <small>
                <a href="<?= base_url('/penaturan/pengaturanadmin'); ?>">Pengaturan / </a>
                <a href="<?= base_url('/pengaturan/puskesmas/daftarpuskesmas'); ?>">Daftar Puskesmas/ </a>
            </small>
            Tambah Puskesmas
        </h5>
    </div>
</div>
<div class="container bg-white mt-4 p-4 mb-4 shadow-sm">
    <div class="row">
        <div class="col bg-light m-2 p-4 border rounded">
            <form action="<?= base_url('pengaturan/puskesmas/daftarpuskesmas/tambahproses'); ?>" method="POST" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <div class="form-group">
                    <label for="namaobat" class="text-dark">
                        <h6>Nama Puskesmas</h6>
                    </label>
                    <input type="text" class="form-control <?= ($validation->hasError('namapuskesmas')) ? 'is-invalid' : ''; ?>" id="namapuskesmas" name="namapuskesmas" autofocus placeholder="nama puskesmas ...">
                    <div class="invalid-feedback">
                        <?= $validation->getError('namapuskesmas'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="telephone" class="text-dark">
                        <h6>Nomer Telephone</h6>
                    </label>
                    <input type="number" class="form-control <?= ($validation->hasError('telephone')) ? 'is-invalid' : ''; ?>" id="telephone" name="telephone" autofocus placeholder="nomer telphone puskesmas ...">
                    <div class="invalid-feedback">
                        <?= $validation->getError('telephone'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="alamat" class="text-dark">
                        <h6>Alamat</h6>
                    </label>
                    <textarea type="text" class="form-control <?= ($validation->hasError('alamat')) ? 'is-invalid' : ''; ?>" id="alamat" name="alamat" autofocus placeholder="nama obat ..."></textarea>
                    <div class="invalid-feedback">
                        <?= $validation->getError('alamat'); ?>
                    </div>
                </div>
                <div class="p-2"></div>
                <hr class="mt-5 mb-4">
                <button type="submit" class="btn btn-warna-orange float-right ml-2">Tambah</button>
                <a href="<?= base_url('/pengaturan/puskesmas/daftarpuskesmas'); ?>" class="btn btn-primary-blue float-right">Kembali</a>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>