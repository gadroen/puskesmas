@extends('layouts.admin')
@section('title', 'Master Asuransi')

@section('main-content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Master Asuransi</h1>
    {{-- <p class="mb-4">Data berikut adalah data master perusahaan asuransi yang mempunyai kerja sama</a>.</p> --}}
    @if ($errors->any())
        <div class="alert alert-danger border-left-danger" role="alert">
            <ul class="pl-4 my-2">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table mr-1"></i>
           Data master perusahaan asuransi yang bekerja sama.
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <form action="/asuransi/cari" method="GET">
                    <div class="col-8 float-left">
                        <a href="/asuransi/create" class="btn btn-primary my-1">Tambah data asuransi</a>
                       
                    </div>                    
                    <div class="col-4 float-right">
                        <input type="search" class="form-control form-control-sm "  name="cari" placeholder="Cari Asuransi .." value="{{ old('cari') }}">
                    </div>
                    
                    
                </form>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>					
                            <th>No</th>
                            <th>Kode</th>
                            <th class="text-nowrap">Penanggung Jawab</th>
                            <th class="text-nowrap">Nama Perusahaan</th>
                            <th class="text-nowrap">Alamat Asuransi</th>
                            <th>No Telp</th>
                            <th>Attn</th>
                            <th>Action</th>
                        </tr>
                    </thead>                   
                    <tbody>
                        <?php $count = 1; ?> 
                        @foreach ($asuransis as $asuransi)
                        <tr>
                            <td>{{$asuransis ->perPage()*($asuransis->currentPage()-1)+$count}}</td>
                            <td>{{ $asuransi -> kd_pj}}</td>
                            <td>{{ $asuransi -> png_jawab}}</td>
                            <td>{{ $asuransi -> nama_perusahaan}}</td>
                            <td>{{ $asuransi -> alamat_asuransi}}</td>
                            <td>{{ $asuransi -> no_telp}}</td>
                            <td>{{ $asuransi -> attn}}</td>
                            
                            <td>
                                <a href="/asuransi/{{ $asuransi -> id }}/edit" class="badge badge-primary">Edit</a>

                                <form action="/asuransi/{{$asuransi->id}}" method="post" class="d-inline">
                                    @method('delete')
                                    @csrf                                
                                    <button type="submit" class="badge badge-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        <?php $count++; ?>
                        @endforeach
                        {{-- <br/>
                        Halaman : {{ $ass->currentPage() }} <br/>
                        Jumlah Data : {{ $ass->total() }} <br/>
                        Data Per Halaman : {{ $ass->perPage() }} <br/> --}}
                     
                     
                        
                       
                        
                    </tbody>
                </table>
                <div class="float-left">{{ $asuransis->links() }}</div>
            </div>
        </div>
    </div>
    <script >
        // Call the dataTables jQuery plugin
    $(document).ready(function() {
      $('#dataTable').DataTable();
    });
    
    </script>
@endsection
