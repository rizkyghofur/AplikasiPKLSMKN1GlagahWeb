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

                    <?php if ($this->session->flashdata('success')) : ?>
                        <div class="alert alert-success" role="alert">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <?php echo $this->session->flashdata('success'); ?>
                        </div>
                    <?php endif; ?>

                    <?php if ($this->session->flashdata('danger')) : ?>
                        <div class="alert alert-danger" role="alert">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <?php echo $this->session->flashdata('danger'); ?>
                        </div>
                    <?php endif; ?>

                    <?php $this->load->view("_partials/breadcrumb.php") ?>
                    <!-- Content Row -->

                    <div class="card mb-3">
                        <?php if (!isset($pengajuanpkl->status_validasi) || $pengajuanpkl->status_validasi != "Diterima") { ?>
                            <div class="card-body">
                                <div class="alert alert-danger" role="alert">
                                    <h4 class="alert-heading"><strong>Maaf, Anda tidak diizinkan mengakses menu ini!</strong></h4>
                                    <p>Karena pengajuan PKL Anda masih berstatus
                                        <?php if (empty($pengajuanpkl->status_validasi)) { ?>
                                            <strong> Belum mengajukan. </strong>
                                        <?php } else { ?>
                                            <strong><?php echo $pengajuanpkl->status_validasi ?></strong>.</p>
                                <?php } ?>
                                <hr>
                                <p class="mb-0">Jika terdapat pernyataan terkait PKL, silahkan hubungi Koordinator PKL, Bapak/Ibu Guru, atau Koordinator Jurusan di Program Studi Anda</p>
                                </div>
                            <?php } else { ?>
                                <div class="card-header d-flex justify-content-between mb-2">
                                    <button type="button" class="btn btn-light" data-toggle="modal" data-target="#tambahabsensi"><i class="fas fa-plus"></i> Tambah Absensi PKL</button>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="table_id" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th style="text-align:center">No.</th>
                                                    <th style="text-align:center">Nama Siswa</th>
                                                    <th style="text-align:center">Kelas</th>
                                                    <th style="text-align:center">Tanggal Absensi</th>
                                                    <th style="text-align:center">Keterangan</th>
                                                    <th style="text-align:center">Opsi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $i = 1;
                                                foreach ($absensi as $absen) : ?>
                                                    <tr>
                                                        <td style="text-align:center">
                                                            <?php echo $i ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $absen->nama_siswa ?>
                                                        </td>
                                                        <td style="text-align:center">
                                                            <?php echo $absen->kelas ?>
                                                        </td>
                                                        <td style="text-align:center">
                                                            <?php echo $absen->tanggal_absensi ?>
                                                        </td>
                                                        <td style="text-align:center">
                                                            <?php echo $absen->keterangan ?>
                                                        </td>
                                                        <td style="text-align:center">
                                                            <a onclick="deleteConfirm('<?= base_url('siswa/AbsensiPKL/hapusabsensipkl/' . $absen->id_absensi) ?>')" href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
                                                        </td>
                                                        <?php $i++ ?>
                                                    <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            <?php } ?>
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