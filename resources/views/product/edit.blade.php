
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
                                    <h4 class="card-title">Edit Data Product</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="px-3">
                                    <form class="form form-horizontal" method="POST" action="{{ route('product.update', $product->id) }}" enctype="multipart/form-data">
                                        @csrf
                                        @method('PATCH')
                                        <div class="form-body">
                                            <h4 class="form-section">
                                                <i class="icon-users"></i> Edit Data product {{ $product->nama }}</h4>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control">Jenis Organisasi</label>
                                                <div class="col-md-9">
                                                    <select name="jenis_organisasi" class="form-control {{ $errors->has('jenis_organisasi') ? 'has-error':'' }}" required>
                                                        <option value="" style="display:none;">- Pilih Jenis -</option>
                                                        <option value="Kelompok product" {{ $product->jenis_organisasi == 'Kelompok product' ? 'selected':'' }}>Kelompok product</option>
                                                        <option value="Kelompok Wanita product" {{ $product->jenis_organisasi == 'Kelompok Wanita product' ? 'selected':'' }}>Kelompok Wanita product</option>
                                                    </select>

                                                    @if ($errors->has('jenis_organisasi'))
                                                        <p class="text-danger">{{ $errors->first('jenis_organisasi') }}</p>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control">Nama Organisasi</label>
                                                <div class="col-md-9">
                                                <input type="text" class="form-control {{ $errors->has('nama') ? 'has-error':'' }}" name="nama" placeholder="Masukan nama ..." value="{{ $product->nama }}" required>

                                                    @if ($errors->has('nama'))
                                                        <p class="text-danger">{{ $errors->first('nama') }}</p>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-3 label-control">Nama Ketua</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control {{ $errors->has('ketua') ? 'has-error':'' }}" name="ketua" placeholder="Masukan nama ketua ..." value="{{ $product->ketua }}" required>

                                                    @if ($errors->has('ketua'))
                                                        <p class="text-danger">{{ $errors->first('ketua') }}</p>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-3 label-control">Nomor Telp/HP</label>
                                                <div class="col-md-9">
                                                    <input type="number" class="form-control {{ $errors->has('nomor_hp') ? 'has-error':'' }}" name="nomor_hp" placeholder="Masukan nomor telp/HP ..." value="{{ $product->nomor_hp }}" required>

                                                    @if ($errors->has('nomor_hp'))
                                                        <p class="text-danger">{{ $errors->first('nomor_hp') }}</p>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-3 label-control">Jumlah Anggota</label>
                                                <div class="col-md-9">
                                                    <input type="number" class="form-control {{ $errors->has('jumlah_anggota') ? 'has-error':'' }}" name="jumlah_anggota" placeholder="1" value="{{ $product->jumlah_anggota }}" required>

                                                    @if ($errors->has('jumlah_anggota'))
                                                        <p class="text-danger">{{ $errors->first('jumlah_anggota') }}</p>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-3 label-control">Logo</label>
                                                <div class="col-md-9">
                                                    <label id="projectinput8" class="file center-block">
                                                        <img src="{{ asset('img/product/'.$product->logo) }}" alt="Logo" style="width: 100px;">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-3 label-control">Ganti Logo</label>
                                                <div class="col-md-9">
                                                    <label id="projectinput8" class="file center-block">
                                                        <input class="{{ $errors->has('logo') ? 'has-error':'' }}" type="file" id="logo" name="logo">
                                                        <p class="small">200 x 200</p>

                                                        @if ($errors->has('logo'))
                                                            <p class="text-danger">{{ $errors->first('logo') }}</p>
                                                        @endif
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="projectinput2">Alamat</label>
                                                <div class="col-md-9">
                                                    <textarea type="text" class="form-control" name="address" placeholder="Masukan alamat ..." required>{{ $product->address }}</textarea>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="projectinput2">Kegiatan Rutin</label>
                                                <div class="col-md-9">
                                                    <textarea type="text" class="form-control" name="kegiatan_rutin" placeholder="Masukan kegiatan rutin ..." required>{{ $product->kegiatan_rutin }}</textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-actions">
                                            <a href="{{ route('product.index') }}" class="btn btn-warning mr-1">
                                                <i class="icon-arrow-left"></i> Kembali
                                            </a>
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
