<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Iventory Stok</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.svg" />

    <!-- ========================= CSS here ========================= -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/LineIcons.2.0.css" />
    <link rel="stylesheet" href="assets/css/animate.css" />
    <link rel="stylesheet" href="assets/css/tiny-slider.css" />
    <link rel="stylesheet" href="assets/css/glightbox.min.css" />
    <link rel="stylesheet" href="assets/css/main.css" />

</head>

<body>
    <!--[if lte IE 9]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="https://browsehappy.com/">upgrade your browser</a> to improve
        your experience and security.
      </p>
    <![endif]-->

    <!-- Preloader -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- /End Preloader -->

    <!-- Start Header Area -->
    <header class="header navbar-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="nav-inner">
                        <!-- Start Navbar -->
                        <nav class="navbar navbar-expand-lg">
                            <!-- Logo Aprilia di pojok kanan atas -->
                            <a class="navbar-brand">
                                <img src="assets/images/logo/white-logo.svg" alt="Logo">
                            </a>
                            <button class="navbar-toggler mobile-menu-btn" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav ms-auto">
                                    <li class="nav-item">
                                        <a href="#home" class="page-scroll active"
                                            aria-label="Toggle navigation">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#features" class="page-scroll"
                                            aria-label="Toggle navigation">Fitur</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#pricing" class="page-scroll"
                                            aria-label="Toggle navigation">Penetapan</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="dd-menu collapsed" href="javascript:void(0)" data-bs-toggle="collapse"
                                            data-bs-target="#submenu-1-4" aria-controls="navbarSupportedContent"
                                            aria-expanded="false" aria-label="Toggle navigation">Blog</a>
                                        <ul class="sub-menu collapse" id="submenu-1-4">
                                            <li class="nav-item"><a href="javascript:void(0)">Blog Grid Sidebar</a>
                                            </li>
                                            <li class="nav-item"><a href="javascript:void(0)">Blog Single</a></li>
                                            <li class="nav-item"><a href="javascript:void(0)">Blog Single
                                                    Sibebar</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div> <!-- navbar collapse -->
                            <div class="button add-list-button">
                            <a href="{{ route('register') }}" class="btn">Register</a>
                                <!-- <a href="javascript:void(0)" class="btn">Get it now</a> -->
                            </div>
                            <div class="button add-list-button">
                            <a href="{{ route('login') }}" class="btn">Login</a>
                                <!-- <a href="javascript:void(0)" class="btn">Get it now</a> -->
                            </div>
                        </nav>
                        <!-- End Navbar -->
                    </div>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </header>
    <!-- End Header Area -->

    <!-- Start Hero Area -->
    <section id="home" class="hero-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-12 col-12">
                    <div class="hero-content">
                        <h1 class="wow fadeInLeft" data-wow-delay=".4s">Iventory Stok.</h1>
                        <p class="wow fadeInLeft" data-wow-delay=".6s">Dari layanan Iventory Stok hingga pro, ini membantu Anda 
                            membangun, menerapkan, menguji, dan memantau aplikasi.</p>
                        <div class="button wow fadeInLeft" data-wow-delay=".8s">
                            <a href="javascript:void(0)" class="btn"><i class="lni lni-apple"></i> App Store</a>
                            <a href="javascript:void(0)" class="btn btn-alt"><i class="lni lni-play-store"></i> Google
                                Play</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 col-12">
                    <div class="hero-image wow fadeInRight" data-wow-delay=".4s">
                        <img src="assets/images/hero/Admin List Toko.png" alt="#">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero Area -->

    <!-- Start Features Area -->
    <section id="features" class="features section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h3 class="wow zoomIn" data-wow-delay=".2s">Fitur</h3>
                        <h2 class="wow fadeInUp" data-wow-delay=".4s">Memudahkan Mengetahui Stok Barang dari Toko
                        </h2>
                        <p class="wow fadeInUp" data-wow-delay=".6s">Ada banyak variasi dalam fitur ini
                            Namun sebagian besar telah mengalami perubahan dalam beberapa bentuk.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Start Single Feature -->
                    <div class="single-feature wow fadeInUp" data-wow-delay=".2s">
                        <i class="lni lni-cloud-upload"></i>
                        <h3>Push to Iventory</h3>
                        <p>Memudahkan kita untuk Mengetahui barang dari toko-toko tersebut
                            dan juga lokasi yang sangat akurat</p>
                    </div>
                    <!-- End Single Feature -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Start Single Feature -->
                    <div class="single-feature wow fadeInUp" data-wow-delay=".4s">
                        <i class="lni lni-lock"></i>
                        <h3>Tersedia Barang</h3>
                        <p>Dengan ada nya web ini kita dengan gampang Mengetahui
                            barang apa saja yang tersedia di toko tersebut</p>
                    </div>
                    <!-- End Single Feature -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Start Single Feature -->
                    <div class="single-feature wow fadeInUp" data-wow-delay=".6s">
                        <i class="lni lni-reload"></i>
                        <h3>Mereset Barang</h3>
                        <p>Di web ini toko juga dapat reset barang miliknya
                            dengan begitu user dapat dengan mudah mengetahui nya</p>
                    </div>
                    <!-- End Single Feature -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Start Single Feature -->
                    <div class="single-feature wow fadeInUp" data-wow-delay=".2s">
                        <i class="lni lni-shield"></i>
                        <h3>Keamanan</h3>
                        <p>Kami juga bisa mengaman kan privasi user ataupun toko 
                            demi kenyaman menggunakan web ini</p>
                    </div>
                    <!-- End Single Feature -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Start Single Feature -->
                    <div class="single-feature wow fadeInUp" data-wow-delay=".4s">
                        <i class="lni lni-cog"></i>
                        <h3>Pengaturan</h3>
                        <p>Toko ataupun user dapat dengan mudah mengatur baik itu barang,
                            harga,jarak dan lain sebagainya</p>
                    </div>
                    <!-- End Single Feature -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Start Single Feature -->
                    <div class="single-feature wow fadeInUp" data-wow-delay=".6s">
                        <i class="lni lni-layers"></i>
                        <h3>Stok Menumpuk</h3>
                        <p>Jika toko memiliki banyak stok barang kami juga dapat
                            mempasilitasi barang tersebut dengan keinginan para user</p>
                    </div>
                    <!-- End Single Feature -->
                </div>
            </div>
        </div>
    </section>
    <!-- End Features Area -->

    <!-- Start Achievement Area -->
    <section class="our-achievement section">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 col-md-12 col-12">
                    <div class="title">
                        <h2>Dipercaya oleh pengembang dunia</h2>
                        <p>Ada banyak iventory stok di web kami anda dapat melihat nya sendiri</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-md-12 col-12">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="single-achievement wow fadeInUp" data-wow-delay=".2s">
                                <h3 class="counter"><span id="secondo1" class="countup" cup-end="100">100</span>%</h3>
                                <p>kepuasan</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="single-achievement wow fadeInUp" data-wow-delay=".4s">
                                <h3 class="counter"><span id="secondo2" class="countup" cup-end="120">120</span>K</h3>
                                <p>Pengguna yang Bahagia</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="single-achievement wow fadeInUp" data-wow-delay=".6s">
                                <h3 class="counter"><span id="secondo3" class="countup" cup-end="125">125</span>k+</h3>
                                <p>Downloads</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Achievement Area -->

    <!-- Start Pricing Table Area -->
    <section id="pricing" class="pricing-table section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h3 class="wow zoomIn" data-wow-delay=".2s">penetapan </h3>
                        <h2 class="wow fadeInUp" data-wow-delay=".4s">Rencana penetapan</h2>
                        <p class="wow fadeInUp" data-wow-delay=".6s">Banyak rencana penetapan yang kami buat
                            seperti yang anda lihat di bawah ini
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Single Table -->
                    <div class="single-table wow fadeInUp" data-wow-delay=".2s">
                        <!-- Table Head -->
                        <div class="table-head">
                            <h4 class="title">Indomie</h4>
                            <p>Barang yang paling laris dengan harga murah</p>
                            <div class="price">
                                <h2 class="amount">3.500<span class="duration">/1</span></h2>
                            </div>
                            <div class="button">
                                <a class="btn">Buy Indomie</a>
                            </div>
                        </div>
                        <!-- End Table Head -->
                        <!-- Start Table Content -->
                        <div class="table-content">
                            <h4 class="middle-title">Apa manfaatnya</h4>
                            <!-- Table List -->
                            <ul class="table-list">
                                <li><i class="lni lni-checkmark-circle"></i> Menghemat Uang</li>
                                <li><i class="lni lni-checkmark-circle"></i> Makanan yang enak sekali</li>
                                <li><i class="lni lni-checkmark-circle"></i> Harga nya terjangkau</li>
                                <li><i class="lni lni-checkmark-circle"></i> Tersedia banyak stok</li>
                            </ul>
                            <!-- End Table List -->
                        </div>
                        <!-- End Table Content -->
                    </div>
                    <!-- End Single Table-->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Single Table -->
                    <div class="single-table wow fadeInUp" data-wow-delay=".4s">
                        <!-- Table Head -->
                        <div class="table-head">
                            <h4 class="title">Masako</h4>
                            <p>Barang yang termasuk kebutuhan dapur</p>
                            <div class="price">
                                <h2 class="amount">500<span class="duration">/1</span></h2>
                            </div>
                            <div class="button">
                                <a  class="btn">Buy Masako</a>
                            </div>
                        </div>
                        <!-- End Table Head -->
                        <!-- Start Table Content -->
                        <div class="table-content">
                            <h4 class="middle-title">Apa manfaatnya</h4>
                            <!-- Table List -->
                            <ul class="table-list">
                                <li><i class="lni lni-checkmark-circle"></i> Mempermudah memasak.</li>
                                <li><i class="lni lni-checkmark-circle"></i> Harga terjangkau.</li>
                                <li><i class="lni lni-checkmark-circle"></i> Masakan pasti enak.</li>
                                <li><i class="lni lni-checkmark-circle"></i> Harga murah barang bagus.</li>
                            </ul>
                            <!-- End Table List -->
                        </div>
                        <!-- End Table Content -->
                    </div>
                    <!-- End Single Table-->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Single Table -->
                    <div class="single-table wow fadeInUp" data-wow-delay=".6s">
                        <!-- Table Head -->
                        <div class="table-head">
                            <h4 class="title">Masako</h4>
                            <p>Barang yang termasuk kebutuhan dapur</p>
                            <div class="price">
                                <h2 class="amount">500<span class="duration">/1</span></h2>
                            </div>
                            <div class="button">
                                <a  class="btn">Buy Masako</a>
                            </div>
                        </div>
                        <!-- End Table Head -->
                        <!-- Start Table Content -->
                        <div class="table-content">
                            <h4 class="middle-title">Apa manfaatnya</h4>
                            <!-- Table List -->
                            <ul class="table-list">
                                <li><i class="lni lni-checkmark-circle"></i> Mempermudah memasak.</li>
                                <li><i class="lni lni-checkmark-circle"></i> Harga terjangkau.</li>
                                <li><i class="lni lni-checkmark-circle"></i> Masakan pasti enak.</li>
                                <li><i class="lni lni-checkmark-circle"></i> Harga murah barang bagus.</li>
                            </ul>
                            <!-- End Table List -->
                        </div>
                        <!-- End Table Content -->
                    </div>
                    <!-- End Single Table-->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Single Table -->
                    <div class="single-table wow fadeInUp" data-wow-delay=".8s">
                        <!-- Table Head -->
                        <div class="table-head">
                            <h4 class="title">Masako</h4>
                            <p>Barang yang termasuk kebutuhan dapur</p>
                            <div class="price">
                                <h2 class="amount">500<span class="duration">/1</span></h2>
                            </div>
                            <div class="button">
                                <a  class="btn">Buy Masako</a>
                            </div>
                        </div>
                        <!-- End Table Head -->
                        <!-- Start Table Content -->
                        <div class="table-content">
                            <h4 class="middle-title">Apa manfaatnya</h4>
                            <!-- Table List -->
                            <ul class="table-list">
                                <li><i class="lni lni-checkmark-circle"></i> Mempermudah memasak.</li>
                                <li><i class="lni lni-checkmark-circle"></i> Harga terjangkau.</li>
                                <li><i class="lni lni-checkmark-circle"></i> Masakan pasti enak.</li>
                                <li><i class="lni lni-checkmark-circle"></i> Harga murah barang bagus.</li>
                            </ul>
                            <!-- End Table List -->
                        </div>
                        <!-- End Table Content -->
                    </div>
                    <!-- End Single Table-->
                </div>
            </div>
        </div>
    </section>
    <!--/ End Pricing Table Area -->

    <!-- Start Call To Action Area -->
    <section class="section call-action">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-md-12 col-12">
                    <div class="cta-content">
                        <h2 class="wow fadeInUp" data-wow-delay=".2s">Anda menggunakan gratis <br>Inventory Stok
                        </h2>
                        <p class="wow fadeInUp" data-wow-delay=".4s">Silakan gunakan web ini untuk mengetahui stok barang
                            yang memudahkan kalian semua.</p>
                        <div class="button wow fadeInUp" data-wow-delay=".6s">
                            <a href="javascript:void(0)" class="btn">Join Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Call To Action Area -->

    <!-- Start Footer Area -->
    <footer class="footer">
        <!-- Start Footer Top -->
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12">
                        <!-- Single Widget -->
                        <div class="single-footer f-about">
                            <div class="logo">
                                <a href="index.html">
                                    <!-- LOGO -->
                                    <img src="assets/images/logo/white-logo.svg" alt="#">
                                </a>
                            </div>
                            <p>Menjadikan iventory stok menjadi tempat untuk mengetaui stok dari toko</p>
                            <ul class="social">
                                <li><a href="javascript:void(0)"><i class="lni lni-facebook-filled"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="lni lni-twitter-original"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="lni lni-instagram"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="lni lni-linkedin-original"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="lni lni-youtube"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="lni lni-pinterest"></i></a></li>
                            </ul>
                            <p class="copyright-text">Designed and Developed by <a
                                    rel="nofollow" target="_blank">Iventory Stok</a>
                            </p>
                        </div>
                        <!-- End Single Widget -->
                    </div>
                    <div class="col-lg-8 col-md-8 col-12">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-12">
                                <!-- Single Widget -->
                                <div class="single-footer f-link">
                                    <h3>Solusi</h3>
                                    <ul>
                                        <li><a href="javascript:void(0)">Pemasaran</a></li>
                                        <li><a href="javascript:void(0)">Analisis</a></li>
                                        <li><a href="javascript:void(0)">Perdagangan</a></li>
                                        <li><a href="javascript:void(0)">Wawasan</a></li>
                                        <li><a href="javascript:void(0)">Promosi</a></li>
                                    </ul>
                                </div>
                                <!-- End Single Widget -->
                            </div>
                            <div class="col-lg-3 col-md-6 col-12">
                                <!-- Single Widget -->
                                <div class="single-footer f-link">
                                    <h3>Support</h3>
                                    <ul>
                                        <li><a href="javascript:void(0)">Harga</a></li>
                                        <li><a href="javascript:void(0)">Dokumentasi</a></li>
                                        <li><a href="javascript:void(0)">Panduan</a></li>
                                        <li><a href="javascript:void(0)">API Status</a></li>
                                        <li><a href="javascript:void(0)"> Support Langsung</a></li>
                                    </ul>
                                </div>
                                <!-- End Single Widget -->
                            </div>
                            <div class="col-lg-3 col-md-6 col-12">
                                <!-- Single Widget -->
                                <div class="single-footer f-link">
                                    <h3>Perusahaan</h3>
                                    <ul>
                                        <li><a href="javascript:void(0)">Tentang kami</a></li>
                                        <li><a href="javascript:void(0)">Blog kami</a></li>
                                        <li><a href="javascript:void(0)">Pekerjaan</a></li>
                                        <li><a href="javascript:void(0)">Tekan</a></li>
                                        <li><a href="javascript:void(0)">Hubungi kami</a></li>
                                    </ul>
                                </div>
                                <!-- End Single Widget -->
                            </div>
                            <div class="col-lg-3 col-md-6 col-12">
                                <!-- Single Widget -->
                                <div class="single-footer f-link">
                                    <h3>Hukum</h3>
                                    <ul>
                                        <li><a href="javascript:void(0)">Syarat & Ketentuan</a></li>
                                        <li><a href="javascript:void(0)">Privacy Policy</a></li>
                                        <li><a href="javascript:void(0)">Jasa</a></li>
                                        <li><a href="javascript:void(0)">Hubungan pelanggan</a></li>
                                        <li><a href="javascript:void(0)">Inovasi</a></li>
                                    </ul>
                                </div>
                                <!-- End Single Widget -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ End Footer Top -->
    </footer>
    <!--/ End Footer Area -->

    <!-- ========================= scroll-top ========================= -->
    <a href="#" class="scroll-top">
        <i class="lni lni-chevron-up"></i>
    </a>

    <!-- ========================= JS here ========================= -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/tiny-slider.js"></script>
    <script src="assets/js/glightbox.min.js"></script>
    <script src="assets/js/count-up.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script type="text/javascript">

        //====== counter up 
        var cu = new counterUp({
            start: 0,
            duration: 2000,
            intvalues: true,
            interval: 100,
            append: " ",
        });
        cu.start();
    </script>
</body>

</html>