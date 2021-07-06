<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="header-dashboard pt-4 pb-2 bg-white">
    <div class="container">
        <h5>
            <small>
                <a href="<?= base_url('/konten/konten'); ?>">Konten / </a>
            </small>
            Detail Artikel
        </h5>
    </div>
</div>
<div class="container bg-white mt-4 p-4 mb-4 shadow-sm">
    <div class="row">
        <div class="col bg-light m-2 p-4">
            <div class="card mb-3">
                <img src="<?= base_url('/img/konten/' . $datakonten['gambar_konten']); ?>" class="card-img-top">
                <div class="card-body text-dark">
                    <h2 class="card-title"><?= $datakonten['judul_konten']; ?></h2>
                    <p class="card-text text-justify"><?= $datakonten['isi_konten']; ?></p>
                    <h6 class="card-text">Di tulis oleh : <?= $datakonten['publisher']; ?></h6>
                    <hr>
                    <p class="card-text"><small class="text-muted">Upload at : <?= $datakonten['tanggal_publish']; ?></small></p>
                </div>
            </div>
            <hr class="mt-4 mb-4">
            <div class=" row mb-3">
                <div class="col float-right">
                    <a href="<?= base_url('/konten/artikel/artikel/update/' . $datakonten['id_konten']); ?>" class="btn btn-info float-right">Edit</a>
                    <a href="<?= base_url('/konten/konten'); ?>" class="btn btn-primary-blue float-right mr-2">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>