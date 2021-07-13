<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="header-dashboard pt-4 pb-2 bg-white">
    <div class="container">
        <h5>
            <small>
                <a href="<?= base_url('/konten/konten'); ?>">Konten / </a>
                <a href="<?= base_url('/konten/obat/daftarobat'); ?>">Daftar Obat/ </a>
            </small>
            Edit Obat
        </h5>
    </div>
</div>
<div class="container bg-white mt-4 p-4 mb-4 shadow-sm">
    <div class="row">
        <div class="col bg-light m-2 p-4">
            <form action="/konten/obat/daftarobat/updateproses" method="POST" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <input type="hidden" name="id" value="<?= $dataobat['id_obat']; ?>">
                <div class="form-group">
                    <label for="namaobat" class="text-dark">
                        <h5>Nama Obat</h5>
                    </label>
                    <input type="text" class="form-control <?= ($validation->hasError('namaobat')) ? 'is-invalid' : ''; ?>" id="namaobat" value="<?= (old('namaobat')) ? old('namaobat') : $dataobat['nama_obat']; ?>" name="namaobat">
                    <div class="invalid-feedback">
                        <?= $validation->getError('namaobat'); ?>
                    </div>
                </div>

                <div class="p-5"></div>
                <hr class="mt-5 mb-4">
                <button type="submit" class="btn btn-info float-right ml-2">Save</button>
                <a href="<?= base_url('/konten/obat/daftarobat'); ?>" class="btn btn-primary-blue float-right">Kembali</a>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>