<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col dashboard-content">
            <h1>SIP</h1>
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
                        <a href="<?= base_url('/detail'); ?>"><button class="btn btn-detail">Detail</button></a>
                        <button class="btn btn-edit">Edit</button>
                        <button class="btn btn-hapus">Hapus</button>
                    </td>
                </tr>
                <tr>
                    <td class="textCenter">2</td>
                    <td>Qurrota Nastiti Rizqita Aura Syifa</td>
                    <td>Hipertensi Komplikasi</td>
                    <td class="textCenter"><input name="lifestyle" type="checkbox" disabled></td>
                    <td class="textCenter"><input name="kepatuhan" type="checkbox" disabled checked></td>
                    <td class="textCenter">
                        <button class="btn btn-detail">Detail</button>
                        <button class="btn btn-edit">Edit</button>
                        <button class="btn btn-hapus">Hapus</button>
                    </td>
                </tr>
            </table>
        </div>
    </div>

</div>
<?= $this->endSection(); ?>