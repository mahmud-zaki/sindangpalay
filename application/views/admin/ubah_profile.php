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
            <section id="main-content">
                <div class="content-wrap">
                    <div class="main">
                        <div class="container">
                            <!-- /# row -->
                            <div class="row justify-content-center">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-title">
                                            <h4><?= $title; ?></h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="basic-elements">
                                                <?= form_open_multipart('admin/ubah_profile'); ?>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label>Username</label>
                                                            <input type="text" id="username" name="username" class="form-control" value="<?= $user['username']; ?>" readonly>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Nama lengkap</label>
                                                            <input class="form-control" id="nama" name="nama" type="text" value="<?= $user['nama']; ?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Jabatan</label>
                                                            <input class="form-control" id="jabatan" name="jabatan" type="text" value="<?= $user['jabatan']; ?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Alamat Email</label>
                                                            <input class="form-control" type="email" id="email" name="email" value="<?= $user['email']; ?>" readonly>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Alamat<small>(optional)</small></label>
                                                            <input class="form-control" id="alamat" name="alamat" type="text" value="<?= $user['alamat']; ?>">
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-sm-3">Foto profile</div>
                                                            <div class="col-sm-10">
                                                                <div class="row">
                                                                    <div class="col-sm-3">
                                                                        <img src="<?= base_url('assets/img/profile/') . $user['gambar']; ?>" class="img-thumbnail">
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <div class="custom-file">
                                                                            <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                                                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label>Nomor telepon<small>(optional)</small></label>
                                                            <input class="form-control" id="no_tlp" name="no_tlp" type="number" value="<?= $user['no_tlp']; ?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Tempat lahir<small>(optional)</small></label>
                                                            <input class="form-control" id="tmp_lahir" name="tmp_lahir" type="text" value="<?= $user['tmp_lahir']; ?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Agama<small>(optional)</small></label>
                                                            <input class="form-control" id="agama" name="agama" type="text" value="<?= $user['agama']; ?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Tanggal lahir<small>(optional)</small></label>
                                                            <input class="form-control" id="tggl_lahir" name="tggl_lahir" type="date" value="<?= $user['tggl_lahir']; ?>">
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