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

                    <?php if ($this->session->flashdata('success')) : ?>
                        <div class="alert alert-success" role="alert">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <?php echo $this->session->flashdata('success'); ?>
                        </div>
                    <?php endif; ?>

                    <?php if ($this->session->flashdata('danger')) : ?>
                        <div class="alert alert-danger" role="alert">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <?php echo $this->session->flashdata('danger'); ?>
                        </div>
                    <?php endif; ?>

                    <?php $this->load->view("_partials/breadcrumb.php") ?>

                    <!-- Content Row -->

                    <div class="card mb-3">

                        <?php if (empty($permohonanpkl->status_validasi)) { ?>
                            <div class="card-header d-flex justify-content-between mb-2">
                                <button type="button" class="btn btn-light" data-toggle="modal" data-target="#tambahpermohonanpkl"><i class="fas fa-plus"></i> Tambah Permohonan PKL</button>
                            </div>
                        <?php } elseif ($permohonanpkl->status_validasi == 'Ditolak') { ?>
                            <div class="card-header d-flex justify-content-between mb-2">
                                <button type="button" class="btn btn-light" data-toggle="modal" data-target="#tambahpermohonanpkl"><i class="fas fa-plus"></i> Tambah Permohonan PKL</button>
                            </div>
                        <?php } ?>
                        <div class="card-body">

                            <?php if (empty($permohonanpkl->status_validasi)) { ?>

                                <div class="alert alert-light" role="alert">
                                    <h4 class="alert-heading"><strong>Maaf, Anda belum mengajukan permohonan PKL!</strong></h4>
                                    <p>Silahkan mengajukan permohonan PKL sesuai jadwal kegiatan PKL di jurusan Anda.</p>
                                    <hr>
                                    <p class="mb-0">Jika terdapat pernyataan terkait PKL, silahkan hubungi Koordinator PKL, Bapak/Ibu Guru, atau Koordinator Jurusan di Program Studi Anda</p>
                                </div>

                            <?php } elseif ($permohonanpkl->status_validasi == 'Diterima') { ?>

                                <div class="alert alert-success" role="alert">
                                    <h4 class="alert-heading">Selamat, Permohonan PKL Anda diterima!</h4>
                                    <p>Selamat, permohonan PKL Anda telah diterima oleh pihak perusahaan <strong><?php echo $permohonanpkl->nama_dudi ?></strong>, berikut adalah keterangan terkait pelaksanaan PKL : </p>
                                    <p><strong>Tanggal Masuk Pelaksanaan PKL : <?php echo date("d-m-Y", strtotime($permohonanpkl->tanggal_masuk)) ?></strong></p>
                                    <p><strong>Tanggal Usai Pelaksanaan PKL : <?php echo date("d-m-Y", strtotime($permohonanpkl->tanggal_keluar)) ?></strong></p>
                                    <p><strong>Status Keanggotan Kelompok PKL : <?php echo $permohonanpkl->status_keanggotaan ?></strong></p>
                                    <?php if ($permohonanpkl->id_guru == 0) { ?>
                                        <p><strong>Nama Guru Pembimbing : Belum Ditentukan</strong></p>
                                        <hr>
                                    <?php } else { ?>
                                        <p><strong>Nama Guru Pembimbing : <?php echo $permohonanpkl->nama_guru ?></strong></p>
                                    <?php } ?>
                                    <p>Silahkan mempersiapkan diri untuk memulai pelaksanaan PKL, semoga sukses!</p>
                                    <p class="mb-0">Jika terdapat pernyataan terkait PKL, silahkan hubungi Koordinator PKL, Bapak/Ibu Guru, atau Koordinator Jurusan di Program Studi Anda</p>
                                </div>

                            <?php } elseif ($permohonanpkl->status_validasi == 'Proses Pengajuan') { ?>

                                <div class="alert alert-warning" role="alert">
                                    <h4 class="alert-heading">Selamat, Permohonan PKL sedang diproses!</h4>
                                    <p>Permohonan PKL Anda sedang diproses oleh Koordinator PKL dan akan diteruskan kepada pihak perusahaan <strong><?php echo $permohonanpkl->nama_dudi ?></strong>.</p>
                                    <p>Silahkan menunggu proses validasi berikutnya.</p>
                                    <hr>
                                    <p class="mb-0">Jika terdapat pernyataan terkait PKL, silahkan hubungi Koordinator PKL, Bapak/Ibu Guru, atau Koordinator Jurusan di Program Studi Anda</p>
                                </div>

                            <?php } elseif ($permohonanpkl->status_validasi == 'Ditolak') {  ?>

                                <div class="alert alert-danger" role="alert">
                                    <h4 class="alert-heading"><strong>Maaf, Permohonan PKL Anda ditolak!</strong></h4>
                                    <p>Maaf, permohonan PKL Anda ditolak oleh pihak perusahaan <strong><?php echo $permohonanpkl->nama_dudi ?></strong>.</p>
                                    <p>Silahkan mengajukan permohonan PKL kembali.</p>
                                    <hr>
                                    <p class="mb-0">Jika terdapat pernyataan terkait PKL, silahkan hubungi Koordinator PKL, Bapak/Ibu Guru, atau Koordinator Jurusan di Program Studi Anda</p>
                                </div>

                            <?php } elseif ($permohonanpkl->status_validasi == 'Belum Tervalidasi') { ?>

                                <div class="alert alert-secondary" role="alert">
                                    <h4 class="alert-heading">Permohonan PKL Anda telah masuk dalam sistem!</h4>
                                    <p>Permohonan PKL Anda akan diproses oleh Koordinator PKL dan akan diteruskan kepada pihak perusahaan <strong><?php echo $permohonanpkl->nama_dudi ?></strong>.</p>
                                    <p>Anda dapat menghapus permohonan PKL saat ini jika terdapat kesalahan memasukkan data permohonan PKL.</p>
                                    <a onclick="deleteConfirm('<?= base_url('siswa/PermohonanPKL/hapuspermohonanpkl/' . $permohonanpkl->id_pengajuanpkl) ?>')" href="#!" class="btn btn-danger"><i class="fas fa-trash"></i> Hapus</a>
                                    <hr>
                                    <p class="mb-0">Jika terdapat pernyataan terkait PKL, silahkan hubungi Koordinator PKL, Bapak/Ibu Guru, atau Koordinator Jurusan di Program Studi Anda</p>
                                </div>

                            <?php } ?>

                            <div class="d-sm-flex align-items-center justify-content-between mb-2">
                                <h4 class="h4 mr-4 mt-4 mb-1 text-gray-800"> Daftar Permohonan PKL Sebelumnya</h4>
                            </div>
                            <div class="table-responsive">
                                <table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th width="15" style="text-align:center">No.</th>
                                            <th style="text-align:center">Nama DUDI</th>
                                            <th style="text-align:center">Waktu Pengajuan</th>
                                            <th style="text-align:center">Tanggal Masuk</th>
                                            <th style="text-align:center">Tanggal Keluar</th>
                                            <th style="text-align:center">Nama Guru</th>
                                            <th style="text-align:center">Status Validasi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $i = 1;
                                        foreach ($pengajuanpkl as $pengajuan) : ?>
                                            <tr>
                                                <td width="15" style="text-align:center">
                                                    <?php echo $i ?>
                                                </td>
                                                <td>
                                                    <?php echo $pengajuan->nama_dudi; ?>
                                                </td>
                                                <td style="text-align:center">
                                                    <?php echo date("d-m-Y", strtotime($pengajuan->tanggal_pengajuan)) ?>
                                                </td>
                                                <td style="text-align:center">
                                                    <?php if ($pengajuan->tanggal_masuk == "2020-01-01") {
                                                        echo "Belum ditentukan";
                                                    } else {
                                                        echo date("d-m-Y", strtotime($pengajuan->tanggal_masuk));
                                                    } ?>
                                                </td>
                                                <td style="text-align:center">
                                                    <?php if ($pengajuan->tanggal_keluar == "2020-01-01") {
                                                        echo "Belum ditentukan";
                                                    } else {
                                                        echo date("d-m-Y", strtotime($pengajuan->tanggal_keluar));
                                                    } ?>
                                                </td>
                                                <td>
                                                    <?php
                                                    if ($pengajuan->id_guru == 0) { ?>
                                                        Belum ditunjuk
                                                    <?php } else { ?>
                                                        <?php echo $pengajuan->nama_guru; ?>
                                                    <?php } ?>
                                                </td>
                                                <td style="text-align:center">
                                                    <?php
                                                    if ($pengajuan->status_validasi == 'Diterima') { ?>
                                                        <span class="badge badge-success"><?php echo $pengajuan->status_validasi; ?></span>
                                                    <?php } ?>
                                                    <?php
                                                    if ($pengajuan->status_validasi == 'Ditolak') { ?>
                                                        <span class=" badge badge-danger"><?php echo $pengajuan->status_validasi; ?></span>
                                                    <?php } ?>
                                                    <?php
                                                    if ($pengajuan->status_validasi == 'Proses Pengajuan') { ?>
                                                        <span class=" badge badge-info"><?php echo $pengajuan->status_validasi; ?></span>
                                                    <?php } ?>
                                                    <?php
                                                    if ($pengajuan->status_validasi == 'Belum Tervalidasi') { ?>
                                                        <span class="badge badge-warning"><?php echo $pengajuan->status_validasi; ?></span>
                                                    <?php } ?>
                                                </td>
                                                <?php $i++ ?>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- End of Main Content -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Footer -->
    <?php $this->load->view("_partials/footer.php") ?>
    <!-- End of Footer -->

    <!-- Scroll to Top Button-->
    <?php $this->load->view("_partials/scrolltop.php") ?>

    <!-- Logout Modal-->
    <?php $this->load->view("_partials/modal.php") ?>

    <!-- Custom Bootstrap Script-->
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