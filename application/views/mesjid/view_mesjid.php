<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-2 mt-2">
            <div class="card">
                <div class="card-header shadow">
                    <a class="fw-bold text-dark" style="text-decoration:none ;"><?= strtoupper($title) ?></a>
                    <a href="<?= base_url('mesjid/tambah'); ?>"><button class="btn btn-primary btn-sm float-end"><i class="fas fa-plus"></i> Tambah Tempat Kajian</button></a>
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
                                    <th class=" text-center">Action</th>
                                    <th class=" text-center">Tempat Kajian</th>
                                    <th class=" text-center">Alamat</th>
                                    <th class=" text-center">Foto</th>
                                    <th class=" text-center">Status</th>
                                    <!-- <th class=" text-center">Peta Lokasi</th> -->
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($mesjid as $row) :
                                ?>
                                    <tr>
                                        <td class="text-center"><small><?= $no++ ?></small></td>
                                        <td class="text-center">
                                            <a href="<?= base_url(); ?>mesjid/edit/<?= $row->id_mesjid; ?>"><span class="btn btn-primary btn-sm"><i class=" fas fa-fw fa-edit"></i></span></a>
                                            <a href="<?= site_url('mesjid/hapus/' . $row->id_mesjid); ?>" class="btn btn-danger btn-sm"><i class="fas fa-fw fa-trash"></i></a>
                                            <!-- <a href="#" data-toggle="modal" data-target="#hapusModal"><span class="btn btn-danger"><i class="fas fa-fw fa-trash"></i> </span></a> -->
                                        </td>
                                        <td><?= $row->nama_mesjid ?></td>
                                        <td><?= $row->alamat_mesjid ?></td>
                                        <td><?= $row->foto_mesjid ?></td>
                                        <td><?= $row->aktif == 1 ? 'Aktif' : 'Tidak' ?></td>
                                        <!-- <td><?= $row->lokasi_mesjid ?></td> -->
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>