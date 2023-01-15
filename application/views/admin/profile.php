<div class="content-wrap">
    <div class="main">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 p-r-0 title-margin-right">
                    <div class="page-header">
                        <div class="page-title">
                            <h1>Hallo, <span><?= $user['nama']; ?>.</span></h1>
                        </div>
                    </div>
                </div>
                <!-- /# column -->
                <div class="col-lg-4 p-l-0 title-margin-left">
                    <div class="page-header">
                        <div class="page-title">
                            <ol class="breadcrumb color-white">
                                <li class="breadcrumb-item active"><?= $title; ?></li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- /# column -->
            </div>
            <div class="col-lg-6" id="flashdata">
                <?= $this->session->flashdata('message'); ?>
            </div>
            <section id="main-content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="user-profile">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="user-photo m-b-30">
                                                <img class="img-fluid" src="<?= base_url('assets/img/profile/') . $user['gambar']; ?>" alt="foto-profile" />
                                            </div>
                                            <div>
                                                <small>Tanggal dibuat <?= $user['tggl_akun']; ?></small>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="user-profile-name"><?= $user['nama']; ?></div>
                                            <div class="user-job-title"><small class="color-dark">Jabatan :</small> <?= $user['jabatan']; ?></div>
                                            <div class="custom-tab user-profile-tab">
                                                <!-- <ul class="nav nav-tabs" role="tablist">
                                                    <li>
                                                        <a>Data pribadi saya</a>
                                                    </li>
                                                </ul> -->
                                                <div class="tab-content">
                                                    <div role="tabpanel" class="tab-pane active" id="1">
                                                        <div class="contact-information">
                                                            <div class="phone-content">
                                                                <span class="contact-title">No. Telepon / WA :</span>
                                                                <span class="phone-number"><?= $user['no_tlp']; ?></span>
                                                            </div>
                                                            <div class="address-content">
                                                                <span class="contact-title">Alamat :</span>
                                                                <span class="mail-address"><?= $user['alamat']; ?></span>
                                                            </div>
                                                            <div class="email-content">
                                                                <span class="contact-title">Email :</span>
                                                                <span class="contact-email"><?= $user['email']; ?></span>
                                                            </div>
                                                            <div class="website-content">
                                                                <span class="contact-title">Tempat lahir :</span>
                                                                <span class="contact-website"><?= $user['tmp_lahir']; ?></span>
                                                            </div>
                                                            <div class="skype-content">
                                                                <span class="contact-title">Tanggal lahir :</span>
                                                                <span class="contact-skype"><?= $user['tggl_lahir']; ?></span>
                                                            </div>
                                                            <div class="skype-content">
                                                                <span class="contact-title">Jenis Kelamin :</span>
                                                                <span class="contact-skype"><?= $user['jenis_k']; ?></span>
                                                            </div>
                                                            <div class="skype-content">
                                                                <span class="contact-title">Agama :</span>
                                                                <span class="contact-skype"><?= $user['agama']; ?></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /# row -->