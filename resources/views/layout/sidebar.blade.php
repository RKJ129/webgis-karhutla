<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset("template/dist/img/AdminLTELogo.png") }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Karhutla</span>
    </a>

<div class="sidebar">
    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item menu-open">
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('index.dashboard') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Dashboard</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('index.kecamatan') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Kecamatan</p>
              </a>
            </li>
            {{-- <li class="nav-item">
              <a href="{{ route('index.kelurahan') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Kelurahan</p>
              </a>
            </li> --}}
            {{-- <li class="nav-item">
              <a href="{{ route('kebakaran.index') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Kebakaran</p>
              </a>
            </li> --}}
            <li class="nav-item">
              <a href="{{ route('index.titikpanas') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Titik Panas & Kebakaran</p>
              </a>
            </li>
            {{-- <li class="nav-item">
              <a href="{{ route('berita.index') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Berita</p>
              </a>
            </li> --}}
            <li class="nav-item">
              <a href="{{ route('logout') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p class="text-danger">Logout</p>
              </a>
            </li>
          </ul>
        </li>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
</aside>
