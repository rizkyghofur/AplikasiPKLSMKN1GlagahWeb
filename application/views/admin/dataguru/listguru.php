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
                        <h1 class="h2 mr-4 mb-0 text-gray-800"> Data Guru</h1>
                    </div>
                    <?php $this->load->view("_partials/breadcrumb.php") ?>
                    <!-- Content Row -->

                    <div class="card mb-3">
                        <div class="card-header">
                            <a href="<?= base_url("admin/dataguru/daftarguru") ?>"><i class="fas fa-plus"></i> Tambah Data Guru</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="table_id" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th>NIP</th>
                                            <th>Nama Guru</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Alamat</th>
                                            <th style="text-align:center">Opsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($data_guru as $dtguru) : ?>
                                            <tr>
                                                <td width="150">
                                                    <?php echo $dtguru->nip ?>
                                                </td>
                                                <td>
                                                    <?php echo $dtguru->nama_guru ?>
                                                </td>
                                                <td>
                                                    <?php echo $dtguru->jenis_kelamin ?>
                                                </td>
                                                <td>
                                                    <?php echo $dtguru->alamat ?>
                                                </td>
                                                <td width="185" style="text-align:center">
                                                    <a href="<?= base_url('admin/dataguru/editdataguru/' . $dtguru->id_guru) ?>" class="btn btn-small"><i class="fas fa-edit"></i> Ubah</a>
                                                    <a onclick="deleteConfirm('<?= base_url('admin/dataguru/hapusdataguru/' . $dtguru->id_guru) ?>')" href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
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