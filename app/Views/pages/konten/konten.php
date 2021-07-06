<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="header-dashboard pt-4 pb-2 bg-white">
    <div class="container">
        <h5>Konten</h5>
    </div>
</div>
<div class="container bg-white mt-4 p-4 mb-4 shadow-sm">
    <div class="row">
        <div class="col m-1">
            <div class="card bg-primary text-white">
                <div class="card-body p-2">
                    <div class="row justify-content-center ">
                        <div class="col-7 ">
                            <div class="row p-2">
                                <img src="/img/checklist.png" alt="" class="img-card-lifestyle">
                            </div>
                            <div class="row">
                                <h4 class="card-title">Checklist Lifestyle</h4>
                            </div>
                        </div>
                        <div class="col-4 text-center">
                            <h3 class="jumlah-pertanyaan m-0"><?= $datalifestyle; ?></h3>
                            <h6 class="text-center m-0">Pertanyaan</h6>
                            <a href="<?= base_url('/konten/lifestyle/tambahpertanyaan'); ?>" class="btn btn-danger rounded m-2"><small> Tambah +</small></a>
                        </div>
                    </div>
                </div>
                <a href="<?= base_url('/konten/lifestyle/dashboard'); ?>" class="btn btn-primary card-footer text-center text-white">Lihat Pertanyaan >></a>
            </div>
        </div>
        <div class="col m-1">
            <div class="card bg-info text-white">
                <div class="card-body p-2">
                    <div class="row justify-content-center ">
                        <div class="col-7 ">
                            <div class="row p-2">
                                <img src="/img/kepatuhan.png" alt="" class="img-card-kepatuhan">
                            </div>
                            <div class="row">
                                <h4 class="card-title">Kepatuhan</h4>
                            </div>
                        </div>
                        <div class="col-4 text-center">
                            <h3 class="jumlah-pertanyaan m-0">5</h3>
                            <h6 class="text-center m-0">Pertanyaan</h6>
                            <a href="" class="btn btn-danger rounded m-2"><small> Tambah +</small></a>
                        </div>
                    </div>
                </div>
                <a href="<?= base_url('/konten/kepatuhan/kuesionerkepatuhan'); ?>" class="btn btn-info card-footer text-center text-white">Lihat Pertanyaan >></a>
            </div>
        </div>

    </div>
    <div class="row bg-light mt-4 ml-1 mr-1 rounded p-4">
        <div class="col">
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
                    <h5 class="judul-konten-edukasi">Kontent Edukasi</h5>
                </div>
                <div class="col">
                    <a href="<?= base_url('/konten/artikel/artikel'); ?>" class="btn btn-tambah-konten">Tambah artikel</a>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-3 mt-4">
                <?php foreach ($kontenartikel as $ka) : ?>
                    <div class="col mb-4">
                        <div class="card">
                            <img src="<?= base_url('/img/konten/' . $ka['gambar_konten']); ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?= $ka['judul_konten']; ?></h5>
                                <p class="card-text"><?= substr($ka['isi_konten'], 0, 70); ?> . . . . .</p>
                                <small>by : <?= $ka['publisher']; ?></small>
                                <hr>
                                <div class="row">
                                    <div class="col text-center">
                                        <a href="/konten/artikel/artikel/detail/<?= $ka['id_konten']; ?>" class="btn btn-primary-blue">Detail</a>
                                        <a href="/konten/artikel/artikel/update/<?= $ka['id_konten']; ?>" class="btn btn-info">Edit</a>
                                        <a href="/konten/artikel/artikel/delete/<?= $ka['id_konten']; ?>" class="btn btn-danger" onclick="return confirm('apakah anda yakin ? ');">Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>


    </div>
</div>

</div>
<?= $this->endSection(); ?>