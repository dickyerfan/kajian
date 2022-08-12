<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-2 mt-2">
            <?= $this->session->flashdata('info'); ?>
            <?= $this->session->unset_userdata('info'); ?>
            <div class="card">
                <div class="card-header shadow text-light" style="background: linear-gradient(
                                            45deg,
                                            rgba(0, 0, 0, 0.9),
                                            rgba(0, 0, 0, 0.7) 100%
                                            )">
                    <h4 class="card-title"><?= strtoupper($title) ?></h4>
                </div>
                <div class="card-body" style="background: linear-gradient(
                                            45deg,
                                            rgba(29, 236, 197, 0.7),
                                            rgba(91, 14, 214, 0.9) 100%
                                            )">
                    <?php
                    $numOfCols = 3;
                    $rowCount = 0;
                    $bootstrapColWidth = 12 / $numOfCols;
                    ?>
                    <div class="row justify-content-center">
                        <?php foreach ($mesjid as $row) : ?>
                            <?php
                            $modal = $row->nama_mesjid;
                            $modal = preg_replace("/[^a-zA-Z]/", "", $modal);
                            $modal = substr($modal, 6, 12);
                            ?>
                            <div class="col-xl-<?= $bootstrapColWidth; ?> mb-4">
                                <div class="card border-0 shadow-lg testimonial-card mt-2 mb-3" style="height:100% ;">
                                    <div class="card-up aqua-gradient">
                                        <img src="<?= base_url('/assets/photo/') ?><?= $row->foto_mesjid ?>" height="150" class="card-img-top">
                                    </div>
                                    <div class="card-body text-dark text-center" style="background: linear-gradient(
                                            45deg,
                                            rgba(184,200,252, 0.5),
                                            rgba(255,255,255, 0.9) 100%
                                            )">
                                        <h5 class="card-title font-weight-bold text-uppercase"> <?= $row->nama_mesjid ?></h5>
                                        <h6 class="card-title"><?= $row->alamat_mesjid ?></h6>
                                        <a href="<?= $row->lokasi_mesjid ?>" target="_blank" style="text-decoration: none;"><i class="fa-solid fa-location-dot"></i> Peta Lokasi</a>
                                        <hr>
                                        <a href="<?= base_url('dashboard/detail/') ?><?= $row->id_mesjid ?>/<?= $row->nama_mesjid ?>" class="btn btn-primary border-0" style="background: linear-gradient(
                                            45deg,
                                            rgba(29, 236, 197, 0.7),
                                            rgba(91, 14, 214, 0.9) 100%
                                            )">Daftar Kajian</a>
                                        <!-- <p>
                                            <a href="<?= base_url() ?>dashboard/<?= $row->id_mesjid ?>" class="btn btn-primary btn-block" data-bs-toggle="modal" data-bs-target="#<?= $modal ?>" role="button" aria-expanded="false" aria-controls="<?= $modal ?>">
                                                Daftar Kajian
                                            </a>
                                        </p>
                                        <div class="modal fade" id="<?= $modal ?>" tabindex="-1" aria-labelledby="<?= $modal ?>Label" aria-hidden="true">
                                            <div class="card card-body text-start modal-dialog">
                                                <div class="modal-content border-primary">
                                                    <div class="modal-header bg-primary">
                                                        <h5 class="modal-title text-light" id="exampleModalLabel"> DAFTAR KAJIAN <br><?= strtoupper($row->nama_mesjid) ?></h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <?php foreach ($kajian as $row) : ?>
                                                            <ol>
                                                                <li><b><?= $row->hari_kajian ?></b></li>
                                                                <b><?= $row->nama_kitab ?></b><br>
                                                                <i>(<?= $row->ket_kitab ?>)</i><br>
                                                                <b><?= $row->nama_ustadz ?></b><br>
                                                                <i>(<?= $row->ket_ustadz ?>)</i> <br>
                                                                <?= $row->nama_waktu ?><br>
                                                                <?= $row->waktu_kajian ?> <br>
                                                            </ol>
                                                        <?php endforeach; ?>
                                                    </div>
                                                    <div class="modal-footer bg-primary">

                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        <?php
                            $rowCount++;
                            if ($rowCount % $numOfCols == 0) echo '</div><div class="row">';
                        endforeach; ?>
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