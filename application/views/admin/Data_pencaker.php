
<div class="row">
  <div class="container col-md-12">
  <div class="col-xs-12">
<div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Pencari Kerja</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>NIK</th>
                  <th>Lulusan</th>
                  <th>Jurusan</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                  <?php $no=1; foreach($item as $row) : ?> 
                    <tr>
                      <td><?= $no++ ?></td>
                      <td><?= $row->nama ?></td>
                      <td><?= $row->nik ?></td>
                      <td><?= $row->pendidikan ?></td>
                      <td><?= $row->jurusan ?></td>
                      <td>
                        <a class="btn btn-danger btn-xs" href="">Hapus</a>
                        <a class="btn btn-primary btn-xs" href="">Edit</a>
                      </td>
                    </tr>
                  <?php endforeach ?>               
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
</div>
</div>
</div>