<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-2 mt-2">
            <div class="card">
                <div class="card-header card-outline card-primary shadow">
                    <a class="fw-bold text-dark" style="text-decoration:none ;"><?= strtoupper($title) ?></a>
                    <a href="<?= base_url('kajian/kajian'); ?>"><button class="btn btn-primary btn-sm float-end"><i class="fas fa-reply"></i> Kembali</button></a>
                </div>
                <div class="card-body">
                    <form class="user" action="<?= base_url('kajian/kajian/update') ?>" method="POST">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-2">
                                    <input type="hidden" name="id_kajian" id="id_kajian" value="<?= $kajian->id_kajian; ?>">
                                    <select name="id_ustadz" id="id_ustadz" class="form-select select2">
                                        <option value="">Pilih Ustadz</option>
                                        <?php foreach ($ustadz as $row) : ?>
                                            <option value="<?= $row->id_ustadz ?>" <?= $kajian->id_ustadz == $row->id_ustadz ? 'selected' : '' ?>><?= $row->nama_ustadz ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <small class="form-text text-danger pl-3"><?= form_error('id_ustadz'); ?></small>
                                </div>
                                <div class="form-group mb-2">
                                    <select name="id_kitab" id="id_kitab" class="form-select select2">
                                        <option value="">Pilih Kitab</option>
                                        <?php foreach ($kitab as $row) : ?>
                                            <option value="<?= $row->id_kitab ?>" <?= $kajian->id_kitab == $row->id_kitab ? 'selected' : '' ?>><?= $row->nama_kitab ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <small class="form-text text-danger pl-3"><?= form_error('id_kitab'); ?></small>
                                </div>
                                <div class="form-group mb-2">
                                    <select name="id_waktu" id="id_waktu" class="form-select select2">
                                        <option value="">Pilih Waktu</option>
                                        <?php foreach ($waktu as $row) : ?>
                                            <option value="<?= $row->id_waktu ?>" <?= $kajian->id_waktu == $row->id_waktu ? 'selected' : '' ?>><?= $row->nama_waktu ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <small class="form-text text-danger pl-3"><?= form_error('id_waktu'); ?></small>
                                </div>
                                <div class="form-group mb-2">
                                    <select name="id_mesjid" id="id_mesjid" class="form-select select2">
                                        <option value="">Pilih Mesjid</option>
                                        <?php foreach ($mesjid as $row) : ?>
                                            <option value="<?= $row->id_mesjid ?>" <?= $kajian->id_mesjid == $row->id_mesjid ? 'selected' : '' ?>><?= $row->nama_mesjid ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <small class="form-text text-danger pl-3"><?= form_error('id_mesjid'); ?></small>
                                </div>
                                <div class="form-group mb-2">
                                    <select name="hari_kajian" id="hari_kajian" class="form-select select2">
                                        <option value="">Hari Kajian</option>
                                        <option value="1" <?= $kajian->hari_kajian == '1' ? 'selected' : '' ?>>Ahad</option>
                                        <option value="2" <?= $kajian->hari_kajian == '2' ? 'selected' : '' ?>>Senin</option>
                                        <option value="3" <?= $kajian->hari_kajian == '3' ? 'selected' : '' ?>>Selasa</option>
                                        <option value="4" <?= $kajian->hari_kajian == '4' ? 'selected' : '' ?>>Rabu</option>
                                        <option value="5" <?= $kajian->hari_kajian == '5' ? 'selected' : '' ?>>Kamis</option>
                                        <option value="6" <?= $kajian->hari_kajian == "6" ? 'selected' : '' ?>>Jum'at</option>
                                        <option value="7" <?= $kajian->hari_kajian == '7' ? 'selected' : '' ?>>Sabtu</option>
                                    </select>
                                    <small class="form-text text-danger pl-3"><?= form_error('hari_kajian'); ?></small>
                                </div>
                                <div class="form-group mb-2">
                                    <select name="waktu_kajian" id="waktu_kajian" class="form-select select2">
                                        <option value="">Waktu Kajian</option>
                                        <option value="Setiap Sepekan Sekali" <?= $kajian->waktu_kajian == "Setiap Sepekan Sekali" ? 'selected' : '' ?>>Setiap Sepekan Sekali</option>
                                        <option value="Setiap 2 Pekan Sekali" <?= $kajian->waktu_kajian == "Setiap 2 Pekan Sekali" ? 'selected' : '' ?>>Setiap 2 Pekan Sekali</option>
                                    </select>
                                    <small class="form-text text-danger pl-3"><?= form_error('waktu_kajian'); ?></small>
                                </div>
                                <div class="form-group mb-2">
                                    <select name="aktif" id="aktif" class="form-select">
                                        <option value="">Status Kajian</option>
                                        <option value="1" <?= $kajian->aktif == 1 ? 'selected' : '' ?>>Aktif</option>
                                        <option value="0" <?= $kajian->aktif == 0 ? 'selected' : '' ?>>Tidak</option>
                                    </select>
                                    <small class="form-text text-danger pl-3"><?= form_error('aktif'); ?></small>
                                </div>
                                <div class="form-group mb-2">
                                    <select name="keterangan" id="keterangan" class="form-select">
                                        <option value="">Keterangan</option>
                                        <option value="Umum Ikhwan & Akhwat" <?= $kajian->keterangan == 'Umum Ikhwan & Akhwat' ? 'selected' : '' ?>>Umum Ikhwan & Akhwat</option>
                                        <option value="Khusus Akhwat" <?= $kajian->keterangan == 'Khusus Akhwat' ? 'selected' : '' ?>>Khusus Akhwat</option>
                                        <option value="Khusus Ikhwan" <?= $kajian->keterangan == 'Khusus Ikhwan' ? 'selected' : '' ?>>Khusus Akhwat</option>
                                    </select>
                                    <small class="form-text text-danger pl-3"><?= form_error('keterangan'); ?></small>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary btn-sm float-left mt-1" name="tambah" type="submit"><i class="fas fa-edit"></i> Update</button>
                    </form>
                </div>
            </div>
        </div>
    </main>