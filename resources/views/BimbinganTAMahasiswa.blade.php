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