<body class="bg-primary">
    <div class="unix-login">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="login-content">
                        <div class="login-form">
                            <h4>Sindang Palay | Login</h4>
                            <div id="flashdata">
                                <?= $this->session->flashdata('message'); ?>
                            </div>
                            <form action="<?= base_url('auth/lupa_password'); ?>" method="POST">
                                <div class="form-group">
                                    <label>Alamat Email</label>
                                    <input type="text" class="form-control" id="username" name="username">
                                </div>
                                <div class="form-group">
                                    <label>Password baru</label>
                                    <input type="password" class="form-control" id="password1" name="password1">
                                    <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label>Konfirmasi password baru</label>
                                    <input type="password" class="form-control" id="password2" name="password2">
                                    <?= form_error('password2', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Reset password</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>