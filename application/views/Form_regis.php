      <section class="content">
        <div class="register-box" style="margin-top: 10px;margin-bottom: -40px;">
          <div class="register-box-body">
            <span class="">
              <h3><b>Registrasi Akun</b></h3>
            </span>

            <form action="<?= base_url('Form_regis/regis') ?>" method="post">
              <div class="form-group has-feedback">
                <input type="text" value="<?= set_value('nama') ?>" class="form-control" name="nama" placeholder="Full name">
                <?= form_error('nama','<div class="text-danger small">','</div>') ?>
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
              </div>
              <div class="form-group has-feedback">
                <input type="email" value="<?= set_value('email') ?>" class="form-control" name="email" placeholder="Email">
                <?= form_error('email','<div class="text-danger small">','</div>') ?>
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
              </div>
              <div class="form-group has-feedback">
                <input type="password" name="pass" class="form-control" placeholder="Password">
                <?= form_error('pass','<div class="text-danger small">','</div>') ?>
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
              </div>
              <div class="form-group has-feedback">
                <input type="password" name="pass1" class="form-control" placeholder="Retype password">
                <?= form_error('pass1','<div class="text-danger small">','</div>') ?>
                <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
              </div>
              <div class="row">
                <div class="col-xs-8">
                  <div class="checkbox icheck">
                    <label>
                      <a href="<?= base_url('login') ?>" class="text-center">Sudah Punya Akun ? Masuk </a>
                    </label>
                  </div>
                </div>
                <!-- /.col -->
                <div class="col-xs-4">
                  <button type="submit" name="" class="btn btn-primary btn-block btn-flat">Register</button>
                </div>
                <!-- /.col -->
              </div>
              <?php if($this->session->flashdata('Pesan5')) { ?>
              <script>
                    swal ({
                      title : "Perhatian",
                      text  : "Email Sudah Terdaftar",
                      icon  : "warning",
                      buttons: "Ok"
                    }).then(function(){
                      window.location.href="<?= base_url('Form_regis') ?>"
                    })
             </script>
              <?php } elseif($this->session->flashdata('alert4')) { ?>
              <div class="bg-red disabled color-palette alert">
                <center>NIK Anda Sudah Terdaftar</center>
              </div>
              <?php } ?>
            </form>
            
          </div>
          <!-- /.form-box -->
        </div>
        <!-- /.register-box -->
      </section>
<?php if($this->session->flashdata('pesan')) { ?>
  <script>
    swal ({
      title : "Berhasil",
      text  : "Akun Telah Di Daftarkan",
      icon  : "success",
      buttons: "Ok"
    }).then(function(){
      window.location.href="<?= base_url('login') ?>"
    })
  </script>
 <?php } ?>
