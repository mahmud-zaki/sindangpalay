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
                            <div class="bootstrap-data-table-panel">
                                <div class="table-responsive">
                                    <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Judul post</th>
                                                <th>Gambar</th>
                                                <th>Deskripsi</th>
                                                <th>Tanggal post</th>
                                                <th>Opsi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 1; ?>
                                            <?php foreach ($post as $po) : ?>
                                                <tr>
                                                    <td><?= $i; ?></td>
                                                    <td><?= $po['judul']; ?></td>
                                                    <td style="width: 150px;"><img src="<?= base_url('assets/img/postingan/') . $po['gambar']; ?>" class="img-thumbnail img-fluid" style="height: 50%;"></td>
                                                    <td><?= $po['deskripsi']; ?></td>
                                                    <td><?= format_indo(date($po['tggl_post']), 'Y-m') ?></td>
                                                    <td align="start">
                                                        <a href="<?= base_url('admin/ubah_post/') . $po['id']; ?>" class="badge badge-success">Ubah</a>
                                                        <a href="<?= base_url('admin/hapus_post/') . $po['id']; ?>" class="badge badge-danger">Hapus</a>
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