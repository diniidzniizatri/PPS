@extends('admin.ds')

@section('pagetitle')
  <div class="pagetitle">
    <h1>Form Penilaian Mahasiswa</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
        <li class="breadcrumb-item active">Form Penilaian Mahasiswa</li>
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
      <span>Input Nilai Mahasiswa</span>
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
    <a class="nav-link collapsed" href="/TrackingTA">
      <i class="bi bi-menu-button-wide"></i>
      <span>Tracking TA Mahasiswa</span>
    </a>
  </li><!-- End Register Page Nav -->

  <li class="new-heading">Bimbingan TA</li>
  <li class="nav-item">
    <a class="nav-link collapsed" href="/BimbinganTAMahasiswa">
      <i class="bi bi-menu-button-wide"></i>
      <span>Bimbingan TA Mahasiswa</span>
    </a>
  </li><!-- End Register Page Nav -->

  </ul>
@endsection

@section('main')
<div class="col-lg-15">
  <div class="card">
    <div class="card-body">
        <h5 class="card-title">Penilaian Mahasiswa</h5>
        <form method="post" action="{{route('simpanmhs')}}">
          @csrf
          <div class="row mb-3">
            <label for="inputNIM" class="col-sm-2 col-form-label">NIM</label>
            <div class="col-sm-10">
              <input type="text" name="nrp" class="form-control" value="">
            </div>
          </div>
          <div class="row mb-3">
            <label for="inputnama" class="col-sm-2 col-form-label">nama</label>
            <div class="col-sm-10">
              <input type="text" name="namamhs" class="form-control">
            </div>
          </div>
          <div class="row mb-3">
            <label for="inputlab" class="col-sm-2 col-form-label">lab</label>
            <div class="col-sm-10">
              <input type="text" name="lab" class="form-control">
            </div>
          </div> 
          <div class="row mb-3">
            <label for="inputjudulta" class="col-sm-2 col-form-label">judul ta</label>
            <div class="col-sm-10">
              <input type="text" name="judulta" class="form-control">
            </div>
          </div> 
          <div class="row mb-3">
            <label for="inputnilaita" class="col-sm-2 col-form-label">nilai ta</label>
            <div class="col-sm-10">
              <input type="text" name="nilaita" class="form-control">
            </div>
          </div> 
          <div class="row mb-3">
            <label for="inputtgl" class="col-sm-2 col-form-label">tanggal</label>
            <div class="col-sm-10">
              <input type="text" name="tglsidang" class="form-control">
            </div>
          </div> 
          
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Submit Button</label>
            <div class="col-sm-10">
              <button type="submit" class="btn btn-primary">Submit Form</button>
            </div>
          </div>
        </form>
    </div>
  </div>
</div>
    
@endsection