  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <img height="60px" src="<?= base_url(); ?>/dist/img/astro2.png"
           alt="AdminLTE Logo"
           style="opacity: .8">
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= base_url(); ?>dist/img/admin.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">administrator</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="<?= base_url(); ?>admin/" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Halaman Utama
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url(); ?>admin/wisata" class="nav-link">
              <i class="nav-icon fas fa-water"></i>
              <p>
                Data Wisata
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?= base_url(); ?>admin/galeri" class="nav-link">
              <i class="nav-icon fas fa-images"></i>
              <p>
                Galeri
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?= base_url(); ?>admin/faq" class="nav-link">
              <i class="nav-icon fas fa-sticky-note"></i>
              <p>
                FAQs
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?= base_url(); ?>admin/supirmobil" class="nav-link">
              <i class="nav-icon fas fa-car"></i>
              <p>
                Data Mobil & Supir
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?= base_url(); ?>admin/setting" class="nav-link">
              <i class="nav-icon fas fa-wrench"></i>
              <p>
                Setting Website
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>