<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<?php
$tanggal = new DateTime($datapasien['tanggal_lahir']);

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
                <a href="<?= base_url('/dashboard/detail/detailpasien/' . $datapasien['id_data_pasien']); ?>">Detail Data Pasien / </a>
            </small>
            Hasil Tekanan Darah
        </h5>
    </div>
</div>
<div class="container bg-white mt-4 p-4 mb-4 shadow-sm">
    <div class="row ">
        <div class="col text-center">
            <h5>Data Tekanan Darah</h5>
        </div>
    </div>
    <hr>
    <div class="row mb-2 ">
        <div class="col-sm-1 text-center pl-3 mr-0 pr-0">
            <h1><i class="fas fa-user-circle"></i></h1>
        </div>
        <div class="col-sm-8 pl-4 mb-2 ml-0">
            <div class="row m-0">
                <p class="m-0 text-dark"><b>Nama : <?= $datapasien['nama']; ?></b></p>
            </div>
            <div class="row m-0">
                <p class="m-0 text-dark">Usia : <?= $usia; ?></p>
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
                    <th>Tanggal</th>
                    <th>Jam</th>
                    <th>Nyeri Tengkuk</th>
                    <th>Pusing</th>
                    <th>Sistolik</th>
                    <th>Diastolik</th>
                    <th>Keterangan</th>

                </tr>
            </thead>
            <tbody>
                <?php $num = 1; ?>

                <?php if ($pasien) { ?>
                    <?php foreach ($pasien as $p) : ?>
                        <tr>
                            <th scope="row" class="text-center"><?= $num++; ?></th>
                            <td><?= $p['tanggal']; ?></td>
                            <td><?= $p['jam']; ?></td>

                            <?php if ($p['nyeri_tengkuk'] == 1) {  ?>
                                <td>Ya </td>
                            <?php } else { ?>
                                <td>Tidak </td>
                            <?php } ?>
                            <?php if ($p['pusing'] == 1) {  ?>
                                <td>Ya </td>
                            <?php } else { ?>
                                <td>Tidak </td>
                            <?php } ?>
                            <td><?= $p['sistole']; ?></td>
                            <td><?= $p['diastole']; ?></td>
                            <td><?= $p['note_td']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php } else { ?>
                    <tr>
                        <td colspan="8" class="p-4">
                            <h5 class="text-center warna-abu-font"><i class="far fa-folder-open mr-2"></i>Belum Ada Data</h5>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

</div>
<?= $this->endSection(); ?>