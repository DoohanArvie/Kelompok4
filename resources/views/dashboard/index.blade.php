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
    <title>Keuangan - Admin</title>

    <!-- Custom fonts for this template-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('assets/css/sb-admin-2.min.css') }}" rel="stylesheet">
<<<<<<< HEAD
    <style>
        /* Add your custom styles here */
        .card {
            border-radius: 10px;
            transition: transform 0.3s;
        }

        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        .card-header {
            background-color: #f8f9fc;
            border-bottom: 1px solid #e3e6f0;
        }

        .card-header h6 {
            font-weight: bold;
        }

        .chart-area,
        .chart-pie {
            position: relative;
        }

        .fa-calendar,
        .fa-dollar-sign,
        .fa-wallet,
        .fa-user-group {
            color: #d1d3e2;
        }

        .btn-primary {
            background-color: #4e73df;
            border-color: #4e73df;
        }

        .btn-primary:hover {
            background-color: #2e59d9;
            border-color: #2653d4;
        }

        .small i {
            font-size: 1rem;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        .content-wrapper,
        .card,
        .navbar {
            animation: fadeIn 1s ease-in-out;
        }

        .sticky-footer {
            border-top: 3px solid #4e73df;
            background-color: #ffffff;
        }
    </style>
=======

>>>>>>> b79dd3d9d5bced618592a1bef44bc0c7214fe185
</head>

<body id="page-top">

    @include('layouts.sidebar')

    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->
<<<<<<< HEAD
        <nav class="navbar navbar-expand navbar-light topbar mb-4 static-top shadow">
=======
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
>>>>>>> b79dd3d9d5bced618592a1bef44bc0c7214fe185

            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
            </button>

            <!-- Topbar Search -->
<<<<<<< HEAD
=======
            <h1> Selamat Datang, {{ ucwords(Auth::user()->name) }}</h1>
>>>>>>> b79dd3d9d5bced618592a1bef44bc0c7214fe185

            @include('layouts.profile')

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
<<<<<<< HEAD
                <a href="{{ route('downloadLaporan') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
=======
                <a href="export-semua.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
>>>>>>> b79dd3d9d5bced618592a1bef44bc0c7214fe185
                    <i class="fa-solid fa-download fa-sm text-white-50"></i> Download Laporan</a>
            </div>

            <!-- Content Row -->
            <div class="row">

<<<<<<< HEAD
                <!-- Earnings (Daily) Card Example -->
=======
                <!-- Earnings (Monthly) Card Example -->
>>>>>>> b79dd3d9d5bced618592a1bef44bc0c7214fe185
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Pendapatan
                                        (Hari Ini)</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                        Rp.{{ number_format($pemasukanHariIni) }}</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                </div>
                            </div>
<<<<<<< HEAD
                            <div class="text-xs font-weight-bold text-success mt-3">Bulanan:
                                Rp.{{ number_format($pemasukanMingguIni) }}</div>
                        </div>
                    </div>
                </div>

                <!-- Earnings (Daily) Card Example -->
=======
                        </div> &nbsp Bulanan : Rp.{{ number_format($pemasukanMingguIni) }}
                    </div>
                </div>

                <!-- Earnings (Monthly) Card Example -->
>>>>>>> b79dd3d9d5bced618592a1bef44bc0c7214fe185
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-danger shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Pengeluaran
                                        (Hari Ini)</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                        Rp.{{ number_format($pengeluaranTagihan) }}</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                </div>
                            </div>
<<<<<<< HEAD
                            <div class="text-xs font-weight-bold text-danger mt-3">Bulanan:
                                Rp.{{ number_format($pengeluaranTagihanMingguIni) }}</div>
                        </div>
                    </div>
                </div>

                <!-- Earnings (Remaining) Card Example -->
=======
                        </div> &nbsp Bulanan : Rp.
                        {{ number_format($pengeluaranTagihanMingguIni) }}
                    </div>
                </div>

                <!-- Earnings (Monthly) Card Example -->
>>>>>>> b79dd3d9d5bced618592a1bef44bc0c7214fe185
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-info shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Sisa Uang</div>
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-auto">
                                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                                Rp.{{ number_format($sisaUang) }}</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fa-solid fa-wallet fa-2x text-gray-300"></i>
                                </div>
                            </div>
<<<<<<< HEAD
=======

>>>>>>> b79dd3d9d5bced618592a1bef44bc0c7214fe185
                        </div>
                    </div>
                </div>

<<<<<<< HEAD
                <!-- Employees Card Example -->
=======
                <!-- Pending Requests Card Example -->
>>>>>>> b79dd3d9d5bced618592a1bef44bc0c7214fe185
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Karyawan
                                    </div>
<<<<<<< HEAD
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $karyawan }}</div>
=======
                                    <div class="h5 mb-0 font-weight-bold text-gray-800 ">{{ $karyawan }}</div>
>>>>>>> b79dd3d9d5bced618592a1bef44bc0c7214fe185
                                </div>
                                <div class="col-auto">
                                    <i class="fa-solid fa-user-group fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
<<<<<<< HEAD

            </div>

            <!-- Content Row -->
=======
            </div>

            <!-- Content Row -->

>>>>>>> b79dd3d9d5bced618592a1bef44bc0c7214fe185
            <div class="row">

                <!-- Area Chart -->
                <div class="col-xl-8 col-lg-7">
<<<<<<< HEAD
                    <div class="card shadow mb-4 pb-3">
                        <!-- Card Header - Dropdown -->
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Pendapatan Bulan Ini</h6>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <h3>Sumber</h3>
                                    <ul class="list-group list-group-flush">
                                        @foreach ($sumbers->take(6)  as $sumber)
                                            <li class="list-group-item">
                                                {{ $loop->index + 1 }}. {{ $sumber->nama_sumber }}
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <h3>Jumlah</h3>
                                    <ul class="list-group list-group-flush">
                                        @foreach ($sumbers->take(6)  as $sumber)
                                            <li class="list-group-item">
                                                <span class="float-right">
                                                    Rp.{{ number_format($pemasukanPerSumber[$sumber->id_sumber]->total_jumlah ?? 0) }}
                                                </span>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                                {{-- <div class="col-md-6">
                                    <ul class="list-group list-group-flush">
                                        <h3>Jumlah</h3>
                                        @foreach ($totalsumber as $totalsumber)
                                        <li class="list-group-item">{{ $loop->index + 1 }}. {{ $sumber->nama_sumber }}</li>
                                        @endforeach
                                    </ul>
                                </div> --}}

=======
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Pendapatan Minggu Ini</h6>
                            <div class="dropdown no-arrow">
                                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                    aria-labelledby="dropdownMenuLink">
                                    <div class="dropdown-header">Dropdown Header:</div>
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                            <div class="chart-area">
                                <canvas id="myAreaChart1"></canvas>
>>>>>>> b79dd3d9d5bced618592a1bef44bc0c7214fe185
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pie Chart -->
                <div class="col-xl-4 col-lg-5">
<<<<<<< HEAD
                    <div class="card shadow mb-4 pb-4">
                        <!-- Card Header - Dropdown -->
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Perbandingan</h6>
=======
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Perbandingan</h6>
                            <div class="dropdown no-arrow">
                                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                    aria-labelledby="dropdownMenuLink">
                                    <div class="dropdown-header">Dropdown Header:</div>
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
>>>>>>> b79dd3d9d5bced618592a1bef44bc0c7214fe185
                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                            <div class="chart-pie pt-4 pb-2">
                                <canvas id="chartDonut"></canvas>
                            </div>
                            <div class="mt-4 text-center small">
                                <span class="mr-2">
                                    <i class="fas fa-circle text-success"></i> Pendapatan
                                </span>
                                <span class="mr-2">
                                    <i class="fas fa-circle text-danger"></i> Pengeluaran
                                </span>
                                <span class="mr-2">
                                    <i class="fas fa-circle text-info"></i> Sisa Uang
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

    <!-- Footer -->
<<<<<<< HEAD
    <footer class="sticky-footer bg-white">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
=======
    <footer class="sticky-footer bg-white" style="border-top: 3px solid #6777ef;background-color: #ffffff;>
        <div class="container my-auto">
            <div class="copyright text-center my-auto" >
>>>>>>> b79dd3d9d5bced618592a1bef44bc0c7214fe185
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

    {{-- dougnut chart --}}
    <script>
        // Wait for the DOM to fully load
        document.addEventListener('DOMContentLoaded', function() {
            // Set new default font family and font color to mimic Bootstrap's default styling
            Chart.defaults.global.defaultFontFamily = 'Nunito',
                '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
            Chart.defaults.global.defaultFontColor = '#858796';

            // Dynamic data from PHP
            var totalPemasukan = {{ $totalPemasukan }};
            var totalPengeluaran = {{ $totalPengeluaran }};
            var sisaUang = {{ $sisaUang }};

            // Pie Chart Example
            var ctx = document.getElementById("chartDonut").getContext('2d');
            var myPieChart = new Chart(ctx, {
                type: 'doughnut',
                data: {
                    labels: ["Total Income", "Total Expenditure", "Remaining Money"],
                    datasets: [{
                        data: [totalPemasukan, totalPengeluaran, sisaUang],
                        backgroundColor: ['#1cc88a', '#ff6384', '#36a2eb'],
                        hoverBackgroundColor: ['#17a673', '#ff4b5c', '#2c9faf'],
                        hoverBorderColor: "rgba(234, 236, 244, 1)",
                    }],
                },
                options: {
                    maintainAspectRatio: false,
                    tooltips: {
                        backgroundColor: "rgb(255,255,255)",
                        bodyFontColor: "#858796",
                        borderColor: '#dddfeb',
                        borderWidth: 1,
                        xPadding: 15,
                        yPadding: 15,
                        displayColors: false,
                        caretPadding: 10,
                    },
                    legend: {
                        display: false
                    },
                    cutoutPercentage: 80,
                },
            });
        });
    </script>
    {{-- dougnut chart --}}
<<<<<<< HEAD
=======

    {{-- area chart --}}
    <script>
        // Set new default font family and font color to mimic Bootstrap's default styling
        Chart.defaults.global.defaultFontFamily = 'Nunito',
            '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
        Chart.defaults.global.defaultFontColor = '#858796';

        function number_format(number, decimals, dec_point, thousands_sep) {
            number = (number + '').replace(',', '').replace(' ', '');
            var n = !isFinite(+number) ? 0 : +number,
                prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
                sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
                dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
                s = '',
                toFixedFix = function(n, prec) {
                    var k = Math.pow(10, prec);
                    return '' + Math.round(n * k) / k;
                };
            s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
            if (s[0].length > 3) {
                s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
            }
            if ((s[1] || '').length < prec) {
                s[1] = s[1] || '';
                s[1] += new Array(prec - s[1].length + 1).join('0');
            }
            return s.join(dec);
        }

        // Area Chart Example
        var ctx = document.getElementById("myAreaChart1").getContext('2d');
        var myLineChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
                datasets: [{
                    label: "Earnings",
                    lineTension: 0.3,
                    backgroundColor: "rgba(78, 115, 223, 0.05)",
                    borderColor: "rgba(78, 115, 223, 1)",
                    pointRadius: 3,
                    pointBackgroundColor: "rgba(78, 115, 223, 1)",
                    pointBorderColor: "rgba(78, 115, 223, 1)",
                    pointHoverRadius: 3,
                    pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
                    pointHoverBorderColor: "rgba(78, 115, 223, 1)",
                    pointHitRadius: 10,
                    pointBorderWidth: 2,
                    data: @json($pemasukanMingguIni),
                }],
            },
            options: {
                maintainAspectRatio: false,
                layout: {
                    padding: {
                        left: 10,
                        right: 25,
                        top: 25,
                        bottom: 0
                    }
                },
                scales: {
                    xAxes: [{
                        time: {
                            unit: 'date'
                        },
                        gridLines: {
                            display: false,
                            drawBorder: false
                        },
                        ticks: {
                            maxTicksLimit: 7
                        }
                    }],
                    yAxes: [{
                        ticks: {
                            maxTicksLimit: 5,
                            padding: 10,
                            callback: function(value, index, values) {
                                return '$' + number_format(value);
                            }
                        },
                        gridLines: {
                            color: "rgb(234, 236, 244)",
                            zeroLineColor: "rgb(234, 236, 244)",
                            drawBorder: false,
                            borderDash: [2],
                            zeroLineBorderDash: [2]
                        }
                    }],
                },
                legend: {
                    display: false
                },
                tooltips: {
                    backgroundColor: "rgb(255,255,255)",
                    bodyFontColor: "#858796",
                    titleMarginBottom: 10,
                    titleFontColor: '#6e707e',
                    titleFontSize: 14,
                    borderColor: '#dddfeb',
                    borderWidth: 1,
                    xPadding: 15,
                    yPadding: 15,
                    displayColors: false,
                    intersect: false,
                    mode: 'index',
                    caretPadding: 10,
                    callbacks: {
                        label: function(tooltipItem, chart) {
                            var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
                            return datasetLabel + ': $' + number_format(tooltipItem.yLabel);
                        }
                    }
                }
            }
        });
    </script>
    {{-- area chart --}}
>>>>>>> b79dd3d9d5bced618592a1bef44bc0c7214fe185
</body>

</html>
