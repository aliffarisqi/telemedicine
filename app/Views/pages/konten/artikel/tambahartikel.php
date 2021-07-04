<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="header-dashboard pt-4 pb-2 bg-white">
    <div class="container">
        <h5>
            <small>
                <a href="<?= base_url('/konten/konten'); ?>">Konten / </a>
            </small>
            Tambah Artikel
        </h5>
    </div>
</div>
<div class="container bg-white mt-4 p-4 mb-4 shadow-sm">
    <div class="row">
        <div class="col bg-light m-2 p-4">
            <form action="">
                <div class="form-group">
                    <label for="judulkonten" class="text-dark">
                        <h5>Judul</h5>
                    </label>
                    <input type="text" class="form-control" id="judulkonten" value="">
                </div>
                <div class="form-group">
                    <label for="isikonten" class="text-dark">
                        <h5>Isi Konten</h5>
                    </label>
                    <textarea type="text" class="form-control" id="isikonten" placeholder="isi artikel ..."></textarea>
                </div>
                <div class=" form-group row mb-3">
                    <label for="gambarkonten" class="col-sm-2 col-form-label">
                        <h5>Gambar Konten</h5>
                    </label>
                    <div class="col-sm-2">
                        <img src="/img/konten/kontent1.jpeg" class="img-thumbnail img-preview">
                    </div>
                    <div class="col-sm-8">
                        <div class="input-group">
                            <input type="file" class="form-control p-1" id="gambarkonten" value="">
                        </div>
                    </div>
                </div>
            </form>
            <hr class="mt-4 mb-4">
            <a href="<?= base_url('/konten/artikel/editartikel'); ?>" class="btn btn-warna-orange float-right ml-2">Tambah</a>
            <a href="<?= base_url('/konten/konten'); ?>" class="btn btn-primary-blue float-right">Kembali</a>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>