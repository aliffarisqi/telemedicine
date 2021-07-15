<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<?php
$tanggal = new DateTime($pasien['tanggal_lahir']);

// tanggal hari ini
$today = new DateTime('today');
$y = $today->diff($tanggal)->y;
$m = $today->diff($tanggal)->m;
$d = $today->diff($tanggal)->d;
$usia = $y . " tahun " . $m . " bulan " . $d . " hari";

?>
<div class="header-dashboard pt-4 pb-2 bg-white">
    <div class="container">
        <h5>
            <small>
                <a href="<?= base_url('/dashboard/dashboard'); ?>">Dashboard / </a>
                <a href="<?= base_url('/dashboard/detail/detailpasien/' . $pasien['id_pasien']); ?>">Detail Data Pasien / </a>
            </small>
            Kuesioner
        </h5>
    </div>
</div>
<div class="container bg-white mt-4 p-4 mb-4 shadow-sm">
    <div class="row ">
        <div class="col text-center">
            <h5>Data Kepatuhan Pasien</h5>
        </div>
    </div>
    <hr>
    <div class="row mb-2 ">
        <div class="col-sm-1 text-center pl-3 mr-0 pr-0">
            <h1><i class="fas fa-user-circle"></i></h1>
        </div>
        <div class="col-sm-8 pl-4 mb-2 ml-0">
            <div class="row m-0">
                <p class="m-0 text-dark"><b>Nama : <?= $pasien['nama']; ?></b></p>
            </div>
            <div class="row m-0">
                <p class="m-0 text-dark">Usia :<?= $usia; ?></p>
            </div>
        </div>
        <div class="col-sm-3 pl-4 mb-2">
            <p class="bg-warna-orange p-2 text-center rounded text-white"><i class="far fa-calendar-alt mr-2"></i><?= $hariini; ?></p>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead class="tabel-data-lifestyle">
                <tr>
                    <th class="text-center">No</th>
                    <th>Pertanyaan Kepatuhan</th>
                    <?php for ($i = 1; $i <= 7; $i++) { ?>
                        <th><?= $i; ?></th>
                    <?php } ?>
                </tr>
            </thead>
            <tbody>
                <?php $num = 1; ?>
                <?php foreach ($kuesionerpasien as $kp) : ?>
                    <tr>
                        <th scope="row" class="text-center"><?= $num++; ?></th>
                        <td class="text-left"><?= $kp['id_kuesioner']; ?></td>
                        <td><?= $kp['hasil']; ?></td>
                        <td>tidak</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
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
<?= $this->endSection(); ?>