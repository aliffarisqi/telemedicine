<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="header-dashboard pt-4 pb-2 bg-white">
    <div class="container">
        <h5>
            <small>
                <a href="<?= base_url('/pengaturan/pengaturanadmin'); ?>">Pengaturan</a>
            </small>
            / Daftar Puskesmas
        </h5>
    </div>
</div>
<div class="container bg-white mt-4 p-4 mb-4 shadow-sm">
    <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?= session()->getFlashdata('pesan'); ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif; ?>
    <div class="row">
        <div class="col">
            <div class="row">
                <div class="col">
                    <form method="POST">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <button class="btn btn-primary-blue" type="submit" id="button-addon1"><i class="fas fa-search"></i></button>
                            </div>
                            <input type="text" class="form-control" placeholder="cari puskesmas ..." aria-label="Example text with button addon" aria-describedby="button-addon1" name="keyword">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col">
            <a href="<?= base_url('/pengaturan/puskesmas/daftarpuskesmas/tambahpuskesmas'); ?>" class="btn btn-warna-orange mb-2 shadow float-right">Tambah Puskesmas <i class="fas fa-plus"></i></a>
        </div>
    </div>
    <hr>
    <div class="row row-cols-1 row-cols-md-5 pb-4 pt-2 pr-2">
        <?php foreach ($datapuskesmas as $dp) : ?>
            <div class="col mb-2 text-center">
                <a href="<?= base_url('/pengaturan/puskesmas/daftarpuskesmas/detail/' . $dp['id_puskesmas']); ?>" class="btn btn-danger text-dark border-0 card-puskesmas mb-3">
                    <div class="row justify-content-center">
                        <img src="/img/hospital.png" alt="" class="card-img-puskesmas">
                    </div>
                    <div class="row">
                        <div class="col text-center">
                            <h6 class="card-title text-white "><?= $dp['nama_puskesmas']; ?></h6>
                        </div>
                    </div>
                </a>
            </div>
        <?php endforeach; ?>
    </div>
    <div class="p-5"></div>
    <div class="p-4"></div>
</div>

</div>
<?= $this->endSection(); ?>