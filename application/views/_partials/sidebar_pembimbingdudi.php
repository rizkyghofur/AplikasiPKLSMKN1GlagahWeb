    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('pembimbingdudi/dashboard/'); ?>">
            <div class="sidebar-brand-icon">
            </div>
            <div class="sidebar-brand-text">Halaman Pembimbing DUDI</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <hr class="sidebar-divider">

        <div class="sidebar-heading" style="color: white;">
              Catatan Kegiatan PKL Siswa
          </div>

        <!-- Nav Item - Charts -->
        <li class="nav-item <?php echo $this->uri->segment(2) == 'ValidasiJurnalPKL' ? 'active' : '' ?>">
            <a class="nav-link" href="<?= base_url('pembimbingdudi/ValidasiJurnalPKL'); ?>">
                <i class="fas fa-tasks"></i>
                <span>Validasi Jurnal PKL</span></a>
        </li>

        <!-- Nav Item - Charts -->
        <li class="nav-item <?php echo $this->uri->segment(2) == 'AbsensiPKL' ? 'active' : '' ?>">
            <a class="nav-link" href="<?= base_url('pembimbingdudi/AbsensiPKL'); ?>">
                <i class="fas fa-clipboard-check"></i>
                <span>Ketidakhadiran Siswa PKL</span></a>
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