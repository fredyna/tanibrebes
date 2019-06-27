
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
                                    <h4 class="card-title">Detail Data Tani</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="px-3">
                                    <form class="form form-horizontal" method="POST" action="{{ route('tani.store') }}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-body">
                                            <h4 class="form-section">
                                                <i class="icon-doc"></i> Detail Data Tani {{ $tani->nama }}</h4>
                                            <div class="form-group row">
                                                <label class="col-md-4 label-control">Jenis Organisasi</label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control-plaintext" value="{{ $tani->jenis_organisasi }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-4 label-control">Nama Organisasi</label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control-plaintext" value="{{ $tani->nama }}">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-4 label-control">Nama Ketua</label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control-plaintext" value="{{ $tani->ketua }}">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-4 label-control">Nomor Telp/HP</label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control-plaintext" value="{{ $tani->nomor_hp }}">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-4 label-control">Jumlah Anggota</label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control-plaintext" value="{{ $tani->jumlah_anggota }}">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-4 label-control">Logo</label>
                                                <div class="col-md-8">
                                                    <label id="projectinput8" class="file center-block">
                                                    <img src="{{ asset('img/tani/'.$tani->logo) }}" alt="Logo" style="width:100px;">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-4 label-control" for="projectinput2">Alamat</label>
                                                <div class="col-md-8">
                                                    <textarea type="text" class="form-control-plaintext">{{ $tani->address }}</textarea>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-md-4 label-control" for="projectinput2">Kegiatan Rutin</label>
                                                <div class="col-md-8">
                                                    <textarea type="text" class="form-control-plaintext">{{ $tani->kegiatan_rutin }}</textarea>
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
        $("#menu-tani").addClass("active");
    </script>
@endsection
