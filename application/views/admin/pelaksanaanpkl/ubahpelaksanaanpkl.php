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
                        <h1 class="h2 mr-4 mb-0 text-gray-800">Ubah Pengajuan PKL</h1>
                    </div>

                    <div class="card mb-3">
                        <div class="card-header">
                            <a href="<?= base_url('admin/PelaksanaanPKL/') ?>"><i class="fas fa-arrow-left"></i> Kembali</a>
                        </div>
                        <div class="card-body">

                            <form action="" method="post">

                                <?php foreach ($pelaksanaanpkl as $pelaksanaan) : ?>

                                    <input type="hidden" name="id_pengajuanpkl" value="<?php echo $pelaksanaan->id_pengajuanpkl ?>" />

                                    <div class="form-group row row-cols-1 row-cols-sm-2">

                                        <div class="col">
                                            <label>Identitas Siswa</label>
                                            <input class="form-control <?php echo form_error('tanggal_masuk') ? 'is-invalid' : '' ?>" readonly type="text" name="tanggal_masuk" value="<?php echo $pelaksanaan->nama_siswa ?>" />
                                        </div>

                                        <div class="col">
                                            <label for="status_keanggotaan">Status Keanggotaan</label>
                                            <select class="form-control <?php echo form_error('status_keanggotaan') ? 'is-invalid' : '' ?>" name="status_keanggotaan">
                                                <option value="<?php echo $pelaksanaan->status_keanggotaan; ?>">---Status Keanggotaan-- : <?php echo $pelaksanaan->status_keanggotaan; ?></option>
                                                <option value="Ketua Kelompok">Ketua Kelompok</option>
                                                <option value="Anggota">Anggota</option>
                                            </select>
                                            <div class="invalid-feedback">
                                                <?php echo form_error('status_keanggotaan') ?>
                                            </div>
                                        </div>
                                    </div>

                                    <input class="btn btn-primary" type="submit" name="btn" value="Simpan" />

                                <?php endforeach; ?>

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