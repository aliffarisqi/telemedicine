<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="header-dashboard pt-4 pb-2 bg-white">
    <div class="container">
        <h5>Pengaturan</h5>
    </div>
</div>
<div class="container bg-white mt-4 p-4 mb-4 shadow-sm">
    <div class="row row-cols-1 row-cols-md-3 pb-4">
        <!-- check list -->
        <div class="col mb-2">
            <div class="card bg-danger text-white">
                <div class="card-body p-2">
                    <div class="row justify-content-center ">
                        <div class="col-6 ">
                            <div class="row p-2">
                                <img src="/img/hospital.png" alt="" class="img-card-lifestyle">
                            </div>
                            <div class="row">
                                <h5 class="card-title ml-1">Puskesmas</h5>
                            </div>
                        </div>
                        <div class="col-5 text-center">
                            <h3 class="jumlah-pertanyaan m-0">4</h3>
                            <h6 class="text-center m-0">Puskesmas</h6>
                            <a href="<?= base_url('/pengaturan/puskesmas/daftarpuskesmas/tambahpuskesmas'); ?>" class="btn btn-light rounded m-2 text-dark"><small> Tambah +</small></a>
                        </div>
                    </div>
                </div>
                <a href="<?= base_url('/pengaturan/puskesmas/daftarpuskesmas'); ?>" class="btn btn-danger card-footer text-center text-white">Lihat puskesmas <i class="fas fa-angle-double-right ml-2"></i></a>
            </div>
        </div>
        <!-- Kepatuhan -->
        <div class="col mb-2">
            <div class="card bg-info text-white">
                <div class="card-body p-2">
                    <div class="row justify-content-center ">
                        <div class="col-6 ">
                            <div class="row p-2">
                                <img src="/img/admin.png" alt="" class="img-card-kepatuhan">
                            </div>
                            <div class="row">
                                <h5 class="card-title ml-1">Admin</h5>
                            </div>
                        </div>
                        <div class="col-5 text-center">
                            <h3 class="jumlah-pertanyaan m-0">5</h3>
                            <h6 class="text-center m-0">Admin</h6>
                            <a href="<?= base_url('/pengaturan/admin/daftaradmin/tambah'); ?>" class="btn btn-light text-dark rounded m-2"><small> Tambah +</small></a>
                        </div>
                    </div>
                </div>
                <a href="<?= base_url('/pengaturan/admin/daftaradmin'); ?>" class="btn btn-info card-footer text-center text-white">Lihat Admin<i class="fas fa-angle-double-right ml-2"></i></a>
            </div>
        </div>
        <!-- OBAT -->
        <div class="col mb-2">
            <div class="card bg-secondary text-white">
                <div class="card-body p-2">
                    <div class="row justify-content-center">
                        <img src="/img/akun.png" alt="" class="img-card-akun">
                    </div>
                    <div class="row">
                        <div class="col text-center">
                            <h5 class="card-title ">Akun Saya</h4>
                        </div>
                    </div>
                </div>
                <a href="<?= base_url('/konten/obat/daftarobat'); ?>" class="btn btn-secondary card-footer text-center text-white">Selengkapnya <i class="fas fa-angle-double-right ml-2"></i></a>
            </div>
        </div>
    </div>
    <div class="p-5"></div>
    <div class="p-4"></div>
</div>
</div>

</div>
<?= $this->endSection(); ?>