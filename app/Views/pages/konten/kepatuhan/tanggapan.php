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
                        | <a href="<?= base_url('/konten/kepatuhan/tanggapan'); ?>" class="btn btn-light text-info">Tanggapan</a>
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
                            <h5>Tanggapan</h5>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Pasien</th>
                                        <th scope="col">Pertanyaan 1</th>
                                        <th scope="col">Pertanyaan 2</th>
                                        <th scope="col">Pertanyaan 3</th>
                                        <th scope="col">Pertanyaan 4</th>
                                        <th scope="col">Pertanyaan 5</th>
                                        <th scope="col">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Khusniah Arief</td>
                                        <td>4</td>
                                        <td>5</td>
                                        <td>1</td>
                                        <td>2</td>
                                        <td>2</td>
                                        <td class="bg-danger text-white"><b>14</b></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Muhammad Rilo</td>
                                        <td>5</td>
                                        <td>1</td>
                                        <td>4</td>
                                        <td>1</td>
                                        <td>3</td>
                                        <td class="bg-danger text-white"><b>13</b></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Bayu Alif Farisqi</td>
                                        <td>5</td>
                                        <td>5</td>
                                        <td>5</td>
                                        <td>5</td>
                                        <td>5</td>
                                        <td class="bg-info text-white"><b>25</b></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>Rifqi Luthfi Naldi</td>
                                        <td>5</td>
                                        <td>5</td>
                                        <td>5</td>
                                        <td>4</td>
                                        <td>4</td>
                                        <td class="bg-danger text-white"><b>23</b></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>Qurrot Nastiti</td>
                                        <td>5</td>
                                        <td>5</td>
                                        <td>5</td>
                                        <td>5</td>
                                        <td>5</td>
                                        <td class="bg-info text-white"><b>25</b></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->endsection(); ?>