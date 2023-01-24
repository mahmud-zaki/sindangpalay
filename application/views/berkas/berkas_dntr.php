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
                                                <th>Status</th>
                                                <th>Tanggal berkas diantar</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 1; ?>
                                            <?php foreach ($berkas as $b) : ?>
                                                <tr>
                                                    <td><?= $i; ?></td>
                                                    <td><?= $b['id_berkas']; ?></td>
                                                    <td><?= $b['nama_berkas']; ?></td>
                                                    <td><?= $b['nama']; ?></td>
                                                    <td><?= $b['alamat']; ?></td>
                                                    <td><?= $b['no_tlp']; ?></td>
                                                    <td>Berkas sudah diantar</td>
                                                    <td align="center"><?= $b['tggl_brks']; ?></td>
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