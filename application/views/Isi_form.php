      <section class="content">
        
     <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Isi Biodata</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form enctype="multipart/form-data" method="post" action="<?= base_url('isi_form/tambah') ?>" role="form">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Lengkap</label>
                  <input type="text" name="nama" value="<?=  $item->nama ?>" class="form-control" id="exampleInputEmail1" placeholder="">
                  <?= form_error('nama','<div class="text-danger small"><i>','</i></div>') ?>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">NIK</label>
                  <input name="id" type="hidden" value="<?= $item->id ?>">
                  <input type="text"  name="nik" value="<?=  set_value('nik') ?>"  class="form-control" id="exampleInputEmail1" placeholder="">
                  <?= form_error('nik','<div class="text-danger small"><i>','</i></div>') ?>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Tempat,Tanggal Lahir</label>
                 <div class="form-inline">
                	  <input type="text" name="tempat_lahir" value="<?= set_value('tempat_lahir')?>" class="form-control form-inline" style="width: 45%"  placeholder="">
                	  <input type="text" name="tgl_lahir" value="<?= set_value('tgl_lahir')?>" id="datepicker" class="form-control form-inline"  style="width: 50%" placeholder="">
                </div>
                  <?= form_error('tempat_lahir','<div class="text-danger small"><i>','</i></div>') ?>
                  <?= form_error('tgl_lahir','<div style="position : relative;top:-17px;left:240px;margin-bottom:-20px;" class="text-danger small"><i>','</i></div>') ?>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">No HP</label>
                  <input type="text" value="<?= set_value('no_telpon')?>" name="no_telpon" class="form-control" >
                  <?= form_error('no_telpon','<div class="text-danger small"><i>','</i></div>') ?>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" name="email" readonly="" value="<?= $item->email ?>" class="form-control" >
                  <?= form_error('email','<div class="text-danger small"><i>','</i></div>') ?>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Alamat</label>
                  <textarea name="alamat"  class="form-control"><?= set_value('alamat')?></textarea>
                  <?= form_error('alamat','<div class="text-danger small"><i>','</i></div>') ?>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Kota</label>
                  <input type="text" name="kota" class="form-control" value="<?= set_value('kota')?>" >
                  <?= form_error('kota','<div class="text-danger small"><i>','</i></div>') ?>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Kecamatan</label>
                  <input type="text" name="kecamatan" class="form-control" value="<?= set_value('kecamatan')?>">
                  <?= form_error('kecamatan','<div class="text-danger small"><i>','</i></div>') ?>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Desa</label>
                  <input type="text" name="desa" class="form-control" value="<?= set_value('desa')?>">
                  <?= form_error('desa','<div class="text-danger small"><i>','</i></div>') ?>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Kode Pos</label>
                  <input type="text" name="kode_pos" class="form-control" value="<?= set_value('kode_pos')?>">
                  <?= form_error('kode_pos','<div class="text-danger small"><i>','</i></div>') ?>
                </div>
                <label>Pendidikan</label>
                <select class="form-control"  name="pendidikan" id="select1" style="border-radius: 1px;" >
                  <option><?= set_value('tempat_lahir')?></option>
                  <option>SD</option>
                  <option>SMP</option>
                  <option>SMA</option>
                  <option>SMK</option>
                  <option>D1</option>
                  <option>D3</option>
                  <option>S1</option>
                  <option>S2</option>
                  <option>S3</option>
                </select>


                <label>Jurusan</label>
                <select class="form-control" name="jurusan" id="select2" style="border-radius: 1px;" >
                  <option><?= set_value('tempat_lahir')?></option>
                  <option>Sistem Informasi</option>
                  <option>Teknik Informatika</option>
                  <option>Manajement Informatika</option>
                  <option>Teknik Industri</option>
                  <option>Akuntansi</option>
                  <option>Manajemen Bisnis</option>
                  <option>Teknik Komputer</option>
                  <option>Akomodasi Perhotelan</option>
                  <option>Teknik Kendaraan Ringan</option>
                  <option>Rekayasa Perangkat Lunak</option>
                </select>
            


              </div>
              <!-- /.box-body -->

          </div>
          <!-- /.box -->



        </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-6">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Lampiran</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
              <div class="box-body">
              <div class="form-group">
                  <label for="exampleInputEmail1">Pengalaman Kerja</label>
                  <textarea name="pengalaman"  class="form-control"><?= set_value('pengalaman')?></textarea>
                  <?= form_error('pengalaman','<div class="text-danger small"><i>','</i></div>') ?>
                </div>
               <?php include 'skill.php'; ?>


                <div class="form-group">
                <label>Photo </label>
                	<div class="form-control">
                 		<input type="file" onchange="return validasiphoto()" id="photo" name="photo" >
                 	</div>
                 </div>
                 <div class="form-group">
                <label>Fc Ijazah </label>
                	<div class="form-control">
                 		<input type="file" name="ijazah" id="ijazah" onchange="return validasiijazah()">
                 	</div>
                 </div>
                 <div class="form-group">
                <label>Sertifikat (Jika ada) </label>
                	<div class="form-control">
                 		<input type="file" name="sertifikat" id="sertifikat" onchange="return validasisertifikat()">
                 	</div>
                 </div>


          </div>

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Kirim Data</button>
                <button type="reset" class="btn btn-default">Cancel</button>
              </div>
          <!-- /.box -->
        </div>
            </form>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->

      </section>
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

	function validasiijazah()
	{
		var ijazah = document.getElementById('ijazah');
		var path   = ijazah.value ;
		var exe    = /(\.png|\.jpeg|\.pdf|\.jpg)$/i;

	 	if (!exe.exec(path)) {
		 		swal({
		 			title : "Oops",
		 			text : "file yang di upload salah" ,
		 			icon : "error",
		 			buttons : [false, "Ok"],
		 			dangerMode : true 
		 		})
		 		ijazah.value = '';
		 		return false ;
		 	} 

	}
	function validasisertifikat()
	{
		var ijazah = document.getElementById('sertifikat');
		var path   = sertifikat.value ;
		var exe    = /(\.png|\.jpeg|\.pdf|\.jpg)$/i;

	 	if (!exe.exec(path)) {
		 		swal({
		 			title : "Oops",
		 			text : "file yang di upload salah" ,
		 			icon : "error",
		 			buttons : [false, "Ok"],
		 			dangerMode : true 
		 		})
		 		sertifikat.value = '';
		 		return false ;
		 	} 

	}
</script>
<?php if($this->session->flashdata('pesan')) { ?>
  <script>
    swal({
          title : "Berhasil",
          text : "Data diri anda berhasil di tambah" ,
          icon : "success",
          buttons : [false, "Ok"],
        }).then(function(){
          window.location.href='<?= base_url('beranda') ?>'
        });
  </script>
 <?php }elseif($this->session->flashdata('info')){ ?>
<script>
  swal({
          title : "Perhatian",
          text : "Data nik anda sudah terdaftar" ,
          icon : "error",
          buttons : [false, "Ok"],
          dangerMode : true 
        })
</script>
<?php }elseif($this->session->flashdata('pesan5')){ ?>
<script>
  swal({
          title : "Perhatian",
          text : "isi data diri dulu" ,
          icon : "error",
          buttons : [false, "Ok"],
          dangerMode : true 
        })
</script>
<?php } ?>