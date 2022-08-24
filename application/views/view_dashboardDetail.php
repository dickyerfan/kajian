<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-2 mt-2">
            <?= $this->session->flashdata('info'); ?>
            <?= $this->session->unset_userdata('info'); ?>
            <!-- <div class="card"> -->
            <div class="card-header card-outline card-primary shadow">
                <a class="text-dark fw-bold" style="text-decoration: none;"><?= strtoupper($title) ?></a>
                <a href="<?= base_url() ?>dashboard" class="btn btn-primary btn-sm float-end">Kembali</a>
            </div>
            <div class="card-body">
                <?php
                $numOfCols = 3;
                $rowCount = 0;
                $bootstrapColWidth = 12 / $numOfCols;
                ?>
                <div class="row">
                    <?php foreach ($kajian as $row) : ?>
                        <div class="col-xl-<?= $bootstrapColWidth; ?>" style="margin-bottom: 100px;">
                            <div class="card text-center shadow">
                                <div class="card-header bg-primary text-light" style="background: linear-gradient(
                                            45deg,
                                            rgba(29, 236, 197, 0.7),
                                            rgba(91, 14, 214, 0.9) 100%
                                            )">
                                    <?php
                                    $hari = $row->hari_kajian;
                                    switch ($hari) {
                                        case '1':
                                            $hari = "Ahad";
                                            break;
                                        case '2':
                                            $hari = "Senin";
                                            break;
                                        case '3':
                                            $hari = "Selasa";
                                            break;
                                        case '4':
                                            $hari = "Rabu";
                                            break;
                                        case '5':
                                            $hari = "Kamis";
                                            break;
                                        case '6':
                                            $hari = "Jumat";
                                            break;
                                        case '7':
                                            $hari = "Sabtu";
                                            break;
                                    }
                                    ?>
                                    <b><?= strtoupper($hari); ?></b>
                                </div>
                            </div>
                            <div class="card shadow h-100">
                                <div class="card p-1 text-light position-relative h-100">
                                    <img src="<?= base_url('assets/photo/') ?><?= $row->foto_mesjid; ?>" class="card-img h-100" alt="...">
                                    <div class="mask position-absolute top-0 end-0 bottom-0 start-0" style="background: linear-gradient(
                                            45deg,
                                            rgba(69,63,251, 0.9),
                                            rgba(70,252,186, 0.9) 100%
                                            )"></div>
                                </div>
                                <div class="card-img-overlay text-light">
                                    <h4 class="card-title kitab"><i class="fas fa-book-open fa-fw"></i> <?= $row->nama_kitab ?></h4>
                                    <h5 class="card-text ms-4 kitab"><i><?= $row->ket_kitab == null ? '<br>' : $row->ket_kitab ?></i></h5>
                                    <hr>
                                    <h6 class="card-title ustadz"><i class="fas fa-user fa-fw"></i> Ust. <b><?= $row->nama_ustadz ?></b> حَفِظَهُ اللهُ</h6>
                                    <p class="ket_ustadz"><i class="fas fa-id-card fa-fw"></i> <small> <?= $row->ket_ustadz == null ? '<br>' : $row->ket_ustadz ?></small></p>
                                    <hr>
                                    <b><i class="fas fa-clock fa-fw"></i> <?= $row->nama_waktu ?></b><br>
                                    <b><i class="fas fa-calendar-alt fa-fw"></i> <?= $row->waktu_kajian ?> </b>
                                </div>
                            </div>
                            <div class="card text-center shadow">
                                <div class="card-footer bg-primary text-light" style="background: linear-gradient(
                                            45deg,
                                            rgba(29, 236, 197, 0.7),
                                            rgba(91, 14, 214, 0.9) 100%
                                            )">
                                    <b><?= $row->keterangan; ?></b>
                                </div>
                            </div>
                        </div>
                    <?php
                        $rowCount++;
                        if ($rowCount % $numOfCols == 0) echo '</div><div class="row">';
                    endforeach; ?>
                </div>
            </div>
            <!-- <div class="card-footer"></div> -->
            <!-- </div> -->
        </div>
    </main>