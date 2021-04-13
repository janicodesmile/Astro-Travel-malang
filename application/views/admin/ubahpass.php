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
              <li class="breadcrumb-item"><a href="<?= base_url(); ?>/admin/setting">Pengaturan Website</a></li>
              <li class="breadcrumb-item active"><?= $judul?></li>
            </ol>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <?= $this->session->flashdata('message'); ?>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-6">
            <form method="post" action="<?= base_url(); ?>/admin/ubahpass">
                <div class="form-group">
                  <label for="pass_lama">Masukkan Password Lama</label>
                  <input type="password" class="form-control" id="pass_lama" name="pass_lama">
                  <?= form_error('pass_lama','<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                  <label for="pass_baru">Masukkan Password Baru</label>
                  <input type="password" class="form-control" id="pass_baru" name="pass_baru">
                  <?= form_error('pass_baru','<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                  <label for="pass_baru2">Masukkan ulang Password Baru</label>
                  <input type="password" class="form-control" id="pass_baru2" name="pass_baru2">
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-primary">Ubah Password</button>
                </div>
            </form>
          </div>
        </div>

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->