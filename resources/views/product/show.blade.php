
@extends('templates.master')

@section('content')

      <div class="main-panel">
        <div class="main-content">
          <div class="content-wrapper">
            <div class="container-fluid"><!--Statistics cards Starts-->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title-wrap bar-info">
                                    <h4 class="card-title">Detail Data Produk</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="px-3">
                                    <form class="form form-horizontal" method="POST" action="{{ route('product.store') }}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-body">
                                            <h4 class="form-section">
                                                <i class="icon-doc"></i> Detail Data Produk {{ $product->nama }}
                                            </h4>

                                            <div class="form-group row">
                                                <div class="col-md-8 offset-md-4">
                                                    <img src="{{ asset('img/products/'.$product->foto) }}" alt="Foto" style="width:200px;">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-4 label-control">Kelompok Tani</label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control-plaintext" value="{{ $product->tani->nama }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-4 label-control">Nama Produk</label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control-plaintext" value="{{ $product->nama }}">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-4 label-control">Kapasitas Produksi</label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control-plaintext" value="{{ $product->kapasitas_produksi . ' ' . $product->satuan_produksi }}">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-4 label-control">Harga Agen</label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control-plaintext" value="Rp {{ number_format($product->harga_agen, 0, ',', '.') }}">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-4 label-control">Harga Jual</label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control-plaintext" value="Rp {{ number_format($product->harga_jual, 0, ',', '.') }}">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-4 label-control">Panjang</label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control-plaintext" value="{{ $product->panjang }} cm">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-4 label-control">Lebar</label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control-plaintext" value="{{ $product->lebar }} cm">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-4 label-control">Tinggi</label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control-plaintext" value="{{ $product->tinggi }} cm">
                                                </div>
                                            </div>

                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>

@endsection

@section('js')
    <script>
        $("#menu-product").addClass("active");
    </script>
@endsection
