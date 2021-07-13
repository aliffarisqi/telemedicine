<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="header-dashboard pt-4 pb-2 bg-white">
    <div class="container">
        <h5>
            <small>
                <a href="<?= base_url('/konten/konten'); ?>">Konten / </a>
                <a href="<?= base_url('/konten/lifestyle/lifestyle'); ?>">Pertanyaan Lifestyle / </a>
            </small>
            Detail Pertanyaan
        </h5>
    </div>
</div>
<div class="container bg-white mt-4 p-4 mb-4 shadow-sm">
    <div class="row">
        <div class="col bg-light m-2 p-4">
            <form action="">
                <div class="form-group">
                    <label for="pertanyaanLifestyle" class="text-dark">
                        <h5>Pertanyaan</h5>
                    </label>
                    <input type="text" class="form-control" id="pertanyaanLifestyle" value="<?= $pertanyaanlifestyle['data_pertanyaan']; ?>" disabled>
                </div>
                <div class="form-group">
                    <label for="pertanyaanLifestyle" class="text-dark">
                        <h5>Jenis</h5>
                    </label>
                    <input type="text" class="form-control" id="pertanyaanLifestyle" value="<?= $pertanyaanlifestyle['jenis_pertanyaan']; ?>" disabled>
                </div>
            </form>
            <hr class="mt-4 mb-4">
            <a href="<?= base_url('/konten/lifestyle/lifestyle/update/' . $pertanyaanlifestyle['id_datalifestyle']); ?>" class="btn btn-info float-right ml-2">Edit</a>
            <a href="<?= base_url('/konten/lifestyle/lifestyle'); ?>" class="btn btn-primary-blue float-right">Kembali</a>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>