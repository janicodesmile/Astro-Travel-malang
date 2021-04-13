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
      <?php foreach($user as $u){ ?>
        <?= form_open_multipart('admin/edit_galeri/'.$u['id']);?>
        <div class="card">
            <div class="card-body">
              <div class="callout callout-warning">
                <h5>Nama Destinasi</h5>
                <input type="text" name="nama" class="form-control" value="<?= $u['judul'] ?>">
                <?= form_error('nama','<small class="text-danger pl-3">', '</small>'); ?>
              </div>
              
              <input type="text" name="old_image" value="<?= $u['gambar'] ?>">

              <div class="callout callout-warning">
              <h5>Gambar</h5>
                <div class="row">
                  <div class="col-sm-4">
                    <a target="_blank" href="<?= base_url(); ?>/dist/img/galeri/<?= $u['gambar'] ?>">
                      <img src="<?= base_url(); ?>/dist/img/galeri/<?=  $u['gambar']?>" id="imgView" height="200" width="200">
                    </a>
                  </div>
                  <div class="col-sm-8">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="image" name="image">
                      <label class="custom-file-label " for="image">Choose file</label>
                    </div>
                  </div>
                </div>
              </div>

              <div class="callout callout-warning">
                <h5>Tanggal</h5>
                <input type="text" name="tanggal" class="form-control" value="<?= $u['tanggal'] ?>" readonly>
              </div>


              <div class="callout callout-warning">
                <h5>Dibuat oleh</h5>
                <input type="text" name="dibuat" class="form-control" value="<?= $u['upload'] ?>" readonly>
              </div>

              <input type="submit" name="tambah_wisata" class="btn btn-info float-sm-right" value="Edit Wisata">
              </a>
              <a href="<?= base_url();?>admin/galeri" class="btn btn-danger float-sm-right">
              <i class="far fa-times-circle"></i> Batal
              </a>
            </div>
        </div>    
      </form>
       <?php } ?>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->