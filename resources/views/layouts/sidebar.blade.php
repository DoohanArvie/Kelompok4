  <!-- Page Wrapper -->
  <div id="wrapper">

      <!-- Sidebar -->
      <ul class="navbar-nav sidebar sidebar-dark accordion " id="accordionSidebar" style="background-color: #6777ef">

          <!-- Sidebar - Brand -->
          <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('home') }}">
              <div class="sidebar-brand-icon">
                <i class="fa-brands fa-monero"></i>
              </div>
              <div class="sidebar-brand-text mx-3">Marabunta Money</div>
          </a>

          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

          <!-- Divider -->
          <hr class="sidebar-divider my-0">

          <!-- Nav Item - Dashboard -->
          <li class="nav-item active">
              <a class="nav-link" href="{{ route('home') }}">
                  {{-- <i class="fa fa-home"></i> --}}
                  <i class="fa-solid fa-house"></i>
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
                  <i class="fa-solid fa-money-bill-trend-up"></i>
                  <span>Pendapatan</span>
              </a>
          </li>

          <!-- Nav Item - Utilities Collapse Menu -->
          <li class="nav-item">
              <a class="nav-link collapsed" href="{{ route('daftarPengeluaran') }}">
                  <i class="fa-solid fa-money-bill-transfer"></i>
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
              <a class="nav-link collapsed" href="{{ route('daftarKaryawan') }}">
                  <i class="fa-solid fa-user-group"></i>
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
              <a class="nav-link" href="{{ route('daftarKredit') }}">
                  <i class="fa-solid fa-chart-area"></i>
                  <span>Kredit</span></a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="{{ route('daftarKredit') }}">
                  <i class="fa-solid fa-chart-area"></i>
                  <span>Tagihan Bulanan</span></a>
          </li>

          <hr class="sidebar-divider">

          <div class="sidebar-heading">
            LAPORAN
        </div>
          <!-- Nav Item - Tables -->
          <li class="nav-item">
              <a class="nav-link" href="laporan.php">
                  <i class="fa-solid fa-chart-pie"></i>
                  <span>Laporan</span></a>
          </li>

          <!-- Divider -->

          <!-- Sidebar Toggler (Sidebar) -->
          <div class="text-center d-none d-md-inline">
              <button class="rounded-circle border-0" id="sidebarToggle"></button>
          </div>

      </ul>
      <!-- End of Sidebar -->

      <!-- Content Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column">
