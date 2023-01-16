<section id="main-content">
    <div class="content-wrap">
        <div class="main">
            <div class="container mt-5">
                <!-- /# row -->
                <h4 class="mb-4"><?= $title; ?></h4>
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="card shadow  mb-5">
                            <div class="card-title">
                            </div>
                            <div class="card-body">
                                <div class="basic-elements">
                                    <div class="col-lg-12" id="flashdata">
                                        <?= $this->session->flashdata('message'); ?>
                                    </div>
                                    <?= form_open_multipart('user/ket_usaha'); ?>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label">Pengurusan berkas</label>
                                                <input type="text" id="nama_berkas" name="nama_berkas" class="form-control" value="Keterangan Usaha" readonly>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Nama lengkap pemohon</label>
                                                <input class="form-control" id="nama" name="nama" type="text">
                                                <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Alamat rumah pemohon</label>
                                                <input class="form-control" id="alamat" name="alamat" type="text">
                                                <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">No. Telepon pemohon</label>
                                                <input class="form-control" type="number" id="no_tlp" name="no_tlp">
                                                <?= form_error('no_tlp', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-label row">
                                                <label class="form-label">Upload berkas <small class="text-danger">*Hanya mendukung file bentuk PDF</small></label>
                                                <div class="col-sm-8">
                                                    <div class="row">
                                                        <div class="input-group mb-3">
                                                            <div class="custom-file">
                                                                <input type="file" class="form-control" id="berkas" name="berkas">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-5 text-center">
                                    <button type="submit" class="btn btn-primary px-5">Kirim</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>