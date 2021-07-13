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
                                    <a class="text-center float-right rounded btn btn-warning p-2 text-white"><i class="far fa-calendar-alt mr-2"></i><?= $hariini; ?></a>
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
                                                    <?php $i = 1; ?>
                                                    <?php foreach ($tanggapan as $ta) : ?>
                                                        <th scope="col">Pertanyaan <?= $i++; ?></th>
                                                    <?php endforeach; ?>

                                                    <th scope="col">Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($tanggapan as $ta) : ?>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td><?= $ta['']; ?></td>

                                                        <td>4</td>
                                                        <td>5</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                        <td>2</td>
                                                        <td class="bg-danger text-white"><b>14</b></td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row text-right m-2">
                        <div class="col">
                            <a href="" class="btn btn-light text-dark btn-outline-info">5</a>
                            <a href="" class="btn btn-info">6</a>
                            <a href="" class="btn btn-light text-dark btn-outline-info">7</a>
                            <a href="" class="btn btn-light text-dark btn-outline-info">8</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->endsection(); ?>