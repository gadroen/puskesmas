@extends('layouts.admin')
@section('title', 'Antrian Manual')

@section('main-content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Antrian Manual</h1>
    {{-- <p class="mb-4">Data berikut adalah data master perusahaan antrian yang mempunyai kerja sama</a>.</p> --}}
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
           Data Antrian
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <form action="/antrian/cari" method="GET">
                    <div class="col-8 float-left">
                        <a href="/antrian/create" class="btn btn-primary my-1">Tambah Antrian</a>
                       
                    </div>                    
                    <div class="col-4 float-right">
                        <input type="search" class="form-control form-control-sm "  name="cari" placeholder="Cari antrian .." value="{{ old('cari') }}">
                    </div>
                    
                    
                </form>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>					
                            <th>No Antrian</th>
                            <th>Nama</th>
                            <th>Poliklinik</th>
                            <th>Action</th>
                           
                        </tr>
                    </thead>                   
                    <tbody>
                        <?php $count = 1; ?> 
                        @foreach ($antrians as $antrian)
                        <tr>
                            <td>{{$antrians ->perPage()*($antrians->currentPage()-1)+$count}}</td>
                            <td>{{ $antrian -> nama}}</td>
                            <td>{{ $antrian -> poliklinik}}</td>
                           
                            
                            
                            <td>
                                <a href="/antrian/{{ $antrian -> id }}/edit" class="badge badge-primary">Edit</a>

                                <form action="/antrian/{{$antrian->id}}" method="post" class="d-inline">
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
                {{-- <div class="float-left">{{ $antrians->links() }}</div> --}}
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
