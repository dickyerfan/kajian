<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-2 mt-2">
            <?= $this->session->flashdata('info'); ?>
            <?= $this->session->unset_userdata('info'); ?>
            <div class="card">
                <div class="card-header card-outline card-primary shadow">
                    <h4 class="card-title"><?= strtoupper($title) ?></h4>
                </div>
                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col-md-6 col-lg-4 col-xl-4 col-xxl-4">
                            <div class="card border-0 shadow-lg testimonial-card mt-2 mb-3">
                                <div class="card-up aqua-gradient">
                                    <img src="<?= base_url() ?>/assets/img/Mesjid_ikhlas.jpg" height="150" class="card-img-top">
                                </div>
                                <div class="card-body text-dark text-center">
                                    <?php foreach ($mesjid as $row) : ?>
                                        <h5 class="card-title font-weight-bold text-uppercase"><?= $row->nama_mesjid ?></h5>
                                        <h6 class="card-title"><?= $row->alamat_mesjid ?></h6>
                                        <a href="<?= $row->lokasi_mesjid ?>" target="_blank" style="text-decoration: none;">Peta Lokasi</a>
                                    <?php endforeach; ?>
                                    <hr>
                                    <p>
                                        <a class="btn btn-primary btn-block" data-bs-toggle="collapse" href="#ikhlas" role="button" aria-expanded="false" aria-controls="ikhlas">
                                            Daftar Kajian
                                        </a>
                                    </p>
                                    <div class="collapse" id="ikhlas">
                                        <div class="card card-body text-start">
                                            <ol>
                                                <li><b>SENIN</b></li>
                                                setiap 2 pekan sekali <br>
                                                Ba'da Maghrib - selesai<br>
                                                Kajian Kitab Fiqh Muyassar<br>
                                                Ustadz Bagus Ekodono, S.PDi
                                                <li><b>SELASA</b></li>
                                                setiap 2 pekan sekali<br>
                                                Ba'da Maghrib - selesai<br>
                                                Kajian Kitab Maqolatul Islamiyyin<br>
                                                (Prinsip dasar Ahlussunah Waljama'ah)<br>
                                                Ustadz Muhammad Yasir,lc.,M.Hi
                                                <li><b>SABTU</b></li>
                                                setiap 2 Pekan sekali<br>
                                                Ba'da Maghrib - selesai<br>
                                                Kajian Syarah Kitab Adab dan Akhlaq<br>
                                                Ustadz Huzeim Miftah
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="row justify-content-center">
                        <div class="col-md-6">
                            <div class="card bg-danger shadow">
                                <div class="card-body">
                                    <h4 class="card-title">Back Up</h4>
                                    <a href="<?= base_url('backup/backup') ?>" class="btn btn-primary"><i class="fas fa-download"></i> Backup database</a><br>
                                    <div class="text-white fst-italic badge">Klik Backup untuk Backup database</div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card bg-primary shadow">
                                <div class="card-body">
                                    <h4 class="card-title">Restore</h4>
                                    <form action="<?= base_url('backup/restore') ?>" method="post" enctype="multipart/form-data">
                                        <input type="file" name="datafile" title="Pilih File">
                                        <input type="submit" value="Klik untuk restore" class="btn btn-warning">
                                        <div class="text-white fst-italic badge">Pilih File dulu sebelum klik restore</div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </main>