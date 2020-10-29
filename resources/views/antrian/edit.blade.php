@extends('layouts.admin')
@section('title', 'Edit Antrian')

@section('main-content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Antrian</h1>
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

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table mr-1"></i>
           Ubah data antrian
        </div>
        <div class="card-body">
            <form method="post" action="/antrian/{{$antrian->id}}">
                @method('patch')
                
                @csrf
                <div class="form-group"> 
                  <label for="nama_pasien">Nama Pasien</label>
                <input type="text" class="form-control @error('nama_pasien') is-invalid @enderror" id="nama_pasien" name="nama_pasien" placeholder="Masukkan Nama Pasien" value="{{$antrian->nama}}">
                @error('nama_pasien')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
                <div class="form-group"> 
                  <label for="poli">Poli Tujuan</label>
                  <input type="text" class="form-control @error('poli') is-invalid @enderror" id="poli" name="poli" placeholder="Masukkan nama asuransi penanggung jawab"  value="{{ $antrian->poliklinik}}">
                  @error('poli')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
               
                <div class="form-group"> 
                  <input type="hidden" class="form-control" name="created_by" id="created_by" value="{{Auth::id()}}">
                </div>
                <div class="form-group"> 
                  <input type="hidden" class="form-control" name="updated_by" id="updated_by" value="{{Auth::id()}}">
                </div>
                <button type="submit" class="btn btn-primary">Ubah Data</button>
              </form>
            
        </div>
    </div>
   
@endsection
