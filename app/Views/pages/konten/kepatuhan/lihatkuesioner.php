<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="header-dashboard pt-4 pb-2 bg-white">
    <div class="container">
        <h5>
            <small>
                <a href="<?= base_url('/konten/konten'); ?>">Konten / </a>
            </small>
            <small>
                <a href="<?= base_url('/konten/kepatuhan/kuesionerkepatuhan'); ?>">Kuesioner / </a>
            </small>
            Lihat Kuesioner Kepatuhan
        </h5>
    </div>
</div>
<div class="container bg-white mt-4 p-4 mb-4 shadow-sm">
    <div class="row">
        <div class="col bg-light m-2 p-4">
            <div class="row">
                <div class="col">
                    <div class="card rounded-lg m-3">
                        <div class="card-header bg-info">
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h4>Kuesioner Kepatuhan</h3>
                                </div>
                            </div>
                            <hr>

                        </div>
                    </div>
                    <?php $num = 1; ?>
                    <?php foreach ($daftarkuesioner as $dk) : ?>
                        <div class="card rounded-lg m-3 card-kuesioner">
                            <div class="card-body">
                                <h6 class="bg-light p-2 rounded"><?= $num++ . " . " . $dk['nama_pertanyaan']; ?><b class="text-danger">*</b></h6>
                                <hr>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="option1" id="option1" value="option1" checked>
                                    <label class="form-check-label" for="option1">
                                        selalu
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="option1" id="option1" value="option1" checked>
                                    <label class="form-check-label" for="option1">
                                        sering
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="option1" id="option1" value="option1" checked>
                                    <label class="form-check-label" for="option1">
                                        kadang - kadang
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="option1" id="option1" value="option1" checked>
                                    <label class="form-check-label" for="option1">
                                        Jarang
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="option1" id="option1" value="option1" checked>
                                    <label class="form-check-label" for="option1">
                                        Tidak Pernah
                                    </label>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    <div class="row ">
                        <div class="col mr-3 text-right">
                            <a href="<?= base_url('konten/kepatuhan/kuesionerkepatuhan'); ?>" class="btn btn-primary-blue">kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->endsection(); ?>