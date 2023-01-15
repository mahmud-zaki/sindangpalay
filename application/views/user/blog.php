<!-- page -->
<section>
    <div class="container mt-5" style="margin-bottom: 7em;">
        <div class="col-12">
            <h2 class="mb-3">Galeri kegiatan</h2>
        </div>
        <div class="row">
            <?php foreach ($post as $po) : ?>
                <div class="col-md-1 col-lg-3 item mt-5">
                    <div class="lightbox card cards shadow">
                        <img src="<?= base_url('assets/img/postingan/') . $po['gambar']; ?>" class="img-fluid img-thumbnail" alt="<?= $po['judul']; ?>" style="height: 15rem;">
                        <div class="card-body ">
                            <h6 class="card-title text-uppercase"><?= $po['judul']; ?></h6>
                            <p class="card-text"><?= $po['deskripsi']; ?></p>
                            <small class="card-text float-left text-muted"><?= format_indo(date($po['tggl_post']), "Y-m"); ?></small>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- end page -->