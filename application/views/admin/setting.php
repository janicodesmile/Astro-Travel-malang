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
            <h3 class="card-title">
              <a href="<?= base_url(); ?>admin/edit" name="ubah_data_config" class="btn btn-warning">
                <i class="fas fa-edit"></i> Edit Data
              </a>
              <a href="<?= base_url(); ?>admin/ubahpass" class="btn btn-info">
               <i class="fas fa-pen"></i> Ubah Password
              </a>
            </h3>
          </div>
            <div class="card-body">
              <div class="callout callout-info">
                <h5>Nama Website</h5>
                <input type="text" class="form-control" value="<?= $user['nama'] ?>" readonly>
              </div>
              <div class="callout callout-info">
                <h5>Kata Kunci</h5>
                <input type="text" class="form-control" value="<?= $user['kata_kunci'] ?>" readonly>
              </div>
              <div class="callout callout-info">
                <h5>Deskripsi</h5>
                <input type="text" class="form-control" value="<?= $user['deskripsi'] ?>" readonly>
              </div>
              <div class="callout callout-success">
                <h5>Alamat</h5>
                <input type="text" class="form-control" value="<?= $user['alamat'] ?>" readonly>
              </div>
              <div class="callout callout-success">
                <h5>Telepon</h5>
                <input type="text" class="form-control" value="<?= $user['no_telp'] ?>" readonly>
              </div>
              <div class="callout callout-success">
                <h5>Email</h5>
                <input type="text" class="form-control" value="<?= $user['email'] ?>" readonly>
              </div>
              <div class="callout callout-warning">
                <h5>Logo</h5>
                <a target="_blank" href="<?= base_url(); ?>/dist/img/<?= $user['logo'] ?>">
                  <img src="<?= base_url(); ?>/dist/img/<?= $user['logo']?>" height="125" width="125">
                </a>
              </div>
              <div class="callout callout-info">
                <h5>Facebook Link</h5>
                <input type="text" class="form-control" value="<?= $user['facebook_link'] ?>" readonly>
              </div>
              <div class="callout callout-info">
                <h5>Instagram Link</h5>
                <input type="text" class="form-control" value="<?= $user['instagram_link'] ?>" readonly>
              </div>
              <div class="callout callout-danger">
                <h5>Google Maps</h5>
                <input type="text" class="form-control" value="<?= $user['gmaps'] ?>" readonly>
              </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->