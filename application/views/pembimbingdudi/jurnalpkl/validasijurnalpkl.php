<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("_partials/head.php") ?>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php $this->load->view("_partials/sidebar_pembimbingdudi.php") ?>
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
                        <h1 class="h2 mr-4 mb-0 text-gray-800">Validasi Jurnal PKL</h1>
                    </div>
                    <?php $this->load->view("_partials/breadcrumb.php") ?>
                    <!-- Content Row -->
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nama Siswa</th>
                                            <th>Kelas</th>
                                            <th>Tgl Pelaksanaan</th>
                                            <th>Topik Pekerjaan</th>
                                            <th>Validasi</th>
                                            <th>Catatan</th>
                                            <th style="text-align:center">Opsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($jurnal_pkl as $jurnal) : ?>
                                            <tr>
                                                <td width="200">
                                                    <?php echo $jurnal->nama ?>
                                                </td>
                                                <td>
                                                    <?php echo $jurnal->kelas ?>
                                                </td>
                                                <td>
                                                    <?php echo $jurnal->tanggal ?>
                                                </td>
                                                <td width="300">
                                                    <?php echo $jurnal->topik_pekerjaan ?>
                                                </td>
                                                <td>
                                                    <?php
                                                    if ($jurnal->status_validasi == 'Tervalidasi') { ?>
                                                        <span class="badge badge-success"><?php echo $jurnal->status_validasi; ?></span>
                                                    <?php } ?>
                                                    <?php
                                                    if ($jurnal->status_validasi == 'Ditolak') { ?>
                                                        <span class=" badge badge-danger"><?php echo $jurnal->status_validasi; ?></span>
                                                    <?php } ?>
                                                    <?php
                                                    if ($jurnal->status_validasi == 'Belum Tervalidasi') { ?>
                                                        <span class="badge badge-warning"><?php echo $jurnal->status_validasi; ?></span>
                                                    <?php } ?>
                                                </td>
                                                <td>
                                                    <?php echo $jurnal->catatan ?>
                                                </td>
                                                <td width="50" style="text-align:center">
                                                    <a href="<?= base_url('pembimbingdudi/validasijurnalpkl/editvalidasijurnalpkl/' . $jurnal->id_jurnal_pkl) ?>" class="btn btn-small"><i class="fas fa-edit"></i> Validasi</a>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>

                                    </tbody>
                                </table>
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