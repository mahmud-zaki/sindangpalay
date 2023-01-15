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
            <section id="main-content">
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
                                                <?= form_open_multipart('admin/ubah_post'); ?>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <input type="text" id="id_posting" name="id_posting" class="form-control" value="<?= $post['id']; ?>" hidden>
                                                        <div class="form-group">
                                                            <label>Judul postingan</label>
                                                            <input type="text" id="judul" name="judul" class="form-control" value="<?= $post['judul']; ?> ">
                                                            <?= form_error('judul', '<small class="text-danger pl-3">', '</small>'); ?>
                                                        </div>
                                                        <label class="small">Deskripsi<small class="text-danger">*wajib diisi</small></label>
                                                        <div class="form-group">
                                                            <textarea id="desc" name="desc" cols="50" rows="5"><?= $post['deskripsi']; ?></textarea>
                                                            <?= form_error('desc', '<small class="text-danger pl-3">', '</small>'); ?>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group row">
                                                            <div class="col-sm-10">Gambar Posting</div>
                                                            <div class="col-sm-10">
                                                                <div class="row">
                                                                    <div class="col-sm-10">
                                                                        <img src="<?= base_url('assets/img/postingan/') . $post['gambar']; ?>" width="100px" class="img-thumbnail">
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <div class="custom-file">
                                                                            <input type="file" class="custom-file-input" id="image" name="image" aria-describedby="inputGroupFileAddon01">
                                                                            <label class="custom-file-label">Pilih file</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-primary m-b-10 m-l-5">Simpan perubahan</button>
                                                <a href="<?= base_url('admin/post_'); ?>" class="btn btn-danger m-b-10 m-l-5">Batalkan perubahan</a>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>