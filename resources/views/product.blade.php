@extends('templates.master-front')

@section('content')
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
                            <a href="#" class="btn-detail-produk">Lihat Produk</a>
                        </div>
                    </div>
                @endforeach
              @else

              @endif


            <div class="col-12 text-center">
              <a href="#" class="btn-semua-produk">Lihat Semua Produk</a>
            </div>
          </div>
        </div>
      </section>
      <!-- #product -->
    </main>

@endsection
