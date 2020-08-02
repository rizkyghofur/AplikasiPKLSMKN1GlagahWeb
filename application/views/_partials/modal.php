      <!-- Logout Modal-->

      <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
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
          <div class="modal-dialog" role="document">
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

      <div class="modal fade" id="tambahabsensi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Tambah Absensi PKL</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <div class="modal-body">
                      <?php if ($pengajuanpkl->status_keanggotaan == "Ketua Kelompok") { ?>
                          ...
                          <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                              <button type="button" class="btn btn-primary">Simpan</button>
                          </div>
                      <?php } else { ?>
                          Maaf, Anda tidak diizinkan menambahkan absensi, silahkan hubungi Ketua Kelompok PKL Anda.
                          <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                          </div>
                      <?php } ?>
                  </div>
              </div>
          </div>
      </div>

      <div class="modal fade" id="tambahpermohonanpkl" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Tambah Permohonan PKL</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <div class="modal-body">
                      <?php if (empty($permohonanpkl->status_validasi) || $permohonanpkl->status_validasi == "Ditolak") { ?>
                          ...
                          <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                              <button type="button" class="btn btn-primary">Simpan</button>
                          </div>
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