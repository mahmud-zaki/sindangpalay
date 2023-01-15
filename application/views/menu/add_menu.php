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
                                <form action="<?= base_url('menu/add_menu'); ?>" method="POST">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="form-group">
                                                <label>Nama menu</label>
                                                <input type="text" class="form-control" id="menu" name="menu">
                                            </div>
                                            <div class="form-group">
                                                <label>Icon menu <small class="h6">*Isi icon menu dapat dilihat di <a href="<?= base_url('menu/icons'); ?>" class="color-primary border-bottom">Icons</a></small> </label>
                                                <input type="text" class="form-control" id="icon" name="icon">
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary m-b-10 m-l-5">Tambah menu</button>
                                    <a href="<?= base_url('menu'); ?>" class="btn btn-danger m-b-10 m-l-5">Kembali</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>