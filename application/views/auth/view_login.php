<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>App | <?= $title ?></title>

    <link href="<?= base_url() ?>assets/css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>

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

        @font-face {
            font-family: 'One';
            src: url("<?= base_url('assets/fonts/75749_.ttf') ?>");
        }

        @font-face {
            font-family: 'Arial';
            src: url("<?= base_url('assets/fonts/ARIALN.TTF') ?>");
        }

        .title {
            font-family: 'Scada';
        }

        @media screen and (max-width: 472px) {
            .title {
                margin-top: 10px !important;
            }
        }
    </style>
</head>

<body style="background-color:#E8FBFC ;">
    <div class="container py-5">
        <div class="row bg-white justify-content-center p-5 shadow rounded">
            <div class="col-md-6 ">
                <h2 class="display-1 fs-2 text-primary text-center title">Jadwal Kajian Ilmiyah Bondowoso</h2>
                <p class="display-1 fs-6 text-center text-primary">Silakan login untuk melakukan pengaturan jadwal kajian</p>
                <img src="<?= base_url('assets/photo/default.jpg') ?>" class="img-fluid">
            </div>
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-body text-center">
                        <img src="<?= base_url('assets/img/bm.png') ?>" class="card-img-top mt-2" alt="" style="width:35% ;">
                        <h2 class="text-primary mt-4 display-6">Silakan <?= strtoupper($title); ?></h2>
                        <?= $this->session->flashdata('info'); ?>
                        <?= $this->session->unset_userdata('info'); ?>
                    </div>
                    <div class="card-footer">
                        <form method="post" action="<?= base_url('auth') ?>">
                            <div class="form-group">
                                <input type="text" class="form-control" name="nama_pengguna" id="nama_pengguna" placeholder="Masukkan nama pengguna" value="<?= set_value('nama_pengguna'); ?>">
                                <?= form_error('nama_pengguna', '<span class="text-danger small pl-2">', '</span>'); ?>
                            </div>
                            <div class="form-group mt-2">
                                <input type="password" class="form-control" name="password" id="password" placeholder="Masukkan Password">
                                <?= form_error('password', '<span class="text-danger small pl-2">', '</span>'); ?>
                            </div>
                            <div class="d-grid mt-3">
                                <button class="btn btn-primary" type="submit">Login</button>
                            </div>
                        </form>
                        <hr>
                        <div class="text-center small mb-3">
                            Batal!, <a href="<?= base_url('publik') ?>" style="text-decoration:none;">Silakan Kembali</a>
                        </div>
                        <!-- Belum punya akun!, <a href="<?= base_url('auth/registrasi') ?>" style="text-decoration:none;">Silakan Register</a> | -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="<?= base_url() ?>/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="<?= base_url() ?>/js/scripts.js"></script>
    <script src="<?= base_url() ?>/js/Chart.min.js" crossorigin="anonymous"></script>
</body>

</html>