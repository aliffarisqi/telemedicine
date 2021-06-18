<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <h1>Hello, Bang!</h1>
        <?= $title; ?>
    </div>
</div>
<?= $this->endSection(); ?>