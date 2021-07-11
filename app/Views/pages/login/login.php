<?= $this->extend('layout/login'); ?>

<?= $this->section('content'); ?>
<div class="jumbotron jumbotron-fluid mb-0">
    <div class="container container-login">
        <div class="row judul-login">
            <div class="col">
                <h3 class="text-white text-center">Telemedicine Apps Monitoring</h3>
            </div>
        </div>
        <div class="row pr-5 pl-5 pb-5">
            <div class="col-sm mb-2 text-white">
                <h4 class="text-login mb-3 mt-0 pt-0">___ ___ ______________________</h4>
                <h5 class="text-login">Aplikasi Telemedicine</h5>
                <p class="text-login p-login">Merupakan website untuk Tenaga Kesehatan dalam monitoring pasien hipertensi, memberikan Edukasi serta informasi-informasi lainnya kepada pasien</p>
            </div>
            <div class="col-sm">
                <div class="card shadow-sm card-login m-auto">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <h3 class=" text-center warna-orange mb-4"><b>LOG IN</b> </h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <form action="<?= base_url('/dashboard/dashboard'); ?>">
                                    <div class="form-group input-login">
                                        <input type="email" class="form-control inputan" id="email" placeholder="email ...">
                                    </div>
                                    <div class="form-group input-login">
                                        <input type="password" class="form-control inputan " id="password" placeholder="password ...">
                                        <div class="text-right">
                                            <small><a href="" class="lupa-password">Lupa Password ?</a></small>
                                        </div>
                                    </div>
                                    <div class="form-group text-center">
                                        <button type="submit" class="btn bg-warna-orange btn-login"><b>Masuk</b></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->endsection() ?>