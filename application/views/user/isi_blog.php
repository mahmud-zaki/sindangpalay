<!-- page -->
<section>
    <?php foreach ($post as $po) : ?>
        <div class="container mt-5" style="margin-bottom: 7em;">
            <div class="col-12">
                <h2 class="mb-5"><?= $po->judul ?></h2>
            </div>
            <div class="row">
                <main class="center mb-4">
                    <img src="<?= base_url('assets/img/postingan/') . $po->gambar ?>" class="img-fluid img-thumbnail" alt="<?= $po->judul ?>" style="height: 15rem;">
                    <hr class="col-3 col-md-2 mb-lg-5">
                    <p class="fs-5 text-center"><?= $po->deskripsi ?></p>
                </main>
            </div>
        </div>
    <?php endforeach; ?>
</section>
<!-- end page -->