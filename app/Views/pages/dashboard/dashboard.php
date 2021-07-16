<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="header-dashboard pt-4 pb-2 bg-white">
    <div class="container">
        <h5>Dashboard</h5>
    </div>
</div>
<div class="container bg-white mt-4 p-4 mb-4 shadow-sm ">
    <div class="row ">
        <div class="col dashboard-content mt-2">
            <!-- Form Search -->
            <div class="row">
                <div class="col">
                    <?php if (session()->getFlashdata('pesan')) { ?>
                        <div class="alert alert-success alert-dismissible fade show m-3" role="alert">
                            <?= session()->getFlashdata('pesan'); ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <?php } elseif (session()->getFlashdata('pesangagal')) { ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <?= session()->getFlashdata('pesangagal'); ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <?php } ?>
                </div>
            </div>

            <div class="row mb-2">
                <div class="col">
                    <div class="row">
                        <div class="col">
                            <form method="POST">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <button class="btn btn-primary-blue" type="submit" id="button-addon1"><i class="fas fa-search"></i></button>
                                    </div>
                                    <input type="text" class="form-control" placeholder="cari obat ..." aria-label="Example text with button addon" aria-describedby="button-addon1" name="keyword">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col float left">
                    <a href="" class="btn btn-warna-orange float-right shadow" data-toggle="modal" data-target="#modalKirimPesan">Kirim Pesan <i class="fas fa-paper-plane"></i></a>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table-dashboard">
                    <tr class="tableHeader">
                        <th class="number textCenter">No</th>
                        <th>Nama</th>
                        <th class="tdStatus">Status</th>
                        <th class="textCenter tdLifestyle">Lifestyle</th>
                        <th class="textCenter tdKepatuhan">Kepatuhan</th>
                        <th class="textCenter tdAksi">Aksi</th>
                    </tr>
                    <?php if ($listpasien) { ?>
                        <?php $no = 1; ?>
                        <?php foreach ($listpasien as $lp) : ?>
                            <tr>
                                <td class="textCenter"><?= $no++; ?></td>
                                <td><?= $lp['nama']; ?></td>
                                <td>Hipertensi</td>
                                <td class="textCenter">
                                    <h4 class="text-secondary"><i class="far fa-check-square"></i></h4>
                                </td>
                                <td class="textCenter">
                                    <h4 class="text-primary"><i class="fas fa-check-square"></i></h4>
                                </td>
                                <td class="textCenter">
                                    <a href="<?= base_url('/dashboard/detail/detailpasien/' . $lp['id_data_pasien']); ?>" class="btn mb-1 btn-primary-blue">Detail</a>
                                    <button class="btn mb-1 btn-danger">Hapus</button>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php } else { ?>
                        <div class="col">
                            <h5 class="warna-abu-font text-center"><i class="far fa-folder-open mr-2"></i>belum ada data</h5>
                        </div>
                    <?php } ?>
                </table>
            </div>

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
                        <form action="/dashboard/dashboard/kirimpesan/" method="POST" enctype="multipart/form-data">
                            <?= csrf_field(); ?>
                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="select-all" name="select-all" onclick="toggle(this)">
                                    <label class="form-check-label" for="checkall">
                                        Untuk Semua Semua Pasien
                                    </label>
                                </div>
                                <div class="form-penerima-pesan bg-light p-4 border mt-2">
                                    <input class="form-check-input" type="hidden" value="0" id="check1" name="pasienpenerima[]">
                                    <?php foreach ($listpasien as $lp) : ?>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="<?= $lp['id_pasien']; ?>" id="check1" name="pasienpenerima[]">
                                            <label class="form-check-label" for="check1">
                                                <?= $lp['nama']; ?>
                                            </label>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea type="text" class="form-control bg-light" id="judul-lifestyle" placeholder="Pesan ..." name="pesan" required></textarea>
                            </div>
                            <button type="submit" class="btn float-right btn-warna-orange">kirim <i class="fas fa-paper-plane ml-1"></i></button>
                        </form>
                    </div>
                </div>
                <div class="row card-header mt-4"></div>
            </div>
        </div>
    </div>
</div>
<script>
    function toggle(source) {
        var checkboxes = document.querySelectorAll('input[type="checkbox"]');
        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i] != source)
                checkboxes[i].checked = source.checked;
        }
    }
</script>
<?= $this->endSection(); ?>