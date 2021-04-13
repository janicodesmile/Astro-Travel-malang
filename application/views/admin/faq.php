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
             <a href="<?= base_url();?>admin/tambah_faq" class="btn btn-info">
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
                  <th>Pertanyaan</th>
                  <th>Jawaban</th>
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
                    <td><?= $u->pertanyaan  ?></td>
                    <td>
                      <center>
                        <a href="#" data-toggle="modal" data-target="#exampleModal" class="btn btn-sm btn-info see-jawab" data-pertanyaan="<?= $u->pertanyaan?>" data-jawaban="<?= $u->jawaban?>">
                          <i class="far fa-plus-square"></i>
                        </a>    
                      </center>
                    </td>
                    <td><?= $u->tanggal ?></td>
                    <td>
                      <center>
<!--                         <a href="#" data-toggle="modal" data-target="#exampleModal" class="btn btn-sm btn-info see-detail" title="Detail" data-id="<?= $u->id?>" data-gambar="<?= $u->gambar ?>" data-lokasi="<?= $u->nama ?>" data-judul="<?= $u->judul?>" data-konten="<?= $u->konten?>" data-tanggal="<?= $u->tanggal?>" data-dibuat="<?= $u->dibuat?>" >
                          <i class="fa fa-eye"></i>
                        </a> -->
                        <a href="<?= base_url(); ?>/admin/edit_faq/<?= $u->id ?>" class="btn btn-sm btn-warning" title="Edit">
                          <i class="fas fa-edit"></i>
                        </a>
                        <a href="<?= base_url(); ?>admin/hapus_faq                 /<?= $u->id ?>" class="btn btn-sm btn-danger" title="Hapus" onclick = "return confirm('Yakin ingin menghapus data?')">
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
                  <th>Pertanyaan</th>
                  <th>Jawaban</th>
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
        <h5 class="modal-title" id="exampleModalLabel">FAQ</h5>
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