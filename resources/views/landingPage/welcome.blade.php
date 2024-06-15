<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Marabunta Money</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/landingPage/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/landingPage/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/landingPage/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/landingPage/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/landingPage/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/landingPage/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/landingPage/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/landingPage/css/style.css') }}" rel="stylesheet">
    <style>
        .step {
            border-radius: 10px;
            transition: transform 0.3s;
        }

        .step:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex justify-content-between align-items-center">

            <div class="logo">
                <h1><a href="">Marabunta Money</a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="active " href="#">Dashboard</a></li>
                    <li><a href="{{ route('login') }}">Login</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section class="hero-section" id="hero">

        <div class="wave">

            <svg width="100%" height="355px" viewBox="0 0 1920 355" version="1.1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink">
                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="Apple-TV" transform="translate(0.000000, -402.000000)" fill="#FFFFFF">
                        <path
                            d="M0,439.134243 C175.04074,464.89273 327.944386,477.771974 458.710937,477.771974 C654.860765,477.771974 870.645295,442.632362 1205.9828,410.192501 C1429.54114,388.565926 1667.54687,411.092417 1920,477.771974 L1920,757 L1017.15166,757 L0,757 L0,439.134243 Z"
                            id="Path"></path>
                    </g>
                </g>
            </svg>

        </div>

        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 hero-text-image">
                    <div class="row">
                        <div class="col-lg-8 text-center text-lg-start">
                            <h1 data-aos="fade-right">Website Pencatatan Keuangan</h1>
                            <p style="text-align: justify" class="mb-5" data-aos="fade-right" data-aos-delay="100">
                                Marabunta Money adalah platform online ramah pengguna yang dirancang untuk membantu
                                individu dan bisnis mengelola keuangan mereka secara efisien. Situs web ini menawarkan
                                berbagai alat untuk penganggaran, pelacakan pengeluaran, dan perencanaan keuangan.
                                Pengguna dapat dengan mudah mencatat dan mengkategorikan pendapatan dan pengeluaran
                                mereka, menghasilkan laporan keuangan terperinci, dan menetapkan tujuan keuangan pribadi
                                atau bisnis.</p>
                            <p data-aos="fade-right" data-aos-delay="200" data-aos-offset="-500"><a
                                    href="{{ route('register') }}" class="btn btn-outline-white">Get started</a></p>
                        </div>
                        {{-- <div class="col-lg-4 iphone-wrap">
                            <img src="{{asset('assets/landingPage/img/phone_1.png')}}" alt="Image" class="phone-1" data-aos="fade-right">
                            <img src="{{asset('assets/landingPage/img/phone_2.png')}}" alt="Image" class="phone-2" data-aos="fade-right"
                                data-aos-delay="200">
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= Dashboard Section ======= -->
        <section class="section">
            <div class="container">

                <div class="row justify-content-center text-center mb-5">
                    <div class="col-md-7 col-sm-5" data-aos="fade-up">
                        <h2 class="section-heading">Memudahkan Pengelolaan keuangan menggunakan aplikasi Marabunta Money</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="">
                        <div class="feature-1 text-center">
                            <div class="wrap-icon icon-1">
                                <i class="bi bi-bank"></i>
                            </div>
                            <h3 class="mb-3">Pelacakan Pengeluaran dan Pendapatan</h3>
                            <p>Catat transaksi harian dengan mudah..</p>
                        </div>
                    </div>
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="feature-1 text-center">
                            <div class="wrap-icon icon-1">
                                <i class="bi bi-currency-dollar"></i>
                            </div>
                            <h3 class="mb-3">Alat Penganggaran</h3>
                            <p>Membuat dan mengelola anggaran untuk memantau pengeluaran..</p>
                        </div>
                    </div>
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="feature-1 text-center">
                            <div class="wrap-icon icon-1">
                                <i class="bi bi-bar-chart"></i>
                            </div>
                            <h3 class="mb-3">Laporan keuangan</h3>
                            <p>Hasilkan laporan komprehensif untuk menganalisis kesehatan keuangan..</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="step">
                            <span class="number">01</span>
                            <h3>Daftar</h3>
                            <p>Mulailah perjalanan Anda menuju pengelolaan keuangan yang lebih baik dengan mengklik
                                tombol "Daftar". Masukkan email Anda, buat kata sandi kuat yang aman, dan konfirmasikan
                                kata sandi untuk memulai.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="step">
                            <span class="number">02</span>
                            <h3>Buat Profile</h3>
                            <p>Jika Anda belum memiliki akun, Anda akan diarahkan ke halaman pendaftaran. Isi informasi
                                pribadi Anda seperti alamat email, dan kata sandi yang aman. Setelah itu, klik "Daftar"
                                untuk membuat akun baru Anda.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="step">
                            <span class="number">03</span>
                            <h3>Nikmati Aplikasinya</h3>
                            <p>Setelah registrasi selesai, Anda bisa langsung menikmati seluruh fitur FinanceTrack.
                                Nikmati pengalaman pengguna yang intuitif dan alat yang dirancang untuk membantu Anda
                                mencapai tujuan keuangan Anda.</p>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <!-- ======= CTA Section ======= -->
        <section class="section cta-section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 me-auto text-center text-md-start mb-5 mb-md-0">
                        <h2>Starts Publishing Your Apps</h2>
                    </div>
                    <div class="col-md-5 text-center text-md-end">
                        <p><a href="#" class="btn d-inline-flex align-items-center"><i
                                    class="bx bxl-apple"></i><span>App store</span></a> <a href="#"
                                class="btn d-inline-flex align-items-center"><i
                                    class="bx bxl-play-store"></i><span>Google play</span></a></p>
                    </div>
                </div>
            </div>
        </section><!-- End CTA Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer class="footer" role="contentinfo">
        <div class="container">
            <div class="row">
                <div style="text-align: justify" class="col-md-5 mb-4 mb-md-0">
                    <h3>About Marabunta Money</h3>
                    <p>Marabunta Money adalah platform online ramah pengguna yang dirancang untuk membantu individu dan
                        bisnis mengelola keuangan mereka secara efisien. Situs web ini menawarkan berbagai alat untuk
                        penganggaran, pelacakan pengeluaran, dan perencanaan keuangan. Pengguna dapat dengan mudah
                        mencatat dan mengkategorikan pendapatan dan pengeluaran mereka, menghasilkan laporan keuangan
                        terperinci, dan menetapkan tujuan keuangan pribadi atau bisnis.</p>
                    <p class="social text-center">
                        <a href="#"><span class="bi bi-twitter"></span></a>
                        <a href="#"><span class="bi bi-facebook"></span></a>
                        <a href="#"><span class="bi bi-instagram"></span></a>
                        <a href="#"><span class="bi bi-linkedin"></span></a>
                    </p>
                </div>
                <div class="col-md-5 ms-auto">
                    <div class="row site-section pt-0">
                        <div class="col-md-5 mb-4 mb-md-0">
                            <h3>Navigation</h3>
                            <ul class="list-unstyled">
                                <li><a href="#">Dashboard</a></li>
                                <li><a href="{{ route('login') }}">Login</a></li>
                            </ul>
                        </div>
                        <div class="col-md-5 mb-4 mb-md-0">
                            <h3>Downloads</h3>
                            <ul class="list-unstyled">
                                <li><a href="#">Get from the App Store</a></li>
                                <li><a href="#">Get from the Play Store</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center text-center">
                <div class="col-md-7">
                    <p class="copyright">&copy; Copyright Marabunta Money. All Rights Reserved</p>
                </div>
            </div>

        </div>
    </footer>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/landingPage/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/landingPage/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/landingPage/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/landingPage/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/landingPage/js/main.js') }}"></script>

</body>

</html>
