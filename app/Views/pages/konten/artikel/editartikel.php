<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="header-dashboard pt-4 pb-2 bg-white">
    <div class="container">
        <h5>
            <small>
                <a href="<?= base_url('/konten/konten'); ?>">Konten / </a>
            </small>
            Edit Artikel
        </h5>
    </div>
</div>
<div class="container bg-white mt-4 p-4 mb-4 shadow-sm">
    <div class="row">
        <div class="col bg-light m-2 p-4">
            <form action="/Konten/artikel/artikel/updateprocess" method="POST" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <input type="hidden" name="id_konten" value="<?= $datakonten['id_konten']; ?>">
                <input type="hidden" name="gambarlama" value="<?= $datakonten['gambar_konten']; ?>">
                <div class="form-group">
                    <label for="judulkonten" class="text-dark">
                        <h5>Judul</h5>
                    </label>
                    <input type="text" class="form-control <?= ($validation->hasError('judulkonten')) ? 'is-invalid' : ''; ?>" id="judulkonten" value="<?= (old('judul_konten')) ? old('judul_konten') : $datakonten['judul_konten'] ?>" name="judulkonten" placeholder="Judul ...">
                    <div class="invalid-feedback">
                        <?= $validation->getError('judulkonten'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="publisher" class="text-dark">
                        <h5>Penulis</h5>
                    </label>
                    <input type="text" class="form-control <?= ($validation->hasError('publisher')) ? 'is-invalid' : ''; ?>" id="publisher" placeholder="Penulis Artikel ..." name="publisher" value="<?= (old('publisher')) ? old('publisher') : $datakonten['publisher'] ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('publisher'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="isikonten" class="text-dark">
                        <h5>Isi Konten</h5>
                    </label>
                    <textarea type="text" class="form-control <?= ($validation->hasError('isiartikel')) ? 'is-invalid' : ''; ?>" id="isikonten" placeholder="isi artikel ..." name="isiartikel" value="<?= (old('isiartikel')) ? old('isiartikel') : $datakonten['isi_konten'] ?>"><?= $datakonten['isi_konten']; ?></textarea>
                    <div class="invalid-feedback">
                        <?= $validation->getError('isiartikel'); ?>
                    </div>
                </div>

                <div class=" form-group row mb-3">
                    <label for="gambarkonten" class="col-sm-2 col-form-label">
                        <h5>Gambar Konten</h5>
                    </label>
                    <div class="col-sm-2">
                        <img src="<?= base_url('/img/konten/' . $datakonten['gambar_konten']); ?>" class="img-thumbnail img-preview-konten">
                    </div>
                    <div class="col-sm-8">
                        <div class="input-group">
                            <input type="file" class="form-control p-1 <?= ($validation->hasError('gambarkonten')) ? 'is-invalid' : ''; ?>" id="gambarkonten" value="<?= old('gambarkonten'); ?>" name="gambarkonten" onchange="previewImage()">
                            <div class="invalid-feedback">
                                <?= $validation->getError('gambarkonten'); ?>
                            </div>
                        </div>

                    </div>
                </div>
                <hr class="mt-4 mb-4">
                <div class="form-group row mb-3">
                    <div class="col float-right">
                        <button type="submit" class="btn btn-warna-orange float-right ml-2">Save</button>
                        <a href="<?= base_url('/konten/konten'); ?>" class="btn btn-primary-blue float-right">Kembali</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    function previewImage() {
        const sampul = document.querySelector('#gambarkonten');
        const imgPreview = document.querySelector('.img-preview-konten');

        const fileSampul = new FileReader;
        fileSampul.readAsDataURL(sampul.files[0]);
        fileSampul.onload = function(e) {
            imgPreview.src = e.target.result;
        }
    }
</script>
<?= $this->endSection(); ?>