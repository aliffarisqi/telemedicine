<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="header-dashboard pt-4 pb-2 bg-white">
    <div class="container">
        <h5>
            <small>
                <a href="<?= base_url('/dashboard'); ?>">Dashboard / </a>
                <a href="<?= base_url('/detail/detail'); ?>">Detail Data Pasien / </a>
            </small>
            Lifestyle
        </h5>
    </div>
</div>
<div class="container bg-white mt-4 p-4 mb-4 shadow-sm">
    <div class="row mb-4 ">
        <div class="col-sm-1 text-center pl-3 mr-0 pr-0">
            <h1><i class="fas fa-user-circle"></i></h1>
        </div>
        <div class="col-sm-8 pl-4 mb-2 ml-0">
            <div class="row m-0">
                <p class="m-0 text-dark"><b>Nama : Muchamad Ridho</b></p>
            </div>
            <div class="row m-0">
                <p class="m-0 text-dark">Usia : 18 tahun</p>
            </div>
        </div>
        <div class="col-sm-3 pl-4 mb-2">
            <p class="bg-warna-orange p-2 text-center rounded text-white"><i class="far fa-calendar-alt mr-2"></i>07 Juli 2021</p>
        </div>
    </div>
    <div class="card text-center tabel-lifestyle">
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link <?= ($tabel == 'edukasi perilaku') ? 'active' : ''; ?>" href="<?= base_url('detail/lifestyle/edukasiperilaku/1'); ?>">Edukasi Perilaku</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= ($tabel == 'pola makan') ? 'active' : ''; ?>" href="<?= base_url('detail/lifestyle/polamakan/2'); ?>">Pola Makan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= ($tabel == 'perilaku olahraga') ? 'active' : ''; ?>" href="<?= base_url('detail/lifestyle/perilakuolahraga/2'); ?>">Perilaku Olahraga</a>
                </li>

            </ul>
        </div>
        <div class="card-body">
            <?php if ($tabel == "edukasi perilaku") { ?>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="tabel-data-lifestyle">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Perilaku</th>
                                <th scope="col">1</th>
                                <th scope="col">2</th>
                                <th scope="col">3</th>
                                <th scope="col">4</th>
                                <th scope="col">5</th>
                                <th scope="col">6</th>
                                <th scope="col">7</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td class="text-left">Merokok</td>
                                <td>ya</td>
                                <td>tidak</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td class="text-left">Terpapar asap Rokok</td>
                                <td>ya</td>
                                <td>tidak</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            <?php } elseif ($tabel == "pola makan") { ?>
                <div class="table-responsive">

                    <table class="table table-bordered">
                        <thead class="tabel-data-lifestyle">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Perilaku</th>
                                <th scope="col">1</th>
                                <th scope="col">2</th>
                                <th scope="col">3</th>
                                <th scope="col">4</th>
                                <th scope="col">5</th>
                                <th scope="col">6</th>
                                <th scope="col">7</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td class="text-left">Konsumsi Kopi</td>
                                <td>ya</td>
                                <td>tidak</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td class="text-left">pembatasan Gula</td>
                                <td>tidak</td>
                                <td>ya</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td class="text-left">Pebatasan Garam</td>
                                <td>ya</td>
                                <td>tidak</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td class="text-left">Susu Ketal Manis</td>
                                <td>tidak</td>
                                <td>ya</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td class="text-left">Pembatasan Lemak</td>
                                <td>ya</td>
                                <td>tidak</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="row">6</th>
                                <td class="text-left">Konsumsi Gorengan</td>
                                <td>ya</td>
                                <td>tidak</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="row">7</th>
                                <td class="text-left">Konsumsi santan</td>
                                <td>tidak</td>
                                <td>ya</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="row">8</th>
                                <td class="text-left">Konsumsi Teh</td>
                                <td>ya</td>
                                <td>tidak</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="row">9</th>
                                <td class="text-left">Konsumsi Buah</td>
                                <td>ya</td>
                                <td>tidak</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="row">10</th>
                                <td class="text-left">Konsumsi Sayur</td>
                                <td>tidak</td>
                                <td>ya</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="row">11</th>
                                <td class="text-left">Konsumsi Putih/Mineral</td>
                                <td>tidak</td>
                                <td>ya</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            <?php } else { ?>
                <div class="table-responsive">

                    <table class="table table-bordered">
                        <thead class="tabel-data-lifestyle">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Perilaku</th>
                                <th scope="col">1</th>
                                <th scope="col">2</th>
                                <th scope="col">3</th>
                                <th scope="col">4</th>
                                <th scope="col">5</th>
                                <th scope="col">6</th>
                                <th scope="col">7</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td class="text-left">Peregangan Otot</td>
                                <td>ya</td>
                                <td>tidak</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td class="text-left">Jalan Kaki</td>
                                <td>tidak</td>
                                <td>ya</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            <?php } ?>
        </div>
        <div class="row text-right m-2">
            <div class="col">
                <a href="" class="btn btn-light text-dark btn-outline-info">Juni</a>
                <a href="" class="btn btn-info text-white">1</a>
                <a href="" class="btn btn-light text-dark btn-outline-info">2</a>
                <a href="" class="btn btn-light text-dark btn-outline-info">3</a>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>