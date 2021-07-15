<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="header-dashboard pt-4 pb-2 bg-white">
    <div class="container">
        <h5>
            <small>
                <a href="<?= base_url('/konten/konten'); ?>">Konten / </a>
            </small>
            Kuesioner Kepatuhan
        </h5>
    </div>
</div>
<div class="container bg-white mt-4 p-4 mb-4 shadow-sm">
    <div class="row">
        <div class="col bg-light m-2 p-4">
            <div class="row">
                <div class="col text-center">
                    <h5>
                        <a href="<?= base_url('/konten/kepatuhan/kuesionerkepatuhan'); ?>" class="btn btn-light text-info">kepatuhan</a>
                        | <a href="<?= base_url('/konten/kepatuhan/tanggapan'); ?>" class="btn btn-light text-info active">Tanggapan</a>
                    </h5>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col">
                    <div class="card rounded-lg m-3">
                        <div class="card-header bg-info">
                        </div>
                        <div class="card-body">
                            <div class="row mb-4">
                                <div class="col">
                                    <a class=" text-center rounded btn btn-light p-2 text-dark"><?= $jumlahtanggapan; ?> Tanggapan</a>
                                </div>
                                <div class="col">
                                    <form action="<?= base_url('konten/kepatuhan/tanggapan/'); ?>" method="POST">
                                        <div class="input-group mb-3">
                                            <select id="kuesioner" name="keyword" class="form-control">
                                                <?php foreach ($listkuesioner as $lk) : ?>
                                                    <?php $temp = 0;
                                                    if ($lk['kode'] == $currentkuesioner) { ?>
                                                        <option value="<?= $lk['kode']; ?>" selected>
                                                            <h6>Kuesioner Periode Ke <?= $lk['kode'];
                                                                                        $temp += 1; ?>
                                                            </h6>
                                                        </option>
                                                    <?php } else { ?>
                                                        <option value="<?= $lk['kode']; ?>">
                                                            <h6>Kuesioner Periode Ke <?= $lk['kode']; ?></h6>
                                                        </option>
                                                    <?php } ?>
                                                <?php endforeach;
                                                if ($temp == 0) { ?>
                                                    <option value="<?= $currentkuesioner; ?>" selected>
                                                        <h6>Kuesioner Periode Ke <?= $currentkuesioner; ?></h6>
                                                    </option>
                                                <?php } ?>
                                            </select>
                                            <div class="input-group-append">
                                                <button type="submit" class="btn btn-primary-blue">Buka</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr class="text-info">
                                                    <th scope="col">No</th>
                                                    <th scope="col">Pasien</th>
                                                    <!-- menampilkan pertanyaan horizontal -->
                                                    <?php $i = 1; ?>
                                                    <?php foreach ($tanggapan as $ta) : ?>
                                                        <th scope="col">Pertanyaan <?= $i++; ?></th>
                                                    <?php endforeach; ?>

                                                    <th scope="col">Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <!-- mengulang nama orang yang sudah menanggapi -->
                                                <?php if ($nama) { ?>
                                                    <?php $num = 1; ?>
                                                    <?php foreach ($nama as $n) : ?>
                                                        <tr>
                                                            <th scope="row"><?= $num++; ?></th>
                                                            <td><?= $n['nama']; ?></td>
                                                            <!-- mengulang berdasarkan id pertanyaan -->

                                                            <?php foreach ($join as $j) : ?>
                                                                <?php $hasil = 0; ?>
                                                                <?php if ($j['id_data_pasien'] == $n['id_data_pasien']) { ?>
                                                                    <td>
                                                                        <?= $j['hasil']; ?>
                                                                        <!-- <?php
                                                                                if ($j['hasil'] == 1) {
                                                                                    echo "Tidak Pernah";
                                                                                } elseif ($j['hasil'] == 2) {
                                                                                    echo "Jarang";
                                                                                } elseif ($j['hasil'] == 3) {
                                                                                    echo "kadang-kadang";
                                                                                } elseif ($j['hasil'] == 3) {
                                                                                    echo "Sering";
                                                                                } else {
                                                                                    echo "Selalu";
                                                                                }
                                                                                ?> -->
                                                                    </td>
                                                                <?php }  ?>
                                                                <!-- menghitung hasil -->
                                                                <?php $hasil = $hasil + $j['hasil']; ?>
                                                            <?php endforeach; ?>
                                                            <td class=" text-white text-center <?= ($hasil == 25) ? 'bg-info' : 'bg-danger'; ?>"><b><?= $hasil; ?></b></td>
                                                        </tr>
                                                    <?php endforeach; ?>
                                                <?php } else { ?>
                                                    <tr>
                                                        <td colspan="8" class="p-5">
                                                            <h5 class="text-center warna-abu-font"><i class="far fa-folder-open mr-2"></i>Belum Ada Data</h5>
                                                        </td>
                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row m-2 pt-4 pr-5 pl-5">
                        <div class="col-sm mb-2">
                            <h6 class="text-secondary text-center">
                                <b class="bg-white text-secondary border pl-2 pr-2 pt-1 pb-1 mr-2 rounded">1</b>Tidak Pernah
                                <b class="bg-white text-secondary border pl-2 pr-2 pt-1 pb-1 mr-2 rounded">2</b>Jarang
                                <b class="bg-white text-secondary border pl-2 pr-2 pt-1 pb-1 mr-2 rounded">3</b>Kadang-Kadang
                                <b class="bg-white text-secondary border pl-2 pr-2 pt-1 pb-1 mr-2 rounded">4</b>Sering
                                <b class="bg-white text-secondary border pl-2 pr-2 pt-1 pb-1 mr-2 rounded">5</b>Selalu
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->endsection(); ?>