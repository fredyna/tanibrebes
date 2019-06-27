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
            <h3>Detail Produk</h3>
          </header>

          <div class="row product-cols">
                <div class="row row-no-gutters">
                    <div class="col-sm-6">
                        <div class="facts-img">
                            <img src="{{ asset('img/products/'.$product->foto) }}" alt="Foto Produk" class="img-fluid">
                        </div>
                    </div>
                    <div id="product-desc" class="col-sm-6">
                        <h2>{{ $product->nama }}</h2>
                        <h5>{{ $product->tani->nama }}</h5>
                        <p class="detail">Harga jual : Rp {{ number_format($product->harga_jual, 0, ',','.') }}</p>
                        <p class="detail">Harga agen : Rp. {{ number_format($product->harga_agen, 0, ',','.') }}</p>
                        <p class="detail">Kapasitas Produksi : {{ $product->kapasitas_produksi . ' ' . $product->satuan_produksi }}</p>

                        <div class="row">
                            <div class="col-sm-4"><span>Panjang : {{ $product->panjang ? $product->panjang . ' cm' : '-'}}</span></div>
                            <div class="col-sm-4"><span>Lebar : {{ $product->lebar ? $product->lebar . ' cm' : '-'}}</span></div>
                            <div class="col-sm-4"><span>Tinggi : {{ $product->tinggi ? $product->tinggi . ' cm' : '-'}}</span></div>
                        </div>
                        <br>
                        <p class="detail">Untuk pemesanan hubungi : <br><b>{{ $about->phone }}</b></p>
                    </div>
                </div>
          </div>
        </div>
      </section>
      <!-- #product -->
    </main>

@endsection

@section('css')
    <link rel="stylesheet" href="{{asset('app-assets/vendors/css/tables/datatable/datatables.min.css')}}">
    <style>
        #product{
            background: url("{{asset('front-assets/img/intro-carousel/2.jpg')}}") center top no-repeat fixed;
        }
        #product-desc{
            padding: 30px;
        }
        .product-cols{
            padding: 100px;
        }
        tr:hover{
            cursor: pointer;
        }
        p.detail{
            margin-bottom: 10px;
        }
        @media (max-width: 768px){
            .product-cols{
                padding: 0px;
            }
        }
    </style>
@endsection
