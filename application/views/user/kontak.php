<!-- page -->
<div class="container pt-5 kontak topse">
    <div class="text-center mb-5">
        <h2>HUBUNGI KAMI</h2>
    </div>
    <div class="row px-4">
        <div class="col-lg-5 col-md-12 col-sm-12 m-2">
            <div class="">
                <div class="tab-pane active" id="seller-details">
                    <div class="col-lg-12" id="flashdata">
                        <?= $this->session->flashdata('message'); ?>
                    </div>
                    <div class="mb-4">
                        <h5>Kelurahan SindangPalay Sukabumi</h5>
                        <p class="card-title-desc">Kirim Aspirasi</p>
                    </div>
                    <form action="<?= base_url('user/aspir_'); ?>" method="POST">
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" id="judul" name="judul" class="form-control" placeholder="Judul">
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <input type="email" id="email" name="email" class="form-control" placeholder="Alamat email">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama lengkap">
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <input type="number" class="form-control numeric" id="no_tlp" name="no_tlp" placeholder="No Telepon">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <textarea class="form-control" id="keluhan" name="keluhan" placeholder="Isi Keluhan" rows="2"></textarea>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary mb-3">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-5 col-md-12 col-sm-12 m-auto">
            <div class="card text-center m-auto">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7920.931234621474!2d106.947813!3d-6.954273!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xaa197bb0d126b954!2sKantor%20Kelurahan%20Sindangpalay%20Kota%20Sukabumi!5e0!3m2!1sid!2sus!4v1672368633517!5m2!1sid!2sus" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
    <div class="row my-5 px-5">
        <div class="col-md-3">
            <div class="dbox w-100 text-center">
                <div class="icon d-flex align-items-center justify-content-center">
                    <a class="btn btn-outline-dark btn-floating m-1 rounded-circle" href="#!" role="button"><i class="fa-solid fa-location-dot fa-2x"></i></a>
                </div>
                <div class="text">
                    <p>Jl. Garuda No.1, Sindangpalay, Cibeureum, Kota Sukabumi, Jawa Barat 43162, Indonesia</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="dbox w-100 text-center">
                <div class="icon d-flex align-items-center justify-content-center">
                    <a class="btn btn-outline-dark btn-floating m-1 rounded-circle" href="http://wa.me/+6285156505931" role="button"><i class="fa-solid fa-phone fa-2x"></i></a>
                </div>
                <div class="text">
                    <p><a href="http://wa.me/+6285156505931"></a> +62 851-5650-5931</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="dbox w-100 text-center">
                <div class="icon d-flex align-items-center justify-content-center">
                    <a class="btn btn-outline-dark btn-floating m-1 rounded-circle" href="#!" role="button"><i class="fa-sharp fa-solid fa-envelope fa-2x"></i></a>
                </div>
                <div class="text">
                    <p><a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="dbox w-100 text-center">
                <div class="icon d-flex align-items-center justify-content-center">
                    <a class="btn btn-outline-dark btn-floating m-1 rounded-circle" href="https://www.instagram.com/kel.sindangpalay/?igshid=NTdlMDg3MTY%3D" role="button"><i class="fab fa-instagram fa-2x"></i></a>
                </div>
                <div class="text">
                    <p><a href="https://www.instagram.com/kel.sindangpalay/?igshid=NTdlMDg3MTY%3D"></a>kel.sindangpalay</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end page -->