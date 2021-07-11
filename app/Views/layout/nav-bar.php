<div class="mb-5"></div>
<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container">
        <h2>
            <a class="navbar-brand" href="#">
                <i class="fas fa-laptop-medical mr-2"></i>
                Telemedicine Monitoring
            </a>
        </h2>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('/dashboard/dashboard'); ?>">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('/konten/konten'); ?>">Konten</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('/'); ?>">Pengaturan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('/'); ?>">Keluar<i class="fas fa-sign-out-alt ml-2"></i></a>
                </li>
            </ul>
        </div>
    </div>
</nav>