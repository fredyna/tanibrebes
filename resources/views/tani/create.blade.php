
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
                                    <h4 class="card-title">Tambah Data Tani</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="px-3">
                                    <form class="form form-horizontal" method="POST" action="{{ route('tani.store') }}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-body">
                                            <h4 class="form-section">
                                                <i class="icon-users"></i> Tambah Data Tani</h4>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control">Jenis Organisasi</label>
                                                <div class="col-md-9">
                                                <select name="jenis_organisasi" class="form-control {{ $errors->has('jenis_organisasi') ? 'has-error':'' }}" required>
                                                        <option value="" style="display:none;">- Pilih Jenis -</option>
                                                        <option value="Kelompok Tani">Kelompok Tani</option>
                                                        <option value="Kelompok Wanita Tani">Kelompok Wanita Tani</option>
                                                    </select>

                                                    @if ($errors->has('jenis_organisasi'))
                                                        <p class="text-danger">{{ $errors->first('jenis_organisasi') }}</p>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control">Nama Organisasi</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control {{ $errors->has('jenis_organisasi') ? 'has-error':'' }}" name="nama" placeholder="Masukan nama ..." required>

                                                    @if ($errors->has('nama'))
                                                        <p class="text-danger">{{ $errors->first('nama') }}</p>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-3 label-control">Nama Ketua</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control {{ $errors->has('ketua') ? 'has-error':'' }}" name="ketua" placeholder="Masukan nama ketua ..." required>

                                                    @if ($errors->has('ketua'))
                                                        <p class="text-danger">{{ $errors->first('ketua') }}</p>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-3 label-control">Nomor Telp/HP</label>
                                                <div class="col-md-9">
                                                    <input type="number" class="form-control {{ $errors->has('nomor_hp') ? 'has-error':'' }}" name="nomor_hp" placeholder="Masukan nomor telp/HP ..." required>

                                                    @if ($errors->has('nomor_hp'))
                                                        <p class="text-danger">{{ $errors->first('nomor_hp') }}</p>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-3 label-control">Jumlah Anggota</label>
                                                <div class="col-md-9">
                                                    <input type="number" class="form-control {{ $errors->has('jumlah_anggota') ? 'has-error':'' }}" name="jumlah_anggota" placeholder="1" required>

                                                    @if ($errors->has('jumlah_anggota'))
                                                        <p class="text-danger">{{ $errors->first('jumlah_anggota') }}</p>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-3 label-control">Pilih Logo</label>
                                                <div class="col-md-9">
                                                    <label id="projectinput8" class="file center-block">
                                                        <input class="{{ $errors->has('logo') ? 'has-error':'' }}" type="file" id="logo" name="logo" required>

                                                        @if ($errors->has('logo'))
                                                            <p class="text-danger">{{ $errors->first('logo') }}</p>
                                                        @endif
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="projectinput2">Alamat</label>
                                                <div class="col-md-9">
                                                    <textarea type="text" class="form-control" name="address" placeholder="Masukan alamat ..." required></textarea>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="projectinput2">Kegiatan Rutin</label>
                                                <div class="col-md-9">
                                                    <textarea type="text" class="form-control" name="kegiatan_rutin" placeholder="Masukan kegiatan rutin ..." required></textarea>
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
        $("#menu-tani").addClass("active");
    </script>
@endsection
