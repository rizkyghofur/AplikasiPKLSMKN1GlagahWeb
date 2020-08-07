<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

            <div class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100">
                <b style="font-size: 15px; text-align: right;"> Aplikasi Praktik Kerja Lapangan SMKN 1 Glagah</b>
            </div>

            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
            </button>

            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">
                <?php if ($this->session->userdata("role") === "admin_pkl") { ?>

                    <!-- Nav Item - Pengajuan PKL -->
                    <li class="nav-item dropdown no-arrow mx-1">
                        <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-envelope fa-fw"></i>

                            <!-- Counter - Pengajuan PKL -->
                            <span class="badge badge-danger badge-counter"><?php echo $belum_tervalidasi; ?></span>
                        </a>

                        <!-- Dropdown - Pengajuan PKL -->
                        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                            <h6 class="dropdown-header">
                                Pengajuan PKL Baru
                            </h6>
                            <?php
                            foreach ($notif_belumtervalidasi as $notif) : ?>
                                <a class="dropdown-item d-flex align-items-center">
                                    <div class="font-weight-bold">
                                        <div class="text-truncate"><?php echo $notif->nama_siswa ?></div>
                                        <div class="small text-gray-500"><?php echo $notif->nama_dudi ?> · <?php echo $notif->tanggal_pengajuan ?> </div>
                                    </div>
                                </a>
                            <?php endforeach; ?>
                            <?php if (empty($notif_belumtervalidasi)) { ?>
                                <a class="dropdown-item d-flex align-items-center">
                                    <div class="text-gray-500">Belum ada pengajuan PKL baru. </div>
                                </a>
                            <?php  } ?>
                            <a class="dropdown-item text-center small text-gray-500" href=" <?= base_url('admin/PengajuanPKL/'); ?>">Lihat Pengajuan PKL</a>
                        </div>
                    </li>
                <?php } ?>

                <!-- Nav Item - User Information -->
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $this->session->userdata('nama_siswa'); ?><?php echo $this->session->userdata('nama_staf_tu'); ?><?php echo $this->session->userdata('nama_dudi'); ?></span>
                        <img class="img-profile rounded-circle" src="<?= base_url('assets/'); ?>img/user-solid.svg">
                    </a>

                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">

                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Logout
                        </a>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- End of Topbar -->