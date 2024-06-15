<<<<<<< HEAD
=======
{{-- @extends('layouts.app') --}}
>>>>>>> b79dd3d9d5bced618592a1bef44bc0c7214fe185
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
    <title>Kredit</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
<<<<<<< HEAD
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('assets/css/sb-admin-2.min.css') }}" rel="stylesheet">
=======
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('assets/css/sb-admin-2.min.css') }}" rel="stylesheet">

>>>>>>> b79dd3d9d5bced618592a1bef44bc0c7214fe185
</head>

<body id="page-top">

    @include('layouts.sidebar')

    <!-- Main Content -->
    <div id="content">
        <!-- Topbar -->
        @include('layouts.navbar')
        <!-- End of Topbar -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Tambah Tagihan</h1>
<<<<<<< HEAD
                        </div>
=======
                        </div><!-- /.col -->
>>>>>>> b79dd3d9d5bced618592a1bef44bc0c7214fe185
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Tambah Tagihan</li>
                            </ol>
<<<<<<< HEAD
                        </div>
                    </div>
                </div>
            </div>
=======
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
>>>>>>> b79dd3d9d5bced618592a1bef44bc0c7214fe185

            <!-- Main content -->
            <div class="content">
                <div class="container mt-5">
                    <div class="card">
                        <div class="card-body">
<<<<<<< HEAD
                            <form action="{{ route('storeTagihan') }}" method="post">
                                @csrf
                                <input type="hidden" name="id_user" id="id_user" value="{{ Auth::user()->id_user }}">

                                <div class="form-group">
                                    <label for="nama_tagihan">Nama Tagihan</label>
                                    <input type="text" name="nama_tagihan" id="nama_tagihan" class="form-control" required placeholder="Masukkan Nama tagihan">
                                </div>
                                <div class="form-group">
                                    <label for="awal_tagihan">Tanggal Tagihan</label>
                                    <input type="date" name="awal_tagihan" id="awal_tagihan" class="form-control" required placeholder="Masukkan Tanggal tagihan">
                                </div>
                                <div class="form-group">
                                    <label for="akhir_tagihan">Jatuh Tempo</label>
                                    <input type="date" name="akhir_tagihan" id="akhir_tagihan" class="form-control" readonly placeholder="Masukkan Jatuh Tempo">
                                </div>
                                <div class="form-group">
                                    <label for="jumlah">Jumlah</label>
                                    <input type="number" name="jumlah" id="jumlah" class="form-control" required placeholder="Masukkan Jumlah Tagihan">
                                </div>
                                <div class="form-group">
                                    <label for="status">Status Tagihan</label>
                                    <select class="form-control" name="status" id="status" required>
=======
                            <form action="{{ route('storeTagihan') }} " method="post">
                                @csrf
                                <div>
                                    <input type="hidden" name="id_user" id="id_user"
                                        value="{{ Auth::user()->id_user }}">
                                </div>
                                <div class="form-group">
                                    <label for="nama">Nama Tagihan</label>
                                    <input type="text" name="nama_tagihan" id="nama_tagihan" class="form-control"
                                        required='required' placeholder="Masukkan Nama tagihan">
                                </div>
                                <div class="form-group">
                                    <label for="nama">Tanggal Tagihan</label>
                                    <input type="date" name="awal_tagihan" id="awal_tagihan" class="form-control"
                                        required='required' placeholder="Masukkan Tanggal tagihan">
                                </div>
                                <div class="form-group">
                                    <label for="nama">Jatuh Tempo</label>
                                    <input type="date" name="akhir_tagihan" id="akhir_tagihan" class="form-control"
                                        required='required' placeholder="Masukkan Jatuh Tempo">
                                </div>
                                <div class="form-group">
                                    <label for="nama">Jumlah</label>
                                    <input type="number" name="jumlah" id="jumlah" class="form-control"
                                        required='required' placeholder="Masukkan Jumlah Tagihan">
                                </div>

                                <div class="form-group">
                                    <label for="nama">Status Tagihan</label>
                                    <select class="form-control" name="status" id="status" required="required">
>>>>>>> b79dd3d9d5bced618592a1bef44bc0c7214fe185
                                        <option value="Sudah Bayar">Sudah Bayar</option>
                                        <option value="Belum Bayar" selected>Belum Bayar</option>
                                    </select>
                                </div>
<<<<<<< HEAD
                                <div class="text-right">
                                    <a href="{{ route('daftarTagihan') }}" class="btn btn-outline-secondary mr-2" role="button">Batal</a>
=======

                                <div class="text-right">
                                    <a href="{{ route('daftarTagihan') }}" class="btn btn-outline-secondary mr-2"
                                        role="button">Batal</a>
>>>>>>> b79dd3d9d5bced618592a1bef44bc0c7214fe185
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
<<<<<<< HEAD
=======




>>>>>>> b79dd3d9d5bced618592a1bef44bc0c7214fe185
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

<<<<<<< HEAD
=======
    </div>
    <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

>>>>>>> b79dd3d9d5bced618592a1bef44bc0c7214fe185
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    @include('layouts.logoutModal')

    <!-- Bootstrap core JavaScript-->
<<<<<<< HEAD
=======
    {{-- @include('sweetalert::alert') --}}
>>>>>>> b79dd3d9d5bced618592a1bef44bc0c7214fe185
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

<<<<<<< HEAD
    <!-- Custom Script to handle date logic -->
    <script>
        document.getElementById('awal_tagihan').addEventListener('change', function() {
            let awalTagihan = new Date(this.value);
            let akhirTagihan = new Date(awalTagihan);
            akhirTagihan.setMonth(awalTagihan.getMonth() + 1);

            let year = akhirTagihan.getFullYear();
            let month = (akhirTagihan.getMonth() + 1).toString().padStart(2, '0');
            let day = akhirTagihan.getDate().toString().padStart(2, '0');

            document.getElementById('akhir_tagihan').value = `${year}-${month}-${day}`;
        });
    </script>
=======
>>>>>>> b79dd3d9d5bced618592a1bef44bc0c7214fe185
</body>

</html>
