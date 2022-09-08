<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-2 mt-2">
            <div class="card">
                <div class="card-header shadow">
                    <a class="fw-bold text-dark" style="text-decoration:none ;"><?= strtoupper($title) ?></a>
                    <a href="<?= base_url('kajian/kajian/tambah'); ?>"><button class="btn btn-primary btn-sm float-end"><i class="fas fa-plus"></i> Tambah jadwal Kajian</button></a>
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
                                    <th class=" text-center">Nama Ustad</th>
                                    <th class=" text-center">Nama Kitab</th>
                                    <th class=" text-center">Waktu Kajian</th>
                                    <th class=" text-center">Hari Kajian</th>
                                    <th class=" text-center">Interval</th>
                                    <th class=" text-center">Aktif</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                $no = 1;
                                foreach ($kajian as $row) :
                                ?>
                                    <tr>
                                        <td class="text-center"><small><?= $no++ ?></small></td>
                                        <td class="text-center">
                                            <a href="<?= base_url(); ?>kajian/kajian/edit/<?= $row->id_kajian; ?>"><span class="btn btn-primary btn-sm"><i class=" fas fa-fw fa-edit"></i></span></a>
                                            <a href="<?= site_url('kajian/kajian/hapus/' . $row->id_kajian); ?>" class="btn btn-danger btn-sm"><i class="fas fa-fw fa-trash"></i></a>
                                            <!-- <a href="#" data-toggle="modal" data-target="#hapusModal"><span class="btn btn-danger"><i class="fas fa-fw fa-trash"></i> </span></a> -->
                                        </td>
                                        <td><?= $row->nama_mesjid ?></td>
                                        <td><?= $row->nama_ustadz ?></td>
                                        <td><?= $row->nama_kitab ?></td>
                                        <td><?= $row->nama_waktu ?></td>
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
                                        <td><?= $hari; ?></td>
                                        <td><?= $row->waktu_kajian ?></td>
                                        <td><?= $row->status_aktif == 1 ? 'Aktif' : 'Tidak' ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>