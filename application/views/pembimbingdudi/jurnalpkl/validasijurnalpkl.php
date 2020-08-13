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
                    <div class="d-sm-flex align-items-center justify-content-between mb-2">
                        <h1 class="h2 mr-4 mb-0 text-gray-800"><?php echo $title ?></h1>
                    </div>
                    <?php $this->load->view("_partials/breadcrumb.php") ?>

                    <?php if ($this->session->flashdata('success')) : ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo $this->session->flashdata('success'); ?>
                        </div>
                    <?php endif; ?>

                    <!-- Content Row -->
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="table_id" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th style="text-align:center">No.</th>
                                            <th style="text-align:center">Nama Siswa</th>
                                            <th style="text-align:center">Kelas</th>
                                            <th style="text-align:center">Tgl Pelaksanaan</th>
                                            <th style="text-align:center">Topik Pekerjaan</th>
                                            <th style="text-align:center">Dokumentasi</th>
                                            <th style="text-align:center">Validasi</th>
                                            <th style="text-align:center">Catatan</th>
                                            <th style="text-align:center">Opsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $i = 1;
                                        foreach ($jurnal_pkl as $jurnal) : ?>
                                            <tr>
                                                <td style="text-align:center">
                                                    <?php echo $i ?>
                                                </td>
                                                <td>
                                                    <?php echo $jurnal->nama_siswa ?>
                                                </td>
                                                <td style="text-align:center">
                                                    <?php echo $jurnal->kelas ?>
                                                </td>
                                                <td style="text-align:center">
                                                    <?php echo date("d-m-Y", strtotime($jurnal->tanggal)) ?>
                                                </td>
                                                <td>
                                                    <?php echo $jurnal->topik_pekerjaan ?>
                                                </td>
                                                <td style="text-align:center">
                                                    <img src="<?php echo base_url('dokumentasi/' . $jurnal->dokumentasi) ?>" width="250" height="250" />
                                                </td>
                                                <td style="text-align:center">
                                                    <?php
                                                    if ($jurnal->status == 'Tervalidasi') { ?>
                                                        <span class="badge badge-success"><?php echo $jurnal->status; ?></span>
                                                    <?php } ?>
                                                    <?php
                                                    if ($jurnal->status == 'Ditolak') { ?>
                                                        <span class=" badge badge-danger"><?php echo $jurnal->status; ?></span>
                                                    <?php } ?>
                                                    <?php
                                                    if ($jurnal->status == 'Belum Tervalidasi') { ?>
                                                        <span class="badge badge-warning"><?php echo $jurnal->status; ?></span>
                                                    <?php } ?>
                                                </td>
                                                <td>
                                                    <?php echo $jurnal->catatan ?>
                                                </td>
                                                <td style="text-align:center">
                                                    <a href="<?= base_url('pembimbingdudi/ValidasiJurnalPKL/editvalidasijurnalpkl/' . $jurnal->id_jurnal_pkl) ?>" class="btn btn-primary text-white"><i class="fas fa-clipboard-check"></i> Validasi</a>
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

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

    </div>
    <!-- Footer -->
    <?php $this->load->view("_partials/footer.php") ?>
    <!-- End of Footer -->

    <!-- Scroll to Top Button-->
    <?php $this->load->view("_partials/scrolltop.php") ?>

    <!-- Logout Modal-->
    <?php $this->load->view("_partials/modal.php") ?>

    <!-- Bootstrap core JavaScript-->
    <?php $this->load->view("_partials/js.php") ?>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#table_id').DataTable();
        });
    </script>

</body>

</html>