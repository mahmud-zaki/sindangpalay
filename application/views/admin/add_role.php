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
                                <form action="<?= base_url('admin/add_role'); ?>" method="POST">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="form-group">
                                                <label>Nama role</label>
                                                <input type="text" class="form-control" id="role" name="role">
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary m-b-10 m-l-5">Tambah role</button>
                                    <a href="<?= base_url('admin/role'); ?>" class="btn btn-danger m-b-10 m-l-5">Kembali</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>