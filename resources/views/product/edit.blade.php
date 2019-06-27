
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
                                    <h4 class="card-title">Edit Data Produk</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="px-3">
                                    <form class="form form-horizontal" method="POST" action="{{ route('product.update', $product->id) }}" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-body">
                                            <h4 class="form-section">
                                                <i class="icon-users"></i> Edit Data Produk {{ $product->nama }}
                                            </h4>

                                            <div class="form-group row">
                                                <div class="col-md-9 offset-md-3">
                                                    <img src="{{ asset('img/products/'.$product->foto) }}" alt="Foto" style="width:200px;">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-3 label-control">Kelompok Tani</label>
                                                <div class="col-md-9">
                                                    <select name="tani_id" class="form-control {{ $errors->has('tani_id') ? 'has-error':'' }}" required>
                                                        <option value="" style="display:none;">- Pilih Kelompok Tani -</option>
                                                        @foreach ($tanis as $tani)
                                                            <option value="{{ $tani->id }}" {{ $tani->id == $product->tani_id ? 'selected':'' }}>{{ $tani->nama }}</option>
                                                        @endforeach
                                                    </select>

                                                    @if ($errors->has('tani_id'))
                                                        <p class="text-danger">{{ $errors->first('tani_id') }}</p>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control">Nama Produk</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control {{ $errors->has('nama') ? 'has-error':'' }}" name="nama" placeholder="Masukan nama produk ..." value="{{ $product->nama }}" required>

                                                    @if ($errors->has('nama'))
                                                        <p class="text-danger">{{ $errors->first('nama') }}</p>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-3 label-control">Kapasitas Produksi</label>
                                                <div class="col-md-9">
                                                    <input type="number" class="form-control {{ $errors->has('kapasitas_produksi') ? 'has-error':'' }}" name="kapasitas_produksi" placeholder="0" min="0" value="{{ $product->kapasitas_produksi }}" required>

                                                    @if ($errors->has('kapasitas_produksi'))
                                                        <p class="text-danger">{{ $errors->first('kapasitas_produksi') }}</p>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-3 label-control">Harga Agen</label>
                                                <div class="col-md-9">
                                                    <input type="number" class="form-control {{ $errors->has('harga_agen') ? 'has-error':'' }}" name="harga_agen" placeholder="0" min="0" value="{{ $product->harga_agen }}" required>

                                                    @if ($errors->has('harga_agen'))
                                                        <p class="text-danger">{{ $errors->first('harga_agen') }}</p>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-3 label-control">Harga Jual</label>
                                                <div class="col-md-9">
                                                    <input type="number" class="form-control {{ $errors->has('harga_jual') ? 'has-error':'' }}" name="harga_jual" placeholder="0" min="0" value="{{ $product->harga_jual }}" required>

                                                    @if ($errors->has('harga_jual'))
                                                        <p class="text-danger">{{ $errors->first('harga_jual') }}</p>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-3 label-control">Panjang</label>
                                                <div class="col-md-9">
                                                    <input type="number" class="form-control {{ $errors->has('panjang') ? 'has-error':'' }}" name="panjang" placeholder="0" min="0" value="{{ $product->panjang }}">

                                                    @if ($errors->has('panjang'))
                                                        <p class="text-danger">{{ $errors->first('panjang') }}</p>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-3 label-control">Lebar</label>
                                                <div class="col-md-9">
                                                    <input type="number" class="form-control {{ $errors->has('lebar') ? 'has-error':'' }}" name="lebar" placeholder="0" min="0" value="{{ $product->lebar }}">

                                                    @if ($errors->has('lebar'))
                                                        <p class="text-danger">{{ $errors->first('lebar') }}</p>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-3 label-control">Tinggi</label>
                                                <div class="col-md-9">
                                                    <input type="number" class="form-control {{ $errors->has('tinggi') ? 'has-error':'' }}" name="tinggi" placeholder="0" min="0" value="{{ $product->tinggi }}">

                                                    @if ($errors->has('tinggi'))
                                                        <p class="text-danger">{{ $errors->first('tinggi') }}</p>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-3 label-control">Ganti Foto Produk</label>
                                                <div class="col-md-9">
                                                    <label id="projectinput8" class="file center-block">
                                                        <input class="{{ $errors->has('foto') ? 'has-error':'' }}" type="file" id="foto" name="foto">
                                                        <p class="small">512 x 341</p>

                                                        @if ($errors->has('foto'))
                                                            <p class="text-danger">{{ $errors->first('foto') }}</p>
                                                        @endif
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-actions">
                                            <button type="reset" class="btn btn-danger mr-1">
                                                <i class="icon-trash"></i> Cancel
                                            </button>
                                            <button type="submit" class="btn btn-success">
                                                <i class="icon-note"></i> Save
                                            </button>
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
