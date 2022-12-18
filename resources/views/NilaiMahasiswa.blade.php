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
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Daftar Nilai Sidang TA Mahasiswa</h5>
              <!-- Bordered Table -->
 
              <table class="table table-bordered"> 
                <thead>
                  <tr>
                    <th scope="col">NRP</th>
                    <th scope="col">Nama Mahasiswa</th>
                    <th scope="col">LAB</th>
                    <th scope="col">Judul TA</th>
                    <th scope="col">Nilai TA</th>
                    <th scope="col">Tanggal Sidang</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($data_mhs as $mhs)
                  <tr>
                    <th>{{$mhs->nrp}}</th>
                    <td>{{$mhs->namamhs}}</td>
                    <td>{{$mhs->lab}}</td>
                    <td>{{$mhs->judulta}}</td>
                    <td>{{$mhs->nilaita}}</td>
                    <td>{{$mhs->tglsidang}}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              <!-- End Bordered Table -->

              
            

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

@endsection