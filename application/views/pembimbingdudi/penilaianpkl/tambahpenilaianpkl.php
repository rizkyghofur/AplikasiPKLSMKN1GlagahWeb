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
                        <h1 class="h2 mr-4 mb-0 text-gray-800">Tambah Data Penilaian PKL</h1>
                    </div>

                    <div class="card mb-3">
                        <div class="card-header">
                            <a href="<?= base_url('pembimbingdudi/PenilaianPKL/') ?>"><i class="fas fa-arrow-left"></i> Kembali</a>
                        </div>
                        <div class="card-body">

                            <form action="<?= base_url('pembimbingdudi/PenilaianPKL/tambahnilaipkl') ?>" method="post">
                                <div class="row">
                                    <div class="form-group col">
                                        <label>Nama Siswa</label>
                                        <input class="form-control" readonly value="<?php echo $siswa->nama_siswa ?>" />
                                    </div>

                                    <div class="form-group col">
                                        <label>Kelas</label>
                                        <input class="form-control" readonly value="<?php echo $siswa->kelas ?>" />
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col">
                                        <label>Jurusan</label>
                                        <input class="form-control" readonly value="<?php echo $siswa->nama_jurusan ?>" />
                                    </div>

                                    <div class="form-group col">
                                        <label>Nama DUDI</label>
                                        <input class="form-control" readonly value="<?php echo $siswa->nama_dudi ?>" />
                                    </div>
                                </div>

                                <label style="text-align: center;" class="mt-4" for="aspek_teknis_1"><strong>PEKERJAAN / KEGIATAN</strong></label>

                                <input type="hidden" name="id_siswa" value="<?php echo $siswa->id_siswa ?>" />

                                <div class="d-flex justify-content-between">
                                    <div class="form-group w-75">
                                        <label for="aspek_teknis_1"><strong>A. Aspek Teknis</strong> ( Sesuai dengan Skema Kerja / Kompetensi Dasar )</label>
                                        <input class="form-control <?php echo form_error('aspek_teknis_1') ? 'is-invalid' : '' ?>" type="text" name="aspek_teknis_1" placeholder="1."></input>
                                        <div class="invalid-feedback">
                                            <?php echo form_error('aspek_teknis_1') ?>
                                        </div>
                                    </div>

                                    <div class="form-group mr-auto ml-auto">
                                        <label for="nilai_astek_1"><strong>Nilai</strong></label>
                                        <input class="form-control <?php echo form_error('nilai_astek_1') ? 'is-invalid' : '' ?>" type="number" name="nilai_astek_1" max="100"></input>
                                        <div class="invalid-feedback">
                                            <?php echo form_error('nilai_astek_1') ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-between">
                                    <div class="form-group w-75">
                                        <input class="form-control <?php echo form_error('aspek_teknis_2') ? 'is-invalid' : '' ?>" type="text" name="aspek_teknis_2" placeholder="2."></input>
                                        <div class="invalid-feedback">
                                            <?php echo form_error('aspek_teknis_2') ?>
                                        </div>
                                    </div>

                                    <div class="form-group mr-auto ml-auto">
                                        <input class="form-control <?php echo form_error('nilai_astek_2') ? 'is-invalid' : '' ?>" type="number" max="100" name="nilai_astek_2"></input>
                                        <div class="invalid-feedback">
                                            <?php echo form_error('nilai_astek_2') ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-between">
                                    <div class="form-group w-75">
                                        <input class="form-control <?php echo form_error('aspek_teknis_3') ? 'is-invalid' : '' ?>" type="text" name="aspek_teknis_3" placeholder="3."></input>
                                        <div class="invalid-feedback">
                                            <?php echo form_error('aspek_teknis_3') ?>
                                        </div>
                                    </div>

                                    <div class="form-group mr-auto ml-auto">
                                        <input class="form-control <?php echo form_error('nilai_astek_3') ? 'is-invalid' : '' ?>" type="number" max="100" name="nilai_astek_3"></input>
                                        <div class="invalid-feedback">
                                            <?php echo form_error('nilai_astek_3') ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-between">
                                    <div class="form-group w-75">
                                        <input class="form-control <?php echo form_error('aspek_teknis_4') ? 'is-invalid' : '' ?>" type="text" name="aspek_teknis_4" placeholder="4."></input>
                                        <div class="invalid-feedback">
                                            <?php echo form_error('aspek_teknis_4') ?>
                                        </div>
                                    </div>

                                    <div class="form-group mr-auto ml-auto">
                                        <input class="form-control <?php echo form_error('nilai_astek_4') ? 'is-invalid' : '' ?>" type="number" max="100" name="nilai_astek_4"></input>
                                        <div class="invalid-feedback">
                                            <?php echo form_error('nilai_astek_4') ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-between">
                                    <div class="form-group w-75">
                                        <input class="form-control <?php echo form_error('aspek_teknis_5') ? 'is-invalid' : '' ?>" type="text" name="aspek_teknis_5" placeholder="5."></input>
                                        <div class="invalid-feedback">
                                            <?php echo form_error('aspek_teknis_5') ?>
                                        </div>
                                    </div>

                                    <div class="form-group mr-auto ml-auto">
                                        <input class="form-control <?php echo form_error('nilai_astek_5') ? 'is-invalid' : '' ?>" type="number" max="100" name="nilai_astek_5"></input>
                                        <div class="invalid-feedback">
                                            <?php echo form_error('nilai_astek_5') ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-between">
                                    <div class="form-group w-75">
                                        <input class="form-control <?php echo form_error('aspek_teknis_6') ? 'is-invalid' : '' ?>" type="text" name="aspek_teknis_6" placeholder="6."></input>
                                        <div class="invalid-feedback">
                                            <?php echo form_error('aspek_teknis_6') ?>
                                        </div>
                                    </div>

                                    <div class="form-group mr-auto ml-auto">
                                        <input class="form-control <?php echo form_error('nilai_astek_6') ? 'is-invalid' : '' ?>" type="number" max="100" name="nilai_astek_6"></input>
                                        <div class="invalid-feedback">
                                            <?php echo form_error('nilai_astek_6') ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-between">
                                    <div class="form-group w-75">
                                        <input class="form-control <?php echo form_error('aspek_teknis_7') ? 'is-invalid' : '' ?>" type="text" name="aspek_teknis_7" placeholder="7."></input>
                                        <div class="invalid-feedback">
                                            <?php echo form_error('aspek_teknis_7') ?>
                                        </div>
                                    </div>

                                    <div class="form-group mr-auto ml-auto">
                                        <input class="form-control <?php echo form_error('nilai_astek_7') ? 'is-invalid' : '' ?>" type="number" max="100" name="nilai_astek_7"></input>
                                        <div class="invalid-feedback">
                                            <?php echo form_error('nilai_astek_7') ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-between">
                                    <div class="form-group w-75">
                                        <input class="form-control <?php echo form_error('aspek_teknis_8') ? 'is-invalid' : '' ?>" type="text" name="aspek_teknis_8" placeholder="8."></input>
                                        <div class="invalid-feedback">
                                            <?php echo form_error('aspek_teknis_8') ?>
                                        </div>
                                    </div>

                                    <div class="form-group mr-auto ml-auto">
                                        <input class="form-control <?php echo form_error('nilai_astek_8') ? 'is-invalid' : '' ?>" type="number" max="100" name="nilai_astek_8"></input>
                                        <div class="invalid-feedback">
                                            <?php echo form_error('nilai_astek_8') ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-between">
                                    <div class="form-group w-75">
                                        <input class="form-control <?php echo form_error('aspek_teknis_9') ? 'is-invalid' : '' ?>" type="text" name="aspek_teknis_9" placeholder="9."></input>
                                        <div class="invalid-feedback">
                                            <?php echo form_error('aspek_teknis_9') ?>
                                        </div>
                                    </div>

                                    <div class="form-group mr-auto ml-auto">
                                        <input class="form-control <?php echo form_error('nilai_astek_9') ? 'is-invalid' : '' ?>" type="number" max="100" name="nilai_astek_9"></input>
                                        <div class="invalid-feedback">
                                            <?php echo form_error('nilai_astek_9') ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-between">
                                    <div class="form-group w-75">
                                        <input class="form-control <?php echo form_error('aspek_teknis_10') ? 'is-invalid' : '' ?>" type="text" name="aspek_teknis_10" placeholder="10."></input>
                                        <div class="invalid-feedback">
                                            <?php echo form_error('aspek_teknis_10') ?>
                                        </div>
                                    </div>

                                    <div class="form-group mr-auto ml-auto">
                                        <input class="form-control <?php echo form_error('nilai_astek_10') ? 'is-invalid' : '' ?>" type="number" max="100" name="nilai_astek_10"></input>
                                        <div class="invalid-feedback">
                                            <?php echo form_error('nilai_astek_10') ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-between">
                                    <div class="form-group w-75">
                                        <input class="form-control <?php echo form_error('aspek_teknis_11') ? 'is-invalid' : '' ?>" type="text" name="aspek_teknis_11" placeholder="11."></input>
                                        <div class="invalid-feedback">
                                            <?php echo form_error('aspek_teknis_11') ?>
                                        </div>
                                    </div>

                                    <div class="form-group mr-auto ml-auto">
                                        <input class="form-control <?php echo form_error('nilai_astek_11') ? 'is-invalid' : '' ?>" type="number" max="100" name="nilai_astek_11"></input>
                                        <div class="invalid-feedback">
                                            <?php echo form_error('nilai_astek_11') ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-between">
                                    <div class="form-group w-75">
                                        <input class="form-control <?php echo form_error('aspek_teknis_12') ? 'is-invalid' : '' ?>" type="text" name="aspek_teknis_12" placeholder="12."></input>
                                        <div class="invalid-feedback">
                                            <?php echo form_error('aspek_teknis_12') ?>
                                        </div>
                                    </div>

                                    <div class="form-group mr-auto ml-auto">
                                        <input class="form-control <?php echo form_error('nilai_astek_12') ? 'is-invalid' : '' ?>" type="number" max="100" name="nilai_astek_12"></input>
                                        <div class="invalid-feedback">
                                            <?php echo form_error('nilai_astek_12') ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-between">
                                    <div class="form-group w-75">
                                        <input class="form-control <?php echo form_error('aspek_teknis_13') ? 'is-invalid' : '' ?>" type="text" name="aspek_teknis_13" placeholder="13."></input>
                                        <div class="invalid-feedback">
                                            <?php echo form_error('aspek_teknis_13') ?>
                                        </div>
                                    </div>

                                    <div class="form-group mr-auto ml-auto">
                                        <input class="form-control <?php echo form_error('nilai_astek_13') ? 'is-invalid' : '' ?>" type="number" max="100" name="nilai_astek_13"></input>
                                        <div class="invalid-feedback">
                                            <?php echo form_error('nilai_astek_13') ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-between">
                                    <div class="form-group w-75">
                                        <input class="form-control <?php echo form_error('aspek_teknis_14') ? 'is-invalid' : '' ?>" type="text" name="aspek_teknis_14" placeholder="14."></input>
                                        <div class="invalid-feedback">
                                            <?php echo form_error('aspek_teknis_14') ?>
                                        </div>
                                    </div>

                                    <div class="form-group mr-auto ml-auto">
                                        <input class="form-control <?php echo form_error('nilai_astek_14') ? 'is-invalid' : '' ?>" type="number" max="100" name="nilai_astek_14"></input>
                                        <div class="invalid-feedback">
                                            <?php echo form_error('nilai_astek_14') ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-between">
                                    <div class="form-group w-75">
                                        <label class="mt-4" for="aspek_teknis_1"><strong>B. Aspek Non Teknis</strong></label>
                                        <input class="form-control" readonly placeholder="Disiplin"></input>
                                    </div>

                                    <div class="form-group mr-auto ml-auto">
                                        <label class="mt-4" for="aspek_teknis_1"><strong>Nilai</strong></label>
                                        <input class="form-control <?php echo form_error('nilai_nontek_disiplin') ? 'is-invalid' : '' ?>" type="number" max="100" name="nilai_nontek_disiplin" placeholder=""></input>
                                        <div class="invalid-feedback">
                                            <?php echo form_error('nilai_nontek_disiplin') ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-between">
                                    <div class="form-group w-75">
                                        <input class="form-control" readonly placeholder="Kerjasama"></input>
                                    </div>

                                    <div class="form-group mr-auto ml-auto">
                                        <input class="form-control <?php echo form_error('nilai_nontek_kerjasama') ? 'is-invalid' : '' ?>" type="number" max="100" name="nilai_nontek_kerjasama" placeholder=""></input>
                                        <div class="invalid-feedback">
                                            <?php echo form_error('nilai_nontek_kerjasama') ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-between">
                                    <div class="form-group w-75">
                                        <input class="form-control" readonly placeholder="Inisiatif"></input>
                                    </div>

                                    <div class="form-group mr-auto ml-auto">
                                        <input class="form-control <?php echo form_error('nilai_nontek_inisiatif') ? 'is-invalid' : '' ?>" type="number" max="100" name="nilai_nontek_inisiatif" placeholder=""></input>
                                        <div class="invalid-feedback">
                                            <?php echo form_error('nilai_nontek_inisiatif') ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-between">
                                    <div class="form-group w-75">
                                        <input class="form-control" readonly placeholder="Tanggung Jawab"></input>
                                    </div>

                                    <div class="form-group mr-auto ml-auto">
                                        <input class="form-control <?php echo form_error('nilai_nontek_tanggungjawab') ? 'is-invalid' : '' ?>" type="number" max="100" name="nilai_nontek_tanggungjawab" placeholder=""></input>
                                        <div class="invalid-feedback">
                                            <?php echo form_error('nilai_nontek_tanggungjawab') ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-between">
                                    <div class="form-group w-75">
                                        <input class="form-control" readonly placeholder="Kebersihan/Kerapian"></input>
                                    </div>

                                    <div class="form-group mr-auto ml-auto">
                                        <input class="form-control <?php echo form_error('nilai_nontek_kebersihan_kerapian') ? 'is-invalid' : '' ?>" type="number" max="100" name="nilai_nontek_kebersihan_kerapian" placeholder=""></input>
                                        <div class="invalid-feedback">
                                            <?php echo form_error('nilai_nontek_kebersihan_kerapian') ?>
                                        </div>
                                    </div>
                                </div>

                                <input class="btn btn-success mt-4" type="submit" name="btn" value="Simpan" />
                            </form>

                        </div>

                        <div class="card-footer small text-muted">
                            * Wajib diisi
                        </div>

                    </div>
                    <!-- End of Main Content -->

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