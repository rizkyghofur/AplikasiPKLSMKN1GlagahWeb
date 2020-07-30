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
                    <?php $this->load->view("_partials/breadcrumb.php") ?>

                    <!-- Content Row -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-2">
                        <h1 class="h2 mr-4 mb-0 text-gray-800">Tambah Data DUDI</h1>
                    </div>

                    <div class="card mb-3">
                        <div class="card-header">
                            <a href="<?= base_url('admin/DataDUDI/') ?>"><i class="fas fa-arrow-left"></i> Kembali</a>
                        </div>
                        <div class="card-body">

                            <form action="<?= base_url('admin/DataDUDI/daftardudi') ?>" method="post">
                                <div class="form-group">
                                    <label for="nama_dudi">Nama DUDI *</label>
                                    <input class="form-control <?php echo form_error('name') ? 'is-invalid' : '' ?>" type="text" name="nama_dudi" placeholder="" />
                                    <div class="invalid-feedback">
                                        <?php echo form_error('nama_dudi') ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="alamat_dudi">Alamat DUDI *</label>
                                    <input class="form-control <?php echo form_error('alamat_dudi') ? 'is-invalid' : '' ?>" type="text" name="alamat_dudi" placeholder=""></input>
                                    <div class="invalid-feedback">
                                        <?php echo form_error('alamat_dudi') ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="no_telp_dudi">No Telpon DUDI *</label>
                                    <input class="form-control <?php echo form_error('no_telp_dudi') ? 'is-invalid' : '' ?>" type="number" name="no_telp_dudi" min="0" placeholder=""></input>
                                    <div class="invalid-feedback">
                                        <?php echo form_error('no_telp_dudi') ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="jenis_usaha">Jenis Usaha</label>
                                    <input class="form-control <?php echo form_error('jenis_usaha') ? 'is-invalid' : '' ?>" type="text" name="jenis_usaha" placeholder=""></input>
                                    <div class="invalid-feedback">
                                        <?php echo form_error('jenis_usaha') ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="nama_pimpinan">Nama Pimpinan *</label>
                                    <input class="form-control <?php echo form_error('nama_pimpinan') ? 'is-invalid' : '' ?>" type="text" name="nama_pimpinan" placeholder=""></input>
                                    <div class="invalid-feedback">
                                        <?php echo form_error('nama_pimpinan') ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="no_telp_pimpinan">No Telp Pimpinan</label>
                                    <input class="form-control <?php echo form_error('no_telp_pimpinan') ? 'is-invalid' : '' ?>" type="number" name="no_telp_pimpinan" placeholder=""></input>
                                    <div class="invalid-feedback">
                                        <?php echo form_error('no_telp_pimpinan') ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="kuota">Kuota *</label>
                                    <input class="form-control <?php echo form_error('kuota') ? 'is-invalid' : '' ?>" type="number" name="kuota" min="0" placeholder="" />
                                    <div class="invalid-feedback">
                                        <?php echo form_error('kuota') ?>
                                    </div>
                                </div>

                                <input class="btn btn-success" type="submit" name="btn" value="Simpan" />
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
            <?php $this->load->view("_partials/js.php") ?>

</body>

</html>