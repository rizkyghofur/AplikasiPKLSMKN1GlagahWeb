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
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <?php echo $this->session->flashdata('success'); ?>
                        </div>
                    <?php endif; ?>

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
                            </div>
                        <?php } else { ?>
                            <div class="card-header d-flex justify-content-between">
                                <a class="btn btn-light" href="<?= base_url("siswa/ProgramPKL/tambahprogrampkl") ?>"><i class="fas fa-plus"></i> Tambah Data Program PKL</a>
                                <a class="btn btn-primary" href="<?= base_url("siswa/ProgramPKL/cetak_program_pkl/" . $this->session->userdata('id_siswa')) ?>"><i class="fas fa-print"></i> Cetak</a>
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
                                                <th style="text-align:center">Opsi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $i = 1;
                                            foreach ($program_pkl as $program) : ?>
                                                <tr>
                                                    <td width="15" style="text-align:center">
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
                                                    <td width="185" style="text-align:center">
                                                        <a href="<?= base_url('siswa/ProgramPKL/editprogrampkl/' . $program->id_program_pkl) ?>" class="btn btn-small"><i class="fas fa-edit"></i> Ubah</a>
                                                        <a onclick="deleteConfirm('<?= base_url('siswa/ProgramPKL/hapusprogrampkl/' . $program->id_program_pkl) ?>')" href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
                                                    </td>
                                                    <?php $i++ ?>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        <?php } ?>

                    </div>
                    <!-- End of Content Row -->

                </div>
                <!-- End of Content Fluid -->

            </div>
            <!-- End of Main Content -->

        </div>
        <!-- End of Content Wrapper -->

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

    <script>
        function deleteConfirm(url) {
            $('#btn-delete').attr('href', url);
            $('#deleteModal').modal();
        }
    </script>

</body>

</html>