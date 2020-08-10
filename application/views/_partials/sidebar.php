    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <?php if ($this->session->userdata("role") === "admin_pkl") { ?>

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('admin/Beranda/'); ?>">
                <div class="sidebar-brand-icon">
                    <img class="center mx-auto" width=50px src="<?= base_url('assets/img/login.png'); ?>" />
                </div>
            </a>
            <p class="text-center text-white text-uppercase font-weight-bold">Halaman Admin</p>

            <hr class="sidebar-divider my-0">

            <li class="nav-item <?php echo $this->uri->segment(2) == 'Beranda' ? 'active' : '' ?>">
                <a class="nav-link" href="<?= base_url('admin/Beranda/'); ?>">
                    <i class="fas fa-fw fa-home"></i>
                    <span>Beranda</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading" style="color: white;">
                Kelola Data
            </div>

            <li class="nav-item <?php echo $this->uri->segment(2) == 'DataDUDI' ? 'active' : '' ?>">
                <a class="nav-link" href="<?= base_url('admin/DataDUDI/'); ?>">
                    <i class="fas fa-fw fa-newspaper"></i>
                    <span>Data DUDI</span></a>
            </li>

            <li class="nav-item <?php echo $this->uri->segment(2) == 'DataSiswa' ? 'active' : '' ?>">
                <a class="nav-link" href="<?= base_url('admin/DataSiswa/'); ?>">
                    <i class="fas fa-fw fa-user-graduate"></i>
                    <span>Data Siswa</span></a>
            </li>

            <li class="nav-item <?php echo $this->uri->segment(2) == 'DataGuru' ? 'active' : '' ?>">
                <a class="nav-link" href="<?= base_url('admin/DataGuru/'); ?>">
                    <i class="fas fa-fw fa-chalkboard-teacher"></i>
                    <span>Data Guru</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading" style="color: white;">
                Kelola Akun
            </div>

            <li class="nav-item <?php echo $this->uri->segment(2) == 'Akun' ? 'active' : '' ?>">
                <a class="nav-link" href="<?= base_url('admin/Akun/'); ?>">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Akun Pengguna</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <div class="sidebar-heading" style="color: white;">
                Kelola Data PKL
            </div>

            <li class="nav-item <?php echo $this->uri->segment(2) == 'PengajuanPKL' ? 'active' : '' ?>">
                <a class="nav-link" href="<?= base_url('admin/PengajuanPKL/'); ?>">
                    <i class="fas fa-fw fa-calendar-check"></i>
                    <span>Pengajuan PKL</span></a>
            </li>

            <li class="nav-item <?php echo $this->uri->segment(2) == 'PelaksanaanPKL' ? 'active' : '' ?>">
                <a class="nav-link" href="<?= base_url('admin/PelaksanaanPKL/'); ?>">
                    <i class="fas fa-fw fa-address-card"></i>
                    <span>Pelaksanaan PKL</span></a>
            </li>

            <hr class="sidebar-divider">

            <div class="sidebar-heading">
                Penilaian PKL
            </div>

            <li class="nav-item <?php echo $this->uri->segment(2) == 'PenilaianPKL' ? 'active' : '' ?>">
                <a class="nav-link" href="<?= base_url('admin/PenilaianPKL/'); ?>">
                    <i class="fas fa-fw fa-pen-square"></i>
                    <span>Penilaian PKL</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <hr class="sidebar-divider">

    </ul>

    <!-- End of Sidebar -->

    <?php  } ?>

    <?php if ($this->session->userdata("role") === "pembimbing_dudi") { ?>

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('pembimbingdudi/Beranda/'); ?>">
            <div class="sidebar-brand-icon">
                <img class="center mx-auto" width=50px src="<?= base_url('assets/img/login.png'); ?>" />
            </div>
        </a>
        <p class="text-center text-white text-uppercase font-weight-bold">Halaman<br>Pembimbing DUDI</br></p>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">
        <hr class="sidebar-divider">

        <div class="sidebar-heading" style="color: white;">
            Catatan Kegiatan PKL Siswa
        </div>

        <!-- Nav Item - Charts -->
        <li class="nav-item <?php echo $this->uri->segment(2) == 'ValidasiJurnalPKL' ? 'active' : '' ?>">
            <a class="nav-link" href="<?= base_url('pembimbingdudi/ValidasiJurnalPKL'); ?>">
                <i class="fas fa-fw fa-tasks"></i>
                <span>Validasi Jurnal PKL</span></a>
        </li>

        <!-- Nav Item - Charts -->
        <li class="nav-item <?php echo $this->uri->segment(2) == 'AbsensiPKL' ? 'active' : '' ?>">
            <a class="nav-link" href="<?= base_url('pembimbingdudi/AbsensiPKL'); ?>">
                <i class="fas fa-fw fa-clipboard-check"></i>
                <span>Absensi Siswa PKL</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

        <hr class="sidebar-divider">

        </ul>
        <!-- End of Sidebar -->

    <?php } ?>

    <?php if ($this->session->userdata("role") === "siswa") { ?>

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('siswa/Beranda/'); ?>">
            <div class="sidebar-brand-icon">
                <img class="center mx-auto" width=50px src="<?= base_url('assets/img/login.png'); ?>" />
            </div>
        </a>
        <p class="text-center text-white text-uppercase font-weight-bold">Halaman Siswa</p>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">
        <hr class="sidebar-divider">

        <div class="sidebar-heading" style="color: white;">
            Pengajuan PKL
        </div>

        <li class="nav-item <?php echo $this->uri->segment(2) == 'InfoDUDI' ? 'active' : '' ?>">
            <a class="nav-link" href=" <?= base_url('siswa/InfoDUDI'); ?>">
                <i class="fas fa-fw fa-info-circle"></i>
                <span>Info DUDI</span></a>
        </li>

        <li class="nav-item <?php echo $this->uri->segment(2) == 'PermohonanPKL' ? 'active' : '' ?>">
            <a class="nav-link" href=" <?= base_url('siswa/PermohonanPKL'); ?>">
                <i class="fas fa-fw fa-envelope-open-text"></i>
                <span>Permohonan PKL</span></a>
        </li>

        <hr class="sidebar-divider">

        <div class="sidebar-heading" style="color: white;">
            Kegiatan PKL
        </div>

        <li class="nav-item <?php echo $this->uri->segment(2) == 'JurnalPKL' ? 'active' : '' ?>">
            <a class="nav-link" href=" <?= base_url('siswa/JurnalPKL'); ?>">
                <i class="fas fa-fw fa-clipboard"></i>
                <span>Jurnal PKL</span></a>
        </li>

        <li class="nav-item <?php echo $this->uri->segment(2) == 'ProgramPKL' ? 'active' : '' ?>">
            <a class="nav-link" href=" <?= base_url('siswa/ProgramPKL'); ?>">
                <i class="fas fa-fw fa-clipboard"></i>
                <span>Program PKL</span></a>
        </li>

        <li class="nav-item <?php echo $this->uri->segment(2) == 'PresensiPKL' ? 'active' : '' ?>">
            <a class="nav-link" href=" <?= base_url('siswa/PresensiPKL'); ?>">
                <i class="fas fa-fw fa-calendar-check"></i>
                <span>Presensi PKL</span></a>
        </li>

        <li class="nav-item <?php echo $this->uri->segment(2) == 'CatatanKunjunganPKL' ? 'active' : '' ?>">
            <a class="nav-link" href=" <?= base_url('siswa/CatatanKunjunganPKL'); ?>">
                <i class="fas fa-fw fa-book-reader"></i>
                <span>Catatan Kunjungan PKL</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

        <hr class="sidebar-divider">

        </ul>
        <!-- End of Sidebar -->

    <?php } ?>