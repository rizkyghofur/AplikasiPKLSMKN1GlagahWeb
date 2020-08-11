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
                        <h1 class="h2 mr-4 mb-0 text-gray-800"><?php echo $title ?></h1>
                    </div>

                    <div class="card mb-3">
                        <div class="card-header">
                            <a href="<?= base_url('admin/PengajuanPKL/') ?>"><i class="fas fa-arrow-left"></i> Kembali</a>
                        </div>
                        <div class="card-body">

                            <form action="" method="post">

                                <input type="hidden" name="id_pengajuanpkl" value="<?php echo $pengajuanpkl->id_pengajuanpkl ?>" />

                                <div class="form-group">
                                    <label for="nama_siswa">Nama Siswa</label>
                                    <input class="form-control <?php echo form_error('nama_siswa') ? 'is-invalid' : '' ?>" name="nama_siswa" readonly value="<?php echo $pengajuanpkl->nama_siswa ?>" />
                                    <div class="invalid-feedback">
                                        <?php echo form_error('nama_siswa') ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="kelas">Kelas</label>
                                    <input class="form-control <?php echo form_error('kelas') ? 'is-invalid' : '' ?>" name="kelas" readonly value="<?php echo $pengajuanpkl->kelas ?>" />
                                    <div class="invalid-feedback">
                                        <?php echo form_error('kelas') ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="nama_dudi">DUDI yang dipilih</label>
                                    <input class="form-control <?php echo form_error('nama_dudi') ? 'is-invalid' : '' ?>" name="nama_dudi" readonly value="<?php echo $pengajuanpkl->nama_dudi ?>" />
                                    <div class="invalid-feedback">
                                        <?php echo form_error('nama_dudi') ?>
                                    </div>
                                </div>

                                <div class="form-group row row-cols-1 row-cols-sm-2">

                                    <div class="col">
                                        <label for="tanggal_masuk">Tanggal Masuk</label>
                                        <input class="form-control <?php echo form_error('tanggal_masuk') ? 'is-invalid' : '' ?>" type="date" id="datepicker" name="tanggal_masuk" value="<?php echo $pengajuanpkl->tanggal_masuk ?>" />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('tanggal_masuk') ?>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <label for="tanggal_keluar">Tanggal Keluar</label>
                                        <input class="form-control <?php echo form_error('tanggal_keluar') ? 'is-invalid' : '' ?>" type="date" id="datepicker" name="tanggal_keluar" value="<?php echo $pengajuanpkl->tanggal_keluar ?>" />
                                        <div class="invalid-feedback">
                                            <?php echo form_error('tanggal_keluar') ?>
                                        </div>
                                    </div>

                                </div>

                                <div class="form-group">
                                    <label for="id_guru">Guru Pembimbing</label>
                                    <select class="form-control <?php echo form_error('id_guru') ? 'is-invalid' : '' ?>" name="id_guru">
                                        <option value="<?php echo $pengajuanpkl->id_guru; ?>">Pilih Guru : <?php echo $pengajuanpkl->nama_guru; ?> </option>
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
                                        <option value="<?php echo $pengajuanpkl->status_validasi; ?>">---Status Validasi-- : <?php echo $pengajuanpkl->status_validasi; ?></option>
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

        <script>
            $(function() {
                $("#datepicker").datepicker({
                    changeMonth: true,
                    changeYear: true
                });
            });
        </script>

</body>

</html>