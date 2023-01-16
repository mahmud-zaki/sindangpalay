<div class="content-wrap">
    <div class="main">
        <div class="container">
            <!-- /# row -->
            <div class="row">
                <div class="col-lg-6" id="flashdata">
                    <?= $this->session->flashdata('message'); ?>
                </div>
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-title">
                            <h4>Pendaftaran Akun</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-elements">
                                <form action="<?= base_url('Data_JBH2P23x'); ?>" method="POST">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Username</label>
                                                <input type="text" id="username" name="username" class="form-control">
                                                <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                            <div class="form-group">
                                                <label>Nama lengkap</label>
                                                <input class="form-control" id="nama" name="nama" type="text">
                                                <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                            <div class="form-group">
                                                <label>Jabatan</label>
                                                <input class="form-control" id="jabatan" name="jabatan" type="text">
                                            </div>
                                            <div class="form-group">
                                                <label>Alamat Email</label>
                                                <input class="form-control" type="email" id="email" name="email">
                                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                            <div class="form-group">
                                                <label>Password<small class="text-danger mb-3">*Minimal 8 character</small></label>
                                                <input class="form-control" id="password1" name="password1" type="password">
                                            </div>
                                            <div class="form-group">
                                                <label>Konfirmasi password</label>
                                                <input class="form-control" id="password2" name="password2" type="password">
                                            </div>
                                            <div class="form-group">
                                                <label>Alamat<small>(optional)</small></label>
                                                <input class="form-control" id="alamat" name="alamat" type="text">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Nomor telepon<small>(optional)</small></label>
                                                <input class="form-control" id="no_tlp" name="no_tlp" type="number">
                                            </div>
                                            <div class="form-group">
                                                <label>Tempat lahir<small>(optional)</small></label>
                                                <input class="form-control" id="tmp_lahir" name="tmp_lahir" type="text">
                                            </div>
                                            <div class="form-group">
                                                <label>Agama<small>(optional)</small></label>
                                                <input class="form-control" id="agama" name="agama" type="text">
                                            </div>
                                            <div class="form-group">
                                                <label>Tanggal lahir<small>(optional)</small></label>
                                                <input class="form-control" id="tggl_lahir" name="tggl_lahir" type="date">
                                            </div>
                                            <div class="form-group">
                                                <label>Jenis kelamin<small class="color-danger">*Wajib diisi</small></label>
                                                <div class="row">
                                                    <label>Laki-laki
                                                        <input id="jenis_k" name="jenis_k" type="radio" value="Laki-laki">
                                                    </label>
                                                </div>
                                                <div class="row">
                                                    <label>Perempuan
                                                        <input id="jenis_k" name="jenis_k" type="radio" value="Perempuan">
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Role<small class="color-danger">*Wajib diisi</small> </label>
                                                <select name="role_id" id="role_id" class="form-control">
                                                    <option value="" selected hidden>Pilih role</option>
                                                    <?php foreach ($role as $r) : ?>
                                                        <?php if ($r['id'] > 1) : ?>
                                                            <option value="<?= $r['id']; ?>"> <?= $r['role']; ?></option>
                                                        <?php else : ?>
                                                        <?php endif; ?>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <small class="text-warning bg-dark rounded p-5">*Harap segera ubah password di menu pengaturan ubah password</small>
                                    <div class="row justify-content-center">
                                        <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Daftarkan Akun</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </body>

    </html>