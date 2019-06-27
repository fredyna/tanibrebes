
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
                                <div class="card-title-wrap bar-success">
                                    <h4 class="card-title">Data Produk</h4>
                                </div>
                            </div>
                            <div class="card-body">

                                <div class="card-block table-responsive">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <a href="{{ route('product.create') }}" class="btn btn-success btn-sm">Tambah</a>
                                        </div>
                                        <div class="col-sm-6 offset-sm-2">
                                            <div class="form-group row">
                                                <label class="col-md-4 label-control">Kelompok Tani</label>
                                                <div class="col-md-8">
                                                    <select id="select_tani" class="form-control">
                                                        <option value="" style="display:none;">--Pilih Kelompok Tani--</option>
                                                        @if (!empty($tani_id))
                                                            @foreach ($tanis as $tani)
                                                                <option value="{{$tani->id}}" {{ $tani->id == $tani_id ? 'selected':'' }}>{{ $tani->nama }}</option>
                                                            @endforeach
                                                        @else
                                                            @foreach ($tanis as $tani)
                                                                <option value="{{$tani->id}}">{{ $tani->nama }}</option>
                                                            @endforeach
                                                        @endif
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    @php
                                        $no = 1;
                                    @endphp
                                    <table id="{{ empty($products) ? '':'table-dt' }}" class="table table-striped table-hover table-sm">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Kelompok Tani</th>
                                                <th>Kapasitas Produksi</th>
                                                <th>foto</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if (!empty($products))
                                                @foreach ($products as $product)
                                                    <tr>
                                                        <td>{{ $no++ }}</td>
                                                        <td>{{ $product->nama }}</td>
                                                        <td>{{ $product->tani->nama }}</td>
                                                        <td class="text-right">{{ $product->kapasitas_produksi }}</td>
                                                        <td class="text-center">
                                                            <img src="{{ asset('img/products/'.$product->foto) }}" alt="Foto Produk" style="width: 100px;">
                                                        </td>
                                                        <td class="text-center">
                                                            <a href="{{ route('product.show', $product->id) }}" class="info p-0" data-original-title="" title="">
                                                                <i class="fa fa-eye font-medium-3 mr-2"></i>
                                                            </a>
                                                            <a href="{{route('product.edit', $product->id)}}" class="success p-0" data-original-title="" title="">
                                                                <i class="fa fa-pencil font-medium-3 mr-2"></i>
                                                            </a>
                                                            <a href="javascript:void(0)" onclick="hapusData({{ $product->id }})" class="danger p-0" data-original-title="" title="">
                                                                <i class="fa fa-trash font-medium-3 mr-2"></i>
                                                            </a>

                                                            <form id="product-{{ $product->id }}" action="{{ route('tani.destroy', $product->id) }}" method="post" style="display:none;">
                                                                @csrf
                                                                @method('DELETE')
                                                                <input type="hidden" name="idProduct-{{ $product->id }}" value="">
                                                                <input type="submit" value="OK">
                                                            </form>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @else
                                                <tr>
                                                    <td colspan="6" class="text-center"><i>Tidak Ada Data</i></td>
                                                </tr>
                                            @endif
                                        </tbody>
                                    </table>
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
        $(function(){
            $("#table-dt").dataTable();
            $("#select_tani").change(function(){
                let tani_id = $("#select_tani").val();
                location.href = "{{ route('product.index') . '?tani_id=' }}" + tani_id;
            });
        });
        function hapusData(id){
            let y = confirm('Are you sure to delete ?');
            if(y==true){
                $("#product-"+id).submit();
            }
        }
    </script>
@endsection
