@extends('templates.master')

@section('content')
    <section id="login">
        <div class="container-fluid">
            <div class="row full-height-vh">
                <div class="col-12 d-flex align-items-center justify-content-center gradient-aqua-marine" style="background: #fff;">
                    <div class="card px-4 py-2 box-shadow-2 width-400">
                        <div class="card-header text-center">
                        <img src="{{ asset('img/logo/logo.png') }}" alt="company-logo" class="mb-3" width="80">
                            <h4 class="text-uppercase text-bold-400 grey darken-1">Login</h4>
                        </div>
                        <div class="card-body">
                            <div class="card-block">
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <input type="email" class="form-control form-control-lg{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" id="email" placeholder="Email Address" required email autofocus>

                                            @if ($errors->has('email'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <input type="password" class="form-control form-control-lg{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" id="password" placeholder="Password" required>

                                            @if ($errors->has('password'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="text-center col-md-12">
                                            <button type="submit" class="btn btn-danger px-4 py-2 text-uppercase white font-small-4 box-shadow-2 border-0">Masuk</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
