<!DOCTYPE html>
<html lang="en">

<head>
<<<<<<< HEAD
=======

>>>>>>> b79dd3d9d5bced618592a1bef44bc0c7214fe185
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="{{ asset('assets/img/uang.png') }}">
<<<<<<< HEAD
    <title>Kredit</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
=======
    <title>Karyawan</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
>>>>>>> b79dd3d9d5bced618592a1bef44bc0c7214fe185

    <!-- Custom styles for this template-->
    <link href="{{ asset('assets/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <style>
        .table-hover tbody tr:hover {
            background-color: #f1f1f1;
            cursor: pointer;
        }

        .btn {
            transition: transform 0.2s ease-in-out;
        }

        .btn:hover {
            transform: scale(1.05);
        }

        .table {
            animation: slideInUp 0.8s ease-in-out;
        }

        .card-header .btn-success {
            background-color: #4e73df;
            border-color: #4e73df;
        }

        .card-header .btn-success:hover {
            background-color: #2e59d9;
            border-color: #2653d4;
        }

        .table-bg {
            position: relative;
            padding: 20px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        table thead {
            background-color: #333;
            color: white;
        }

        .table-bg::before {
            content: "";
            position: absolute;
            top: -10px;
            left: -10px;
            right: -10px;
            bottom: -10px;
            background: linear-gradient(45deg, rgba(78, 115, 223, 0.1), rgba(28, 200, 138, 0.1));
            z-index: -1;
            border-radius: 15px;
            filter: blur(15px);
        }

        @keyframes slideInUp {
            from {
                transform: translateY(100%);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .content-header {
            animation: fadeInDown 0.8s ease-in-out;
        }

        @keyframes fadeInDown {
            from {
                transform: translateY(-20%);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }
    </style>
</head>

<body id="page-top">

    @include('layouts.sidebar')

    <!-- Main Content -->
    <div id="content">
        <!-- Topbar -->
        @include('layouts.navbar')
        <!-- End of Topbar -->

        @section('addCss')
<<<<<<< HEAD
        <link rel="stylesheet" href="{{ asset('assets/css/dataTables.bootstrap4.min.css') }}">
        @endsection

        @section('addJavascript')
        <script src="{{ asset('assets/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('assets/js/dataTables.bootstrap4.min.js') }}"></script>
        <script>
            $(function () {
                $("#data-table").DataTable();
            })
        </script>
        <script src="{{ asset('assets/js/sweetalert.min.js') }}"></script>
        <script>
            confirmDelete = function (button) {
                var url = $(button).data('url');
                swal({
                    'title': 'Konfirmasi Hapus',
                    'text': 'Apakah Kamu Yakin Ingin Menghapus Data Ini?',
                    'dangermode': true,
                    'buttons': true
                }).then(function (value) {
                    if (value) {
                        window.location = url;
                    }
                })
            }
        </script>
        @endsection

=======
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
>>>>>>> b79dd3d9d5bced618592a1bef44bc0c7214fe185
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-7">
                            <h1 class="m-0">Kredit</h1>
                        </div>
                        <div class="col-sm-5">
                            @foreach ($kreditBelumLunas as $k)
<<<<<<< HEAD
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                Pengingat: Anda belum membayar kredit dengan nama <strong>{{ $k->nama_kredit }}</strong> yang jatuh tempo hari ini.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            @endforeach
                        </div>
=======
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    Pengingat: Anda belum membayar kredit dengan nama <strong>{{ $k->nama_kredit }}</strong>  yang jatuh
                                    tempo hari
                                    ini.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endforeach
                        </div>
                        <!-- /.col -->
                        {{-- <div class="col-sm-6 ">
                            <a href="{{ route('daftarPemasukan') }}"
                                class="btn m-0 mx-3 px-3 float-sm-right bg-primary text-white" role="button">Kembali</a>
                        </div><!-- /.col --> --}}

>>>>>>> b79dd3d9d5bced618592a1bef44bc0c7214fe185
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="col-lg">
                        <!-- Main content -->
                        <div class="content">
                            <div class="container mt-5">
                                <div class="card">
                                    <div class="card-header text-right">
<<<<<<< HEAD
                                        <a href="{{ route('createKredit') }}" class="btn btn-success" role="button">Tambah Kredit</a>
                                    </div>
                                    <div class="card-body table-responsive">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-bordered text-center" id="data-table">
                                                <thead>
                                                    <tr>
                                                        <th>No.</th>
                                                        <th>Nama Kredit</th>
                                                        <th>Tanggal Kredit</th>
                                                        <th>Tenor</th>
                                                        <th>Jatuh Tempo</th>
                                                        <th>Jumlah Kredit</th>
                                                        <th>Status</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($kredits as $kredit)
=======
                                        <a href="{{ route('createKredit') }}" class="btn btn-success"
                                            role="button">Tambah Kredit</a>
                                    </div>
                                    <div class="card-body">
                                        <table class="table table-hover table-bordered text-center" id="data-table">
                                            <thead>
                                                <tr>
                                                    <th>No.</th>
                                                    <th>Nama Kredit</th>
                                                    <th>Tanggal Kredit</th>
                                                    <th>Jatuh Tempo</th>
                                                    <th>Jumlah Kredit</th>
                                                    <th>Status</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($kredits as $kredit)
>>>>>>> b79dd3d9d5bced618592a1bef44bc0c7214fe185
                                                    <tr>
                                                        <td>{{ $loop->index + 1 }}</td>
                                                        <td>{{ $kredit->nama_kredit }}</td>
                                                        <td>{{ $kredit->awal_kredit }}</td>
<<<<<<< HEAD
                                                        <td>{{ $kredit->tenor }}</td>
=======
>>>>>>> b79dd3d9d5bced618592a1bef44bc0c7214fe185
                                                        <td>{{ $kredit->akhir_kredit }}</td>
                                                        <td>{{ number_format($kredit->jumlah) }}</td>
                                                        <td>{{ $kredit->status }}</td>
                                                        <td>
<<<<<<< HEAD
                                                            <a href="{{ route('editKredit', ['id' => $kredit->id_kredit]) }}" class="btn btn-warning btn-sm">
                                                                <i class="fa-solid fa-pen-to-square"></i> Edit
                                                            </a>
                                                            <a onclick="confirmDelete(this)" data-url="{{ route('deleteKredit', ['id' => $kredit->id_kredit]) }}" class="btn btn-danger btn-sm text-white" style="cursor:pointer; z-index:999">
                                                                <i class="fa-solid fa-trash"></i> Hapus
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.content -->
                    </div>
=======
                                                            <a href="{{ route('editKredit', ['id' => $kredit->id_kredit]) }}"
                                                                class="btn btn-warning btn-sm">
                                                                <i class="fa-solid fa-pen-to-square"></i>
                                                                Edit</a>
                                                            <a onclick="confirmDelete(this)"
                                                                data-url="{{ route('deleteKredit', ['id' => $kredit->id_kredit]) }}"class="btn btn-danger btn-sm text-white "
                                                                style="cursor:pointer; z-index:999">
                                                                <i class="fa-solid fa-trash"></i>
                                                                Hapus</a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.content -->
                    </div>




>>>>>>> b79dd3d9d5bced618592a1bef44bc0c7214fe185
                </div><!-- /.container-fluid -->
            </div><!-- /.content -->
        </div><!-- /.content-wrapper -->

<<<<<<< HEAD
    </div><!-- End of Main Content -->

    <!-- Footer -->
    <footer class="sticky-footer bg-white" style="border-top: 3px solid #6777ef; background-color: #ffffff;">
=======
    </div>
    <!-- End of Main Content -->

    <!-- Footer -->
    <footer class="sticky-footer bg-white" style="border-top: 3px solid #6777ef;background-color: #ffffff;>
>>>>>>> b79dd3d9d5bced618592a1bef44bc0c7214fe185
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright &copy; Kelompok XX 2023</span>
            </div>
        </div>
<<<<<<< HEAD
    </footer><!-- End of Footer -->

    </div><!-- End of Content Wrapper -->

    </div><!-- End of Page Wrapper -->
=======
    </footer>
    <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->
>>>>>>> b79dd3d9d5bced618592a1bef44bc0c7214fe185

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
<<<<<<< HEAD
=======

>>>>>>> b79dd3d9d5bced618592a1bef44bc0c7214fe185
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
