@extends('admin.ds')

@section('profile')
    <div class="hidden sm:flex sm:items-center sm:ml-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>
@endsection

@section('pagetitle')
  <div class="pagetitle">
    <h1>Penilaian Sidang TA Mahasiswa</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
        <li class="breadcrumb-item active">Form Nilai Sidang TA Mahasiswa</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->
@endsection

@section('sidebar')
  <ul class="sidebar-nav" id="sidebar-nav">

  <li class="nav-item">
    <a class="nav-link  collapsed" href="/dashboard">
      <i class="bi bi-grid"></i>
      <span>Dashboard</span>
    </a>
  </li><!-- End Dashboard Nav -->

  <li class="new-heading">Penilaian Mahasiswa</li>
  <li class="nav-item">
    <a class="nav-link collapsed" href="/PenilaianMahasiswa">
      <i class="bi bi-menu-button-wide"></i>
      <span>Input Nilai Sidang Mahasiswa</span>
    </a>
  </li><!-- End Register Page Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" href="/NilaiMahasiswa">
      <i class="bi bi-menu-button-wide"></i>
      <span>Nilai Mahasiswa</span>
    </a>
  </li>

  <li class="new-heading">Tracking</li>
  <li class="nav-item">
    <a class="nav-link collapsed" href="/dashboard">
      <i class="bi bi-menu-button-wide"></i>
      <span>Tracking TA Mahasiswa</span>
    </a>
  </li><!-- End Register Page Nav -->

  <li class="new-heading">Bimbingan TA</li>
  <li class="nav-item">
    <a class="nav-link collapsed" href="/dashboard">
      <i class="bi bi-menu-button-wide"></i>
      <span>Bimbingan TA Mahasiswa</span>
    </a>
  </li><!-- End Register Page Nav -->

  </ul>
@endsection

@section('main')
    <div class="col-lg-15">
      <div class="card-body">
         <h5 class="card-title">Form Nilai Sidang TA</h5>
          <form action="{{route('simpannilai')}}" method="post">
             @csrf
              <div class="row mb-3">
              <label for="inputNIM" class="col-sm-2 col-form-label">NRP</label>
            <div class="col-sm-10">
          <input type="text" name="nrp" class="form-control">
       </div>
    </div>

     <div class="row mb-3">
        <label for="inputnama" class="col-sm-2 col-form-label">Nama Mahasiswa</label>
            <div class="col-sm-10">
             <input type="text" name="namamhs" class="form-control">
            </div>
    </div>
                
    <div class="row mb-3">
       <label for="inputlab" class="col-sm-2 col-form-label">Lab</label>
           <div class="col-sm-10">
             <input type="text" name="lab" class="form-control">
          </div>
     </div> 

    <div class="row mb-3">
       <label for="inputjudulta" class="col-sm-2 col-form-label">Judul TA</label>
          <div class="col-sm-10">
            <input type="text" name="judulta" class="form-control">
           </div>
   </div> 

    <div class="row mb-3">
        <label for="inputnilaita" class="col-sm-2 col-form-label">Nilai TA</label>
         <div class="col-sm-10">
         <input type="text" name="nilaita" class="form-control">
      </div>
    </div> 

     <div class="row mb-3">
       <label for="inputtgl" class="col-sm-2 col-form-label">Tanggal Sidang</label>
           <div class="col-sm-10">
              <input type="date" name="tglsidang" class="form-control">
            </div>
     </div> 

      <div class="row mb-3">
          <label class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10">
                 <button type="submit" class="btn btn-primary">Simpan Nilai</button>
            </div>
      </div>

                <label for="inputtgl" class="col-sm-7 col-form-label">Nilai angka (86-100): Nilai A / Istimewa </label>
                <label for="inputtgl" class="col-sm-7 col-form-label">Nilai angka (76-85) : Nilai AB / Baik Sekali </label>
                <label for="inputtgl" class="col-sm-7 col-form-label">Nilai angka (66-75) : Nilai B / Baik </label>
                <label for="inputtgl" class="col-sm-7 col-form-label">Nilai angka (61-65) : Nilai BC / Cukup Baik </label>
                <label for="inputtgl" class="col-sm-7 col-form-label">Nilai angka (56-60) : Nilai C / Cukup </label>
              </form>
        </div>
    </div>
@endsection