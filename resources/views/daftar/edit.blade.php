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
                        @if ($message = Session::get('error'))
                            <div class="alert alert-danger alert-block">
                                <button type="button" class="close" data-dismiss="alert">x</button>
                                <strong>{{ $message }}</strong>
                            </div>
                        @endif

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <h4>Error : </h4>
                                @foreach ($errors->all() as $e)
                                    <li>{{ $e }}</li>
                                @endforeach
                            </div>
                        @endif

                        <form action="{{ route('daftar.update', $siswa->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label for="nisn" class="form-label">NISN</label>
                                    <input type="number" name="nisn" value="{{ $siswa->nisn }}" class="form-control">
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                                    <input type="text" name="nama_lengkap" value="{{ $siswa->nama_lengkap }}" class="form-control">
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="jk" class="form-label">Jenis Kelamin</label>
                                    <select name="jk" id="jk" class="form-control">
                                        <option value="" selected disabled>-- Pilih Jenis Kelamin --</option>
                                        <option value="L" @if ($siswa->jk == 'L') selected @endif>Laki-laki</option>
                                        <option value="P" @if ($siswa->jk == 'P') selected @endif >Perempuan</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="alamat" class="form-label">Alamat</label>
                                    <textarea name="alamat" id="alamat" cols="30" rows="1" class="form-control">{{ $siswa->alamat }}</textarea>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" name="email" value="{{ $siswa->email }}" class="form-control">
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label for="agama" class="form-label">Agama</label>
                                    <select name="agama" id="agama" class="form-control">
                                        <option value="" selected disabled>-- Pilih Agama --</option>
                                        <option value="Islam" @if ($siswa->agama == 'Islam') selected @endif>Islam</option>
                                        <option value="Kristen" @if ($siswa->agama == 'Kristen') selected @endif>Kristen</option>
                                        <option value="Katolik" @if ($siswa->agama == 'Katolik') selected @endif>Katolik</option>
                                        <option value="Hindu" @if ($siswa->agama == 'Hindu') selected @endif>Hindu</option>
                                        <option value="Buddha" @if ($siswa->agama == 'Buddha') selected @endif>Buddha</option>
                                        <option value="Konghucu" @if ($siswa->agama == 'Konghucu') selected @endif>Konghucu</option>
                                    </select>
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="asal_smp" class="form-label">Asal SMP</label>
                                    <input type="text" name="asal_smp" value="{{ $siswa->asal_smp }}" class="form-control">
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="jurusan" class="form-label">Jurusan</label>
                                    <select name="jurusan" id="jurusan" class="form-control">
                                        <option value="" selected disabled>-- Pilih Jurusan --</option>
                                        <option value="RPL" @if ($siswa->jurusan == 'RPL') selected @endif>Rekayasa Perangkat Lunak</option>
                                        <option value="TBG" @if ($siswa->jurusan == 'TBG') selected @endif>Tata Boga</option>
                                        <option value="TBS" @if ($siswa->jurusan == 'TBS') selected @endif>Tata Busana</option>
                                        <option value="MMD" @if ($siswa->jurusan == 'MMD') selected @endif>Multimedia</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-12 text-center">
                                    <button type="submit" class="btn btn-warning">Edit</button>
                                    <a href="{{ url()->previous() }}" class="btn btn-danger">Back</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
