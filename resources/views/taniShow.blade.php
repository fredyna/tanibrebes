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
                    <li class="active"><a href="{{ route('home.tani') }}">Data Tani</a></li>
                    <li><a href="{{ route('home.product') }}">Produk Unggulan</a></li>
                    <li><a href="#about">Tentang Kami</a></li>
                    <li><a href="{{ route('login') }}">Login</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main id="main">
      <!--==========================
      Tani Section
    ============================-->
      <section id="product">
        <div class="container">
          <header class="section-header">
            <h3>Detail Data Tani</h3>
          </header>

          <div class="row product-cols">
                <div class="col-sm-6 offset-sm-3">
                    <img id="logo" src="{{ asset('img/tani/'.$tani->logo) }}" alt="Logo" class="rounded mx-auto d-block">
                    <br>
                    <h2 class="text-center" style="color: #333;">{{ $tani->nama }}</h2>
                    <h5 class="text-center">({{ $tani->jenis_organisasi }})</h5>
                    <table class="" style="width:100%;">
                        <tr>
                            <th style="width:45%;">Nama Ketua</th>
                            <td style="width:10%;">:</td>
                            <td style="width:45%;">{{ $tani->ketua }}</td>
                        </tr>
                        <tr>
                            <th style="width:45%;">Nomor Telp/HP</th>
                            <td style="width:10%;">:</td>
                            <td style="width:45%;">{{ $tani->nomor_hp }}</td>
                        </tr>
                        <tr>
                            <th style="width:45%;">Jumlah Anggota</th>
                            <td style="width:10%;">:</td>
                            <td style="width:45%;">{{ $tani->jumlah_anggota }}</td>
                        </tr>
                        <tr>
                            <th style="width:45%;">Alamat</th>
                            <td style="width:10%;">:</td>
                            <td style="width:45%;">{{ $tani->address }}</td>
                        </tr>
                        <tr>
                            <th style="width:45%;">Kegiatan Rutin</th>
                            <td style="width:10%;">:</td>
                            <td style="width:45%;">{{ $tani->kegiatan_rutin }}</td>
                        </tr>
                    </table>
                </div>
          </div>
        </div>
      </section>
      <!-- #tani -->

      <!--==========================
      Product Section
        ============================-->
    <section id="product">
        <div class="container">
            <header class="section-header">
            <h3>Produk Unggulan</h3>
            </header>

            <div class="row product-cols">
                @if (!empty($products))
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
    <link rel="stylesheet" href="{{asset('app-assets/vendors/css/tables/datatable/datatables.min.css')}}">
    <style>
        #product{
            background: url("{{asset('front-assets/img/intro-carousel/2.jpg')}}") center top no-repeat fixed;
        }
        #logo{
            width: 200px;
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
            #logo{
                width: 100px;
            }
        }
    </style>
@endsection
