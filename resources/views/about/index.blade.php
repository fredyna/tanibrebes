
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
                                <div class="card-block table-responsive">
                                    <table class="table table-striped" style="width: 100%;">
                                        <tr>
                                            <th style="width: 30%;">Nama Aplikasi</th>
                                            <td style="width: 5%;">:</td>
                                            <td style="width: 65%;">{{ $about->name }}</td>
                                        </tr>
                                        <tr>
                                            <th style="width: 30%;">No Telp/HP</th>
                                            <td style="width: 5%;">:</td>
                                            <td style="width: 65%;">{{ $about->phone }}</td>
                                        </tr>
                                        <tr>
                                            <th style="width: 30%;">Email</th>
                                            <td style="width: 5%;">:</td>
                                            <td style="width: 65%;">{{ $about->email }}</td>
                                        </tr>
                                        <tr>
                                            <th style="width: 30%;">Alamat</th>
                                            <td style="width: 5%;">:</td>
                                            <td style="width: 65%;">{{ $about->address }}</td>
                                        </tr>
                                        <tr>
                                            <th style="width: 30%;">Deskripsi</th>
                                            <td style="width: 5%;">:</td>
                                            <td style="width: 65%;">{{ $about->description }}</td>
                                        </tr>
                                    </table>

                                    <a href="{{ route('about.show', $about->id) }}" class="btn btn-success float-right"><i class="fa fa-pencil font-medium-3 mr-2"></i> Edit</a>
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
