<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-2 mt-2">
            <div class="card">
                <div class="card-header card-outline card-primary shadow">
                    <a class="fw-bold text-dark" style="text-decoration:none ;"><?= strtoupper($title) ?></a>
                    <a href="<?= base_url('kajian/kajian'); ?>"><button class="btn btn-primary btn-sm float-end"><i class="fas fa-reply"></i> Kembali</button></a>
                </div>
                <div class="card-body">
                    <form class="user" action="" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-2">
                                    <select name="id_ustadz" id="id_ustadz" class="form-select select2">
                                        <option value="">Pilih Ustadz</option>
                                        <?php foreach ($ustadz as $row) : ?>
                                            <option value="<?= $row->id_ustadz ?>"><?= $row->nama_ustadz ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <small class="form-text text-danger pl-3"><?= form_error('id_ustadz'); ?></small>
                                </div>
                                <div class="form-group mb-2">
                                    <select name="id_kitab" id="id_kitab" class="form-select select2">
                                        <option value="">Pilih Kitab</option>
                                        <?php foreach ($kitab as $row) : ?>
                                            <option value="<?= $row->id_kitab ?>"><?= $row->nama_kitab ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <small class="form-text text-danger pl-3"><?= form_error('id_kitab'); ?></small>
                                </div>
                                <div class="form-group mb-2">
                                    <select name="id_waktu" id="id_waktu" class="form-select select2">
                                        <option value="">Pilih Waktu</option>
                                        <?php foreach ($waktu as $row) : ?>
                                            <option value="<?= $row->id_waktu ?>"><?= $row->nama_waktu ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <small class="form-text text-danger pl-3"><?= form_error('id_waktu'); ?></small>
                                </div>
                                <div class="form-group mb-2">
                                    <select name="id_mesjid" id="id_mesjid" class="form-select select2">
                                        <option value="">Pilih Mesjid</option>
                                        <?php foreach ($mesjid as $row) : ?>
                                            <option value="<?= $row->id_mesjid ?>"><?= $row->nama_mesjid ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <small class="form-text text-danger pl-3"><?= form_error('id_mesjid'); ?></small>
                                </div>
                                <div class="form-group mb-2">
                                    <select name="hari_kajian" id="hari_kajian" class="form-select select2">
                                        <option value="">Hari Kajian</option>
                                        <option value="1">Ahad</option>
                                        <option value="2">Senin</option>
                                        <option value="3">Selasa</option>
                                        <option value="4">Rabu</option>
                                        <option value="5">Kamis</option>
                                        <option value="6">Jum'at</option>
                                        <option value="7">Sabtu</option>
                                    </select>
                                    <small class="form-text text-danger pl-3"><?= form_error('hari_kajian'); ?></small>
                                </div>
                                <div class="form-group mb-2">
                                    <select name="waktu_kajian" id="waktu_kajian" class="form-select select2">
                                        <option value="">Waktu Kajian</option>
                                        <option value="Setiap Sepekan Sekali">Setiap Sepekan Sekali</option>
                                        <option value="Setiap 2 Pekan Sekali">Setiap 2 Pekan Sekali</option>
                                    </select>
                                    <small class="form-text text-danger pl-3"><?= form_error('waktu_kajian'); ?></small>
                                </div>
                                <div class="form-group mb-2">
                                    <select name="keterangan" id="keterangan" class="form-select select2">
                                        <option value="">Keterangan</option>
                                        <option value="Umum Ikhwan & Akhwat">Umum Ikhwan & Akhwat</option>
                                        <option value="Khusus Akhwat">Khusus Akhwat</option>
                                        <option value="Khusus Ikhwan">Khusus Ikhwan</option>
                                    </select>
                                    <small class="form-text text-danger pl-3"><?= form_error('keterangan'); ?></small>
                                </div>

                            </div>
                        </div>
                        <button class="btn btn-primary btn-sm float-left mt-1" name="tambah" type="submit"><i class="fas fa-save"></i> Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </main>