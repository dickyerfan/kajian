<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-2 mt-2">
            <div class="card">
                <div class="card-header card-outline card-primary shadow">
                    <a class="fw-bold text-dark" style="text-decoration:none ;"><?= strtoupper($title) ?></a>
                    <a href="<?= base_url('mesjid'); ?>"><button class="btn btn-primary btn-sm float-end"><i class="fas fa-reply"></i> Kembali</button></a>
                </div>
                <div class="card-body">
                    <form class="user" action="<?= base_url('mesjid/update') ?>" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="hidden" class="form-control" id="id_mesjid" name="id_mesjid" value="<?= $mesjid->id_mesjid; ?>">
                                <div class="form-group">
                                    <label for="nama_mesjid">Nama masjid :</label>
                                    <input type="text" class="form-control" id="nama_mesjid" name="nama_mesjid" value="<?= $mesjid->nama_mesjid; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="alamat_mesjid">Alamat :</label>
                                    <input type="text" class="form-control" id="alamat_mesjid" name="alamat_mesjid" value="<?= $mesjid->alamat_mesjid ?>">
                                </div>
                                <div class="form-group">
                                    <label for="lokasi_mesjid">Peta Lokasi :</label>
                                    <input type="text" class="form-control" id="lokasi_mesjid" name="lokasi_mesjid" value="<?= $mesjid->lokasi_mesjid ?>">
                                </div>
                                <div class="form-group">
                                    <label for="foto_mesjid">Foto :</label>
                                    <input type="file" class="form-control" id="foto_mesjid" name="foto_mesjid">
                                </div>
                                <div class="form-group mb-2">
                                    <select name="aktif" id="aktif" class="form-select">
                                        <option value="">Status Mesjid</option>
                                        <option value="1" <?= $mesjid->aktif == 1 ? 'selected' : '' ?>>Aktif</option>
                                        <option value="0" <?= $mesjid->aktif == 0 ? 'selected' : '' ?>>Tidak</option>
                                    </select>
                                    <small class="form-text text-danger pl-3"><?= form_error('aktif'); ?></small>
                                </div>
                            </div>
                        </div>

                        <button class="btn btn-primary btn-sm float-left mt-1" name="tambah" type="submit"><i class="fas fa-edit"></i> Update Tempat Kajian</button>
                    </form>
                </div>
            </div>
        </div>
    </main>