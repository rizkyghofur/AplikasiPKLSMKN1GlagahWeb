<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("_partials/head.php") ?>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php $this->load->view("_partials/sidebar_siswa.php") ?>
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
                    <div class="d-sm-flex align-items-center justify-content-between mb-2">
                        <h1 class="h2 mr-4 mb-0 text-gray-800">program PKL</h1>
                    </div>
                    <?php $this->load->view("_partials/breadcrumb.php") ?>
                    <!-- Content Row -->
                    <div class="card mb-3">
                        <div class="card-header">

                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Tgl Pelaksanaan</th>
                                            <th>Topik Pekerjaan</th>
                                            <th>Kompetensi Dasar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($program_pkl as $program) : ?>
                                            <tr>
                                                <td width="200">
                                                    <?php echo $program->tanggal ?>
                                                </td>
                                                <td>
                                                    <?php echo $program->topik_pekerjaan ?>
                                                </td>
                                                <td>
                                                    <?php echo $program->kompetensi_dasar ?>
                                                </td>
                                                <td style="text-align:center">
                                                    <?php
                                                    if ($program->status_validasi == 'Tervalidasi') { ?>
                                                        <span class="badge badge-success"><?php echo $program->status_validasi; ?></span>
                                                    <?php } ?>
                                                    <?php
                                                    if ($program->status_validasi == 'Ditolak') { ?>
                                                        <span class=" badge badge-danger"><?php echo $program->status_validasi; ?></span>
                                                    <?php } ?>
                                                    <?php
                                                    if ($program->status_validasi == 'Belum Tervalidasi') { ?>
                                                        <span class="badge badge-warning"><?php echo $program->status_validasi; ?></span>
                                                    <?php } ?>
                                                </td>
                                                <td>
                                                    <?php echo $program->catatan ?>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <?php echo $pagination; ?>
                                </div>
                            </div>
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
        <script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
        <script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>

</body>

</html>