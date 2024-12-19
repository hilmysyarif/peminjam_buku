@extends('layouts.stisla.index', [
  'title' => auth()->user()->id === 1 ? 'Admin Dashboard' : 'Operator Dashboard',
  'section_header' => auth()->user()->id === 1 ? 'Admin Dashboard' : 'Operator Dashboard'
])

@section('content')
<div class="row">
  <div class="col-lg-4 col-md-4 col-sm-12">
    <div class="card card-statistic-2">
      <div class="card-stats">
        <div class="card-stats-items mt-3">
          <div class="card-stats-item">
            <div class="card-stats-item-count">{{ $total_admins }}</div>
            <div class="card-stats-item-label">Admin</div>
          </div>
          <div class="card-stats-item">
            <div class="card-stats-item-count">{{ $total_members }}</div>
            <div class="card-stats-item-label">Siswa</div>
          </div>
        </div>
      </div>
      <a href="{{ route('admin.users.index') }}">
        <div class="card-icon shadow-primary bg-primary">
          <i class="fas fa-users mr-1"></i>
        </div>
      </a>
    </div>
  </div>

  <div class="col-lg-8 col-md-8 col-sm-12">
    <div class="card px-2 py-3">
      <h5 class="mx-2">Data Mahasiswa</h5>
      <hr>
      <div class="row">
        <div class="col-6">
          <div class="card card-statistic-2">
            <div class="card-wrap">
              <div class="card-header">
                <h4>Nama Lengkap</h4>
              </div>
              <div class="card-body">
                Faiz Restu Cahyadi
              </div>
            </div>

            <div class="card card-statistic-2">
              <div class="card-wrap">
                <div class="card-header">
                  <h4>Kelas</h4>
                </div>
                <div class="card-body">
                  SI503
                </div>
              </div>

              <div class="card card-statistic-2">
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Matakuliah</h4>
                  </div>
                  <div class="card-body">
                    Pemrograman Berbasis Web
                  </div>
                </div>
              </div>
            </div>

          </div>

        </div>

        <div class="col-6">
          <img src="{{ asset('assets/images/faiz.jpeg') }}" class="img-thumbnail" alt="Faiz Restu Cahyadi">
        </div>
      </div>
      <!-- <div class="col-lg-4 col-md-4 col-sm-12">
    <div class="card card-statistic-2">
      <div class="card-chart">
        <canvas id="balance-chart" height="80"></canvas>
      </div>
      <div class="card-icon shadow-primary bg-primary">
        <i class="fas fa-book"></i>
      </div>
      <div class="card-wrap">
        <div class="card-header">
          <h4>Balance</h4>
        </div>
        <div class="card-body">
          $187,13
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-4 col-md-4 col-sm-12">
    <div class="card card-statistic-2">
      <div class="card-chart">
        <canvas id="sales-chart" height="80"></canvas>
      </div>
      <div class="card-icon shadow-primary bg-primary">
        <i class="fas fa-shopping-bag"></i>
      </div>
      <div class="card-wrap">
        <div class="card-header">
          <h4>Sales</h4>
        </div>
        <div class="card-body">
          4,732
        </div>
      </div>
    </div>
  </div> -->
    </div>
    @endsection

    @push('modal')
    @include('admin.dashboard.modal.show')
  @endpush