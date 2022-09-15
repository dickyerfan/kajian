<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Kajian | <?= $title ?></title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="<?= base_url() ?>assets/css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- select2 bootstrap5 -->
    <!-- Styles -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/select2/bootstrap.min.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/select2/select2.min.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/select2/select2-bootstrap-5-theme.min.css" />

    <link href="<?= base_url(); ?>assets/datatables/bootstrap5/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/datatables/bootstrap5/dataTables.bootstrap5.min.css" rel="stylesheet">

    <style>
        @font-face {
            font-family: 'Pristina';
            src: url("<?= base_url('assets/fonts/PRISTINA.TTF') ?>");
        }

        @font-face {
            font-family: 'Scada';
            src: url("<?= base_url('assets/fonts/Scada-Regular.ttf') ?>");
        }

        @font-face {
            font-family: 'Sego';
            src: url("<?= base_url('assets/fonts/Segoeprb.ttf') ?>");
        }

        @font-face {
            font-family: 'Tempus';
            src: url("<?= base_url('assets/fonts/TEMPSITC.TTF') ?>");
        }

        @font-face {
            font-family: 'Papirus';
            src: url("<?= base_url('assets/fonts/PAPYRUS.TTF') ?>");
        }

        .kitab {
            font-family: 'Pristina';
        }

        .ustadz {
            font-family: 'Tempus';
        }

        .ket_ustadz {
            font-family: 'Times New Roman', Times, serif;
        }

        .hilang {
            display: none;
        }

        .title {
            font-family: 'Scada';
        }

        @media screen and (max-width: 472px) {
            .title {
                /* color: red !important; */
                font-size: 12px !important;
            }
        }

        #btn-up {
            position: fixed;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            bottom: 20px;
            right: 20px;
            cursor: pointer;
            font-size: 15px;
            background: rgba(192, 192, 192, 0.5);
            color: #000;
            border: none;
            outline: none;
            padding: 5px 10px;
        }

        #btn-up:hover {
            opacity: 0.5;
        }

        #btn-up:active {
            opacity: 0.9;
        }

        .fa-chevron-circle-up {
            font-size: 30px;
            line-height: 40px;
            color: #01daec;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-sm fixed-top navbar-dark" style="background: linear-gradient(
                                            45deg,
                                            rgba(0, 0, 0, 0.9),
                                            rgba(0, 0, 0, 0.7) 100%
                                            )">
        <div class="container-fluid">
            <a class="navbar-brand title"><?= strtoupper($title) ?></a>
            <form class="d-flex">
                <a href="<?= base_url('auth') ?>" class="btn btn-outline-light btn-sm title">LOGIN</a>
            </form>
        </div>
    </nav>
    <div id="layoutSidenav_content" style="margin-top:60px;">
        <main>
            <div class="container-fluid px-1 mt-2">
                <div class="card">
                    <div class="card-header shadow text-light float-end" style="background: linear-gradient(
                                            45deg,
                                            rgba(0, 0, 0, 0.9),
                                            rgba(0, 0, 0, 0.7) 100%
                                            )">
                        <div class="row">
                            <div class="col-6">
                                <h5 class="card-title title mt-3"><?php
                                                                    date_default_timezone_set('Asia/Jakarta');
                                                                    $bulan = date('m');
                                                                    $bulanList = array(
                                                                        '01' => 'Januari',
                                                                        '02' => 'Februari',
                                                                        '03' => 'Maret',
                                                                        '04' => 'April',
                                                                        '05' => 'Mei',
                                                                        '06' => 'Juni',
                                                                        '07' => 'Juli',
                                                                        '08' => 'Agustus',
                                                                        '09' => 'September',
                                                                        '10' => 'Oktober',
                                                                        '11' => 'November',
                                                                        '12' => 'Desember'
                                                                    );
                                                                    $tanggal = date('d') . ' ' . $bulanList[$bulan] . ' ' . date('Y');
                                                                    $hari = date('D');
                                                                    $hari = date('D', strtotime($hari));
                                                                    $dayList = array(
                                                                        'Sun' => 'Ahad',
                                                                        'Mon' => 'Senin',
                                                                        'Tue' => 'Selasa',
                                                                        'Wed' => 'Rabu',
                                                                        'Thu' => 'Kamis',
                                                                        'Fri' => 'Jum\'at',
                                                                        'Sat' => 'Sabtu'
                                                                    );
                                                                    echo $dayList[$hari]  . '  ' . $tanggal
                                                                    ?>
                                </h5>
                            </div>
                            <div class="col-6 text-end mt-2">
                                <h5 class="card-title title btn btn-outline-light" id="jam">
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="card-body" style="background: linear-gradient(
                                            45deg,
                                            rgba(29, 236, 197, 0.7),
                                            rgba(91, 14, 214, 0.9) 100%
                                            )">
                        <?php
                        $numOfCols = 3;
                        $rowCount = 0;
                        $bootstrapColWidth = 12 / $numOfCols;
                        ?>
                        <div class="row justify-content-center">
                            <?php foreach ($mesjid as $row) : ?>
                                <?php
                                $modal = $row->nama_mesjid;
                                $modal = preg_replace("/[^a-zA-Z]/", "", $modal);
                                $modal = substr($modal, 6, 12);
                                ?>
                                <div class="col-xl-<?= $bootstrapColWidth; ?> mb-4">
                                    <div class="card border-0 shadow-lg testimonial-card mt-2 mb-3" style="height:100% ;">
                                        <div class="card-up aqua-gradient">
                                            <img src="<?= base_url('/assets/photo/') ?><?= $row->foto_mesjid ?>" height="150" class="card-img-top">
                                        </div>
                                        <div class="card-body text-dark text-center" style="background: linear-gradient(
                                            45deg,
                                            rgba(184,200,252, 0.5),
                                            rgba(255,255,255, 0.9) 100%
                                            )">
                                            <h5 class="card-title font-weight-bold text-uppercase"> <?= $row->nama_mesjid ?></h5>
                                            <h6 class="card-title"><?= $row->alamat_mesjid ?></h6>
                                            <a href="<?= $row->lokasi_mesjid ?>" target="_blank" style="text-decoration: none;"><i class="fa-solid fa-location-dot"></i> Peta Lokasi</a>
                                            <hr>
                                            <a href="<?= base_url('publik/detail/') ?><?= $row->id_mesjid ?>/<?= $row->nama_mesjid ?>" class="btn btn-primary border-0" style="background: linear-gradient(
                                            45deg,
                                            rgba(29, 236, 197, 0.7),
                                            rgba(91, 14, 214, 0.9) 100%
                                            )">Daftar Kajian</a>
                                        </div>
                                    </div>
                                </div>
                            <?php
                                $rowCount++;
                                if ($rowCount % $numOfCols == 0) echo '</div><div class="row">';
                            endforeach; ?>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-sm-6 mb-1">
                                <div class="card border-0" style="height:100% ;">
                                    <div class="card-header" style="background: linear-gradient(
                                            45deg,
                                            rgba(91, 14, 214, 0.9),
                                            rgba(29, 236, 197, 0.7)100%
                                            )">
                                        <h4 class="card-title text-light font-weight-bold title ps-3">Informasi :</h4>
                                    </div>
                                    <div class="card-body text-dark" style="background: linear-gradient(
                                            45deg,
                                            rgba(184,200,252, 0.5),
                                            rgba(255,255,255, 0.9) 100%
                                            )">
                                        <h5 class="card-title font-weight-bold title ps-3">Jadwal kajian diatas sewaktu-waktu bisa berubah atau di tiadakan jika Ustadz ada udzur atau kepentingan.</h5><br>
                                        <h5 class="card-title font-weight-bold title ps-3"><i class="far fa-envelope"></i> : kajianbondowoso495@gmail.com</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 mb-1">
                                <div class="card border-0" style="height:100% ;">
                                    <div class="card-header ps-4" style="background: linear-gradient(
                                            45deg,
                                            rgba(91, 14, 214, 0.9),
                                            rgba(29, 236, 197, 0.7)100%
                                            )">
                                        <h4 class="card-title text-light font-weight-bold title ps-3">Catatan :</h4>
                                    </div>
                                    <div class="card-body text-dark" style="background: linear-gradient(
                                            45deg,
                                            rgba(184,200,252, 0.5),
                                            rgba(255,255,255, 0.9) 100%
                                            )">
                                        <h5 class="card-title font-weight-bold title ps-4">“Barangsiapa menempuh jalan menuntut ilmu, maka Allah akan memudahkan jalannya untuk menuju surga”<br> <small><i> (HR. At Tirmidzi no. 2682, Abu Daud no. 3641, dishahihkan Al Albani dalam Shahih Abu Daud).</i></small>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <button id="btn-up"><i class="fas fa-chevron-circle-up"></i></button>
        <footer class="py-2 bg-light mt-auto">
            <div class="container-fluid px-4">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright &copy; DIE Art'S Production 2022</div>
                </div>
            </div>
        </footer>
    </div>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-danger">
                    <h5 class="modal-title text-white" id="exampleModalLabel">Yakin Mau Logout.?</h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body">Pilih "Logout" jika anda yakin mau keluar</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="<?= base_url('auth/logout'); ?>">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Sweetalert2 -->
    <script src="<?php echo base_url('assets/'); ?>sweetalert2.all.min.js"></script>

    <script src="<?= base_url() ?>assets/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="<?= base_url() ?>assets/js/scripts.js"></script>
    <script src="<?= base_url() ?>assets/js/Chart.min.js" crossorigin="anonymous"></script>
    <script src="<?= base_url() ?>assets/demo/chart-area-demo.js"></script>
    <script src="<?= base_url() ?>assets/demo/chart-bar-demo.js"></script>
    <script src="<?= base_url() ?>assets/js/datatables-simple-demo.js"></script>

    <!-- datatable bootstrap5 -->
    <script src="<?= base_url(); ?>assets/datatables/bootstrap5/jquery-3.5.1.js"></script>
    <script src="<?= base_url(); ?>assets/datatables/bootstrap5/jquery.dataTables.min.js"></script>
    <script src="<?= base_url(); ?>assets/datatables/bootstrap5/dataTables.bootstrap5.min.js"></script>
    <!-- select2 js -->
    <script src="<?= base_url() ?>assets/select2/select2.min.js"></script>


    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>

    <script>
        $('.select2').select2({
            theme: 'bootstrap-5'
        });

        $("#btn-up").click(function() {
            $("html,body").animate({
                scrollTop: 0
            }, 500);
        });
    </script>

    <script>
        $('.btn-danger').on('click', function(e) {
            e.preventDefault();
            const href = $(this).attr('href');
            Swal.fire({
                title: 'Yakin mau Di Hapus?',
                text: 'Jika yakin tekan Hapus',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Hapus'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.location.href = href;
                }
            })
        })
    </script>

    <script>
        window.onload = function() {
            jam();
        }

        function jam() {
            var e = document.getElementById('jam'),
                d = new Date(),
                h, m, s;
            h = d.getHours();
            m = set(d.getMinutes());
            s = set(d.getSeconds());

            e.innerHTML = h + ' : ' + m + ' : ' + s + ' WIB';

            setTimeout('jam()', 1000);
        }

        function set(e) {
            e = e < 10 ? '0' + e : e;
            return e;
        }
    </script>

</body>

</html>