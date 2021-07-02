<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row mt-5 mb-4">
        <div class="col-6">
            <h4>Lifestyle</h4>
        </div>
        <div class="col-4">
            <div class="row m-0">
                <p class="m-0"><b>Nama : Muchamad Ridho</b></p>
            </div>
            <div class="row m-0">
                <p class="m-0">Usia : 18 tahun</p>
            </div>
        </div>
        <div class="col-2">
            <div class="date-lifestyle ">
                <p>15/04/2021</p>
            </div>
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
                            <th scope="col">8</th>
                            <th scope="col">9</th>
                            <th scope="col">10</th>
                            <th scope="col">11</th>
                            <th scope="col">12</th>
                            <th scope="col">13</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Merokok</td>
                            <td>ya</td>
                            <td>tidak</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Terpapar asap Rokok</td>
                            <td>ya</td>
                            <td>tidak</td>
                        </tr>
                    </tbody>
                </table>
            <?php } elseif ($tabel == "pola makan") { ?>
                <h5 class="card-title">Pola Makan</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            <?php } else { ?>
                <h5 class="card-title">Perilaku Olahraga</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            <?php } ?>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>