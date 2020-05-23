<!-- Main content -->
    <section class="content">
      <div class="row col-md-5 col-lg-12">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Cari NIK</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="post" action="<?= base_url('administrator/Cari/search') ?>" role="form">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nomor Induk Kependudukan</label>
                  <input type="text" class="form-control" name="nik" placeholder="Enter NIK">
                  <?= form_error('nik','<div class="text-danger small">','</div>') ?>
                </div>
              <div class="box-footer">
                <button type="submit" name="submit" class="btn btn-primary">Cari Data</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
      </div>
  </div>
<?php if($this->session->flashdata('alert')){ ?>
  <script>
   swal({
      title : "Oops",
      text  : "nik yang anda cari tidak ada",
      icon  : "error",
      dangerMode : true ,
      buttons : [false , "Ok"]
   })
  </script>
<?php } ?>
</section>
      <?php if(isset($_POST['submit']))
          if($hitung <= 0){

          }else{ ?>
<!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="<?= base_url('assets/lampiran/'.$nik->photo) ?>" alt="User profile picture">

              <h3 class="profile-username text-center"><?= $nik->nama ?></h3>

              <p class="text-muted text-center"><?= $nik->nik ?></p>
              <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- About Me Box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">About Me</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <strong><i class="fa fa-book margin-r-5"></i> Pendidikan</strong>

              <p class="text-muted">
                <?= $nik->pendidikan . ' '. $nik->jurusan .' di Universitas STMIK Swadharma' ; ?>
              </p>

              <hr>

              <strong><i class="fa fa-map-marker margin-r-5"></i> Alamat</strong>

              <p class="text-muted"><?= $nik->alamat ?></p>

              <hr>

              <strong><i class="fa fa-pencil margin-r-5"></i> Skills</strong>

              <p>
                <?php foreach($skill as $row) : ?>
                <span class="label label-danger"><?= $row->skill ?></span>
              <?php endforeach ?>
              </p>

              <hr>

              <strong><i class="fa fa-file-text-o margin-r-5"></i> Pengalaman Kerja</strong>

              <p><?= $nik->pengalaman ?></p>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">Profile</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
               <form class="form-horizontal">
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Name</label>

                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="inputName" value="<?= $nik->nama ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="inputEmail" value="<?= $nik->email ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-2 control-label">Experience</label>
                    <div class="col-sm-10">
                      <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputSkills" class="col-sm-2 control-label">Skills</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-danger">Submit</button>
                    </div>
                  </div>
                </form>
              </div>
              

              <div class="tab-pane" id="settings">
                
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
<?php          }
       ?>
