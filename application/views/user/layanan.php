<!-- page -->
<div class="container">
    <div class="text-center mb-2 mt-3">
        <h2>LAYANAN KAMI</h2>
    </div>
    <div class="row">
        <div class="col-lg-4 mb-4 mt-4">
            <div class="card cards text-center m-auto shadow" style="width: 18rem;">
                <img src="<?= base_url('assets/'); ?>img/live_chat.png" class="rounded mx-auto d-block p-1" alt="..." style="height: 8em;">
                <div class="card-body ">
                    <h5 class="card-title">Live Chat</h5>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-4 mt-4">
            <div class="card cards text-center m-auto shadow" style="width: 18rem;">
                <img src="<?= base_url('assets/'); ?>img/si_pintar.png" class="rounded mx-auto d-block p-1" alt="..." style="height: 8em;">
                <div class="card-body ">
                    <h5 class="card-title">Si Pintar</h5>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-4 mt-4">
            <div class="card cards text-center m-auto shadow" style="width: 18rem; ">
                <img src="<?= base_url('assets/'); ?>img/Inf.png" class="rounded mx-auto d-block p-1" alt="..." style="height: 8em;">
                <div class="card-body ">
                    <h5 class="card-title">Informasi</h5>
                </div>
            </div>
        </div>
    </div>

    <div class="accordion accordion-flush mb-5" id="accordionFlushExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-heading1">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse1" aria-expanded="false" aria-controls="flush-collapse1">
                    1. Surat Keterangan Usaha
                </button>
            </h2>
            <div id="flush-collapse1" class="accordion-collapse collapse show" aria-labelledby="flush-heading1" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    <h5>Syarat Pembuatan Surat Keterangan Usaha</h5>
                    <ul style="list-style-type:square">
                        <li>KTP (kartu tanda penduduk) baik asli maupun fotokopi</li>
                        <li>KK (kartu keluarga) asli dan fotokopi</li>
                        <li>Formulir pendukung</li>
                        <li>Surat pengantar dari RT/RW setempat</li><br>
                        <p>Selain itu, Pelaku usaha juga perlu menyiapkan:</p>
                        <li>Foto lokasi usaha</li>
                        <li>Pernjanjian sewa tanah/bangunan</li>
                        <li>Surat pernyataan tidak keberatan</li>
                        <li>KTP pemilik tanah/bangunan</li>
                        <li>Surat pernyataan yang menyatakan tidak akan berjualan di trotoar dan badan jalan, serta tidak mengganggu kegiatan umum</li>
                    </ul>
                    <a href="<?= base_url('user/ket_usaha'); ?>" class="btn btn-primary btn-sm ">Buat Surat Keterangan Usaha</a>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-heading2">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse2" aria-expanded="false" aria-controls="flush-collapse2">
                    2. Surat Keterangan Domisili
                </button>
            </h2>
            <div id="flush-collapse2" class="accordion-collapse collapse" aria-labelledby="flush-heading2" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    <h5>Syarat Membuat Surat Keterangan Domisili</h5>
                    <ul style="list-style-type:square">
                        <li>Surat pengantar dari Ketua RT dan RW</li>
                        <li>KTP serta Kartu Keluarga dalam bentuk asli dan fotokopi</li>
                        <li>Surat kuasa dengan materai Rp10.000 jika pengurusan Surat Keterangan Domisili diwakilkan</li>
                    </ul>
                    <a href="<?= base_url('user/ket_domisili'); ?>" class="btn btn-primary btn-sm ">Buat Surat Keterangan Domisili</a>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-heading3">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse3" aria-expanded="false" aria-controls="flush-collapse3">
                    3. Surat Keterangan Kematian
                </button>
            </h2>
            <div id="flush-collapse3" class="accordion-collapse collapse" aria-labelledby="flush-heading3" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    <h5>Syarat Pembuatan Surat Keterangan Kematian</h5>
                    <ul style="list-style-type:square">
                        <li>Surat Pengantar RT diketahui RW</li>
                        <li>Formulir (Tersedia di Kelurahan)</li>
                        <li>KTP Asli Yang Meninggal</li>
                        <li>KK Dimana Yang Meninggal Terdaftar</li>
                        <li>Surat Keterangan Kematian dari Dokter/Rumah Sakit/Kepolisian</li>
                        <li>Fotocopy KTP Elektronik Pelapor/Pemohon</li>
                        <li>Surat Tanda Melapor diri (STMD) dari Kepolisian Bagi Warga Negara Asing (WNA)</li>
                    </ul>
                    <a href="<?= base_url('user/ket_kematian'); ?>" class="btn btn-primary btn-sm ">Buat Surat Keterangan Kematian</a>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-heading4">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse4" aria-expanded="false" aria-controls="flush-collapse4">
                    4. Surat Keterangan Status Perkawinan
                </button>
            </h2>
            <div id="flush-collapse4" class="accordion-collapse collapse" aria-labelledby="flush-heading4" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    <h5>Syarat Pembuatan Surat Keterangan Status Perkawinan</h5>
                    <ul style="list-style-type:square">
                        <li>Surat Pengantar dari Kelurahan</li>
                        <li>Fotocopy KK dan Asli</li>
                        <li>Fotocopy KTP dan Asli</li>
                        <li>Fotocopy Akte Kelahiran dan Ijazah</li>
                        <li>Akte Perceraian untuk Cerai Hidup</li>
                        <li>Akte Kematian untuk Cerai Mati</li>
                    </ul>
                    <a href="<?= base_url('user/ket_kawin'); ?>" class="btn btn-primary btn-sm ">Buat Surat Keterangan Status Perkawinan</a>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-heading5">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse5" aria-expanded="false" aria-controls="flush-collapse5">
                    5. Surat Keterangan Pindah Domisili
                </button>
            </h2>
            <div id="flush-collapse5" class="accordion-collapse collapse" aria-labelledby="flush-heading5" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    <h5>Syarat Membuat Surat Keterangan Pindah Domisili</h5>
                    <p>Berikut ini syarat yang harus disiapkan untuk membuat surat pindah domisili:</p>
                    <ul style="list-style-type:square">
                        <li>Pertama sebelum kamu benar-benar membuat surat pindah domisili adalah mempunyai alamat tujuan pindah</li>
                        <li>Kartu Keluarga (KK) asli dan fotokopi</li>
                        <li>KTP asli dan fotokopi</li>
                    </ul>
                    <a href="<?= base_url('user/ket_pindah'); ?>" class="btn btn-primary btn-sm ">Buat Surat Keterangan Pindah Domisili</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end page -->