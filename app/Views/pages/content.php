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
                            <h3 class="jumlah-pertanyaan m-0">20</h3>
                            <h6 class="text-center m-0">Pertanyaan</h6>
                            <a href="" class="btn btn-danger rounded m-2"><small> Tambah +</small></a>
                        </div>
                    </div>
                </div>
                <a href="#" class="card-footer text-center text-white">Lihat Pertanyaan >></a>
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
                            <h3 class="jumlah-pertanyaan m-0">13</h3>
                            <h6 class="text-center m-0">Pertanyaan</h6>
                            <a href="" class="btn btn-danger rounded m-2"><small> Tambah +</small></a>
                        </div>
                    </div>
                </div>
                <a href="#" class="card-footer text-center text-white">Lihat Pertanyaan >></a>
            </div>
        </div>

    </div>
    <div class="row bg-light mt-4 ml-1 mr-1 rounded p-4">

        <div class="col">
            <h5 class="judul-konten-edukasi">Kontent Edukasi</h5>
        </div>
        <div class="col">
            <a href="" class="btn btn-tambah-konten">Tambah Konten</a>
        </div>
        <div class="row row-cols-1 row-cols-md-3 mt-4">
            <div class="col mb-4">
                <div class="card">
                    <img src="/img/konten/kontent1.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Makanan Sehat</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content</p>
                        <a href="" class="btn btn-info float-right">Lihat Selengkapnya>></a>
                    </div>

                </div>
            </div>
            <div class="col mb-4">
                <div class="card">
                    <img src="/img/konten/kontent1.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Makanan Sehat</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content</p>
                        <a href="" class="btn btn-info float-right">Lihat Selengkapnya>></a>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card">
                    <img src="/img/konten/kontent1.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Makanan Sehat</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                        <a href="" class="btn btn-info float-right">Lihat Selengkapnya>></a>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card">
                    <img src="/img/konten/kontent1.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Makanan Sehat</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content</p>
                        <a href="" class="btn btn-info float-right">Lihat Selengkapnya>></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
<?= $this->endSection(); ?>