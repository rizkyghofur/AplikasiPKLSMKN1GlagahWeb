      <!-- Logout Modal-->

      <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Yakin ingin menghapus data tersebut?</h5>
                      <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <div class="modal-body">Data yang dihapus tidak akan bisa dikembalikan.</div>
                  <div class="modal-footer">
                      <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                      <a id="btn-delete" class="btn btn-danger" href="#">Hapus</a>
                  </div>
              </div>
          </div>
      </div>

      <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Anda yakin ingin keluar?</h5>
                      <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <div class="modal-body">Klik tombol Logout untuk keluar dari sesi login ini.</div>
                  <div class="modal-footer">
                      <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                      <a class="btn btn-primary" href="<?= base_url('login/logout') ?>">Logout</a>
                  </div>
              </div>
          </div>
      </div>

      <div class="modal fade" id="tambahakun" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Tambah Akun DUDI</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <div class="modal-body">

                      <form action="<?= base_url('admin/Akun/tambahakun') ?>" method="post">

                          <div class="form-group">
                              <label for="id">Nama DUDI</label>
                              <select class="form-control <?php echo form_error('id_siswa') ? 'is-invalid' : '' ?>" name="id">
                                  <option disabled selected value="">Pilih Nama DUDI : </option>
                                  <?php foreach ($data_dudi as $row) { ?>
                                      <option value="<?php echo $row->id_dudi; ?>"><?php echo $row->nama_dudi ?></option>
                                  <?php } ?>
                              </select>
                              <div class="invalid-feedback">
                                  <?php echo form_error('id') ?>
                              </div>
                          </div>

                          <div class="form-group">
                              <label for="username">Nama Pengguna</label>
                              <input class="form-control <?php echo form_error('username') ? 'is-invalid' : '' ?>" type="text" name="username" placeholder=""></input>
                              <div class="invalid-feedback">
                                  <?php echo form_error('username') ?>
                              </div>
                          </div>

                          <div class="form-group">
                              <label for="password">Kata Sandi</label>
                              <input class="form-control <?php echo form_error('password') ? 'is-invalid' : '' ?>" type="text" name="password" placeholder=""></input>
                              <div class="invalid-feedback">
                                  <?php echo form_error('password') ?>
                              </div>
                          </div>

                          <input type="hidden" name="role" value="pembimbing_dudi" />

                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                      <input class="btn btn-primary" type="submit" name="btn" value="Simpan" />
                  </div>
                  </form>
              </div>
          </div>
      </div>

      <div class="modal fade" id="tambahabsensi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Tambah Presensi PKL</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <div class="modal-body">
                      <?php if ($pengajuanpkl->status_keanggotaan == "Ketua Kelompok") { ?>
                          <form action="<?= base_url('siswa/PresensiPKL/tambahpresensipkl') ?>" method="post">

                              <div class="form-group">
                                  <label for="tanggal_absensi">Tanggal Presensi</label>
                                  <input class="form-control <?php echo form_error('tanggal_absensi') ? 'is-invalid' : '' ?>" id="datepicker" type="date" name="tanggal_absensi" placeholder="" value="<?php echo date('Y-m-d'); ?>"></input>
                                  <div class="invalid-feedback">
                                      <?php echo form_error('tanggal_absensi') ?>
                                  </div>
                              </div>

                              <div class="form-group">
                                  <label for="id_siswa">Pilih Siswa</label>
                                  <select class="form-control <?php echo form_error('id_siswa') ? 'is-invalid' : '' ?>" name="id_siswa">
                                      <option disabled selected value="">Pilih Siswa : </option>
                                      <?php foreach ($data_siswa as $row) { ?>
                                          <option value="<?php echo $row->id_siswa; ?>"><?php echo $row->nama_siswa ?></option>
                                      <?php } ?>
                                  </select>
                                  <div class="invalid-feedback">
                                      <?php echo form_error('id_siswa') ?>
                                  </div>
                              </div>

                              <div class="form-group">
                                  <label for="keterangan">Pilih Keterangan</label>
                                  <select class="form-control <?php echo form_error('keterangan') ? 'is-invalid' : '' ?>" name="keterangan">
                                      <option value="Hadir">Hadir</option>
                                      <option value="Sakit">Sakit</option>
                                      <option value="Izin">Izin</option>
                                      <option value="Tanpa Keterangan">Tanpa Keterangan</option>
                                  </select>
                                  <div class="invalid-feedback">
                                      <?php echo form_error('keterangan') ?>
                                  </div>
                              </div>

                              <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                  <input class="btn btn-primary" type="submit" name="btn" value="Simpan" />
                              </div>
                          </form>

                      <?php } ?>
                  </div>
              </div>
          </div>
      </div>

      <div class="modal fade" id="tambahpermohonanpkl" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Form Permohonan PKL</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <div class="modal-body">
                      <?php if (empty($permohonanpkl->status_validasi) || $permohonanpkl->status_validasi == "Ditolak") { ?>

                          <form action="<?= base_url('siswa/PermohonanPKL/tambahpermohonanpkl') ?>" method="post">

                              <div class="form-group">
                                  <label for="id_dudi">Pilih Tujuan / Nama DUDI</label>
                                  <select class="form-control <?php echo form_error('id_dudi') ? 'is-invalid' : '' ?>" name="id_dudi">
                                      <?php foreach ($data_dudi as $row) { ?>
                                          <?php if ($row->kuota > 0) { ?>
                                              <option class="font-weight-bold" value="<?php echo $row->id_dudi; ?>"><?php echo $row->nama_dudi ?>, kuota : <?php echo $row->kuota ?> </option>
                                          <?php } else { ?>
                                              <option class="font-italic" disabled selected value="<?php echo $row->id_dudi; ?>"><?php echo $row->nama_dudi ?> (Kuota penuh)</option>
                                          <?php } ?>
                                      <?php } ?>
                                      <option disabled selected value="">Pilih DUDI : </option>
                                  </select>

                                  <input type="hidden" name="id_siswa" value="<?php echo $this->session->userdata('id') ?>" />

                                  <div class="invalid-feedback">
                                      <?php echo form_error('id_dudi') ?>
                                  </div>
                              </div>

                              <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                  <input class="btn btn-primary" type="submit" name="btn" value="Simpan" />
                              </div>
                          </form>

                      <?php } else { ?>
                          Maaf, Anda sudah mengajukan permohonan PKL sebelumnya, silahkan menunggu validasi permohonan PKL dari Koordinator PKL.
                          <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                          </div>
                      <?php } ?>
                  </div>
              </div>
          </div>
      </div>