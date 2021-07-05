<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="header-dashboard pt-4 pb-2 bg-white">
    <div class="container">
        <h5>
            <small>
                <a href="<?= base_url('/konten/konten'); ?>">Konten / </a>
                <a href="<?= base_url('/konten/lifestyle/dashboard'); ?>">Pertanyaan Lifestyle / </a>
            </small>
            Edit Pertanyaan
        </h5>
    </div>
</div>
<div class="container bg-white mt-4 p-4 mb-4 shadow-sm">
    <div class="row">
        <div class="col bg-light m-2 p-4">
            <form action="/konten/lifestyle/editpertanyaan/updateprocess" method="POST" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <input type="hidden" value="<?= $pertanyaanlifestyle['id_datalifestyle']; ?>" name="id">
                <div class="form-group">
                    <label for="pertanyaanLifestyle" class="text-dark">
                        <h5>Pertanyaan</h5>
                    </label>
                    <input type="text" class="form-control <?= ($validation->hasError('pertanyaan')) ? 'is-invalid' : ''; ?>"" id=" pertanyaanLifestyle" value="<?= (old('pertanyaan')) ? old('pertanyaan') : $pertanyaanlifestyle['data_pertanyaan']; ?>" name="pertanyaan">
                    <div class="invalid-feedback">
                        <?= $validation->getError('pertanyaan'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="pertanyaanLifestyle" class="text-dark">
                        <h5>Jenis</h5>
                    </label>
                    <select class="form-control " id="pertanyaanLifestyle" name="jenis">
                        <?php foreach ($jenispertanyaan as $jp) : ?>
                            <?php if ($jp['jenis_lifestyle'] == $pertanyaanlifestyle['jenis_pertanyaan']) { ?>
                                <option value="<?= $jp['jenis_lifestyle']; ?>" selected><?= $jp['jenis_lifestyle']; ?></option>
                            <?php } else { ?>
                                <option value="<?= $jp['jenis_lifestyle']; ?>"><?= $jp['jenis_lifestyle']; ?></option>
                            <?php } ?>
                        <?php endforeach; ?>
                    </select>
                </div>
                <hr class="mt-4 mb-4">
                <div class="form-group row mb-3">
                    <div class="col float-right">
                        <button type="submit" class="btn btn-info float-right ml-2">Save</button>
                        <a href="<?= base_url('/konten/lifestyle/dashboard'); ?>" class="btn btn-primary-blue float-right">Kembali</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>