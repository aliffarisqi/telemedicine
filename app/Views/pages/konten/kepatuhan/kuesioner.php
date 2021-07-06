<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="header-dashboard pt-4 pb-2 bg-white">
    <div class="container">
        <h5>
            <small>
                <a href="<?= base_url('/konten/konten'); ?>">Konten / </a>
            </small>
            Kuesioner Kepatuhan
        </h5>
    </div>
</div>
<div class="container bg-white mt-4 p-4 mb-4 shadow-sm">
    <div class="row">
        <div class="col bg-light m-2 p-4">
            <div class="row">
                <div class="col text-center">
                    <h5>
                        <a href="<?= base_url('/konten/kepatuhan/kuesionerkepatuhan'); ?>" class="btn btn-light text-info">kepatuhan</a>
                        | <a href="<?= base_url('/konten/kepatuhan/tanggapan'); ?>" class="btn btn-light text-info">Tanggapan</a>
                    </h5>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col">
                    <form action="">
                        <div class="card rounded-lg m-3">
                            <div class="card-header bg-info">
                            </div>
                            <div class="card-body">
                                <h3>Kuesioner Kepatuhan</h3>
                                <hr>
                                <div class="form-group">
                                    <label for="email">Email address <b class="text-danger">*</b></label>
                                    <input type="email" class="form-control form-kuesioner border-0 " id="email">
                                </div>
                            </div>
                        </div>
                        <div class="card rounded-lg m-3 card-kuesioner">
                            <div class="card-body">
                                <h6 class="bg-light p-2 rounded">1. Saya Lupa Minum Obat<b class="text-danger">*</b></h6>
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
                                <div class="row">
                                    <div class="col text-right">
                                        <a href="" class="btn btn-info mr-2 ">Edit</a>
                                        <a href="" class="btn btn-danger ">Delete</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="card rounded-lg m-3 card-kuesioner">
                            <div class="card-body">
                                <h6 class="bg-light p-2 rounded">2. Saya Mengubah Dosis Minum Obat<b class="text-danger">*</b></h6>
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
                                <div class="row">
                                    <div class="col text-right">
                                        <a href="" class="btn btn-info mr-2 ">Edit</a>
                                        <a href="" class="btn btn-danger ">Delete</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="card rounded-lg m-3 card-kuesioner">
                            <div class="card-body">
                                <h6 class="bg-light p-2 rounded">3. Saya Berhenti Minum Obat Sementara<b class="text-danger">*</b></h6>
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
                                <div class="row">
                                    <div class="col text-right">
                                        <a href="" class="btn btn-info mr-2 ">Edit</a>
                                        <a href="" class="btn btn-danger ">Delete</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="card rounded-lg m-3 card-kuesioner">
                            <div class="card-body">
                                <h6 class="bg-light p-2 rounded">4. Saya Memutuskan Untuk Meminum Obat Dengan Dosis Kecil<b class="text-danger">*</b></h6>
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
                                <div class="row">
                                    <div class="col text-right">
                                        <a href="" class="btn btn-info mr-2 ">Edit</a>
                                        <a href="" class="btn btn-danger ">Delete</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="card rounded-lg m-3 card-kuesioner">
                            <div class="card-body">
                                <h6 class="bg-light p-2 rounded">5. Saya Minum Obat Kurang Dari Petunjuk Sebenarnya<b class="text-danger">*</b></h6>
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
                                <div class="row">
                                    <div class="col text-right">
                                        <a href="" class="btn btn-info mr-2 ">Edit</a>
                                        <a href="" class="btn btn-danger ">Delete</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->endsection(); ?>