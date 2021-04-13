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
              <li class="breadcrumb-item"><a href="<?= base_url(); ?>/admin/galeri">Data Galeri</a></li>
              <li class="breadcrumb-item active"><?= $judul?></li>
            </ol>
          </div>
        </div>

        <?= form_open_multipart('admin/tambah_galeri');?>
        <div class="card">
            <div class="card-body">

              <div class="callout callout-warning">
                <h5>Judul Galeri</h5>
                <input type="text" name="nama" class="form-control" placeholder="Masukkan nama Judul gambar....">
                <?= form_error('nama','<small class="text-danger pl-3">', '</small>'); ?>
              </div>

              <div class="callout callout-warning">
                <h5>Gambar</h5>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="image" name="image">
                  <label class="custom-file-label " for="image">Choose file</label>
                </div>
                <?= form_error('nama','<small class="text-danger pl-3">', '</small>'); ?>
                <div class="imgWrap">
                    <img src="" id="imgView" class="card-img-top img-fluid">
                </div>
                <?= form_error('image','<small class="text-danger pl-3">', '</small>'); ?>
              </div>

              <div class="callout callout-warning">
                <h5>Tanggal</h5>
                <input type="text" name="tanggal" class="form-control" value="<?= date('d F Y') ?>" readonly>
              </div>


              <div class="callout callout-warning">
                <h5>Dibuat oleh</h5>
                <input type="text" name="dibuat" class="form-control" value="Adminstrator" readonly>
              </div>

              <input type="submit" name="tambah_wisata" class="btn btn-info float-sm-right" value="Tambah galeri">
              </a>
              <a href="<?= base_url();?>admin/wisata" class="btn btn-danger float-sm-right">
              <i class="far fa-times-circle"></i> Batal
              </a>
            </div>
        </div>    
      </form>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->