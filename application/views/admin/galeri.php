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

        <div class="row">
          <div class="col-lg-12">
            <?= $this->session->flashdata('message'); ?>
          </div>
        </div>

        <div class="card">
            <div class="card-header">
             <a href="<?= base_url(); ?>/admin/tambah_galeri" class="btn btn-info">
               <i class="fa fa-plus">
                 Tambah Data
               </i>
             </a>
            <a href="#" class="btn btn-warning">
               <i class="fa fa-download">
                 Download
               </i>
             </a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Judul</th>
                  <th>Photo</th>
                  <th>Dibuat Pada</th>
                  <th>Tindakan</th>
                </tr>
                </thead>
                <tbody>
                  <?php 
                    $no = 1;
                    foreach($user as $u){ 
                    ?>
                  <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $u->judul ?></td>
                    <td>
                      <a target="_blank" href="<?= base_url(); ?>dist/img/galeri/<?= $u->gambar ?>">
                        <img src="<?= base_url(); ?>dist/img/galeri/<?= $u->gambar ?>" height="70" width="125">
                      </a>
                    </td>
                    <td><?= $u->tanggal ?></td>
                    <td>
                      <center>
                        <a href="<?= base_url(); ?>/admin/edit_galeri/<?= $u->id ?>" class="btn btn-sm btn-warning" title="Edit">
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
                <tfoot>
                <tr>
                  <th>No</th>
                  <th>Judul</th>
                  <th>Photo</th>
                  <th>Dibuat Pada</th>
                  <th>Tindakan</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="data-wisata">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->