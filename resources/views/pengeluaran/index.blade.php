{{-- @extends('layouts.app') --}}
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="{{ asset('assets/img/uang.png') }}">
    <title>Pengeluaran</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('assets/css/sb-admin-2.min.css') }}" rel="stylesheet">

</head>

<body id="page-top">

    @include('layouts.sidebar')

    <!-- Main Content -->
    <div id="content">
        <!-- Topbar -->
        @include('layouts.navbar')
        <!-- End of Topbar -->

        @section('addCss')
            <link rel="stylesheet" href="{{ asset('assets/css/dataTables.bootstrap4.min.css') }}">
        @endsection
        @section('addJavascript')
            <script src="{{ asset('assets/js/jquery.dataTables.min.js') }}"></script>
            <script src="{{ asset('assets/js/dataTables.bootstrap4.min.js') }}"></script>
            <script>
                $(function() {
                    $("#data-table").DataTable();
                })
            </script>
            <script src="{{ asset('assets/js/sweetalert.min.js') }}"></script>
            <script>
                confirmDelete = function(button) {
                    var url = $(button).data('url');
                    swal({
                        'title': 'Konfirmasi Hapus',
                        'text': 'Apakah Kamu Yakin Ingin Menghapus Data Ini?',
                        'dangermode': true,
                        'buttons': true
                    }).then(function(value) {
                        if (value) {
                            window.location = url;
                        }
                    })
                }
            </script>
        @endsection
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Pengeluaran </h1>
                        </div><!-- /.col -->

                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row mt-3">

                        {{-- sumber pendapatan --}}
                        <div class="col-lg-7 mb-4">
                            <!-- Project Card Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Sumber Pengeluaran</h6>
                                </div>

                                <div class="card-body">
                                    <div class="chart-area">
                                        <canvas id="myBarChart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-5">
                            <div class="text-right mb-3">
                                <a href="{{ route('daftarSumberPengeluaran') }}"
                                    class="btn m-0 font-weight-bold bg-success text-white">
                                    <i class="fas fa-chart-line"></i> Buat Sumber Pengeluaran Disini!!
                                </a>
                            </div>

                            <!-- Area Chart -->
                            <div class="card shadow mb-4">
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Pengeluaran Minggu Ini</h6>
                                </div>
                                <div class="card-body">
                                    <div class="chart-area">
                                        <canvas id="myAreaChart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.row -->

                    {{-- Tabel pemasukan start --}}
                    <div class="row">
                        <div class="col-lg">
                            <!-- Main content -->
                            <div class="content">
                                <div class="container mt-5">
                                    <div class="card">
                                        <div class="card-header text-right">
                                            <a href="{{ route('createPengeluaran') }}" class="btn btn-success"
                                                role="button">Tambah Pengeluaaran</a>
                                        </div>
                                        <div class="card-body">
                                            <table class="table table-hover table-bordered text-center" id="data-table">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Tanggal</th>
                                                        <th>Jumlah</th>
                                                        <th>Sumber</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @forelse ($pengeluarans as $pengeluaran)
                                                        <tr>
                                                            <td>{{ $loop->index + 1 }}</td>
                                                            <td>{{ $pengeluaran->tgl_pengeluaran }}</td>
                                                            <td>Rp.{{ number_format($pengeluaran->jumlah )}}</td>
                                                            <td>{{ $pengeluaran->sumber->nama_sumber }}</td>
                                                            <td>
                                                                <a href="{{ route('editPengeluaran', ['id' => $pengeluaran->id_pengeluaran]) }}"
                                                                    class="btn btn-warning btn-sm">Edit</a>
                                                                <a onclick="confirmDelete(this)"
                                                                    data-url="{{ route('deletePengeluaran', ['id' => $pengeluaran->id_pengeluaran]) }}"
                                                                    class="btn btn-danger btn-sm text-white"
                                                                    style="cursor:pointer; z-index:999">Hapus</a>
                                                            </td>
                                                        </tr>
                                                    @empty
                                                        <tr>
                                                            <td colspan="5">Data kosong</td>
                                                        </tr>
                                                    @endforelse
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.content -->
                        </div>
                    </div>
                    {{-- Tabel pemasukan end --}}
                </div><!-- /.container-fluid -->
            </div><!-- /.content -->
        </div><!-- /.content-wrapper -->

    </div>
    <!-- End of Main Content -->

    <!-- Footer -->
    <footer class="sticky-footer bg-white">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright &copy; Kelompok XX 2023</span>
            </div>
        </div>
    </footer>
    <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    @include('layouts.logoutModal')

    <!-- Bootstrap core JavaScript-->
    {{-- @include('sweetalert::alert') --}}
    <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('assets/js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('assets/vendor/chart.js/Chart.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('assets/js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('assets/js/demo/chart-pie-demo.js') }}"></script>

    {{-- include sweetalert --}}
    @include('sweetalert::alert')

    @yield('addJavascript')

    @yield('addCss')

</body>

</html>
