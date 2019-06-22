@extends('templates.master-front')

@section('content')

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
                    >Telusuri</a
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
                    >Telusuri</a
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
                    >Telusuri</a
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
                    >Telusuri</a
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
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                do eiusmod tempor incididunt ut labore et dolore magna
                aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                ullamco laboris nisi ut aliquip ex ea commodo consequat.
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
            <div class="col-md-3 wow fadeInLeft">
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

@endsection
