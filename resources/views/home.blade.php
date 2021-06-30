@extends('layouts.app')

@section('title', 'Data Pendaftar')
@section('third_party_stylesheets')
<link rel="stylesheet" type="text/css" href="{{ asset('https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css') }}">
<link rel="stylesheet" href="{{ asset('https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css') }}">
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <table id="table" class="table-bordered">
                        <thead>
                            <tr>
                                <th>No Daftar</th>
                                <th>NISN</th>
                                <th>Nama Siswa</th>
                                <th>Jenis Kelamin</th>
                                <th>Alamat</th>
                                <th>Email</th>
                                <th>Agama</th>
                                <th>Asal SMP</th>
                                <th>Jurusan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($siswa as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->nisn }}</td>
                                <td>{{ $item->nama_lengkap }}</td>
                                <td>{{ $item->jk }}</td>
                                <td>{{ $item->alamat }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->agama }}</td>
                                <td>{{ $item->asal_smp }}</td>
                                <td>{{ $item->jurusan }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('third_party_scripts')
<script type="text/javascript" charset="utf8" src="{{ asset('https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js') }}"></script>

@endsection

@push('page_scripts')
    <script>
        $(document).ready( function () {
            $('#table').DataTable();
        } );
    </script>
@endpush
