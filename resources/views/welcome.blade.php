
@extends('templates.master')

@section('content')

      <div class="main-panel">
        <div class="main-content">
          <div class="content-wrapper">
            <div class="container-fluid"><!--Statistics cards Starts-->
                <div class="row">
                    <div class="col-sm-6 col-12">
                      <div class="card">
                        <div class="card-body">
                          <div class="px-3 py-3">
                            <div class="media">
                              <div class="media-body text-left align-self-center">
                                <i class="icon-users info font-large-2 float-left"></i>
                              </div>
                              <div class="media-body text-right">
                                <h3>{{$tani_count}}</h3>
                                <span>Kelompok Tani</span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-12">
                      <div class="card">
                        <div class="card-body">
                          <div class="px-3 py-3">
                            <div class="media">
                              <div class="media-body text-left align-self-center">
                                <i class="icon-graph warning font-large-2 float-left"></i>
                              </div>
                              <div class="media-body text-right">
                                <h3>{{ $product_count }}</h3>
                                <span>Jumlah Produk</span>
                              </div>
                            </div>
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
        $("#menu-dashboard").addClass("active");
    </script>
@endsection
