<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="header-dashboard pt-4 pb-2 bg-white">
    <div class="container">
        <h5>
            <small>
                <a href="<?= base_url('/pengaturan/pengaturanadmin'); ?>">Pengaturan </a>
                <a href="<?= base_url('/pengaturan/puskesmas/daftarpuskesmas'); ?>">/ Daftar Puskesmas</a>
            </small>
            / Detail Puskesmas
        </h5>
    </div>
</div>
<div class="container bg-white mt-4 p-4 mb-4 shadow-sm">
    <div class="row ">
        <div class="col text-center">
            <h5><i class="fas fa-hospital mr-2"></i><?= $datapuskesmas['nama_puskesmas']; ?></h5>
        </div>
    </div>
    <hr>
    <div class="row mb-2 ">
        <div class=" col-sm pl-4 mb-2 ml-0">
            <div class="row m-0">
                <p class="m-0 text-dark"><b><i class="fas fa-phone-square-alt mr-2"></i> Nomer Telephone : <?= $datapuskesmas['telephone']; ?></b></p>
            </div>
            <div class="row m-0">
                <p class="m-0 text-dark"><i class="fas fa-map-pin mr-2"></i> alamat : <?= $datapuskesmas['alamat']; ?></p>
            </div>
        </div>
        <div class="col-sm pl-4 mb-2 text-right">
            <p class="btn btn-dark p-2 text-center rounded text-white disabled"><i class="fas fa-user-circle mr-2"></i>10 Pasien</p>
        </div>
    </div>
    <div class="row row-cols-1 row-cols-md-5 pb-4 pt-2 pr-2">

    </div>
    <div class="p-5"></div>
    <div class="p-4"></div>
</div>

</div>
<?= $this->endSection(); ?>