<!DOCTYPE html>
<html lang="en">
<meta http-equiv="refresh" content="300">

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
                        <h1 class="h2 mr-4 mb-0 text-gray-800"> Data Pengajuan PKL</h1>
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
                                            <th style="text-align:center">Nama Siswa</th>
                                            <th style="text-align:center">Kelas</th>
                                            <th style="text-align:center">Nama DUDI</th>
                                            <th style="text-align:center">Tanggal Pengajuan</th>
                                            <th style="text-align:center">Tanggal Masuk</th>
                                            <th style="text-align:center">Tanggal Keluar</th>
                                            <th style="text-align:center">Nama Guru</th>
                                            <th style="text-align:center">Status Validasi</th>
                                            <th style="text-align:center">Opsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $i = 1;
                                        foreach ($pengajuanpkl as $pengajuan) : ?>
                                            <tr>
                                                <td style="text-align:center">
                                                    <?php echo $i ?>
                                                </td>
                                                <td>
                                                    <?php echo $pengajuan->nama_siswa; ?>
                                                </td>
                                                <td style="text-align:center">
                                                    <?php echo $pengajuan->kelas; ?>
                                                </td>
                                                <td>
                                                    <?php echo $pengajuan->nama_dudi; ?>
                                                </td>
                                                <td>
                                                    <?php echo $pengajuan->tanggal_pengajuan; ?>
                                                </td>
                                                <td style="text-align:center">
                                                    <?php echo $pengajuan->tanggal_masuk; ?>
                                                </td>
                                                <td style="text-align:center">
                                                    <?php echo $pengajuan->tanggal_keluar; ?>
                                                </td>
                                                <td>
                                                    <?php
                                                    if ($pengajuan->id_guru == 0) { ?>
                                                        Belum ditunjuk
                                                    <?php } else { ?>
                                                        <?php echo $pengajuan->nama_guru; ?>
                                                    <?php } ?>
                                                </td>
                                                <td style="text-align:center">
                                                    <?php
                                                    if ($pengajuan->status_validasi == 'Diterima') { ?>
                                                        <span class="badge badge-success"><?php echo $pengajuan->status_validasi; ?></span>
                                                    <?php } ?>
                                                    <?php
                                                    if ($pengajuan->status_validasi == 'Ditolak') { ?>
                                                        <span class=" badge badge-danger"><?php echo $pengajuan->status_validasi; ?></span>
                                                    <?php } ?>
                                                    <?php
                                                    if ($pengajuan->status_validasi == 'Proses Pengajuan') { ?>
                                                        <span class=" badge badge-info"><?php echo $pengajuan->status_validasi; ?></span>
                                                    <?php } ?>
                                                    <?php
                                                    if ($pengajuan->status_validasi == 'Belum Tervalidasi') { ?>
                                                        <span class="badge badge-warning"><?php echo $pengajuan->status_validasi; ?></span>
                                                    <?php } ?>
                                                </td>
                                                <td style="text-align:center">
                                                    <a href="<?= base_url('admin/PengajuanPKL/editpengajuanpkl/' . $pengajuan->id_pengajuanpkl) ?>" class="btn btn-small"><i class="fas fa-edit"></i> Ubah</a>
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