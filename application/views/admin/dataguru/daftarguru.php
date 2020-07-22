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
                        <h1 class="h2 mr-4 mb-0 text-gray-800">Tambah Data Guru</h1>
                    </div>
                    <?php if ($this->session->flashdata('success')) : ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo $this->session->flashdata('success'); ?>
                        </div>
                    <?php endif; ?>

                    <div class="card mb-3">
                        <div class="card-header">
                            <a href="<?= base_url('admin/dataguru/') ?>"><i class="fas fa-arrow-left"></i> Kembali</a>
                        </div>
                        <div class="card-body">

                            <form action="<?= base_url('admin/dataguru/daftarguru') ?>" method="post">
                                <div class="form-group">
                                    <label for="nip">NIP *</label>
                                    <input class="form-control <?php echo form_error('nip') ? 'is-invalid' : '' ?>" type="number" name="nip" />
                                    <div class="invalid-feedback">
                                        <?php echo form_error('nip') ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="nama_guru">Nama Guru *</label>
                                    <input class="form-control <?php echo form_error('nama_guru') ? 'is-invalid' : '' ?>" name="nama_guru"></input>
                                    <div class="invalid-feedback">
                                        <?php echo form_error('nama_guru') ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="jenis_kelamin">Jenis Kelamin *</label>
                                    <select class="form-control <?php echo form_error('jenis_kelamin') ? 'is-invalid' : '' ?>" name="jenis_kelamin">
                                        <option value="">---Pilih Jenis Kelamin--</option>
                                        <option value="Laki-laki">Laki-laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        <?php echo form_error('jenis_kelamin') ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <input class="form-control <?php echo form_error('alamat') ? 'is-invalid' : '' ?>" type="text" name="alamat"></input>
                                    <div class="invalid-feedback">
                                        <?php echo form_error('alamat') ?>
                                    </div>
                                </div>

                                <input class="btn btn-success" type="submit" name="btn" value="Simpan" />
                            </form>

                        </div>

                        <div class="card-footer small text-muted">
                            * wajib diisi
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