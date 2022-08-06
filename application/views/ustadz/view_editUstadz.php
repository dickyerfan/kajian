<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-2 mt-2">
            <div class="card">
                <div class="card-header card-outline card-primary shadow">
                    <a class="fw-bold text-dark" style="text-decoration:none ;"><?= strtoupper($title) ?></a>
                    <a href="<?= base_url('kajian/ustadz'); ?>"><button class="btn btn-primary btn-sm float-end"><i class="fas fa-reply"></i> Kembali</button></a>
                </div>
                <div class="card-body">
                    <form class="user" action="<?= base_url('kajian/ustadz/update') ?>" method="POST">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="hidden" class="form-control" id="id" name="id" value="<?= $ustadz->id_ustadz; ?>">
                                <div class="form-group">
                                    <label for="nama_ustadz">Nama Ustadz :</label>
                                    <input type="text" class="form-control" id="nama_ustadz" name="nama_ustadz" value="<?= $ustadz->nama_ustadz; ?>">
                                    <small class="form-text text-danger pl-3"><?= form_error('nama_ustadz'); ?></small>
                                </div>
                                <div class="form-group">
                                    <label for="ket_ustadz">Keterangan :</label>
                                    <input type="text" class="form-control" id="ket_ustadz" name="ket_ustadz" value="<?= $ustadz->ket_ustadz; ?>">
                                    <small class="form-text text-danger pl-3"><?= form_error('ket_ustadz'); ?></small>
                                </div>
                            </div>
                        </div>

                        <button class="btn btn-primary btn-sm float-left mt-1" name="tambah" type="submit"><i class="fas fa-edit"></i> Update ustadz</button>
                    </form>
                </div>
            </div>
        </div>
    </main>