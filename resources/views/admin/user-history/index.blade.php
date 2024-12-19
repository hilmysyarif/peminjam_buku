@extends('layouts.stisla.index', ['title' => 'Report Daftar Siswa', 'section_header' => 'Report Daftar Siswa'])

@section('content')
<div class="row">
  <div class="col-lg-12 table-responsive">
    <div class="card px-3 py-3">
      <div class="row">
        <div class="col-lg-12 px-3 py-3 text-right">
        </div>
      </div>
      <table class="table table-hovered text-center table-bordered" id="datatable">
        <thead>
          <tr>
            <th>#</th>
            <th>Kartu Anggota</th>
            <th>Nama</th>
            <th>Anggota Sejak</th>
          </tr>
        </thead>
        <tbody>
          @foreach($my_books as $my_book)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $my_book->user_number }}</td>
            <td>{{ $my_book->name }}</td>
            <td>{{ $my_book->created_at !== NULL ? $my_book->created_at : '-' }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection