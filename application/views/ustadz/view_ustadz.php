<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-2 mt-2">
            <div class="card">
                <div class="card-header shadow">
                    <a class="fw-bold text-dark" style="text-decoration:none ;"><?= strtoupper($title) ?></a>
                    <a href="<?= base_url('kajian/ustadz/tambah'); ?>"><button class="btn btn-primary btn-sm float-end"><i class="fas fa-plus"></i> Tambah Nama Ustadz</button></a>
                </div>
                <div class="p-2">
                    <?= $this->session->flashdata('info'); ?>
                    <?= $this->session->unset_userdata('info'); ?>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="table table-hover table-striped table-bordered table-sm" width="100%" cellspacing="0">
                            <thead>
                                <tr class="bg-secondary">
                                    <th class=" text-center">No</th>
                                    <th class=" text-center">Nama Ustadz</th>
                                    <th class=" text-center">Keterangan</th>
                                    <th class=" text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($ustadz as $row) :
                                ?>
                                    <tr>
                                        <td class="text-center"><small><?= $no++ ?></small></td>
                                        <td><?= $row->nama_ustadz ?></td>
                                        <td><?= $row->ket_ustadz ?></td>
                                        <td class="text-center">
                                            <a href="<?= base_url(); ?>kajian/ustadz/edit/<?= $row->id_ustadz; ?>"><span class="btn btn-primary btn-sm"><i class=" fas fa-fw fa-edit"></i> Edit</span></a>
                                            <a href="<?= site_url('kajian/ustadz/hapus/' . $row->id_ustadz); ?>" class="btn btn-danger btn-sm"><i class="fas fa-fw fa-trash"></i> Hapus</a>
                                            <!-- <a href="#" data-toggle="modal" data-target="#hapusModal"><span class="btn btn-danger"><i class="fas fa-fw fa-trash"></i> </span></a> -->
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>