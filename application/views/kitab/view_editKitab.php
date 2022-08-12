<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-2 mt-2">
            <div class="card">
                <div class="card-header card-outline card-primary shadow">
                    <a class="fw-bold text-dark" style="text-decoration:none ;"><?= strtoupper($title) ?></a>
                    <a href="<?= base_url('kajian/kitab'); ?>"><button class="btn btn-primary btn-sm float-end"><i class="fas fa-reply"></i> Kembali</button></a>
                </div>
                <div class="card-body">
                    <form class="user" action="<?= base_url('kajian/kitab/update') ?>" method="POST">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="hidden" class="form-control" id="id" name="id" value="<?= $kitab->id_kitab; ?>">
                                <div class="form-group">
                                    <label for="nama_kitab">Nama Kitab :</label>
                                    <input type="text" class="form-control" id="nama_kitab" name="nama_kitab" value="<?= $kitab->nama_kitab; ?>">
                                    <small class="form-text text-danger pl-3"><?= form_error('nama_kitab'); ?></small>
                                </div>
                                <div class="form-group">
                                    <label for="ket_kitab">Keterangan :</label>
                                    <input type="text" class="form-control" id="ket_kitab" name="ket_kitab" value="<?= $kitab->ket_kitab; ?>">
                                    <small class="form-text text-danger pl-3"><?= form_error('ket_kitab'); ?></small>
                                </div>
                            </div>
                        </div>

                        <button class="btn btn-primary btn-sm float-left mt-1" name="tambah" type="submit"><i class="fas fa-edit"></i> Update Kitab</button>
                    </form>
                </div>
            </div>
        </div>
    </main>