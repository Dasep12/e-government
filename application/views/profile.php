<!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <form action="<?= base_url('profile/editpp') ?>" method="post" enctype="multipart/form-data">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="<?= base_url('assets/lampiran/'.$item->photo) ?>">
              <h3 class="profile-username text-center"><?= $item->nama ?></h3>
              <p class="text-muted text-center">Software Engineer</p>
              <div class="form-control" style="margin-bottom: 7px;">
                <input type="hidden" name="nik" value="<?= $item->nik ?>">
                <input type="file" onchange="return validasiphoto()" id="photo" name="photo">
              </div>
              <button class="btn btn-primary btn-block"><b>Update</b></button>
            </div>
            <!-- /.box-body -->
          </form>
          </div>
          <!-- /.box -->

        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom box box-primary">
            
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
                <!-- Post -->
             


              <div class="tab-pane" id="settings">
                <form method="post" action="<?= base_url('profile/update') ?>" class="form-horizontal">
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Name</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputName" name="nama" value="<?= $item->nama ?>">
                      <?= form_error('nama','<div class="text-danger small">','</div>') ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">NIK</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputName" readonly=""  name="nik" value="<?= $item->nik ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="inputEmail" name="email" value="<?= $item->email ?>">
                      <?= form_error('email','<div class="text-danger small">','</div>') ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">No Telpon</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail" name="no_telpon" value="<?= $item->no_telpon ?>">
                      <?= form_error('no_telpon','<div class="text-danger small">','</div>') ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Lulusan</label>
                    <div class="col-sm-10">
                      <select class="form-control select2" name="pendidikan" data-placeholder="Pilih Keahlian"
                        style="width: 100%;">
                        <option selected=""><?= $item->pendidikan ?></option>
                        <option>SD</option>
                        <option>SMP</option>
                        <option>SMK</option>
                        <option>SMA</option>
                        <option>D1</option>
                        <option>D3</option>
                        <option>S1</option>
                        <option>S2</option>
                        <option>S3</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Jurusan</label>
                    <div class="col-sm-10">
                      <select class="form-control select2" name="jurusan" data-placeholder="Pilih Jurusan"
                        style="width: 100%;">
                        <option selected=""><?= $item->jurusan ?></option>
                        <?php foreach($jurusan as $row) : ?>
                          <option><?= $row->nama_jurusan ?></option>
                        <?php endforeach ?>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-2 control-label">Work  Experience</label>

                    <div class="col-sm-10">
                      <textarea class="form-control" id="inputExperience" name="pengalaman" placeholder="Experience"><?= $item->pengalaman ?></textarea>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-2 control-label">Kemampuan</label>
                    <div class="col-sm-10">
                      <select class="form-control select2" name="keahlian[]" multiple="multiple" data-placeholder="Pilih Keahlian"
                        style="width: 100%;">
                            <?php foreach($data as $item ):  ?>
                              <option selected="">
                                <?= $item->skill ?>
                              </option>
                            <?php endforeach ?>
                          <option>Microsoft Excel</option>
                          <option>Microsoft Word</option>
                          <option>Microsoft Access</option>
                          <option>Web Programming</option>
                          <option>Java Programing</option>
                          <option>C# Programing</option>
                          <option>Instalasi Software</option>
                          <option>Desain Grafis</option>
                          <option>Adobe Photoshop</option>
                          <option>Corel Draw</option>
                        </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-primary">Perbarui</button>
                      <button type="reset" class="btn btn-danger">Reset</button>
                    </div>
                  </div>
                </form>
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
    <!-- /.content -->
<?php if($this->session->flashdata('alert')) : ?>
<script>
  swal({
    title : "Berhasil",
    text  : "Data berhasil diperbaharui",
    icon  : "success",
    buttons : [false,"Ok"]
  }).then(function(){
    document.location.href="<?= base_url('profile') ?>";
  });
</script>
<?php endif ?>
<script>
  
  function validasiphoto()
  {
    var poto = document.getElementById('photo');
    var path = poto.value ;
    var exe  = /(\.png|\.jpeg|\.pdf|\.jpg)$/i;

      if (!exe.exec(path)) {
        swal({
          title : "Oops",
          text : "file yang di upload salah" ,
          icon : "error",
          buttons : [false, "Ok"],
          dangerMode : true 
        })
        poto.value = '';
        return false ;
      } 
  }
</script>