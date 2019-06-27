@extends('templates.master-front')

@section('content')
    <header id="header">
        <div class="container-fluid">
            <div id="logo" class="pull-left">
                <a href="#intro" class="scrollto"><img src="{{asset('img/logo/tanibrebes.png')}}"/></a>
                <!-- Uncomment below if you prefer to use an image logo -->
            </div>
            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li><a href="{{ route('home') }}">Beranda</a></li>
                    <li class="active"><a href="{{ route('home.tani') }}">Data Tani</a></li>
                    <li><a href="{{ route('home.product') }}">Produk Unggulan</a></li>
                    <li><a href="#about">Tentang Kami</a></li>
                    <li><a href="{{ route('login') }}">Login</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main id="main">
      <!--==========================
      Product Section
    ============================-->
      <section id="product">
        <div class="container">
          <header class="section-header">
            <h3>Data Tani</h3>
          </header>

          <div class="row product-cols">
              <div class="table-responsive">
                  @php
                      $no = 1;
                  @endphp
                  <table id="{{ !empty($tanis) ? 'table-dt':'' }}" class="table table-bordered table-hover table-striped table-responsive">
                      <thead class="thead-dark">
                          <tr>
                              <th>No</th>
                              <th>Logo</th>
                              <th>Nama Kelompok Tani</th>
                              <th>Jenis Organisasi</th>
                              <th>Jumlah Anggota</th>
                              <th>Ketua</th>
                              <th>Kontak</th>
                          </tr>
                      </thead>
                      <tbody>
                          @if (!empty($tanis))
                            @foreach ($tanis as $tani)
                                <tr class="click-tani" data-href="{{route('home.tani.show', $tani->id)}}">
                                    <td>{{$no++}}</td>
                                    <td><img src="{{ asset('img/tani/'.$tani->logo) }}" alt="Logo KT" style="width:50px;"></td>
                                    <td>{{ $tani->nama }}</td>
                                    <td>{{ $tani->jenis_organisasi }}</td>
                                    <td class="text-right">{{ $tani->jumlah_anggota }}</td>
                                    <td class="text-right">{{ $tani->ketua }}</td>
                                    <td>{{ $tani->nomor_hp }}</td>
                                </tr>
                            @endforeach
                          @else
                                <tr>
                                    <td colspan="5" class="text-center"><i>Tidak Ada Data</i></td>
                                </tr>
                          @endif
                      </tbody>
                  </table>
              </div>
          </div>
        </div>
      </section>
      <!-- #product -->
    </main>

@endsection

@section('css')
    <link rel="stylesheet" href="{{asset('app-assets/vendors/css/tables/datatable/datatables.min.css')}}">
    <style>
        #product{
            background: url("{{asset('front-assets/img/intro-carousel/2.jpg')}}") center top no-repeat fixed;
        }
        .product-cols{
            padding: 100px;
        }
        tr:hover{
            cursor: pointer;
        }
        @media (max-width: 768px){
            .product-cols{
                padding: 0px;
            }
        }
    </style>
@endsection

@section('js')
    <script src="{{ asset('app-assets/vendors/js/datatable/datatables.min.js') }}"></script>
    <script>
        $(function(){
            $("#table-dt").dataTable();
            $(".click-tani").click(function(){
                location.href = $(this).data("href");
            });
        });
    </script>
@endsection
