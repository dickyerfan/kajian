<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-2 mt-2">
            <div class="card">
                <div class="card-header card-outline card-primary shadow">
                    <a class="fw-bold text-dark" style="text-decoration:none ;"><?= strtoupper($title) ?></a>
                    <a href="<?= base_url('mesjid'); ?>"><button class="btn btn-primary btn-sm float-end"><i class="fas fa-reply"></i> Kembali</button></a>
                </div>
                <div class="card-body">
                    <form class="user" action="<?= base_url('mesjid/update') ?>" method="POST">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="hidden" class="form-control" id="id" name="id" value="<?= $mesjid->id_mesjid; ?>">
                                <div class="form-group">
                                    <label for="nama_mesjid">Nama masjid :</label>
                                    <input type="text" class="form-control" id="nama_mesjid" name="nama_mesjid" value="<?= $mesjid->nama_mesjid; ?>">
                                    <small class="form-text text-danger pl-3"><?= form_error('nama_mesjid'); ?></small>
                                </div>
                                <div class="form-group">
                                    <label for="alamat_mesjid">Alamat :</label>
                                    <input type="text" class="form-control" id="alamat_mesjid" name="alamat_mesjid" value="<?= $mesjid->alamat_mesjid ?>">
                                    <small class="form-text text-danger pl-3"><?= form_error('alamat_mesjid'); ?></small>
                                </div>
                                <div class="form-group">
                                    <label for="lokasi_mesjid">Peta Lokasi :</label>
                                    <input type="text" class="form-control" id="lokasi_mesjid" name="lokasi_mesjid" value="<?= $mesjid->lokasi_mesjid ?>">
                                    <small class="form-text text-danger pl-3"><?= form_error('lokasi_mesjid'); ?></small>
                                </div>
                                <div class="form-group">
                                    <label for="foto_mesjid">Foto :</label>
                                    <input type="file" class="form-control" id="foto_mesjid" name="foto_mesjid" value="<?= $mesjid->foto_mesjid ?>">
                                    <small class="form-text text-danger pl-3"><?= form_error('foto_mesjid'); ?></small>
                                </div>
                            </div>
                        </div>

                        <button class="btn btn-primary btn-sm float-left mt-1" name="tambah" type="submit"><i class="fas fa-edit"></i> Update Tempat Kajian</button>
                    </form>
                </div>
            </div>
        </div>
    </main>