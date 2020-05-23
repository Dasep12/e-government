<section class="content">
  <div class="row col-md-10">
      <div class="error-page">
        <div class="error-content">
          <h3><i class="fa fa-warning text-yellow"></i> Cari Akun Anda! </h3>
          <form action="<?= base_url('forgot_pass/akun') ?>" method="post" class="search-form">
            <div class="input-group">
              <input type="email" name="email" class="form-control" placeholder="Masukan Akun Email Anda">
              <div class="input-group-btn">
                <button type="submit" name="submit" class="btn btn-warning btn-flat"><i class="fa fa-search"></i>
                </button>
              </div>
            </div>
            <!-- /.input-group -->
          </form><br>
          <?php if (isset($_POST['submit'])) { 
              if (empty($_POST['email'])) {
                echo "Data Kosong";
              }else{
                  if ($countdata > 0 ) { ?>
                    <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="<?= base_url('assets/lampiran/'.$akun->photo) ?>" alt="User profile picture">
              <form action="<?= base_url('forgot_pass/kirimKode') ?>" method="post">
              <input type="hidden" name="nama" value="<?= $akun->nama ?>">
              <input type="hidden" name="nik" value="<?= $akun->nik ?>">
              <input type="hidden" name="email" value="<?= $akun->email ?>">
              <h3 class="profile-username text-center"><?= $akun->nama ?></h3>
              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>NIK</b> <a class="pull-right"><?= $akun->nik ?></a>
                </li>
                <li class="list-group-item">
                  <b>No.HP</b> <a class="pull-right"><?= $akun->no_telpon ?></a>
                </li>
                <li class="list-group-item">
                  <b>Email</b> <a class="pull-right"><?= $akun->email ?></a>
                </li>
              </ul>

              <button type="submit" name="submit" class="btn btn-primary btn-block"><b>Reset Password</b></button>
            </form>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
                <?php  }else{
                  echo "Data tidak ada";
                }
              }
           }
            ?>
        <!-- /.error-content -->
      </div>
    </div>
      </div>
      <!-- /.error-page -->
    </section>