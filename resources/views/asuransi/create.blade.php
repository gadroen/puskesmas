@extends('layouts.admin')
@section('title', 'Create Master Asuransi')

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
    @if (session('warning'))
    <div class="alert alert-warning">
        {{ session('warning') }}
    </div>
    @endif

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table mr-1"></i>
           Tambah data asuransi
        </div>
        <div class="card-body">
            <form method="post" action="/asuransi">
               
                @csrf
                <div class="form-group"> 
                  <label for="kd_pj">Kode Asuransi</label>
                <input type="text" class="form-control @error('kd_pj') is-invalid @enderror" id="kd_pj" name="kd_pj" placeholder="Masukkan kode asuransi" value="{{ old('kd_pj')}}">
                @error('kd_pj')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
                <div class="form-group"> 
                  <label for="png_jawab">Penanggung Jawab</label>
                  <input type="text" class="form-control @error('png_jawab') is-invalid @enderror" id="png_jawab" name="png_jawab" placeholder="Masukkan nama asuransi penanggung jawab"  value="{{ old('png_jawab')}}">
                  @error('png_jawab')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
                <div class="form-group"> 
                  <label for="nama_perusahaan">Nama Perushaan</label>
                  <input type="text" class="form-control @error('nama_perusahaan') is-invalid @enderror" id="nama_perusahaan" name="nama_perusahaan" placeholder="Masukkan nama perusahaan"  value="{{ old('nama_perusahaan')}}">
                  @error('nama_perusahaan')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
                <div class="form-group"> 
                  <label for="alamat_asuransi">Alamat Asuransi</label>
                  <input type="text" class="form-control @error('alamat_asuransi') is-invalid @enderror" id="alamat_asuransi" name="alamat_asuransi" placeholder="Masukkan alamat asuransi"  value="{{ old('alamat_asuransi')}}">
                  @error('alamat_asuransi')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
                <div class="form-group"> 
                  <label for="no_telp">Nomor Telepon Asuransi</label>
                  <input type="text" class="form-control @error('no_telp') is-invalid @enderror" id="no_telp" name="no_telp" placeholder="Masukkan nomor telepon"  value="{{ old('no_telp')}}">
                  @error('no_telp')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
                <div class="form-group"> 
                  <label for="attn">Nomor Attn</label>
                  <input type="text" class="form-control @error('attn') is-invalid @enderror" id="attn" name="attn" placeholder="Masukkan attn "  value="{{ old('attn')}}">
                  @error('attn')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
                <div class="form-group"> 
                  <input type="hidden" class="form-control" name="created_by" id="created_by" value="{{Auth::id()}}">
                </div>
                <div class="form-group"> 
                  <input type="hidden" class="form-control" name="updated_by" id="updated_by" value="{{Auth::id()}}">
                </div>
                <button type="submit" class="btn btn-primary">Simpan Data</button>
              </form>
            
        </div>
    </div>
   
@endsection
