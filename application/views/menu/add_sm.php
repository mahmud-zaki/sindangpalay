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
                                <form action="<?= base_url('menu/add_sm'); ?>" method="POST">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="form-group">
                                                <label>Nama submenu</label>
                                                <input type="text" class="form-control" id="nama_menu" name="nama_menu">
                                            </div>
                                            <div class="form-group">
                                                <label>Url <small class="h6">*Contoh halaman : </small> </label>
                                                <input type="text" class="form-control" id="url" name="url">
                                            </div>
                                            <div class="form-group">
                                                <select name="menu_id" id="menu_id" class="form-control">
                                                    <option value="">Select Menu</option>
                                                    <?php foreach ($menu as $m) : ?>
                                                        <option value="<?= $m['id']; ?>"> <?= $m['menu']; ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="1" name="is_active" id="is_active" checked>
                                                    <label class="form-check-label" for="is_active">
                                                        Active ?
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary m-b-10 m-l-5">Tambah submenu</button>
                                    <a href="<?= base_url('menu/submenu'); ?>" class="btn btn-danger m-b-10 m-l-5">Kembali</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>