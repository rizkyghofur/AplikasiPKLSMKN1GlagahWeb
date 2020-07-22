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

                    <div class="d-sm-flex align-items-center justify-content-between mb-2">
                        <h1 class="h2 mr-4 mb-0 text-gray-800"> Data Siswa</h1>
                    </div>
                    <?php $this->load->view("_partials/breadcrumb.php") ?>
                    <!-- Content Row -->

                    <div class="card mb-3">
                        <div class="card-header">
                            <a href="<?= base_url("admin/datasiswa/daftarsiswa") ?>"><i class="fas fa-plus"></i> Tambah Data Siswa</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="table_id" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th>NIS</th>
                                            <th>NISN</th>
                                            <th>Nama Siswa</th>
                                            <th>Kelas</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Tempat Lahir</th>
                                            <th>Tanggal Lahir</th>
                                            <th style="text-align:center">Opsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($data_siswa as $dtsiswa) : ?>
                                            <tr>
                                                <td width="150">
                                                    <?php echo $dtsiswa->nis ?>
                                                </td>
                                                <td>
                                                    <?php echo $dtsiswa->nisn ?>
                                                </td>
                                                <td>
                                                    <?php echo $dtsiswa->nama_siswa ?>
                                                </td>
                                                <td>
                                                    <?php echo $dtsiswa->kelas ?>
                                                </td>
                                                <td>
                                                    <?php echo $dtsiswa->jenis_kelamin ?>
                                                </td>
                                                <td>
                                                    <?php echo $dtsiswa->tempat_lahir ?>
                                                </td>
                                                <td>
                                                    <?php echo $dtsiswa->tgl_lahir ?>
                                                </td>
                                                <td width="185" style="text-align:center">
                                                    <a href="<?= base_url('admin/datasiswa/editdatasiswa/' . $dtsiswa->id_siswa) ?>" class="btn btn-small"><i class="fas fa-edit"></i> Ubah</a>
                                                    <a onclick="deleteConfirm('<?= base_url('admin/datasiswa/hapusdatasiswa/' . $dtsiswa->id_siswa) ?>')" href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
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