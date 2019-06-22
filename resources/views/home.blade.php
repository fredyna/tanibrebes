<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Tani Brebes</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="Tani, Brebes, Kawan Tani, Produk, Produk Unggulan, Produk Tani, Pertanian" name="keywords" />
    <meta content="Website Tani Brebes" name="description" />
    <meta name="author" content="Fredy Nur Apriyanto">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicons -->
    <link href="{{ asset('img/logo/logo.png')}}" rel="icon" />

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700"
      rel="stylesheet"
    />

    <!-- Bootstrap CSS File -->
    <link href="{{ asset('front-assets/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />

<!-- Libraries CSS Files -->
    <link href="{{ asset('front-assets/lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('front-assets/lib/animate/animate.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('front-assets/lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('front-assets/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('front-assets/lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet" />

    <!-- Main Stylesheet File -->
    <link href="{{ asset('front-assets/css/style.css')}}" rel="stylesheet')}}" />

  </head>

  <body>
    <!--==========================
    Header
  ============================-->
    <header id="header">
      <div class="container-fluid">
        <div id="logo" class="pull-left">
          <a href="#intro" class="scrollto"><img src="{{asset('img/logo/tanibrebes.png')}}"/></a>
          <!-- Uncomment below if you prefer to use an image logo -->
        </div>
        <nav id="nav-menu-container">
          <ul class="nav-menu">
            <li class="active"><a href="index.html">Beranda</a></li>
            <li><a href="#">Data Tani</a></li>
            <li><a href="#product">Produk Unggulan</a></li>
            <li><a href="#about">Tentang Kami</a></li>
          </ul>
        </nav>
      </div>
    </header>
    <!-- #header -->

    <!--==========================
    Intro Section
  ============================-->
    <section id="intro">
      <div class="intro-container">
        <div
          id="introCarousel"
          class="carousel  slide carousel-fade"
          data-ride="carousel"
        >
          <ol class="carousel-indicators"></ol>

          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <div class="carousel-background">
                <img src="{{ asset('front-assets/img/intro-carousel/1.jpg')}}" alt="" />
              </div>
              <div class="carousel-container">
                <div class="carousel-content">
                  <h2>We are professional</h2>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                    do eiusmod tempor incididunt ut labore et dolore magna
                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                    ullamco laboris nisi ut aliquip ex ea commodo consequat.
                  </p>
                  <a href="#featured-services" class="btn-get-started scrollto"
                    >Get Started</a
                  >
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="carousel-background">
                <img src="{{ asset('front-assets/img/intro-carousel/2.jpg')}}" alt="" />
              </div>
              <div class="carousel-container">
                <div class="carousel-content">
                  <h2>We are professional</h2>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                    do eiusmod tempor incididunt ut labore et dolore magna
                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                    ullamco laboris nisi ut aliquip ex ea commodo consequat.
                  </p>
                  <a href="#featured-services" class="btn-get-started scrollto"
                    >Get Started</a
                  >
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="carousel-background">
                <img src="{{ asset('front-assets/img/intro-carousel/3.jpg')}}" alt="" />
              </div>
              <div class="carousel-container">
                <div class="carousel-content">
                  <h2>We are professional</h2>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                    do eiusmod tempor incididunt ut labore et dolore magna
                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                    ullamco laboris nisi ut aliquip ex ea commodo consequat.
                  </p>
                  <a href="#featured-services" class="btn-get-started scrollto"
                    >Jelahi</a
                  >
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="carousel-background">
                <img src="{{ asset('front-assets/img/intro-carousel/4.jpg')}}" alt="" />
              </div>
              <div class="carousel-container">
                <div class="carousel-content">
                  <h2>We are professional</h2>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                    do eiusmod tempor incididunt ut labore et dolore magna
                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                    ullamco laboris nisi ut aliquip ex ea commodo consequat.
                  </p>
                  <a href="#featured-services" class="btn-get-started scrollto"
                    >Get Started</a
                  >
                </div>
              </div>
            </div>
          </div>

          <a
            class="carousel-control-prev"
            href="#introCarousel"
            role="button"
            data-slide="prev"
          >
            <span
              class="carousel-control-prev-icon ion-chevron-left"
              aria-hidden="true"
            ></span>
            <span class="sr-only">Previous</span>
          </a>

          <a
            class="carousel-control-next"
            href="#introCarousel"
            role="button"
            data-slide="next"
          >
            <span
              class="carousel-control-next-icon ion-chevron-right"
              aria-hidden="true"
            ></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </section>
    <!-- #intro -->

    <main id="main">
      <!--==========================
      Featured Services Section
    ============================-->
      <section id="featured-services">
        <div class="container">
          <header class="section-header">
            <h3 class="jalur-prestasi">Tentang Kami</h3>
            <p>
              Jalur Prestasi Fast Track Program adalah Penerimaan Mahasiswa Baru
              Jalur Prestasi Kerjasama Management and Science University (MSU)
              Malaysia TANPA TES untuk Program Fast Track Kelas Internasional
              dengan durasi pendidikan 5 tahun langsung Magister (S2). Seleksi
              berdasarkan prestasi akademik dan non akademik siswa ditunjukkan
              dengan nilai rapor dan piagam penghargaan.
            </p>
          </header>
        </div>
      </section>
      <!-- #featured-services -->

      <!--==========================
      About Us Section
    ============================-->
      <section id="about">
        <div class="container">
          <header class="section-header">
            <h3>Produk Terbaru</h3>
          </header>

          <div class="row product-cols">
            <div class="col-md-3 wow fadeInUp">
              <div class="product-col">
                <div class="img">
                  <img src="{{asset('front-assets/img/image3.jpg')}}" alt="" class="img-fluid" />
                </div>
                <h2>Bawang Merah</h2>
                <p>Kelompok Tani</p>
                <p>Rp30000</p>
                <a href="#" class="btn-detail-produk">Lihat Produk</a>
              </div>
            </div>

            <div class="col-12 text-center">
              <a href="#" class="btn-semua-produk">Lihat Semua Produk</a>
            </div>
          </div>
        </div>
      </section>
      <!-- #about -->

      <!--==========================
      Clients Section
    ============================-->
      <section id="clients" class="wow fadeInUp">
        <div class="container">
          <header class="section-header">
            <h3>Partnership</h3>
          </header>

          <div class="owl-carousel clients-carousel">
            <div>
              <img src="{{ asset('front-assets/img/partnership/ups.png') }}" alt="" />
              <p class="partnership">Universitas Pancasakti Tegal</p>
            </div>
            <div>
              <img src="{{ asset('front-assets/img/partnership/dpkp.png') }}" alt="" />
              <p class="partnership">
                Dinas Pertanian dan Ketahanan Pangan Kabupaten Brebes
              </p>
            </div>
          </div>
        </div>
      </section>
      <!-- #clients -->
    </main>

    <!--==========================
    Footer
  ============================-->
    <footer id="footer">
      <div class="footer-top">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-6 footer-info">
              <a href="#intro" class="scrollto"
                ><img src="{{ asset('front-assets/img/tanibrebes.png')}}"/></a
              ><br /><br />
              <p>
                Kerjasama Universitas Pancasakti Tegal dengan Dinas Pertanian
                dan Ketahanan Pangan Kabupaten Brebes
              </p>
            </div>

            <div class="col-lg-6 col-md-6 footer-contact">
              <h4>Kontak Kami</h4>
              <p>
                Jl. Halmahera No.KM. 01, Mintaragen, Kec. Tegal Tim., Kota
                Tegal, Jawa Tengah 52121<br />
                <strong>Phone:</strong> +62 856 4025 1605 <br />
                <strong>Email:</strong> contoh@gmail.com<br />
              </p>
            </div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="copyright">
          &copy; Copyright 2019 <strong>Tani Brebes</strong>. All Rights
          Reserved
        </div>
        <div class="credits">
          <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=BizPage
        -->

          By
          <a href="https://fredynurapriyanto.com">Fredy</a>
          & <a href="https://instagram.com/maulanaabdulsiddiq">Maulana</a>
        </div>
      </div>
    </footer>
    <!-- #footer -->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    {{-- Uncomment below i you want to use a preloader --}}
    <div id="preloader"></div>

    <!-- JavaScript Libraries -->
    <script src="{{ asset('front-assets/lib/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('front-assets/lib/jquery/jquery-migrate.min.js')}}"></script>
    <script src="{{ asset('front-assets/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('front-assets/lib/easing/easing.min.js')}}"></script>
    <script src="{{ asset('front-assets/lib/superfish/hoverIntent.js')}}"></script>
    <script src="{{ asset('front-assets/lib/superfish/superfish.min.js')}}"></script>
    <script src="{{ asset('front-assets/lib/wow/wow.min.js')}}"></script>
    <script src="{{ asset('front-assets/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{ asset('front-assets/lib/counterup/counterup.min.js')}}"></script>
    <script src="{{ asset('front-assets/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('front-assets/lib/isotope/isotope.pkgd.min.js')}}"></script>
    <script src="{{ asset('front-assets/lib/lightbox/js/lightbox.min.js')}}"></script>
    <script src="{{ asset('front-assets/lib/touchSwipe/jquery.touchSwipe.min.js')}}"></script>

    <!-- Template Main Javascript File -->
    <script src="{{ asset('front-assets/js/main.js')}}"></script>
  </body>
</html>
