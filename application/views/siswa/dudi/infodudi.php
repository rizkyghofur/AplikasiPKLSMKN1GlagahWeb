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
                        <h1 class="h2 mr-4 mb-0 text-gray-800"> Data DUDI</h1>
                    </div>

                    <?php if ($this->session->flashdata('success')) : ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo $this->session->flashdata('success'); ?>
                        </div>
                    <?php endif; ?>

                    <?php $this->load->view("_partials/breadcrumb.php") ?>
                    <!-- Content Row -->

                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="table_id" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th style="text-align:center">No.</th>
                                            <th style="text-align:center">Nama DUDI</th>
                                            <th style="text-align:center">Alamat DUDI</th>
                                            <th style="text-align:center">No Telp. DUDI</th>
                                            <th style="text-align:center">Jenis Usaha</th>
                                            <th style="text-align:center">Nama Pimpinan</th>
                                            <th style="text-align:center">No Telp Pimpinan</th>
                                            <th style="text-align:center">Kuota</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $i = 1;
                                        foreach ($data_dudi as $dtdudi) : ?>
                                            <tr>
                                                <td style="text-align:center">
                                                    <?php echo $i ?>
                                                </td>
                                                <td>
                                                    <?php echo $dtdudi->nama_dudi ?>
                                                </td>
                                                <td>
                                                    <?php echo $dtdudi->alamat_dudi ?>
                                                </td>
                                                <td style="text-align:center">
                                                    <?php echo $dtdudi->no_telp_dudi ?>
                                                </td>
                                                <td style="text-align:center">
                                                    <?php echo $dtdudi->jenis_usaha ?>
                                                </td>
                                                <td style="text-align:center">
                                                    <?php echo $dtdudi->nama_pimpinan ?>
                                                </td>
                                                <td style="text-align:center">
                                                    <?php echo $dtdudi->no_telp_pimpinan ?>
                                                </td>
                                                <td style="text-align:center">
                                                    <?php
                                                    if ($dtdudi->kuota == 0) { ?>
                                                        <span class="badge badge-success">Kuota Terpenuhi</span>
                                                    <?php } else { ?>
                                                        <?php echo $dtdudi->kuota; ?>
                                                    <?php } ?>
                                                </td>
                                                <?php $i++ ?>
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

        <!-- Custom Bootstrap Script-->
        <?php $this->load->view("_partials/js.php") ?>

        <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

        <script type="text/javascript">
            $(document).ready(function() {
                $('#table_id').DataTable();
            });
        </script>

        <script>
            function deleteConfirm(url) {
                $('#btn-delete').attr('href', url);
                $('#deleteModal').modal();
            }
        </script>

</body>

</html>