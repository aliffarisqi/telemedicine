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
                        <a href="<?= base_url('/konten/kepatuhan/kuesionerkepatuhan'); ?>" class="btn btn-light text-info active">kepatuhan</a>
                        | <a href="<?= base_url('/konten/kepatuhan/tanggapan'); ?>" class="btn btn-light text-info">Tanggapan</a>
                    </h5>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col">
                    <?php if (session()->getFlashdata('pesan')) : ?>
                        <div class="alert alert-success alert-dismissible fade show m-3" role="alert">
                            <?= session()->getFlashdata('pesan'); ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <?php endif; ?>
                    <div class="card rounded-lg m-3">
                        <div class="card-header bg-info">
                        </div>
                        <div class="card-body">
                            <div class="row mb-3">
                                <div class="col">
                                    <h4>Kuesioner Kepatuhan</h3>
                                </div>
                                <div class="col text-right">
                                    <a href="" class=" text-center rounded btn btn-info p-2 ml-2" data-toggle="modal" data-target="#kuesioner">Kirim Kuesioner <i class="fa fa-send"></i></a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr class="text-info">
                                                    <th scope="col">No</th>
                                                    <th scope="col">Pertanyaan Kepatuhan</th>
                                                    <th scope="col" class="text-center">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i = 1; ?>
                                                <?php foreach ($daftarkuesioner as $dk) : ?>
                                                    <tr>
                                                        <td><?= $i++; ?></td>
                                                        <td><?= $dk['nama_pertanyaan']; ?></td>
                                                        <td class="text-center">
                                                            <a href="<?= base_url('/konten/kepatuhan/kuesionerkepatuhan/update/' . $dk['id_kuesioner']); ?>" class="mb-2 btn btn-info">Edit</a>
                                                            <a href="<?= base_url('/konten/kepatuhan/kuesionerkepatuhan/delete/' . $dk['id_kuesioner']); ?>" class="mb-2 btn btn-danger" onclick="return confirm('apakah anda yakin Untuk Menghapus Pertanyaan ini ? ');">Delete</a>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col mr-3 text-center">
                            <a href="<?= base_url('/konten/kepatuhan/kuesionerkepatuhan/tambahkuesioner'); ?>" class=" text-center rounded btn btn-warna-orange">Tambah Pertanyaan</a>
                            <a href="<?= base_url('/konten/kepatuhan/kuesionerkepatuhan/lihatkuesioner'); ?>" class="btn btn-primary-blue">Lihat Simulasi</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="kuesioner" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="row justify-content-center">
                <div class="col-9">
                    <h5 class="judul-detail-data-pasien pb-2 pt-5 text-info">Mengirim Kuesioner</h5>
                </div>
            </div>
            <div class="modal-body pb-0">

                <div class="row justify-content-center">
                    <div class="col-9 shadow-sm p-4">
                        <div class="row">
                            <div class="col text-center">
                                <h6>Apakah Anda Yakin Ingin Mengirikan Kuesioner Kepada Pasien ???</h6>
                            </div>
                        </div>
                        <hr>
                        <form action="/konten/kepatuhan/kuesionerkepatuhan/kirimkuesioner" method="POST" enctype="multipart/form-data">
                            <?= csrf_field(); ?>
                            <div class="form-group">
                                <input type="hidden" name="kode" value="1">
                            </div>
                            <button type=" submit" class="btn float-right btn-warna-orange">kirim <i class="fa fa-send"></i></button>
                            <button type="button" class="btn float-right btn-danger mr-2" data-dismiss="modal" aria-label="Close">Batal</button>
                        </form>
                    </div>
                </div>
                <div class="row card-header mt-4"></div>
            </div>
        </div>
    </div>
</div>

<?php $this->endsection(); ?>