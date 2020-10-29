<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">

    <!-- Favicon -->
    <link href="{{ asset('img/favicon.png') }}" rel="icon" type="image/png">

    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />

</head>
<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/home">
            <div class="sidebar-brand-icon">
                {{-- <i class="fas fa-clinic-medical"></i> --}}
                <img src="img/smart-puskesmas.png" height="70%" width="70%">
            </div>
            {{-- <div class="sidebar-brand-text mx-3">Smart Puskesmas</div> --}}
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">
{{-- 
        <!-- Nav Item - Dashboard -->
        <li class="nav-item {{ Nav::isRoute('home') }}">
            <a class="nav-link" href="{{ route('home') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>{{ __('Dashboard') }}</span></a>
        </li> --}}

        <!-- Divider -->
        {{-- <hr class="sidebar-divider"> --}}

        <!-- Heading -->
        {{-- <div class="sidebar-heading">
            {{ __('Rawat Jalan') }}
        </div> --}}

        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAntrian" aria-expanded="false" aria-controls="collapseAntrian">
                <i class="fas fa-home"></i>
                <span>Home</span>
            </a>
            <div id="collapseAntrian" class="collapse" aria-labelledby="headingAntrian" data-parent="#accordionSidebar" style="">
                <div class="bg-white py-2 collapse-inner rounded">
                {{-- <h6 class="collapse-header">Custom Services:</h6> --}}                
                <a class="collapse-item" href="{{ route('home') }}">Dashboard</a>
                <a class="collapse-item" href="/antrian">Antrian</a>
                <a class="collapse-item" href="/monitor_antrian">Monitor Antrian</a>                             
                
                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseReg" aria-expanded="false" aria-controls="collapseReg">
                <i class="fas fa-laptop-medical"></i>
                <span>Admin Menu</span>
            </a>
            <div id="collapseReg" class="collapse" aria-labelledby="headingReg" data-parent="#accordionSidebar" style="">
                <div class="bg-white py-2 collapse-inner rounded">
                {{-- <h6 class="collapse-header">Custom Services:</h6> --}}
                
                <a class="collapse-item" href="#">File</a>
                <a class="collapse-item" href="#">Menus</a>
                <a class="collapse-item" href="#">Daftar Pengguna</a>
                <a class="collapse-item" href="#">Hak Akses</a>
                <a class="collapse-item" href="#">Kelompok Pengguna</a>
                <a class="collapse-item" href="#">Backup & Restore</a>
                <a class="collapse-item" href="#">Log User</a>
                <a class="collapse-item" href="#">Konfigurasi Aplikasi</a>
                
                
                
                </div>
            </div>
        </li>

       
        
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTree" aria-expanded="false" aria-controls="collapseTree">
                <i class="fas fa-laptop-medical"></i>
                <span>Pendaftaran</span>
            </a>
            <div id="collapseTree" class="collapse" aria-labelledby="headingTree" data-parent="#accordionSidebar" style="">
                <div class="bg-white py-2 collapse-inner rounded">
                {{-- <h6 class="collapse-header">Custom Services:</h6> --}}
                
                <a class="collapse-item" href="#">Data Pokok KK</a>
                <a class="collapse-item" href="#">Pendaftaran Pasien</a>
                <a class="collapse-item" href="#">Rekam Medis</a>
                <a class="collapse-item" href="#">Kasir</a>
                <a class="collapse-item" href="#">Rekapitulasi Pendaftaran</a>
                <a class="collapse-item" href="#">Laporan Pendaftaran</a>
                
                
                </div>
            </div>
        </li>
        <hr class="sidebar-divider">

         <!-- Heading -->
         <div class="sidebar-heading">
            {{ __('Layanan') }}
        </div>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayananRawatJalan" aria-expanded="false" aria-controls="collapseLayananRawatJalan">
                <i class="fas fa-laptop-medical"></i>
                <span>Rawat Jalan</span>
            </a>
            <div id="collapseLayananRawatJalan" class="collapse" aria-labelledby="headingLayananRawatJalan" data-parent="#accordionSidebar" style="">
                <div class="bg-white py-2 collapse-inner rounded">
                {{-- <h6 class="collapse-header">Custom Services:</h6> --}}
                
                <a class="collapse-item" href="#">Poli Umum</a>
                <a class="collapse-item" href="#">Poli KIA</a>
                <a class="collapse-item" href="#">Poli Anak</a>
                <a class="collapse-item" href="#">Poli Gigi</a>
                <a class="collapse-item" href="#">Poli Mata</a>
                <a class="collapse-item" href="#">Poli KB</a>
                <a class="collapse-item" href="#">Poli IMS</a>
                <a class="collapse-item" href="#">Poli Konsultasi</a>
                <a class="collapse-item" href="#">Poli TB</a>
                <a class="collapse-item" href="#">Poli Lansia</a>
                <a class="collapse-item" href="#">Poli Jiwa</a>
                <a class="collapse-item" href="#">Poli Gizi</a>
                <a class="collapse-item" href="#">Poli Kusta</a>
                <a class="collapse-item" href="#">Poli Filariasis</a>
                <a class="collapse-item" href="#">Poli RB</a>
                <a class="collapse-item" href="#">Poli Ray</a>                
                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayananRawatInap" aria-expanded="false" aria-controls="collapseLayananRawatInap">
                <i class="fas fa-laptop-medical"></i>
                <span>Rawat Inap</span>
            </a>
            <div id="collapseLayananRawatInap" class="collapse" aria-labelledby="headingLayananRawatInap" data-parent="#accordionSidebar" style="">
                <div class="bg-white py-2 collapse-inner rounded">
                {{-- <h6 class="collapse-header">Custom Services:</h6> --}}
                
                <a class="collapse-item" href="#">Rawat Inap Umum</a>
                           
                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayananPemeriksaan" aria-expanded="false" aria-controls="collapseLayananPemeriksaan">
                <i class="fas fa-laptop-medical"></i>
                <span>Pemeriksaan</span>
            </a>
            <div id="collapseLayananPemeriksaan" class="collapse" aria-labelledby="headingLayananPemeriksaan" data-parent="#accordionSidebar" style="">
                <div class="bg-white py-2 collapse-inner rounded">
                {{-- <h6 class="collapse-header">Custom Services:</h6> --}}
                
                <a class="collapse-item" href="#">Laboratorium</a>
                <a class="collapse-item" href="#">Radiologi</a>
                           
                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePoli24" aria-expanded="false" aria-controls="collapsePoli24">
                <i class="fas fa-laptop-medical"></i>
                <span>Poli 24 Jam</span>
            </a>
           
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            {{ __('Laporan') }}
        </div>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapselaporanSP3" aria-expanded="false" aria-controls="collapselaporanSP3">
                <i class="fas fa-laptop-medical"></i>
                <span>SP3</span>
            </a>
            <div id="collapselaporanSP3" class="collapse" aria-labelledby="headinglaporanSP3" data-parent="#accordionSidebar" style="">
                <div class="bg-white py-2 collapse-inner rounded">
                {{-- <h6 class="collapse-header">Custom Services:</h6> --}}
                
                <a class="collapse-item" href="#">SP3 LB1</a>
                <a class="collapse-item" href="#">LPLPO</a>
                <a class="collapse-item" href="#">SP3 LB3</a>
                <a class="collapse-item" href="#">SP3 LB4</a>
                <a class="collapse-item" href="#">Lap LSD1</a>
                <a class="collapse-item" href="#">Lap LSD2</a>
                <a class="collapse-item" href="#">Lap LSD3</a>
                <a class="collapse-item" href="#">Input Laporan LB1 Jejaring</a>
                           
                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapselaporanUpload" aria-expanded="false" aria-controls="collapselaporanUpload">
                <i class="fas fa-laptop-medical"></i>
                <span>Upload ke Dinkes Kota/Kab</span>
            </a>
            <div id="collapselaporanUpload" class="collapse" aria-labelledby="headinglaporanUpload" data-parent="#accordionSidebar" style="">
                <div class="bg-white py-2 collapse-inner rounded">
                {{-- <h6 class="collapse-header">Custom Services:</h6> --}}
                
                <a class="collapse-item" href="#">Upload Lap SP3</a>
                <a class="collapse-item" href="#">Upload Lap Program</a>
                           
                </div>
            </div>
        </li>
        <li class="nav-item {{ Nav::isRoute('laporan_program') }}">
            <a class="nav-link" href="#">
                <i class="fas fa-laptop-medical"></i>
                <span>Laporan Program</span>
            </a>
        </li>
        <li class="nav-item {{ Nav::isRoute('laporan_pustu') }}">
            <a class="nav-link" href="#">
                <i class="fas fa-laptop-medical"></i>
                <span>Data Laporan Pustu</span>
            </a>
        </li>
        <li class="nav-item {{ Nav::isRoute('laporan_polindes') }}">
            <a class="nav-link" href="#">
                <i class="fas fa-laptop-medical"></i>
                <span>Data Laporan Polindes</span>
            </a>
        </li>


        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            {{ __('Farmasi') }}
        </div>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFarmasiGudangObat" aria-expanded="false" aria-controls="collapseFarmasiGudangObat">
                <i class="fas fa-laptop-medical"></i>
                <span>Gudang Obat</span>
            </a>
            <div id="collapseFarmasiGudangObat" class="collapse" aria-labelledby="headingFarmasiGudangObat" data-parent="#accordionSidebar" style="">
                <div class="bg-white py-2 collapse-inner rounded">
                {{-- <h6 class="collapse-header">Custom Services:</h6> --}}
                
                <a class="collapse-item" href="#">Pemesanan Obat</a>
                <a class="collapse-item" href="#">Pembelian Obat</a>
                <a class="collapse-item" href="#">Distribusi Obat</a>
                <a class="collapse-item" href="#">Stok Obat</a>
                <a class="collapse-item" href="#">Stok Opname</a>
                <a class="collapse-item" href="#">Laporan Koreksi Stok Opname</a>
                <a class="collapse-item" href="#">Laporan Obat Kadaluarsa</a>
                
                           
                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFarmasiApotek" aria-expanded="false" aria-controls="collapseFarmasiApotek">
                <i class="fas fa-laptop-medical"></i>
                <span>Apotek</span>
            </a>
            <div id="collapseFarmasiApotek" class="collapse" aria-labelledby="headingFarmasiApotek" data-parent="#accordionSidebar" style="">
                <div class="bg-white py-2 collapse-inner rounded">
                {{-- <h6 class="collapse-header">Custom Services:</h6> --}}
                
                <a class="collapse-item" href="#">Resep</a>
                <a class="collapse-item" href="#">Stok Obat</a>
                <a class="collapse-item" href="#">Stok Opname</a>
                <a class="collapse-item" href="#">Laporan Koreksi Stok Opname</a>
                <a class="collapse-item" href="#">Laporan Obat Kadaluarsa</a>
                           
                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFarmasiIGD" aria-expanded="false" aria-controls="collapseFarmasiIGD">
                <i class="fas fa-laptop-medical"></i>
                <span>IGD</span>
            </a>
            <div id="collapseFarmasiIGD" class="collapse" aria-labelledby="headingFarmasiIGD" data-parent="#accordionSidebar" style="">
                <div class="bg-white py-2 collapse-inner rounded">
                {{-- <h6 class="collapse-header">Custom Services:</h6> --}}
                
                <a class="collapse-item" href="#">Resep</a>
                <a class="collapse-item" href="#">Stok Obat</a>
                <a class="collapse-item" href="#">Stok Opname</a>
                <a class="collapse-item" href="#">Laporan Koreksi Stok Opname</a>
                <a class="collapse-item" href="#">Laporan Obat Kadaluarsa</a>
                           
                </div>
            </div>
        </li>
        <li class="nav-item {{ Nav::isRoute('pengeluaran_obat_luar_gedung') }}">
            <a class="nav-link" href="#">
                <i class="fas fa-laptop-medical"></i>
                <span>Pengeluaran Obat Luar Gedung</span>
            </a>
        </li>


        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            {{ __('Grafik') }}
        </div>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseDistribusiPasien" aria-expanded="false" aria-controls="collapseDistribusiPasien">
                <i class="fas fa-laptop-medical"></i>
                <span>Distribusi Pasien</span>
            </a>
            <div id="collapseDistribusiPasien" class="collapse" aria-labelledby="headingDistribusiPasien" data-parent="#accordionSidebar" style="">
                <div class="bg-white py-2 collapse-inner rounded">
                {{-- <h6 class="collapse-header">Custom Services:</h6> --}}
                
                <a class="collapse-item" href="#">Pekerjaan</a>
                <a class="collapse-item" href="#">Pendidikan</a>
                <a class="collapse-item" href="#">Gender Pasien</a>
                <a class="collapse-item" href="#">Umur</a>
                           
                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseGrafikPelayanan" aria-expanded="false" aria-controls="collapseGrafikPelayanan">
                <i class="fas fa-laptop-medical"></i>
                <span>Pelayanan</span>
            </a>
            <div id="collapseGrafikPelayanan" class="collapse" aria-labelledby="headingGrafikPelayanan" data-parent="#accordionSidebar" style="">
                <div class="bg-white py-2 collapse-inner rounded">
                {{-- <h6 class="collapse-header">Custom Services:</h6> --}}
                
                <a class="collapse-item" href="#">Cara Bayar</a>
                <a class="collapse-item" href="#">Cara Bayar per Poli</a>
                <a class="collapse-item" href="#">Cara Masuk</a>
                <a class="collapse-item" href="#">Status Layanan</a>
                <a class="collapse-item" href="#">Tindakan</a>
                <a class="collapse-item" href="#">Kasus Kunjungan</a>
                <a class="collapse-item" href="#">Kunjungan Loket</a>
                <a class="collapse-item" href="#">Pemeriksaan</a>
                <a class="collapse-item" href="#">Distribusi Pasien</a>
                           
                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseGrafikPenyakit" aria-expanded="false" aria-controls="collapseGrafikPenyakit">
                <i class="fas fa-laptop-medical"></i>
                <span>Penyakit</span>
            </a>
            <div id="collapseGrafikPenyakit" class="collapse" aria-labelledby="headingGrafikPenyakit" data-parent="#accordionSidebar" style="">
                <div class="bg-white py-2 collapse-inner rounded">
                {{-- <h6 class="collapse-header">Custom Services:</h6> --}}
                
                <a class="collapse-item" href="#">Penyakit Terbanyak</a>
                <a class="collapse-item" href="#">Kasus Diare</a>
                <a class="collapse-item" href="#">Bayar</a>
                
                           
                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseGrafikObat" aria-expanded="false" aria-controls="collapseGrafikObat">
                <i class="fas fa-laptop-medical"></i>
                <span>Obat</span>
            </a>
            <div id="collapseGrafikObat" class="collapse" aria-labelledby="headingGrafikObat" data-parent="#accordionSidebar" style="">
                <div class="bg-white py-2 collapse-inner rounded">
                {{-- <h6 class="collapse-header">Custom Services:</h6> --}}
                
                <a class="collapse-item" href="#">Obat</a>
                <a class="collapse-item" href="#">Obat Berdasarkan Jenis</a>
                
                           
                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseGrafikOpsPuskesmas" aria-expanded="false" aria-controls="collapseGrafikOpsPuskesmas">
                <i class="fas fa-laptop-medical"></i>
                <span>Operasional Puskesmas</span>
            </a>
            <div id="collapseGrafikOpsPuskesmas" class="collapse" aria-labelledby="headingGrafikOpsPuskesmas" data-parent="#accordionSidebar" style="">
                <div class="bg-white py-2 collapse-inner rounded">
                {{-- <h6 class="collapse-header">Custom Services:</h6> --}}
                
                <a class="collapse-item" href="#">Kasir</a>
                <a class="collapse-item" href="#">Pemeriksaan per Dokter</a>
                
                           
                </div>
            </div>
        </li>
        <!-- Divider -->
        <hr class="sidebar-divider">

         <!-- Heading -->
         <div class="sidebar-heading">
            {{ __('Rekapitulasi') }}
        </div>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseRekapitulasiPengeluaranObat" aria-expanded="false" aria-controls="collapseRekapitulasiPengeluaranObat">
                <i class="fas fa-laptop-medical"></i>
                <span>Laporan Pengeluaran Obat</span>
            </a>
            <div id="collapseRekapitulasiPengeluaranObat" class="collapse" aria-labelledby="headingRekapitulasiPengeluaranObat" data-parent="#accordionSidebar" style="">
                <div class="bg-white py-2 collapse-inner rounded">
                {{-- <h6 class="collapse-header">Custom Services:</h6> --}}
                
                <a class="collapse-item" href="#"></a>
                
                           
                </div>
            </div>
        </li>

        
        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            {{ __('Rujukan') }}
        </div>
        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            {{ __('GIS') }}
        </div>
        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            {{ __('Program') }}
        </div>
        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            {{ __('Monitoring Jejaring') }}
        </div>
        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            {{ __('Master') }}
        </div>

        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              <i class="fas fa-fw fa-cog"></i>
              <span>Master</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar" style="">
              <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Master:</h6>
               
                <a class="collapse-item" href="/asuransi">Asuransi</a>
                <a class="collapse-item" href="#">Aturan Pakai</a>
                <a class="collapse-item" href="#">Imunisasi</a>
                <a class="collapse-item" href="#">Masalah Keprwtan Anak</a>
                <a class="collapse-item" href="#">Masalah Keprwtan Gigi</a>
                <a class="collapse-item" href="#">Pasien</a>
                <a class="collapse-item" href="#">Pelayanan</a>
                <a class="collapse-item" href="#">Penanggung Jawab</a>
                <a class="collapse-item" href="#">Penyakit</a>
                <a class="collapse-item" href="#">Poliklinik</a>
                <a class="collapse-item" href="#">Staff</a>
                <a class="collapse-item" href="#">Triase Macam Kasus</a>
                <a class="collapse-item" href="#">Triase Pemeriksaan</a>
                <a class="collapse-item" href="#">Triase Kala 1</a>
                <a class="collapse-item" href="#">Triase Kala 2</a>
                <a class="collapse-item" href="#">Triase Kala 3</a>
                <a class="collapse-item" href="#">Triase Kala 4</a>
                <a class="collapse-item" href="#">Triase Kala 5</a>
              </div>
            </div>
          </li>

         <!-- Divider -->
         <hr class="sidebar-divider">

         
        
         <!-- Heading -->
        <div class="sidebar-heading">
            {{ __('Settings') }}
        </div>

        <!-- Nav Item - Profile -->
        <li class="nav-item {{ Nav::isRoute('profile') }}">
            <a class="nav-link" href="{{ route('profile') }}">
                <i class="fas fa-fw fa-user"></i>
                <span>{{ __('Profile') }}</span>
            </a>
        </li>

        <!-- Nav Item - About -->
        {{-- <li class="nav-item {{ Nav::isRoute('about') }}">
            <a class="nav-link" href="{{ route('about') }}">
                <i class="fas fa-fw fa-hands-helping"></i>
                <span>{{ __('About') }}</span>
            </a>
        </li> --}}

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>

                <!-- Topbar Search -->
                <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                    <div class="input-group">
                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>

                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">

                    <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                    <li class="nav-item dropdown no-arrow d-sm-none">
                        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-search fa-fw"></i>
                        </a>
                        <!-- Dropdown - Messages -->
                        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                            <form class="form-inline mr-auto w-100 navbar-search">
                                <div class="input-group">
                                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fas fa-search fa-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>

                    <!-- Nav Item - Alerts -->
                    <li class="nav-item dropdown no-arrow mx-1">
                        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-bell fa-fw"></i>
                            <!-- Counter - Alerts -->
                            <span class="badge badge-danger badge-counter">3+</span>
                        </a>
                        <!-- Dropdown - Alerts -->
                        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                            <h6 class="dropdown-header">
                                Alerts Center
                            </h6>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="mr-3">
                                    <div class="icon-circle bg-primary">
                                        <i class="fas fa-file-alt text-white"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class="small text-gray-500">December 12, 2019</div>
                                    <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="mr-3">
                                    <div class="icon-circle bg-success">
                                        <i class="fas fa-donate text-white"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class="small text-gray-500">December 7, 2019</div>
                                    $290.29 has been deposited into your account!
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="mr-3">
                                    <div class="icon-circle bg-warning">
                                        <i class="fas fa-exclamation-triangle text-white"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class="small text-gray-500">December 2, 2019</div>
                                    Spending Alert: We've noticed unusually high spending for your account.
                                </div>
                            </a>
                            <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                        </div>
                    </li>

                    <!-- Nav Item - Messages -->
                    <li class="nav-item dropdown no-arrow mx-1">
                        <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-envelope fa-fw"></i>
                            <!-- Counter - Messages -->
                            <span class="badge badge-danger badge-counter">7</span>
                        </a>
                        <!-- Dropdown - Messages -->
                        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                            <h6 class="dropdown-header">
                                Message Center
                            </h6>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="dropdown-list-image mr-3">
                                    <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
                                    <div class="status-indicator bg-success"></div>
                                </div>
                                <div class="font-weight-bold">
                                    <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been having.</div>
                                    <div class="small text-gray-500">Emily Fowler · 58m</div>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="dropdown-list-image mr-3">
                                    <img class="rounded-circle" src="https://source.unsplash.com/AU4VPcFN4LE/60x60" alt="">
                                    <div class="status-indicator"></div>
                                </div>
                                <div>
                                    <div class="text-truncate">I have the photos that you ordered last month, how would you like them sent to you?</div>
                                    <div class="small text-gray-500">Jae Chun · 1d</div>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="dropdown-list-image mr-3">
                                    <img class="rounded-circle" src="https://source.unsplash.com/CS2uCrpNzJY/60x60" alt="">
                                    <div class="status-indicator bg-warning"></div>
                                </div>
                                <div>
                                    <div class="text-truncate">Last month's report looks great, I am very happy with the progress so far, keep up the good work!</div>
                                    <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                </div>
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <div class="dropdown-list-image mr-3">
                                    <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="">
                                    <div class="status-indicator bg-success"></div>
                                </div>
                                <div>
                                    <div class="text-truncate">Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</div>
                                    <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                </div>
                            </a>
                            <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                        </div>
                    </li>

                    <div class="topbar-divider d-none d-sm-block"></div>

                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->name }}</span>
                            <figure class="img-profile rounded-circle avatar font-weight-bold" data-initial="{{ Auth::user()->name[0] }}"></figure>
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="{{ route('profile') }}">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                {{ __('Profile') }}
                            </a>
                            <a class="dropdown-item" href="javascript:void(0)">
                                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                {{ __('Settings') }}
                            </a>
                            <a class="dropdown-item" href="javascript:void(0)">
                                <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                {{ __('Activity Log') }}
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                {{ __('Logout') }}
                            </a>
                        </div>
                    </li>

                </ul>

            </nav>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">

                @yield('main-content')

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; PT. Solusi Integrasi Gemilang 2020</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{ __('Ready to Leave?') }}</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-link" type="button" data-dismiss="modal">{{ __('Cancel') }}</button>
                <a class="btn btn-danger" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Scripts -->
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="{{ asset('js/chart-area-demo.js') }}"></script>
<script src="{{ asset('js/chart-bar-demo.js') }}"></script>
<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>
<script src="{{ asset('js/sb-admin-2.min.js') }}"></script>

</body>
</html>
