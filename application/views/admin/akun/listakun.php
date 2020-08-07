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
                        <h1 class="h2 mr-4 mb-0 text-gray-800"> Akun</h1>
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
                                            <th style="text-align:center">Nama Pengguna</th>
                                            <th style="text-align:center">Username</th>
                                            <th style="text-align:center">Password</th>
                                            <th style="text-align:center">Role</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $i = 1;
                                        foreach ($pengguna as $akun) : ?>
                                            <tr>
                                                <td width="25" style="text-align:center">
                                                    <?php echo $i ?>
                                                </td>
                                                <td>
                                                    <?php echo $akun->nama_siswa ?>
                                                    <?php echo $akun->nama_guru ?>
                                                    <?php echo $akun->nama_staf_tu ?>
                                                    <?php echo $akun->nama_dudi ?>
                                                </td>
                                                <td style="text-align:center">
                                                    <?php echo $akun->username ?>
                                                </td>
                                                <td style="text-align:center">
                                                    <?php echo $akun->password ?>
                                                </td>
                                                <td style="text-align:center">
                                                    <?php
                                                    if ($akun->role == 'siswa') { ?>
                                                        Siswa
                                                    <?php } ?>
                                                    <?php
                                                    if ($akun->role == 'pembimbing_dudi') { ?>
                                                        Pembimbing DUDI
                                                    <?php } ?>
                                                    <?php
                                                    if ($akun->role == 'guru') { ?>
                                                        Guru
                                                    <?php } ?>
                                                    <?php
                                                    if ($akun->role == 'koordinator_jurusan') { ?>
                                                        Koordinator Jurusan
                                                    <?php } ?>
                                                    <?php
                                                    if ($akun->role == 'admin_pkl') { ?>
                                                        Administrator PKL
                                                    <?php } ?>
                                                </td>
                                                <?php $i++ ?>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                    <!-- End of Main Content -->

                </div>
                <!-- End of Page Content -->

            </div>
            <!-- End of Main Content -->

        </div>
        <!-- End of Page Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Footer -->
    <?php $this->load->view("_partials/footer.php") ?>
    <!-- End of Footer -->

    <!-- Scroll to Top Button-->
    <?php $this->load->view("_partials/scrolltop.php") ?>

    <!-- Logout Modal-->
    <?php $this->load->view("_partials/modal.php") ?>

    <!-- Custom Bootstrap Script-->
    <?php $this->load->view("_partials/js.php") ?>

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