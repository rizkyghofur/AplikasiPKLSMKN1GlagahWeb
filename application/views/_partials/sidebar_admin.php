    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('admin/dashboard/'); ?>">
            <div class="sidebar-brand-icon">
            </div>
            <div class="sidebar-brand-text">Halaman Admin PKL</div>
        </a>

        <hr class="sidebar-divider my-0">

        <li class="nav-item <?php echo $this->uri->segment(2) == 'dashboard' ? 'active' : '' ?>">
            <a class="nav-link" href="<?= base_url('admin/dashboard/'); ?>">
                <i class="fas fa-fw fa-home"></i>
                <span>Beranda</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Kelola Data
        </div>

        <li class="nav-item <?php echo $this->uri->segment(2) == 'datadudi' ? 'active' : '' ?>">
            <a class="nav-link" href="<?= base_url('admin/datadudi/'); ?>">
                <i class="fas fa-fw fa-newspaper"></i>
                <span>Data DUDI</span></a>
        </li>

        <li class="nav-item <?php echo $this->uri->segment(2) == 'datasiswa' ? 'active' : '' ?>">
            <a class="nav-link" href="<?= base_url('admin/datasiswa/'); ?>">
                <i class="fas fa-fw fa-user-graduate"></i>
                <span>Data Siswa</span></a>
        </li>

        <li class="nav-item <?php echo $this->uri->segment(2) == 'dataguru' ? 'active' : '' ?>">
            <a class="nav-link" href="<?= base_url('admin/dataguru/'); ?>">
                <i class="fas fa-chalkboard-teacher"></i>
                <span>Data Guru</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Kelola Akun
        </div>

        <li class="nav-item <?php echo $this->uri->segment(2) == 'akun' ? 'active' : '' ?>">
            <a class="nav-link" href="<?= base_url('admin/akun/'); ?>">
                <i class="fas fa-user"></i>
                <span>Akun Pengguna</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <div class="sidebar-heading">
            Kelola Data PKL
        </div>

        <li class="nav-item <?php echo $this->uri->segment(2) == 'pengajuanpkl' ? 'active' : '' ?>">
            <a class="nav-link" href="<?= base_url('admin/pengajuanpkl/'); ?>">
                <i class="far fa-calendar-check"></i>
                <span>Pengajuan PKL</span></a>
        </li>

        <li class="nav-item <?php echo $this->uri->segment(2) == 'pelaksanaanpkl' ? 'active' : '' ?>">
            <a class="nav-link" href="<?= base_url('admin/pelaksanaanpkl/'); ?>">
                <i class="far fa-calendar-check"></i>
                <span>Pelaksanaan PKL</span></a>
        </li>

        <hr class="sidebar-divider">

        <div class="sidebar-heading">
            Nilai PKL
        </div>

        <li class="nav-item <?php echo $this->uri->segment(2) == 'Cetak Nilai PKL' ? 'active' : '' ?>">
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('admin/cetaknilaipkl/'); ?>">
                <i class="fas fa-print"></i>
                <span>Nilai PKL</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
    </ul>
    <!-- End of Sidebar -->