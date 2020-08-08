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
                        <h1 class="h2 mr-4 mb-0 text-gray-800"> Ubah Validasi Jurnal PKL</h1>
                    </div>
                    <?php $this->load->view("_partials/breadcrumb.php") ?>

                    <!-- Content Row -->
                    <?php if ($this->session->flashdata('success')) : ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo $this->session->flashdata('success'); ?>
                        </div>
                    <?php endif; ?>

                    <div class="card mb-3">
                        <div class="card-header">
                            <a href="<?= base_url('pembimbingdudi/ValidasiJurnalPKL/') ?>"><i class="fas fa-arrow-left"></i> Kembali</a>
                        </div>
                        <div class="card-body">

                            <form action="" method="post">

                                <input type="hidden" name="id_jurnal_pkl" value="<?php echo $jurnal_pkl->id_jurnal_pkl ?>" />

                                <div class="form-group">
                                    <label for="nama_siswa">Nama Siswa</label>
                                    <input class="form-control <?php echo form_error('nama_siswa') ? 'is-invalid' : '' ?>" name="nama_siswa" readonly value="<?php echo $jurnal_pkl->nama_siswa ?>" />
                                    <div class="invalid-feedback">
                                        <?php echo form_error('nama_siswa') ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="kelas">Kelas</label>
                                    <input class="form-control <?php echo form_error('kelas') ? 'is-invalid' : '' ?>" name="kelas" readonly value="<?php echo $jurnal_pkl->kelas ?>" />
                                    <div class="invalid-feedback">
                                        <?php echo form_error('kelas') ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="tanggal">Tanggal Pelaksanaan</label>
                                    <input class="form-control <?php echo form_error('tanggal') ? 'is-invalid' : '' ?>" name="tanggal" readonly value="<?php echo $jurnal_pkl->tanggal ?>" />
                                    <div class="invalid-feedback">
                                        <?php echo form_error('tanggal') ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="topik_pekerjaan">Topik Pekerjaan</label>
                                    <textarea class="form-control <?php echo form_error('topik_pekerjaan') ? 'is-invalid' : '' ?>" type="text" name="topik_pekerjaan" readonly><?php echo $jurnal_pkl->topik_pekerjaan ?></textarea>
                                    <div class="invalid-feedback">
                                        <?php echo form_error('topik_pekerjaan') ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="status">Status Validasi</label>
                                    <select class="form-control <?php echo form_error('status') ? 'is-invalid' : '' ?>" name="status">
                                        <option value="<?php echo $jurnal_pkl->status ?>">Status Validasi : <?php echo $jurnal_pkl->status ?></option>
                                        <option value="Tervalidasi">Tervalidasi</option>
                                        <option value="Ditolak">Ditolak</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        <?php echo form_error('status') ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="catatan">Catatan</label>
                                    <textarea class="form-control <?php echo form_error('catatan') ? 'is-invalid' : '' ?>" type="text" name="catatan" value="<?php echo $jurnal_pkl->catatan ?>"></textarea>
                                    <div class="invalid-feedback">
                                        <?php echo form_error('catatan') ?>
                                    </div>
                                </div>

                                <label for="dokumentasi">Dokumentasi</label>
                                <div class="form-group d-flex justify-content-center">
                                    <img class="col-lg-6" src="<?php echo base_url('dokumentasi/' . $jurnal_pkl->dokumentasi) ?>" width="480" height="320" />
                                </div>

                                <input class="btn btn-primary" type="submit" name="btn" value="Simpan" />
                            </form>

                        </div>

                        <div class="card-footer small text-muted">
                            * Wajib diisi
                        </div>

                    </div>
                    <!-- End of Main Content -->

                </div>
                <!-- End of Content Wrapper -->

            </div>
            <!-- End of Page Wrapper -->

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

</body>

</html>