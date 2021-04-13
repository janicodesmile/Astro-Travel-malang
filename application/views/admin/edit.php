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
              <li class="breadcrumb-item"><a href="<?= base_url(); ?>/admin/">Home</a></li>
               <li class="breadcrumb-item"><a href="<?= base_url(); ?>/admin/setting">Pengaturan Website</a></li>
              <li class="breadcrumb-item active"><?= $judul?></li>
            </ol>
          </div>
        </div>
      <?= form_open_multipart('admin/edit');?>
        <div class="card">
            <div class="card-body">
              <div class="callout callout-info">
                <h5>Nama Website</h5>
                <input type="text" name="nama" class="form-control" value="<?= $user['nama'] ?>">
                <?= form_error('nama','<small class="text-danger pl-3">', '</small>'); ?>
              </div>
              <div class="callout callout-info">
                <h5>Kata Kunci</h5>
                <input type="text" class="form-control" name="kata_kunci" value="<?= $user['kata_kunci'] ?>" >
                <?= form_error('kata_kunci','<small class="text-danger pl-3">', '</small>'); ?>
              </div>
              <div class="callout callout-info">
                <h5>Deskripsi</h5>
                <input type="text" name="deskripsi" class="form-control" value="<?= $user['deskripsi'] ?>" >
                 <?= form_error('deskripsi','<small class="text-danger pl-3">', '</small>'); ?>
              </div>
              <div class="callout callout-success">
                <h5>Alamat</h5>
                <input type="text" name="alamat" class="form-control" value="<?= $user['alamat'] ?>" >
                 <?= form_error('alamat','<small class="text-danger pl-3">', '</small>'); ?>
              </div>
              <div class="callout callout-success">
                <h5>Telepon</h5>
                <input type="text" class="form-control" name="no_telp" value="<?= $user['no_telp'] ?>" >
                 <?= form_error('no_telp','<small class="text-danger pl-3">', '</small>'); ?>
              </div>
              <div class="callout callout-success">
                <h5>Email</h5>
                <input type="text" name="email" class="form-control" value="<?= $user['email'] ?>">
                 <?= form_error('email','<small class="text-danger pl-3">', '</small>'); ?>
              </div>
              <div class="callout callout-warning">
              <h5>Logo</h5>
                <div class="row">
                  <div class="col-sm-4">
                    <a target="_blank" href="<?= base_url(); ?>/dist/img/<?= $user['logo'] ?>">
                      <img src="<?= base_url(); ?>/dist/img/<?= $user['logo']?>" id="imgView" height="200" width="200">
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
              <div class="callout callout-info">
                <h5>Facebook Link</h5>
                <input type="text" name="facebook_link" class="form-control" value="<?= $user['facebook_link'] ?>">
                 <?= form_error('facebook_link','<small class="text-danger pl-3">', '</small>'); ?>
              </div>
              <div class="callout callout-info">
                <h5>Instagram Link</h5>
                <input type="text" name="instagram_link" class="form-control" value="<?= $user['instagram_link'] ?>">
                 <?= form_error('instagram_link','<small class="text-danger pl-3">', '</small>'); ?>
              </div>
              <div class="callout callout-danger">
                <h5>Google Maps</h5>
                <input type="text" name="gmaps" class="form-control" value="<?= $user['gmaps'] ?>" >
                 <?= form_error('gmaps','<small class="text-danger pl-3">', '</small>'); ?>
              </div>
              <input type="hidden" name="id" class="form-control" value="<?= $user['id'] ?>" >
              <input type="submit" name="ubah_data_config" class="btn btn-warning float-sm-right" value=" Ubah">
              </a>
              <a href="<?= base_url(); ?>admin/setting" class="btn btn-danger float-sm-right">
              <i class="far fa-times-circle"></i> Batal
              </a>
            </div>
        </div>    
      </form>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->