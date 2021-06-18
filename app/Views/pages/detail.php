<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <!-- isi detail -->
    <div class="row mt-5 pr-4">
        <!-- left side profile -->
        <div class="col-3 text-center">
            <!-- image profile -->
            <div class="row">
                <div class="col">
                    <img src="/img/pasien/default.jpg" alt="" class="profile-page-detail img-fluid">
                </div>
            </div>
            <!-- data pasien -->
            <div class="row mt-4">
                <div class="col data-pasien-detail">
                    <h5>Nama</h5>
                    <p>Mochamad Ridho</p>
                    <h5>Usia</h5>
                    <p>20</p>
                    <h5>BB/TB</h5>
                    <p>50/155</p>
                </div>
            </div>
            <div class="row m-2">
                <a href="" class="btn btn-lainya">Lainya</a>
            </div>
            <div class="row m-2">
                <a href="" class="btn btn-lifestyle">Lifestyle</a>
            </div>
        </div>
        <!-- right side monitoring -->
        <div class="col-9 right-side-detail">
            <!-- header -->
            <div class="row m-3">
                <div class="col title-monitoring-detail ">
                    <h4>Monitoring Pasien</h4>
                </div>
                <div class="col">
                    <a href="" class="btn btn-hasil-grafik float-right">Hasil</a>
                </div>
            </div>
            <!-- card grafik -->
            <div class="row mr-3 ml-3">
                <div class="col bg-grafik-detail p-3">
                    <h5>grafik</h5>
                </div>
            </div>
            <!-- analisis rekomendasi -->
            <div class="row m-3">
                <div class="col bg-analisis-rekomendasi p-3">
                    <div class="row">
                        <div class="col title-analisis-rekomendasi">
                            <h5>Analisis dan Rekomendasi</h5>
                        </div>
                        <div class="col">
                            <a href="" class="btn btn-tambah-analisis float-right">+</a>
                        </div>
                    </div>

                    <!-- card analisis rekomendasi -->
                    <div class="row pl-3 pr-3">
                        <div class="card text-center mr-2" style="max-width: 18rem;">
                            <div class="card-header header-card-analisis">
                                21/02/13
                            </div>
                            <div class="card-body">
                                <p class="card-text">Perbanyak Minum Vitamin</p>
                            </div>
                        </div>
                        <div class="card text-center" style="max-width: 18rem;">
                            <div class="card-header header-card-analisis">
                                21/02/13
                            </div>
                            <div class="card-body">
                                <p class="card-text">Perbanyak Minum Vitamin</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>