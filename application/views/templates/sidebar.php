<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav ustadz">
                    <a class="nav-link" href="<?= base_url('dashboard') ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Dashboard
                    </a>

                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#dataPekerjaan" aria-expanded="false" aria-controls="dataPekerjaan">
                        <div class="sb-nav-link-icon"><i class="fas fa-briefcase"></i></div>
                        Master Data
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="dataPekerjaan" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="<?= base_url('mesjid') ?>">Daftar Mesjid</a>
                            <a class="nav-link" href="<?= base_url('kajian/kajian') ?>">Daftar Kajian</a>
                            <a class="nav-link" href="<?= base_url('kajian/ustadz') ?>">Daftar Ustadz</a>
                            <a class="nav-link" href="<?= base_url('kajian/kitab') ?>">Daftar Kitab</a>
                            <a class="nav-link" href="<?= base_url('kajian/waktu') ?>">Daftar Waktu</a>
                        </nav>
                    </div>
                    <a class="nav-link" href="<?= base_url('user/admin') ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                        Data User
                    </a>
                    <a class="nav-link" href="<?= base_url('backup') ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-database"></i></div>
                        Back up
                    </a>
                    <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#logoutModal">
                        <div class="sb-nav-link-icon"><i class="fas fa-sign-out-alt"></i></div>
                        Logout
                    </a>

                </div>
            </div>
            <!-- <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    Start Bootstrap
                </div> -->
        </nav>
    </div>