<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="header-dashboard pt-4 pb-2 bg-white">
    <div class="container">
        <h5>
            <small>
                <a href="<?= base_url('/konten/konten'); ?>">konten / </a>
                <a href="<?= base_url('/konten/lifestyle/dashboard'); ?>">Pertanyaan Lifestyle / </a>
            </small>
            Tambah Pertanyaan
        </h5>
    </div>
</div>
<div class="container bg-white mt-4 p-4 mb-4 shadow-sm">
    <div class="row">
        <div class="col bg-light m-2 p-4">
            <form action="/Konten/Lifestyle/tambahpertanyaan/save" method="POST" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <div class="form-group">
                    <label for="pertanyaanLifestyle" class="text-dark">
                        <h5>Pertanyaan</h5>
                    </label>
                    <input type="text" class="form-control" id="pertanyaanLifestyle" name="pertanyaan">
                </div>
                <div class="form-group">
                    <label for="jenisLifestyle" class="text-dark">
                        <h5>Jenis</h5>
                    </label>
                    <select class="form-control " id="jenisLifestyle" name="jenis">
                        <?php foreach ($jenisLifestyle as $jl) : ?>
                            <option value="<?= $jl['jenis_lifestyle']; ?>"><?= $jl['jenis_lifestyle']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <hr class="mt-4 mb-4">
                <div class="form-group row mb-3">
                    <div class="col float-right">
                        <button type="submit" class="btn btn-warna-orange float-right ml-2">Tambah</button>
                        <a href="<?= base_url('/konten/lifestyle/dashboard'); ?>" class="btn btn-primary-blue float-right">Kembali</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>