
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
                                    <h4 class="card-title">Tentang Kami</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="px-3">
                                    <form class="form form-horizontal" method="POST" action="{{ route('about.store') }}">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $about->id }}">
                                        <div class="form-body">
                                            <h4 class="form-section">
                                                <i class="icon-settings"></i> Form Tentang Kami</h4>
                                            <div class="form-group row {{ $errors->has('name') ? 'has-error':'' }}">
                                                <label class="col-md-3 label-control" for="name">Nama Aplikasi</label>
                                                <div class="col-md-9">
                                                    <input type="text" id="name" class="form-control" name="name" value="{{ $about->name }}">

                                                    @if ($errors->has('name'))
                                                        <p class="text-danger">{{ $errors->first('name') }}</p>
                                                    @endif
                                                </div>
                                            </div>


                                            <div class="form-group row {{ $errors->has('phone') ? 'has-error':'' }}">
                                                <label class="col-md-3 label-control" for="phone">No Telp/HP </label>
                                                <div class="col-md-9">
                                                    <input type="text" id="phone" class="form-control" name="phone" value="{{ $about->phone }}">

                                                    @if ($errors->has('phone'))
                                                        <p class="text-danger">{{ $errors->first('phone') }}</p>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="form-group row {{ $errors->has('email') ? 'has-error':'' }}">
                                                <label class="col-md-3 label-control" for="email">E-mail: </label>
                                                <div class="col-md-9">
                                                    <input type="email" id="email" class="form-control" name="email" value="{{ $about->email }}">

                                                    @if ($errors->has('email'))
                                                        <p class="text-danger">{{ $errors->first('email') }}</p>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="form-group row {{ $errors->has('alamat') ? 'has-error':'' }}">
                                                <label class="col-md-3 label-control" for="address">Alamat</label>
                                                <div class="col-md-9">
                                                    <textarea id="address" rows="5" class="form-control" name="address">{{ $about->address }}</textarea>

                                                    @if ($errors->has('address'))
                                                        <p class="text-danger">{{ $errors->first('address') }}</p>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="form-group row {{ $errors->has('description') ? 'has-error':'' }}">
                                                <label class="col-md-3 label-control" for="description">Deskripsi</label>
                                                <div class="col-md-9">
                                                    <textarea id="description" rows="5" class="form-control" name="description">{{ $about->description }}</textarea>

                                                    @if ($errors->has('description'))
                                                        <p class="text-danger">{{ $errors->first('description') }}</p>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-actions">
                                            <a href="{{ route('about.index') }}" class="btn btn-warning mr-1">
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
        $("#menu-setting-about").addClass("active");
    </script>
@endsection
