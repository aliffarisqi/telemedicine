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
            Tambah Kuesioner Kepatuhan
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
                                    <form action="/konten/kepatuhan/kuesionerkepatuhan/tambahkepatuhanproses" method="POST" enctype="multipart/form-data">
                                        <?= csrf_field(); ?>
                                        <div class="form-group">
                                            <label for="pertanyaankuesioner" class="text-dark">
                                                <h5>Pertanyaan Kuesioner</h5>
                                            </label>
                                            <input type="text" class="form-control <?= ($validation->hasError('pertanyaankuesioner')) ? 'is-invalid' : ''; ?>" id="pertanyaankuesioner" name="pertanyaankuesioner" autofocus placeholder="pertanyaan kuesioner ...">
                                            <div class="invalid-feedback">
                                                <?= $validation->getError('pertanyaankuesioner'); ?>
                                            </div>
                                        </div>

                                        <div class="p-5"></div>
                                        <hr class="mt-5 mb-4">
                                        <button type="submit" class="btn btn-warna-orange float-right ml-2">Tambah</button>
                                        <a href="<?= base_url('/konten/kepatuhan/kuesionerkepatuhan'); ?>" class="btn btn-primary-blue float-right">Kembali</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->endsection(); ?>