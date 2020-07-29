      <!-- Sidebar -->
      <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

          <!-- Sidebar - Brand -->
          <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('siswa/beranda/'); ?>">
              <div class="sidebar-brand-icon">
              </div>
              <div class="sidebar-brand-text"> Halaman Siswa </div>
          </a>

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
                  <i class="far  fa-fw fa-clipboard"></i>
                  <span>Jurnal PKL</span></a>
          </li>

          <li class="nav-item <?php echo $this->uri->segment(2) == 'JurnalPKL' ? 'active' : '' ?>">
              <a class="nav-link" href=" <?= base_url('siswa/JurnalPKL'); ?>">
                  <i class="fas fa-fw fa-clipboard"></i>
                  <span>Program PKL</span></a>
          </li>

          <li class="nav-item <?php echo $this->uri->segment(2) == 'AbsensiPKL' ? 'active' : '' ?>">
              <a class="nav-link" href=" <?= base_url('siswa/AbsensiPKL'); ?>">
                  <i class="fas fa-fw fa-calendar-check"></i>
                  <span>Absensi PKL</span></a>
          </li>

          <hr class="sidebar-divider">

          <div class="sidebar-heading" style="color: white;">
              Laporan PKL
          </div>

          <li class="nav-item <?php echo $this->uri->segment(2) == 'LaporanJurnalPKL' ? 'active' : '' ?>">
              <a class="nav-link" href=" <?= base_url('siswa/LaporanJurnalPKL'); ?>">
                  <i class="fas fa-fw fa-print"></i>
                  <span>Laporan Jurnal PKL</span></a>
          </li>

          <li class="nav-item <?php echo $this->uri->segment(2) == 'LaporanProgramPKL' ? 'active' : '' ?>">
              <a class="nav-link" href=" <?= base_url('siswa/LaporanProgramPKL/'); ?>">
                  <i class="fas fa-fw fa-print"></i>
                  <span>Laporan Program PKL</span></a>
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