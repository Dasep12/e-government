<!-- Main content -->
    <section class="content">
      <div class="row col-md-5 col-lg-12">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Jurusan Pendidikan</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="post" action="<?= base_url('administrator/Tambah_jurusan/addJurusan') ?>" role="form">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Jurusan</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="jurusan" placeholder="Enter Jurusan">
                  <?= form_error('jurusan','<div class="text-danger small">','</div>') ?>
                </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Simpan Data</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
      </div>
  </div>
</section>