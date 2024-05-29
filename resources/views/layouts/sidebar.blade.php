  <!-- Page Wrapper -->
  <div id="wrapper">

      <!-- Sidebar -->
      <ul class="navbar-nav sidebar sidebar-dark accordion " id="accordionSidebar" style="background-color: #FF204E">

          <!-- Sidebar - Brand -->
          <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('home') }}">
              <div class="sidebar-brand-icon rotate-n-15">
                  <i class="fas fa-chart-pie"></i>
              </div>
              <div class="sidebar-brand-text mx-3">Marabunta Money</div>
          </a>

          <!-- Divider -->
          <hr class="sidebar-divider my-0">

          <!-- Nav Item - Dashboard -->
          <li class="nav-item active">
              <a class="nav-link" href="{{ route('home') }}">
                  <i class="fas fa-fw fa-tachometer-alt"></i>
                  <span>Dashboard</span></a>
          </li>

          <!-- Divider -->
          <hr class="sidebar-divider">

          <!-- Heading -->
          <div class="sidebar-heading">
              Transaksi
          </div>

          <!-- Nav Item - Pages Collapse Menu -->
          <li class="nav-item">
              <a class="nav-link collapsed" href="{{ route('daftarPemasukan') }}">
                  <i class="fas fa-fw fa-arrow-up"></i>
                  <span>Pendapatan</span>
              </a>
          </li>

          <!-- Nav Item - Utilities Collapse Menu -->
          <li class="nav-item">
              <a class="nav-link collapsed" href="{{ route('daftarPengeluaran') }}">
                  <i class="fas fa-fw fa-arrow-down"></i>
                  <span>Pengeluaran</span>
              </a>
          </li>

          <!-- Divider -->
          <hr class="sidebar-divider">

          <!-- Heading -->
          <div class="sidebar-heading">
              Karyawan
          </div>

          <!-- Nav Item - Pages Collapse Menu -->
          <li class="nav-item">
              <a class="nav-link collapsed" href="{{route('daftarKaryawan')}}">
                  <i class="fas fa-fw fa-users"></i>
                  <span>Karyawan</span>
              </a>
          </li>

          <!-- Divider -->
          <hr class="sidebar-divider">

          <!-- Heading -->
          <div class="sidebar-heading">
              Tagihan
          </div>

          <!-- Nav Item - Charts -->
          <li class="nav-item">
              <a class="nav-link" href="hutang.php">
                  <i class="fas fa-fw fa-chart-area"></i>
                  <span>Hutang</span></a>
          </li>

          <!-- Nav Item - Tables -->
          <li class="nav-item">
              <a class="nav-link" href="laporan.php">
                  <i class="fas fa-fw fa-table"></i>
                  <span>Laporan</span></a>
          </li>

          <!-- Divider -->
          <hr class="sidebar-divider d-none d-md-block">

          <!-- Sidebar Toggler (Sidebar) -->
          <div class="text-center d-none d-md-inline">
              <button class="rounded-circle border-0" id="sidebarToggle"></button>
          </div>

      </ul>
      <!-- End of Sidebar -->

      <!-- Content Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column">
