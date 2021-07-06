<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="header-dashboard pt-4 pb-2 bg-white">
    <div class="container">
        <h5>Dashboard</h5>
    </div>
</div>
<div class="container bg-white mt-4 p-4 mb-4 shadow-sm">
    <div class="row">
        <div class="col dashboard-content mt-2">
            <!-- Form Search -->

            <div class="row mb-4">
                <div class="col-sm-8">
                    <form class="form-inline">
                        <input class="form-control mr-3" type="search" placeholder="Search">
                        <button class="btn btn-primary-blue my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
                <div class="col-sm-4 ">
                    <a href="" class="btn btn-warna-orange float-right" data-toggle="modal" data-target="#modalKirimPesan">Kirim Pesan</a>
                </div>
            </div>

            <table class="table-dashboard">
                <tr class="tableHeader">
                    <th class="number textCenter">No</th>
                    <th>Nama</th>
                    <th class="]tdStatus">Status</th>
                    <th class="textCenter tdLifestyle">Lifestyle</th>
                    <th class="textCenter tdKepatuhan">Kepatuhan</th>
                    <th class="textCenter tdAksi">Aksi</th>
                </tr>
                <tr>
                    <td class="textCenter">1</td>
                    <td>Eko Muhammad Rilo Pembudi</td>
                    <td>Hipertensi</td>
                    <td class="textCenter"><input name="lifestyle" type="checkbox" disabled checked></td>
                    <td class="textCenter"><input name="kepatuhan" type="checkbox" disabled checked></td>
                    <td class="textCenter">
                        <a href="<?= base_url('/detail/detail'); ?>"><button class="btn btn-primary-blue">Detail</button></a>
                        <button class="btn btn-danger">Hapus</button>
                    </td>
                </tr>
                <tr>
                    <td class="textCenter">2</td>
                    <td>Qurrota Nastiti Rizqita Aura Syifa</td>
                    <td>Hipertensi Komplikasi</td>
                    <td class="textCenter"><input name="lifestyle" type="checkbox" disabled></td>
                    <td class="textCenter"><input name="kepatuhan" type="checkbox" disabled checked></td>
                    <td class="textCenter">
                        <button class="btn btn-primary-blue">Detail</button>
                        <button class="btn btn-danger">Hapus</button>
                    </td>
                </tr>
                <tr>
                    <td class="textCenter">2</td>
                    <td>Qurrota Nastiti Rizqita Aura Syifa</td>
                    <td>Hipertensi Komplikasi</td>
                    <td class="textCenter"><input name="lifestyle" type="checkbox" disabled></td>
                    <td class="textCenter"><input name="kepatuhan" type="checkbox" disabled checked></td>
                    <td class="textCenter">
                        <button class="btn btn-primary-blue">Detail</button>
                        <button class="btn btn-danger">Hapus</button>
                    </td>
                </tr>
                <tr>
                    <td class="textCenter">2</td>
                    <td>Qurrota Nastiti Rizqita Aura Syifa</td>
                    <td>Hipertensi Komplikasi</td>
                    <td class="textCenter"><input name="lifestyle" type="checkbox" disabled></td>
                    <td class="textCenter"><input name="kepatuhan" type="checkbox" disabled checked></td>
                    <td class="textCenter">
                        <button class="btn btn-primary-blue">Detail</button>
                        <button class="btn btn-danger">Hapus</button>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>

<!-- Modal Kirim Pesan -->
<div class="modal fade" id="modalKirimPesan" tabindex="-1" aria-labelledby="modalKirimPesanLabel" aria-hidden="true">
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
                    <h5 class="judul-kirim-pesan pb-2">Kirim Pesan</h5>
                </div>
            </div>
            <div class="modal-body pb-0">
                <div class="row justify-content-center">
                    <div class="col-9 shadow-sm p-4">
                        <form>
                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                        Penerima
                                    </label>
                                </div>
                                <div class="form-penerima-pesan bg-light p-4 border mt-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                        <label class="form-check-label" for="defaultCheck1">
                                            Muhammad Ridho
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                        <label class="form-check-label" for="defaultCheck1">
                                            Eko Rilo Pembudi
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                        <label class="form-check-label" for="defaultCheck1">
                                            Qurrota Nastiti
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea type="text" class="form-control bg-light" id="judul-lifestyle" placeholder="Pesan ..."></textarea>
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
<?= $this->endSection(); ?>