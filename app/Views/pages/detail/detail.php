<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <!-- isi detail -->
    <div class="row pt-5 pr-2 pb-5 shadow-sm">
        <!-- left side profile -->
        <div class="col-sm-3 text-center left-side-profile">
            <!-- image profile -->
            <div class="row">
                <div class="col">
                    <img src="/img/pasien/default.jpg" alt="" class="profile-page-detail img-fluid">
                </div>
            </div>
            <!-- data pasien -->
            <div class="row mt-4">
                <div class="col data-pasien-detail">
                    <h5>Nama</h5>
                    <p>Mochamad Ridho</p>
                    <h5>Usia</h5>
                    <p>20</p>
                    <h5>BB/TB</h5>
                    <p>50/155</p>
                </div>
            </div>
            <div class="row m-2">
                <!-- Button trigger modal detail data pasien-->
                <a href="" class="btn btn-lainya" data-toggle="modal" data-target="#modalLainya">Lainya</a>
            </div>
            <div class="row m-2">
                <a href="<?= base_url('/detail/lifestyle'); ?>" class="btn btn-lifestyle">Lifestyle</a>
            </div>
        </div>
        <!-- right side monitoring -->
        <div class="col-lg-9 right-side-detail pb-2">
            <!-- header -->
            <div class="row m-3">
                <div class="col title-monitoring-detail ">
                    <h4>Monitoring Pasien</h4>
                </div>
                <div class="col">
                    <a href="" class="btn btn-hasil-grafik float-right">Hasil</a>
                </div>
            </div>
            <!-- card grafik -->
            <div class="row mr-3 ml-3">
                <div class="col bg-grafik-detail p-3">
                    <div id="grafik_tekanan_darah">

                    </div>
                </div>
            </div>
            <!-- analisis rekomendasi -->
            <div class="row m-3">
                <div class="col bg-analisis-rekomendasi p-3">
                    <div class="row">
                        <div class="col title-analisis-rekomendasi">
                            <h5>Analisis dan Rekomendasi</h5>
                        </div>
                        <div class="col">
                            <a href="" class="btn btn-tambah-analisis float-right" data-toggle="modal" data-target="#modalLifestyle">+</a>
                        </div>
                    </div>

                    <!-- card analisis rekomendasi -->
                    <div class="row pl-3 pr-3">
                        <div class="card text-center mr-2" style="max-width: 18rem;">
                            <div class="card-header header-card-analisis">
                                21/02/13
                            </div>
                            <div class="card-body">
                                <p class="card-text">Perbanyak Minum Vitamin</p>
                            </div>
                        </div>
                        <div class="card text-center" style="max-width: 18rem;">
                            <div class="card-header header-card-analisis">
                                21/02/13
                            </div>
                            <div class="card-body">
                                <p class="card-text">Perbanyak Minum Vitamin</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Modal Lainya -->
<div class="modal fade" id="modalLainya" tabindex="-1" aria-labelledby="modalLainyaLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="row">
                <div class="col">
                    <button type="button" class="btn btn-danger mt-2 mr-2 float-right close-data-detail-pasien" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-9">
                    <h5 class="judul-detail-data-pasien pb-2">Biodata</h5>
                </div>
            </div>
            <div class="modal-body pb-0">
                <div class="row justify-content-center">
                    <div class="col-9 shadow-sm">
                        <table class="table table-borderless tabel-data-detail-pasien">
                            <tbody>
                                <tr>
                                    <td>Nama</td>
                                    <td>: Khusniah Arief</td>
                                </tr>
                                <tr>
                                    <td>Usia</td>
                                    <td>: 19 Tahun</td>
                                </tr>
                                <tr>
                                    <td>BB/TB</td>
                                    <td>: 45/150</td>
                                </tr>
                                <tr>
                                    <td>Alergi</td>
                                    <td>: -</td>
                                </tr>
                                <tr>
                                    <td>Riwayat Penyakit</td>
                                    <td>: -</td>
                                </tr>
                                <tr>
                                    <td>Riwayat Pengobatan</td>
                                    <td>: -</td>
                                </tr>
                                <tr>
                                    <td>Riwayat Diagnosa pengobatan</td>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked disabled>
                                            <label class="form-check-label" for="exampleRadios1">
                                                < 1 Tahun </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2" disabled>
                                            <label class="form-check-label" for="exampleRadios2">
                                                > 1 Tahun
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row card-header mt-4"></div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Lainya -->
<div class="modal fade" id="modalLifestyle" tabindex="-1" aria-labelledby="modalLifestyleLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="row">
                <div class="col">
                    <button type="button" class="btn btn-danger mt-2 mr-2 float-right close-data-detail-pasien" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-9">
                    <h5 class="judul-detail-data-pasien pb-2">Analisis dan Rekomendasi</h5>
                </div>
            </div>
            <div class="modal-body pb-0">
                <div class="row justify-content-center">
                    <div class="col-9 shadow-sm p-4">
                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control inputan-judul-lifestyle bg-light" id="judul-lifestyle" placeholder="Judul ...">
                            </div>
                            <div class="form-group">
                                <textarea type="text" class="form-control inputan-pesan-lifestyle bg-light" id="judul-lifestyle" placeholder="Pesan ..."></textarea>
                            </div>
                            <button type="submit" class="btn float-right kirim-lifestyle">kirim</button>
                        </form>
                    </div>
                </div>
                <div class="row card-header mt-4"></div>
            </div>
        </div>
    </div>
</div>

<script src="/grafik/highcharts.js"></script>
<script src="/grafik/exporting.js"></script>
<script src="/grafik/export-data.js"></script>
<script src="/grafik/accessibility.js"></script>
<script>
    Highcharts.chart('grafik_tekanan_darah', {

        title: {
            text: 'Data Tekanan Darah'
        },

        subtitle: {
            text: 'ady pharm'
        },

        yAxis: {
            title: {
                text: 'Tekanan Darah'
            }
        },

        xAxis: {
            categories: ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu']
        },

        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle'
        },

        series: [{
            name: 'Sistolsik',
            data: [90, 90, 85, 105, 110, 100, 120]
        }, {
            name: 'Diastolsik',
            data: [105, 90, 85, 90, 115, 120, 95]
        }],

        responsive: {
            rules: [{
                condition: {
                    maxWidth: 500
                },
                chartOptions: {
                    legend: {
                        layout: 'horizontal',
                        align: 'center',
                        verticalAlign: 'bottom'
                    }
                }
            }]
        }

    });
</script>

<?= $this->endSection(); ?>