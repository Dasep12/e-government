<section class="content">
  <div class="row col-md-10">
      <div class="error-page">
        <div class="error-content">
          
            <!-- /.box-body -->

            <div class=" box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Ubah Password</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="<?= base_url('Forgot_pass/gantiPass') ?>" method="post" class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <div class="col-sm-12">
                    <input type="email" placeholder="Email Akun" value="<?= set_value('email') ?>" class="form-control" id="inputEmail3" name="email">
                    <?= form_error('email','<div class="text-danger small">','</div>') ?>
                    <?= $this->session->flashdata('alert3'); ?>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-12">
                    <input type="password" placeholder="New Password" class="form-control" id="inputEmail3" name="pass">
                    <?= form_error('pass','<div class="text-danger small">','</div>') ?>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-12">
                    <input type="password" placeholder="Re-Password" class="form-control" id="inputPassword3" name="pass2">
                    <?= form_error('pass2','<div class="text-danger small">','</div>') ?>
                  </div>
                </div>
                <div class="box-footer">
                <button type="submit" class="btn btn-info pull-right">Simpan</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          </div>
      </div>
    </div>
      <!-- /.error-page -->
    </section>