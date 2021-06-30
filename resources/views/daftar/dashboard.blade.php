@extends('layouts.app')

@section('title', 'Data Siswa')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">{{ __('PPDB SMK Semangat 45') }}</div>
                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">x</button>
                        <strong>{{ $message }}</strong>
                    </div>
                @endif

                @if ($message = Session::get('error'))
                    <div class="alert alert-danger alert-block">
                        <button type="button" class="close" data-dismiss="alert">x</button>
                        <strong>{{ $message }}</strong>
                    </div>
                @endif

                <div class="card-body">
                    <center>Selamat datang {{ Auth::user()->name }}, silahkan pilih menu di bawah ini</center>
                    <br>
                    <div class="col-12 text-center">
                        <form action="{{ route('daftar.destroy', Auth::user()->siswa_id) }}" method="POST">
                            <a href="{{ route('daftar.show', Auth::user()->siswa_id) }}" class="btn btn-outline-primary">Lihat Data</a>
                            <a href="{{ route('daftar.edit', Auth::user()->siswa_id) }}" class="btn btn-outline-warning">Edit Data</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data anda?')">Hapus Pendaftaran</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
