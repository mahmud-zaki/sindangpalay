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
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-title">
                            <h4><?= $title; ?></h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-elements">
                                <form action="<?= base_url('admin/ubah_password'); ?>" method="POST">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="form-group">
                                                <label>Password lama</label>
                                                <input type="password" class="form-control" id="password_lama" name="password_lama">
                                                <?= form_error('password_lama', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                            <div class="form-group">
                                                <label>Password baru <small>*Minimal 8 character</small> </label>
                                                <input type="password" class="form-control" id="password_baru1" name="password_baru1">
                                                <?= form_error('password_baru1', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                            <div class="form-group">
                                                <label>Konfirmasi password baru <small>*Minimal 8 character</small> </label>
                                                <input type="password" class="form-control" id="password_baru2" name="password_baru2">
                                                <?= form_error('password_baru2', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary m-b-10 m-l-5">Simpan perubahan</button>
                                    <a href="<?= base_url('admin'); ?>" class="btn btn-danger m-b-10 m-l-5">Batalkan perubahan</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>