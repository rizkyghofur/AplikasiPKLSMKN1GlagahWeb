<!DOCTYPE html>
<html lang="en">

<head>
  <?php $this->load->view("_partials/head.php") ?>
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php $this->load->view("_partials/sidebar.php") ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php $this->load->view("_partials/navbar.php") ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Beranda</h1>
          </div>

          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-3 mb-2">
              <div class="card border-left-secondary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Total Pengajuan PKL Belum Diproses</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $belum_mengajukan->total ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Annual) Card Example -->
            <div class="col-xl-3 col-md-3 mb-2">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Pengajuan PKL Diproses</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $proses_pengajuan->total ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-envelope-open-text fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Tasks Card Example -->
            <div class="col-xl-3 col-md-3 mb-2">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Pengajuan PKL Diterima</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $diterima->total ?></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-check fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-3 mb-2">
              <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Total Pengajuan PKL Ditolak</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $ditolak->total ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-times fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-md-3 mb-2">
            <div class="card border-left-danger shadow h-100 py-2">
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Total Pengajuan PKL Ditolak</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $ditolak->total ?></div>
                  </div>
                  <div class="col-auto">
                    <i class="fas fa-times fa-2x text-gray-300"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Content Row -->
        <div class="card text-center">
          <div class="container">
            <div class="card-body">
              <div class="row">
                <div class="span4"></div>
                <div class="card-img"><img class="mx-auto d-block" width=100px src="<?= base_url('assets/img/login.png'); ?>" /></div>
                <div class="span4"></div>
              </div>
            </div>
            <h5 class="card-title">Selamat Datang di Aplikasi PKL SMKN 1 Glagah - Admin PKL</h5>
            <p class="card-text">Hai, <?php echo $this->session->userdata('nama_staf_tu'); ?></p>
            <div class="span4"></div>
          </div>
        </div>
      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <?php $this->load->view("_partials/footer.php") ?>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <?php $this->load->view("_partials/scrolltop.php") ?>

  <!-- Logout Modal-->
  <?php $this->load->view("_partials/modal.php") ?>

  <!-- Bootstrap core JavaScript-->
  <?php $this->load->view("_partials/js.php") ?>

</body>

</html>