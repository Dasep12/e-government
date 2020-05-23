
      <section class="content">
          <div class="login-box">
            <!-- /.login-logo -->
            <div class="login-box-body col-xl-12">
              <?php if($this->session->flashdata('pesan2')) {  ?>
              <div class="alert alert-info small ">
                <center>Akun terdaftar silahkan cek email Anda untuk aktivasi akun</center>
              </div>
            <?php }elseif ($this->session->flashdata('pesan3')) { ?>
              <div class="alert alert-success small ">
                <center>Akun Anda Telah Aktif</center>
              </div>
            <?php } elseif ($this->session->flashdata('pesan4')) { ?>
              <div class="alert alert-success small ">
                <center>Akun Anda Belum Diaktivasi</center>
              </div>
            <?php   } elseif ($this->session->flashdata('pesan5')) { ?>
              <div class="alert alert-danger small ">
                <center>Anda Harus Login Dulu !</center>
              </div>
            <?php   }elseif ($this->session->flashdata('pesan8')) { ?>
              <div class="alert alert-info small ">
                <center>Password Anda Telah Diubah !</center>
              </div>
            <?php   }  ?> 
              <span class="">
                <h3><b>Login </b></h3>
              </span>
              <form action="<?= base_url('login/ceklogin') ?>" method="post">
                <div class="form-group has-feedback">
                  <input type="email" name="email" class="form-control" placeholder="Email">
                  <?= form_error('email','<div class="text-danger">','</div>') ?>
                  <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                  <input type="password" name="pass" class="form-control" placeholder="Password">
                  <?= form_error('pass','<div class="text-danger">','</div>') ?>
                  <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">
                  <div class="col-xs-8">
                    <div class="checkbox icheck">
                      <label>
                      <a href="<?= base_url('form_regis') ?>" class="text-center">Daftar Akun ?  </a>
                      <a href="<?= base_url('Forgot_pass') ?>">Lupa Password</a>
                      </label>
                    </div>
                  </div>
                  <!-- /.col -->
                  <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                  </div>
                  <!-- /.col -->

                </div>
                <?php if($this->session->flashdata('pesan')) { ?>  
                  <div class="alert alert-danger">
                    <center>Data Anda Tidak Ada</center>
                  </div>
                <?php } ?>
              </form>
         
            </div>
            <!-- /.login-box-body -->
          </div>
          <!-- /.login-box -->
      </section>