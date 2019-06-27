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
                <li><a href="{{ route('home') }}">Beranda</a></li>
                <li><a href="{{ route('home.tani') }}">Data Tani</a></li>
                <li class="active"><a href="{{ route('home.product') }}">Produk Unggulan</a></li>
                <li><a href="#about">Tentang Kami</a></li>
                <li><a href="{{ route('login') }}">Login</a></li>
            </ul>
        </nav>
    </div>
</header>


    <main id="main">
      <!--==========================
      Product Section
    ============================-->
      <section id="product">
        <div class="container">
          <header class="section-header">
            <h3>Produk Terbaru</h3>
          </header>

          <div class="row product-cols">
              @if (!$products && !empty($products))
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
                    {{ $products->links() }}
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
    </main>

@endsection

@section('css')

<style>
    #product{
        background: url("{{asset('front-assets/img/intro-carousel/2.jpg')}}") center top no-repeat fixed;
    }
    .page-item.active .page-link{
        background-color: #18d26e;
        border-color: #18d26e;
    }

    .page-link{
        color: #18d26e;
    }

    .pagination{
        float: right!important;
    }
</style>

@endsection
