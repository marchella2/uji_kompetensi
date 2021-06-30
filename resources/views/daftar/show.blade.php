@extends('layouts.app')

@section('title', 'Data Siswa')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center">
                        SMK Semangat 45
                    </div>

                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th>NISN</th>
                                <td>:</td>
                                <td>{{ $siswa->nisn }}</td>
                            </tr>
                            <tr>
                                <th>Nama Lengkap</th>
                                <td>:</td>
                                <td>{{ $siswa->nama_lengkap }}</td>
                            </tr>
                            <tr>
                                <th>Jenis Kelamin</th>
                                <td>:</td>
                                <td>{{ $siswa->jk }}</td>
                            </tr>
                            <tr>
                                <th>Alamat</th>
                                <td>:</td>
                                <td>{{ $siswa->alamat }}</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>:</td>
                                <td>{{ $siswa->email }}</td>
                            </tr>
                            <tr>
                                <th>Agama</th>
                                <td>:</td>
                                <td>{{ $siswa->agama }}</td>
                            </tr>
                            <tr>
                                <th>Asal SMP</th>
                                <td>:</td>
                                <td>{{ $siswa->asal_smp }}</td>
                            </tr>
                            <tr>
                                <th>Jurusan</th>
                                <td>:</td>
                                <td>{{ $siswa->jurusan }}</td>
                            </tr>
                        </table>
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <a href="{{ route('daftar.cetak', $siswa->id) }}" class="btn btn-info">Cetak PDF</a>
                                <a href="{{ url()->previous() }}" class="btn btn-danger">Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
