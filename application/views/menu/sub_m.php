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
                    <div>
                        <a href="<?= base_url('menu/add_sm'); ?>" class="btn btn-primary">Tambah submenu baru</a>
                    </div>
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="bootstrap-data-table-panel">
                                <div class="table-responsive">
                                    <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama submenu</th>
                                                <th>Menu</th>
                                                <th>Url</th>
                                                <th>Active</th>
                                                <th>Opsi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 1; ?>
                                            <?php foreach ($subMenu as $sm) : ?>
                                                <tr>
                                                    <td><?= $i; ?></td>
                                                    <td><?= $sm['nama_menu']; ?></td>
                                                    <td><?= $sm['menu']; ?></td>
                                                    <td><?= $sm['url']; ?></td>
                                                    <td><?= $sm['is_active']; ?></td>
                                                    <td>
                                                        <a href="<?= base_url('menu/edit_submenu/') . $sm['id']; ?>" class="badge badge-success">Ubah</a>
                                                        <a href="<?= base_url('menu/hapus_submenu/') . $sm['id']; ?>" class="badge badge-danger">Hapus</a>
                                                    </td>
                                                </tr>
                                                <?php $i++; ?>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->