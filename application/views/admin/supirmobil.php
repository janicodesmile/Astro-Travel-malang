  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <h1 class="h3 mb-4 text-gray-800"><?= $judul?></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><?= $judul?></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

        <div class="row">
          <div class="col-lg-6">
            <?= $this->session->flashdata('message'); ?>
          </div>
        </div>

        <div class="row">
          <div class="col-6">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Mobil</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <a href="<?= base_url(); ?>/admin/tambah_mobil" class="btn btn-info">
                       <i class="fa fa-plus">
                         Tambah Data
                       </i>
                     </a>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0 " style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Jenis Mobil</th>
                      <th>Plat Mobil</th>
                      <th>Gambar</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                    $no = 1;
                    foreach($mobil as $u){ 
                    ?>
                    <tr>
                      <td><?= $no ?></td>
                      <td><?= $u->jenis ?></td>
                      <td><?= $u->plat ?></td>
                      <td>
                        <a target="_blank" href="<?= base_url(); ?>dist/img/mobil/<?= $u->gambar ?>">
                        <img src="<?= base_url(); ?>dist/img/mobil/<?= $u->gambar ?>" height="70" width="125">
                      </a>
                      </td>
                      <td>
                        <center>
                          <a href="<?= base_url(); ?>/admin/edit_wisata/<?= $u->id ?>" class="btn btn-sm btn-warning" title="Edit">
                          <i class="fas fa-edit"></i>
                          </a>
                          <a href="<?= base_url(); ?>admin/hapus/<?= $u->id ?>" class="btn btn-sm btn-danger" title="Hapus" onclick = "return confirm('Yakin ingin menghapus data?')">
                            <i class="fa fa-trash"></i>
                          </a>
                        </center>
                      </td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
            <div class="col-6">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Supir</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <a href="<?= base_url(); ?>/admin/tambah_mobil" class="btn btn-info">
                       <i class="fa fa-plus">
                         Tambah Data
                       </i>
                    </a>
                  </div>
                </div>
              </div>
              <?php 
                $no = 1;
                foreach($supir as $u){ 
              ?>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0 " style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama</th>
                      <th>No Hp</th>
                      <th>Gambar</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><?= $no ?></td>
                      <td><?= $u->nama ?></td>
                      <td><?= $u->no_hp ?></td>
                      <td>
                        <a target="_blank" href="<?= base_url(); ?>dist/img/mobil/<?= $u->gambar ?>">
                          <img src="<?= base_url(); ?>dist/img/supir/<?= $u->gambar ?>" height="40" width="95">
                        </a>
                      </td>
                      <td>
                        <center>
                          <a href="<?= base_url(); ?>/admin/edit_wisata/<?= $u->id ?>" class="btn btn-sm btn-warning" title="Edit">
                          <i class="fas fa-edit"></i>
                          </a>
                          <a href="<?= base_url(); ?>admin/hapus/<?= $u->id ?>" class="btn btn-sm btn-danger" title="Hapus" onclick = "return confirm('Yakin ingin menghapus data?')">
                            <i class="fa fa-trash"></i>
                          </a>
                        </center>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <?php } ?>
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->