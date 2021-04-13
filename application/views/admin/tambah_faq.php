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
              <li class="breadcrumb-item"><a href="<?= base_url(); ?>/admin/wisata">Destinasi Wisata</a></li>
              <li class="breadcrumb-item active"><?= $judul?></li>
            </ol>
          </div>
        </div>

      <form method="post" action="<?= base_url();?>admin/tambah_faq">
        <div class="card">
            <div class="card-body">

              <div class="callout callout-warning">
                <h5>Pertanyaan</h5>
                 <textarea class="form-control" rows="5" id="konten1" name="pertanyaan"></textarea>
                <?= form_error('pertanyaan','<small class="text-danger pl-3">', '</small>'); ?>
              </div>

              <div class="callout callout-warning">
                <h5>Jawaban</h5>
                 <textarea class="form-control" rows="5" id="konten" name="jawaban"></textarea>
                <?= form_error('jawaban','<small class="text-danger pl-3">', '</small>'); ?>
              </div>

               <input type="submit" name="tambah-faq" class="btn btn-info float-sm-right" value="Tambah FAQ">
              </a>
              <a href="<?= base_url();?>admin/wisata" class="btn btn-danger float-sm-right">
              <i class="far fa-times-circle"></i> Batal
              </a>

        </div>    
      </form>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->