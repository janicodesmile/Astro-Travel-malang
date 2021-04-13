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

        <?= form_open_multipart('admin/tambah_wisata');?>
        <div class="card">
            <div class="card-body">

              <div class="callout callout-warning">
                <h5>Nama Destinasi</h5>
                <input type="text" name="nama" class="form-control" placeholder="Masukkan nama destinasi wisata....">
                <?= form_error('nama','<small class="text-danger pl-3">', '</small>'); ?>
              </div>

              <div class="callout callout-warning">
                <h5>Lokasi</h5>
                <select name="lokasi" class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                  <option selected>Pilih Kota...</option>
                  <?php foreach ($kota as $k) : ?>
                  <option value="<?= $k['id']; ?>"><?= $k['nama']; ?></option>
                  <?php endforeach; ?>
                </select>
                <?= form_error('lokasi','<small class="text-danger pl-3">', '</small>'); ?>
              </div>

              <div class="callout callout-warning">
                <h5>Konten</h5>
                 <textarea class="form-control" rows="5" id="konten" name="konten"></textarea>
                <?= form_error('konten','<small class="text-danger pl-3">', '</small>'); ?>
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

              <input type="submit" name="tambah_wisata" class="btn btn-info float-sm-right" value="Tambah Wisata">
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