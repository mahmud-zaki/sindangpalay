<body>
    <nav class="navbar  navbar-expand-lg navbar-light p-r-0" style="background-color: #00ABB3;">
        <div class="container-fluid">
            <a class="navbar-brand float-left ms-4" href="<?= base_url('user'); ?>">
                <img src="<?= base_url('assets/'); ?>img/logo.png" alt="logo_kelurahan" style="width: 155px;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" style="flex-grow: 0;" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link mx-2" href="<?= base_url('user'); ?>">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2" href="<?= base_url('user/layanan'); ?>">Layanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2" href="<?= base_url('user/kontak'); ?>">Kontak</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2" href="<?= base_url('user/blog'); ?>">Blog</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <span class="target"></span>

    <script>
        (function() {

            const target = document.querySelector(".target");
            const links = document.querySelectorAll(".mynav");
            const colors = ["deepskyblue", "orange", "firebrick", "gold", "magenta", "black", "darkblue"];

            function mouseenterFunc() {
                if (!this.parentNode.classList.contains("active")) {
                    for (let i = 0; i < links.length; i++) {
                        if (links[i].parentNode.classList.contains("active")) {
                            links[i].parentNode.classList.remove("active");
                        }
                        links[i].style.opacity = "0.25";
                    }

                    this.parentNode.classList.add("active");
                    this.style.opacity = "1";

                    const width = this.getBoundingClientRect().width;
                    const height = this.getBoundingClientRect().height;
                    const left = this.getBoundingClientRect().left + window.pageXOffset;
                    const top = this.getBoundingClientRect().top + window.pageYOffset;
                    const color = colors[Math.floor(Math.random() * colors.length)];

                    target.style.width = `${width}px`;
                    target.style.height = `${height}px`;
                    target.style.left = `${left}px`;
                    target.style.top = `${top}px`;
                    target.style.borderColor = color;
                    target.style.transform = "none";
                }
            }

            for (let i = 0; i < links.length; i++) {
                links[i].addEventListener("mouseenter", mouseenterFunc);
            }

            function resizeFunc() {
                const active = document.querySelector(".mynav li.active");

                if (active) {
                    const left = active.getBoundingClientRect().left + window.pageXOffset;
                    const top = active.getBoundingClientRect().top + window.pageYOffset;

                    target.style.left = `${left}px`;
                    target.style.top = `${top}px`;
                }
            }

            window.addEventListener("resize", resizeFunc);

        })();
    </script>