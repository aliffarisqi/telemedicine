<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <h1>Hello, Kotlin!</h1>
        <?= $title; ?>
        <img src="/img/ic_popular.png">
    </div>
</div>
<?= $this->endSection(); ?>