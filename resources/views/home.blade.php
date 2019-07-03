@extends('templates.master-front')

@section('content')

<header id="header">
    <div class="container-fluid">
        <div id="logo" class="pull-left">
            <a href="#intro" class="scrollto"><img src="{{asset('img/logo/tanibrebes.png')}}"/></a>
            <!-- Uncomment below if you prefer to use an image logo -->
        </div>
        <nav id="nav-menu-container">
            <ul class="nav-menu">
                <li id="menu-home" class="active"><a href="{{ route('home') }}">Beranda</a></li>
                <li id="menu-tani"><a href="{{ route('home.tani') }}">Data Tani</a></li>
                <li><a href="#product">Produk Unggulan</a></li>
                <li><a href="#about">Tentang Kami</a></li>
                <li><a href="{{ route('login') }}">Login</a></li>
            </ul>
        </nav>
    </div>
</header>

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
                  <h2>Keunggulan Tani Brebes</h2>
                  <p class="sub-title-header">
                    Menyajikan Data Kelompok Tani Kabupaten Brebes Secara Akurat dan Terbaru.
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
                  <h2>Keunggulan Tani Brebes</h2>
                  <p class="sub-title-header">
                    Membantu Hilirisasi Produk Unggulan Pertanian di Kabupaten Brebes dengan Basis Data Produk yang Siap Dipasarkan.
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
                  <h2>Keunggulan Tani Brebes</h2>
                  <p class="sub-title-header">
                    Menyajikan Info Pertanian Serta Update Kabar Tani di Wilayah Kabupaten Brebes.
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
                  <h2>Keunggulan Tani Brebes</h2>
                  <p class="sub-title-header">
                    Bagi Para Pelaku Industri Berbasis Hasil Pertanian Mendapatkan Jejaring dengan Pemasok Hasil Pertanian Secara Langsung dari Petani.
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
      About Section
    ============================-->
      <section id="about">
        <div class="container">
          <header class="section-header">
            <h3 class="title-about">Tentang Kami</h3>
            <p>{{ $about->description ? $about->description:'Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.' }}</p>

            <div class="row">
                <div class="col-sm-6">
                    <h4 class="title-about">VISI</h4>
                    <p>Tanibrebes.com situs online bagi petani Kabupaten Brebes yang mandiri dan modern.</p>
                </div>
                <div class="col-sm-6">
                    <h4 class="title-about">MISI</h4>
                    <ol type=1>
                        <li>Menggiatkan kemandirian petani dalam memasarkan hasil pertanian.</li>
                        <li>Menggiatkan modernisasi kegiatan pertanian dan pengolahan hasil pertanian.</li>
                        <li>Menjadi rujukan informasi hasil pertanian di Kabupaten Brebes.</li>
                        <li>Menjalin jejaring komunikasi bidang pertanian di Kabupaten Brebes.</li>
                    </ol>
                </div>
            </div>
          </header>
        </div>
      </section>
      <!-- #about-services -->

      <!--==========================
      Product Section
    ============================-->
      <section id="product">
        <div class="container">
          <header class="section-header">
            <h3>Produk Terbaru</h3>
          </header>

          <div class="row product-cols">
              @if (!empty($products) && count($products))
                @foreach ($products as $product)
                    <div class="col-md-3 wow fadeInLeft">
                        <div class="product-col">
                            <div class="img">
                                <img src="{{ asset('img/products/'.$product->foto) }}" alt="Foto Produk" class="img-fluid" />
                            </div>
                            <h2>{{ $product->nama }}</h2>
                            <p>{{ $product->tani->nama }}</p>
                            <p>Harga : Rp {{ number_format($product->harga_jual, 0, ',','.')}}</p>
                            <p>Kapasitas Produksi : {{ $product->kapasitas_produksi }}</p>
                            <a href="{{ route('home.product.show', $product->id) }}" class="btn-detail-produk">Lihat Produk</a>
                        </div>
                    </div>
                @endforeach
                <div class="col-12 text-center">
                    <a href="{{ route('home.product') }}" class="btn-semua-produk">Lihat Semua Produk</a>
                </div>
              @else
                <div class="col-12 text-center" style="padding:100px;">
                    <p class="text-center"><i>Tidak Ada Produk</i></p>
                </div>
              @endif



          </div>
        </div>
      </section>
      <!-- #product -->

      <!--==========================
      Partnership Section
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
      <!-- #partnership -->
    </main>

@endsection

@section('css')

<style>
    #product{
        background: url("{{asset('front-assets/img/intro-carousel/2.jpg')}}") center top no-repeat fixed;
    }
</style>

@endsection
