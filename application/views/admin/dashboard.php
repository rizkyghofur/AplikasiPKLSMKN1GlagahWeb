<!DOCTYPE html>
<html lang="en">

<head>
  <?php $this->load->view("_partials/head.php") ?>
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php $this->load->view("_partials/sidebar_admin.php") ?>
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