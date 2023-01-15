<body>
    <nav class="navbar navbar-expand-lg navbar-light p-r-0" style="background-color: #00ABB3;">
        <div class="container-fluid">
            <a class="navbar-brand float-left" href="<?= base_url('user'); ?>">
                <img src="<?= base_url('assets/'); ?>img/logo.png" alt="logo_kelurahan" style="width: 155px;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" style="flex-grow: 0;" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" style="color: black;" href="<?= base_url('user'); ?>">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: black;" href="<?= base_url('user/layanan'); ?>">Layanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: black;" href="<?= base_url('user/kontak'); ?>">Kontak</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: black;" href="<?= base_url('user/blog'); ?>">Blog</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>