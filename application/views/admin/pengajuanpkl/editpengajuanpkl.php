<!DOCTYPE html>
<html lang="en">

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
                    <?php $this->load->view("_partials/breadcrumb.php") ?>
                    <!-- Content Row -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-2">
                        <h1 class="h2 mr-4 mb-0 text-gray-800">Ubah Pengajuan PKL</h1>
                    </div>
                    <?php if ($this->session->flashdata('success')) : ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo $this->session->flashdata('success'); ?>
                        </div>
                    <?php endif; ?>

                    <div class="card mb-3">
                        <div class="card-header">
                            <a href="<?= base_url('admin/pengajuanpkl/') ?>"><i class="fas fa-arrow-left"></i> Kembali</a>
                        </div>
                        <div class="card-body">

                            <form action="" method="post">

                                <input type="hidden" name="id_pengajuanpkl" value="<?php echo $pengajuanpkl->id_pengajuanpkl ?>" />

                                <div class="form-group">
                                    <label for="id_guru">Guru Pembimbing</label>
                                    <select class="form-control <?php echo form_error('id_guru') ? 'is-invalid' : '' ?>" name="id_guru">
                                        <option value="">Pilih Guru</option>
                                        <?php foreach ($data_guru as $row) { ?>
                                            <option value="<?php echo $row->id_guru; ?>"><?php echo $row->nama_guru; ?></option>
                                        <?php } ?>
                                    </select>
                                    <div class="invalid-feedback">
                                        <?php echo form_error('id_guru') ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="status_validasi">Status Validasi</label>
                                    <select class="form-control <?php echo form_error('status_validasi') ? 'is-invalid' : '' ?>" name="status_validasi">
                                        <option value="">---Status Validasi--</option>
                                        <option value="Proses Pengajuan">Proses Pengajuan</option>
                                        <option value="Diterima">Diterima</option>
                                        <option value="Ditolak">Ditolak</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        <?php echo form_error('status_validasi') ?>
                                    </div>
                                </div>

                                <input class="btn btn-primary" type="submit" name="btn" value="Simpan" />
                            </form>

                        </div>

                        <div class="card-footer small text-muted">
                            * Wajib diisi
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