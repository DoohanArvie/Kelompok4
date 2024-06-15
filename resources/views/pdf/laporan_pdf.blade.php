<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Head content -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="{{ asset('assets/img/uang.png') }}">
    <title>CetakLaporan</title>

    <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
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
            background-color: #3a37d6;
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

    <div id="content">
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
            </button>
            <h2 class="">Data Transaksi Keuangan</h2>
        </nav>

        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12 col-md-12 mb-4">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <form action="{{ route('downloadLaporan') }}" method="GET" class="form-inline">
                                <div class="form-group mr-2">
                                    <label for="start_date" class="mr-2">Mulai Tanggal:</label>
                                    <input type="date" id="start_date" name="start_date" class="form-control" value="{{ request('start_date') }}">
                                </div>
                                <div class="form-group mr-2">
                                    <label for="end_date" class="mr-2">Sampai Tanggal:</label>
                                    <input type="date" id="end_date" name="end_date" class="form-control" value="{{ request('end_date') }}">
                                </div>
                                <button type="submit" class="btn btn-primary">Filter</button>
                            </form>
                            <div>
                                <a href="#" class="btn btn-success" style="background-color: green" onclick="window.print(); return false;">Cetak Laporan</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <h2>Transaksi Keuangan</h2>
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Transaksi</th>
                                            <th>Jumlah</th>
                                            <th>Jenis Transaksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($pemasukans as $pemasukan)
                                            <tr>
                                                <td>{{ $loop->index + 1 }}</td>
                                                <td>
                                                    @isset($pemasukan->sumber)
                                                        {{ $pemasukan->sumber->nama_sumber }}
                                                    @else
                                                        Sumber tidak tersedia
                                                    @endisset
                                                </td>
                                                <td>Rp.{{ number_format($pemasukan->jumlah) }}</td>
                                                <td>Pendapatan</td>
                                            </tr>
                                        @endforeach
                                        @foreach ($pengeluarans as $pengeluaran)
                                            <tr>
                                                <td>{{ $loop->index + 1 + count($pemasukans) }}</td>
                                                <td>
                                                    @isset($pengeluaran->sumber)
                                                        {{ $pengeluaran->sumber->nama_sumber }}
                                                    @else
                                                        Sumber tidak tersedia
                                                    @endisset
                                                </td>
                                                <td>Rp.{{ number_format($pengeluaran->jumlah) }}</td>
                                                <td>Pengeluaran</td>
                                            </tr>
                                        @endforeach
                                        @foreach ($tagihans as $tagihan)
                                            <tr>
                                                <td>{{ $loop->index + 1 + count($pemasukans) + count($pengeluarans) }}</td>
                                                <td>{{ $tagihan->nama_tagihan }}</td>
                                                <td>Rp.{{ number_format($tagihan->jumlah) }}</td>
                                                <td>Pengeluaran</td>
                                            </tr>
                                        @endforeach
                                        @foreach ($kredits as $kredit)
                                            <tr>
                                                <td>{{ $loop->index + 1 + count($pemasukans) + count($pengeluarans) + count($tagihans) }}</td>
                                                <td>{{ $kredit->nama_kredit }}</td>
                                                <td>Rp.{{ number_format($kredit->jumlah) }}</td>
                                                <td>Pengeluaran</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th colspan="2" style="background-color: rgb(224, 30, 46); color:white;">Sisa Uang</th>
                                            <td colspan="2" style="text-align: end;">Rp.{{ number_format($sisaUang) }}</td>
                                        </tr>
                                    </tfoot>

                                   
                                </table>
                                <div>
                                    <div class=" ">
                                        <a href="{{ route('home') }}"
                                            class="btn m-0 mx-3 px-3 float-sm-right bg-primary text-white"
                                            role="button">Kembali</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
