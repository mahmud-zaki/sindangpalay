<!-- page -->
<section>
    <div class="container mt-5" style="margin-bottom: 7em;">
        <div class="col-12">
            <h2 class="mb-3">Galeri kegiatan</h2>
        </div>
        <div class="row">
            <?php foreach ($post as $po) : ?>
                <div class="col-md-4 col-lg-3 item mt-5 post">
                    <div class="lightbox card cards shadow">
                        <img src="<?= base_url('assets/img/postingan/') . $po['gambar']; ?>" class="img-fluid img-thumbnail" alt="<?= $po['judul']; ?>" style="height: 15rem;">
                        <div class="card-body ">
                            <h6 class="card-title text-uppercase"><?= $po['judul']; ?></h6>
                            <p class="content"><?= $po['deskripsi']; ?></p>
                            <a href="<?= base_url('user/isi_blog/') . $po['id']; ?>" class="btn btn-sm btn-primary">Baca lebih lanjut</a>
                            <small class="card-text text-muted row pt-2 m-l-3" style="margin-left: 0;"><?= format_indo(date($po['tggl_post']), "Y-m"); ?></small>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- end page -->

<script>
    let noOfCharac = 90;
    let contents = document.querySelectorAll(".content");
    contents.forEach(content => {
        //If text length is less that noOfCharac... then hide the read more button
        if (content.textContent.length < noOfCharac) {
            content.nextElementSibling.style.display = "none";
        } else {
            let displayText = content.textContent.slice(0, noOfCharac);
            let moreText = content.textContent.slice(noOfCharac);
            content.innerHTML = `${displayText}<span class="dots">...</span><span class="hide more">${moreText}</span>`;
        }
    });

    function readMore(btn) {
        let post = btn.parentElement;
        post.querySelector(".dots").classList.toggle("hide");
        post.querySelector(".more").classList.toggle("hide");
        btn.textContent == "Read More" ? btn.textContent = "Read Less" : btn.textContent = "Read More";
    }
</script>