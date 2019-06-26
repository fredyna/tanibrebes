
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
                                    <h4 class="card-title">Data Kelompok Tani</h4>
                                </div>
                            </div>
                            <div class="card-body">

                                <div class="card-block table-responsive">
                                    <a href="{{ route('tani.create') }}" class="btn btn-success btn-sm">Tambah</a>

                                    @php
                                        $no = 1;
                                    @endphp
                                    <table id="table-dt" class="table table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Jenis</th>
                                                <th>Ketua</th>
                                                <th>Nomor Telp/HP</th>
                                                <th>Jumlah Anggota</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if (!empty($tanis))
                                                @foreach ($tanis as $tani)
                                                    <tr>
                                                        <td>{{ $no++ }}</td>
                                                        <td>{{ $tani->nama }}</td>
                                                        <td>{{ $tani->jenis_organisasi }}</td>
                                                        <td>{{ $tani->ketua }}</td>
                                                        <td>{{ $tani->nomor_hp }}</td>
                                                        <td>{{ $tani->jumlah_anggota }}</td>
                                                        <td class="text-center">
                                                            <a href="{{ route('tani.show', $tani->id) }}" class="info p-0" data-original-title="" title="">
                                                                <i class="fa fa-eye font-medium-3 mr-2"></i>
                                                            </a>
                                                            <a href="{{route('tani.edit', $tani->id)}}" class="success p-0" data-original-title="" title="">
                                                                <i class="fa fa-pencil font-medium-3 mr-2"></i>
                                                            </a>
                                                            <a href="javascript:void(0)" onclick="hapusData({{ $tani->id }})" class="danger p-0" data-original-title="" title="">
                                                                <i class="fa fa-trash font-medium-3 mr-2"></i>
                                                            </a>

                                                            <form id="tani-{{ $tani->id }}" action="{{ route('tani.destroy', $tani->id) }}" method="post" style="display:none;">
                                                                @csrf
                                                                @method('DELETE')
                                                                <input type="hidden" name="idTani-{{ $tani->id }}" value="">
                                                                <input type="submit" value="OK">
                                                            </form>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @else
                                                <tr>
                                                    <td colspan="8" class="text-center"><i>Tidak Ada Data</i></td>
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
        $("#menu-tani").addClass("active");
        $(function(){
            $("#table-dt").dataTable();
        });
        function hapusData(id){
            let y = confirm('Are you sure to delete ?');
            if(y==true){
                $("#tani-"+id).submit();
            }
        }
    </script>
@endsection
