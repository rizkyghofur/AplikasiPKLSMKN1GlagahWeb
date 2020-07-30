<!DOCTYPE html>
<html lang="en">

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">

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
                    <div class="d-sm-flex align-items-center justify-content-between mb-2">
                        <h1 class="h2 mr-4 mb-0 text-gray-800">Laporan Program PKL</h1>
                    </div>
                    <?php $this->load->view("_partials/breadcrumb.php") ?>

                    <!-- Content Row -->
                    <div class="card mb-3">
                        <div class="card-header">
                            <a class="btn btn-primary" href="<?= base_url("siswa/LaporanProgramPKL/cetak_program_pkl/" . $this->session->userdata('id')) ?>"><i class="fas fa-print"></i> Cetak</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="table_id" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th style="text-align:center">No.</th>
                                            <th style="text-align:center">Tgl Pelaksanaan</th>
                                            <th style="text-align:center">Topik Pekerjaan</th>
                                            <th style="text-align:center">Rujukan Kompetensi Dasar</th>
                                            <th style="text-align:center">DUDI / Instansi Pasangan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $i = 1;
                                        foreach ($program_pkl as $program) : ?>
                                            <tr>
                                                <td style="text-align:center">
                                                    <?php echo $i ?>
                                                </td>
                                                <td style="text-align:center">
                                                    <?php echo $program->tanggal ?>
                                                </td>
                                                <td>
                                                    <?php echo $program->topik_pekerjaan ?>
                                                </td>
                                                <td>
                                                    <?php echo $program->kompetensi_dasar ?>
                                                </td>
                                                <td>
                                                    <?php echo $program->nama_dudi ?>
                                                </td>
                                                <?php $i++ ?>
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
        <?php $this->load->view("_partials/js.php") ?>

        <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

        <script type="text/javascript">
            $(document).ready(function() {
                $('#table_id').DataTable();
            });
        </script>

</body>

</html>