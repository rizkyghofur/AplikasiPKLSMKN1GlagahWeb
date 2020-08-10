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
                        <h1 class="h2 mr-4 mb-0 text-gray-800">Kelompok Pelaksanaan PKL</h1>
                    </div>

                    <div class="card mb-3">
                        <div class="card-header">
                            <a href="<?= base_url('admin/PelaksanaanPKL/') ?>"><i class="fas fa-arrow-left"></i> Kembali</a>
                        </div>
                        <div class="card-body">

                            <?php foreach ($pelaksanaanpkl as $pelaksanaan) : ?>
                                <div class="form-group">
                                    <label for="nama_dudi">Nama DUDI</label>
                                    <input class="form-control <?php echo form_error('nama_dudi') ? 'is-invalid' : '' ?>" type="text" name="nama_dudi" readonly placeholder="Nama DUDI" value="<?php echo $pelaksanaan->nama_dudi ?>" />
                                </div>
                                <?php break; ?>
                            <?php endforeach; ?>

                            <div class="row">
                                <div class="col">
                                    <strong>Anggota Kelompok : </strong>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <label>Nama Siswa</label>
                                </div>
                                <div class="col">
                                    <label>Kelas</label>
                                </div>
                                <div class="col">
                                    <label>Jurusan</label>
                                </div>
                                <div class="col">
                                    <label>Status Anggota</label>
                                </div>
                            </div>

                            <?php foreach ($pelaksanaanpkl as $pelaksanaan) : ?>
                                <div class="form-group row">
                                    <div class="col">
                                        <input class="form-control" readonly type="text" value="<?php echo $pelaksanaan->nama_siswa ?>" />
                                    </div>
                                    <div class="col">
                                        <input class="form-control" readonly type="text" value="<?php echo $pelaksanaan->kelas ?>" />
                                    </div>
                                    <div class="col">
                                        <input class="form-control" readonly type="text" value="<?php echo $pelaksanaan->nama_jurusan ?>" />
                                    </div>
                                    <div class="col">
                                        <input class="form-control" readonly type="text" value="<?php echo $pelaksanaan->status_keanggotaan ?>" />
                                    </div>
                                </div>
                            <?php endforeach; ?>

                            <?php foreach ($pelaksanaanpkl as $pelaksanaan) : ?>
                                <div class="form-group">
                                    <label>Guru Pembimbing</label>
                                    <input class="form-control" readonly type="text" value="<?php echo $pelaksanaan->nama_guru ?>" />
                                </div>
                                <?php break; ?>
                            <?php endforeach; ?>

                            <?php if ($pelaksanaan->status_keanggotaan != 'Ketua Kelompok') { ?>

                                <form action="" method="post">

                                    <div class="form-group">
                                        <label for="id_pengajuanpkl">Ketua Kelompok</label>
                                        <select class="form-control <?php echo form_error('id_pengajuanpkl') ? 'is-invalid' : '' ?>" name="id_pengajuanpkl">
                                            <option disabled selected value="">Pilih Ketua Kelompok : </option>
                                            <?php foreach ($pelaksanaanpkl as $row) { ?>
                                                <option value="<?php echo $row->id_pengajuanpkl; ?>"><?php echo $row->nama_siswa ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>

                                    <input type="hidden" name="status_keanggotaan" value="Ketua Kelompok" />

                                    <input class="btn btn-primary" type="submit" name="btn" value="Simpan" />

                                </form>

                            <?php } ?>

                        </div>

                        <div class="card-footer small text-muted">
                            * Wajib diisi
                        </div>
                    </div>

                </div>
                <!-- End of Page Content -->

            </div>
            <!-- End of Main Content -->

        </div>
        <!-- End of Page Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

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