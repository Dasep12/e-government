<section class="content">
  <div class="row col-md-10">
      <div class="error-page">
        <div class="error-content">
          <h4><i class="fa fa-warning text-yellow"></i> Masukan Kode Yang Di Kirim ke Email Anda! </h4>
          <form action="<?= base_url('forgot_pass/cekKode') ?>" method="post" class="search-form">
            <div class="input-group">
              <input type="text" name="kode" class="form-control" placeholder="Masukan Kode">
              <div class="input-group-btn">
                <button type="submit" name="submit" class="btn btn-warning btn-flat"><i class="fa fa-search"></i>
                </button>
              </div>
            </div>
            <!-- /.input-group -->
          </form>
          <?= $this->session->flashdata('pesan6'); ?>
      
            </div>
            <!-- /.box-body -->
          </div>
      </div>
    </div>
      </div>
      <!-- /.error-page -->
    </section>