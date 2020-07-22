      <!-- Sidebar -->
      <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

          <!-- Sidebar - Brand -->
          <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('siswa/dashboard/'); ?>">
              <div class="sidebar-brand-icon">
              </div>
              <div class="sidebar-brand-text"> Halaman Siswa </div>
          </a>

          <!-- Divider -->
          <hr class="sidebar-divider my-0">

          <!-- Nav Item - Dashboard -->
          <li class="nav-item <?php echo $this->uri->segment(2) == 'dashboard' ? 'active' : '' ?>">
              <a class="nav-link" href=" <?= base_url('siswa/dashboard/'); ?>">
                  <i class="fas fa-home"></i>
                  <span>Beranda</span></a>
          </li>

          <!-- Divider -->
          <hr class="sidebar-divider my-0">

          <hr class="sidebar-divider">

          <div class="sidebar-heading">
              Laporan PKL
          </div>

          <!-- Nav Item - Charts -->
          <li class="nav-item <?php echo $this->uri->segment(2) == 'laporanjurnalpkl' ? 'active' : '' ?>">
              <a class="nav-link" href=" <?= base_url('siswa/laporanpkl/laporanjurnalpkl'); ?>">
                  <i class="fas fa-fw fa-print"></i>
                  <span>Jurnal PKL</span></a>
          </li>

          <li class="nav-item <?php echo $this->uri->segment(2) == 'laporanprogrampkl' ? 'active' : '' ?>">
              <a class="nav-link" href=" <?= base_url('siswa/laporanpkl/laporanprogrampkl/'); ?>">
                  <i class="fas fa-fw fa-print"></i>
                  <span>Program PKL</span></a>
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