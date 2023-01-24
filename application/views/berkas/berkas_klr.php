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
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="bootstrap-data-table-panel">
                                <div class="table-responsive">
                                    <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>ID Berkas</th>
                                                <th>Nama berkas</th>
                                                <th>Nama pengurus</th>
                                                <th>Alamat</th>
                                                <th>No. Telepon</th>
                                                <th>Berkas</th>
                                                <th>Tanggal berkas dibuat</th>
                                                <th>Opsi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 1; ?>
                                            <?php foreach ($berkas as $b) : ?>
                                                <tr>
                                                    <form action="<?= base_url('admin/brks_dntr'); ?>" method="POST">
                                                        <td><?= $i; ?></td>
                                                        <td><input type="text" name="id_berkas" id="id_berkas" value="<?= $b['id_berkas']; ?>" hidden><?= $b['id_berkas']; ?></td>
                                                        <td><input type="text" name="nama_berkas" id="nama_berkas" value="<?= $b['nama_berkas']; ?>" hidden><?= $b['nama_berkas']; ?></td>
                                                        <td><input type="text" name="nama" id="nama" value="<?= $b['nama']; ?>" hidden><?= $b['nama']; ?></td>
                                                        <td><input type="text" name="alamat" id="alamat" value="<?= $b['alamat']; ?>" hidden><?= $b['alamat']; ?></td>
                                                        <td><input type="text" name="no_tlp" id="no_tlp" value="<?= $b['no_tlp']; ?>" hidden><?= $b['no_tlp']; ?></td>
                                                        <td><a href="<?php echo base_url(); ?>admin/download/<?php echo $b['id_berkas']; ?>"><?= $b['berkas']; ?></a></td>
                                                        <td><?= $b['tggl_brks']; ?></td>

                                                        <td align="start">
                                                            <button type="submit" class="badge badge-primary">Antar berkas</button>
                                                            <a href="<?= base_url('menu/edit_menu/') . $b['id']; ?>" class="badge badge-success">edit</a>
                                                            <a href="<?= base_url('menu/hapus_menu/') . $b['id']; ?>" class="badge badge-danger">delete</a>
                                                        </td>
                                                    </form>
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