<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="content-tele">
            <div class="grid-item content-tele-ls">
                <div class="ls-left">
                    <img src="" alt="No Picture">
                    <h1>Checklist Lifestyle</h1>
                </div>
                <div class="ls-right">
                    <div>
                        <h2>13</h2>
                        <p>Kepatuhan</p>
                    </div>
                    <button class="btn btn-ls">Full</button>
                </div>
                <button class="btn btn-ls"><a id="nonelink" href="<?= base_url('/content/#'); ?>">Lihat Pertanyaan >></a></button>
            </div>
            <div class="grid-item content-tele-kep">
                <div class="kep-left">
                    <img src="img/kepatuhan.png" alt="">
                    <h1>Kepatuhan</h1>
                </div>
                <div class="kep-right">
                    <div>
                        <h2>13</h2>
                        <p>Kepatuhan</p>
                    </div>
                    <button class="btn btn-ls">Full</button>
                </div>
                <button class="btn btn-kep"><a id="nonelink" href="<?= base_url('/content/#'); ?>">Lihat Pertanyaan >></a></button>
            </div>
            <div class="grid-item content-tele-edu">Konten Edukasi</div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>