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
                        <h1 class="h2 mr-4 mb-0 text-gray-800">Tambah Data siswa</h1>
                    </div>
                    <div class="card mb-3">
                        <div class="card-header">
                            <a href="<?= base_url('admin/datasiswa/') ?>"><i class="fas fa-arrow-left"></i> Kembali</a>
                        </div>
                        <div class="card-body">

                            <form action="" method="post">

                                <input type="hidden" name="id_siswa" value="<?php echo $datasiswa->id_siswa ?>" />

                                <div class="form-group">
                                    <label for="nis">NIS</label>
                                    <input class="form-control <?php echo form_error('nis') ? 'is-invalid' : '' ?>" name="nis" value="<?php echo $datasiswa->nis ?>" />
                                    <div class="invalid-feedback">
                                        <?php echo form_error('nis') ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="nisn">NISN</label>
                                    <input class="form-control <?php echo form_error('nisn') ? 'is-invalid' : '' ?>" type="number" name="nisn" value="<?php echo $datasiswa->nisn ?>" />
                                    <div class="invalid-feedback">
                                        <?php echo form_error('nisn') ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="nama">Nama Siswa</label>
                                    <input class="form-control <?php echo form_error('nama_siswa') ? 'is-invalid' : '' ?>" type="text" name="nama_siswa" min="0" value="<?php echo $datasiswa->nama_siswa ?>"></input>
                                    <div class="invalid-feedback">
                                        <?php echo form_error('nama') ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="kelas">Kelas</label>
                                    <input class="form-control <?php echo form_error('kelas') ? 'is-invalid' : '' ?>" type="text" name="kelas" value="<?php echo $datasiswa->kelas ?>"></input>
                                    <div class="invalid-feedback">
                                        <?php echo form_error('kelas') ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="jenis_kelamin">Jenis Kelamin</label>
                                    <select class="form-control <?php echo form_error('jenis_kelamin') ? 'is-invalid' : '' ?>" name="jenis_kelamin">
                                        <option value="<?php echo $datasiswa->jenis_kelamin ?>">Jenis Kelamin yang dipilih : <?php echo $datasiswa->jenis_kelamin ?></option>
                                        <option value="Laki-laki">Laki-laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        <?php echo form_error('jenis_kelamin') ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="tempat_lahir">Tempat Lahir</label>
                                    <input class="form-control <?php echo form_error('tempat_lahir') ? 'is-invalid' : '' ?>" type="text" name="tempat_lahir" value="<?php echo $datasiswa->tempat_lahir ?>"></input>
                                    <div class="invalid-feedback">
                                        <?php echo form_error('tempat_lahir') ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="tgl_lahir">Tanggal Lahir</label>
                                    <input class="form-control <?php echo form_error('tgl_lahir') ? 'is-invalid' : '' ?>" type="date" id="datepicker" name="tgl_lahir" value="<?php echo $datasiswa->tgl_lahir ?>" />
                                    <div class="invalid-feedback">
                                        <?php echo form_error('tgl_lahir') ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="agama">Agama</label>
                                    <select class="form-control <?php echo form_error('agama') ? 'is-invalid' : '' ?>" name="agama">
                                        <option value="<?php echo $datasiswa->agama ?>">Agama yang dipilih : <?php echo $datasiswa->agama ?></option>
                                        <option value="Islam">Islam</option>
                                        <option value="Katholik">Katholik</option>
                                        <option value="Protestan">Protestan</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Buddha">Buddha</option>
                                        <option value="Lainnya">Lainnya</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        <?php echo form_error('agama') ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="alamat_rumah">Alamat siswa</label>
                                    <input class="form-control <?php echo form_error('alamat_rumah') ? 'is-invalid' : '' ?>" type="text" name="alamat_rumah" value="<?php echo $datasiswa->alamat_rumah ?>" />
                                    <div class="invalid-feedback">
                                        <?php echo form_error('alamat_rumah') ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="hp_siswa">No HP Siswa</label>
                                    <input class="form-control <?php echo form_error('hp_siswa') ? 'is-invalid' : '' ?>" type="number" name="hp_siswa" min="0" maxlength="15" value="<?php echo $datasiswa->hp_siswa ?>" />
                                    <div class="invalid-feedback">
                                        <?php echo form_error('hp_siswa') ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="ayah">Nama Ayah Siswa</label>
                                    <input class="form-control <?php echo form_error('ayah') ? 'is-invalid' : '' ?>" type="text" name="ayah" value="<?php echo $datasiswa->ayah ?>" />
                                    <div class="invalid-feedback">
                                        <?php echo form_error('ayah') ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="ibu">Nama Ibu Siswa</label>
                                    <input class="form-control <?php echo form_error('ibu') ? 'is-invalid' : '' ?>" type="text" name="ibu" value="<?php echo $datasiswa->ibu ?>" />
                                    <div class="invalid-feedback">
                                        <?php echo form_error('ibu') ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="alamat_orang_tua">Alamat Orang Tua</label>
                                    <input class="form-control <?php echo form_error('alamat_orang_tua') ? 'is-invalid' : '' ?>" type="text" name="alamat_orang_tua" min="0" value="<?php echo $datasiswa->alamat_orang_tua ?>" />
                                    <div class="invalid-feedback">
                                        <?php echo form_error('alamat_orang_tua') ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="no_hp_orang_tua">No HP Orang Tua</label>
                                    <input class="form-control <?php echo form_error('no_hp_orang_tua') ? 'is-invalid' : '' ?>" type="number" name="no_hp_orang_tua" min="0" maxlength="15" value="<?php echo $datasiswa->no_hp_orang_tua ?>" />
                                    <div class="invalid-feedback">
                                        <?php echo form_error('no_hp_orang_tua') ?>
                                    </div>
                                </div>

                                <input class="btn btn-primary" type="submit" name="btn" value="Simpan" />
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