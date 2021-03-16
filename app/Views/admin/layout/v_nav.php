<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?= base_url()?>/assets/admin/dist/img/logo.jpg" alt="SMPN10PYK Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">ADMIN GABE</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
        </div>
        <div class="info">
          <a href="" class="d-block">Administrator</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url() ?>/administrator/message" class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p class="text">Pesan Dari Customers</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url() ?>/administrator/pengajuan-customers" class="nav-link">
              <i class="nav-icon far fa-circle text-info"></i>
              <p class="text">Pengajuan Pinjaman</p>
            </a>
          </li>
          <li class="nav-header">GABE
            <li class="nav-item">
              <a href="<?= base_url() ?>/administrator/profile" class="nav-link">
                <i class="nav-icon far fa-circle text-danger"></i>
                <p class="text">Profile</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url() ?>/administrator/gambar-kendaraan" class="nav-link">
                <i class="nav-icon far fa-circle text-warning"></i>
                <p>Gambar Kendaraan</p>
              </a>
            </li>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>