<html lang="en">
<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="stylesheet" href="{{ asset('css/daftar.css') }}">
    <title>PPDB SMK Merdeka Belajar</title>
</head>
<body>
    <div class="container register-form">
        <div class="card-mx-5 card-my-5">
            <section class="daftar">
                <div class="title">
                    <h3>Form Pendaftaran Siswa Baru</h3>
                    <h5>SMK Semangat 45</h5>
                    <p>Silahkan isi data diri anda sesuai dengan data diri anda</p>
                </div>
            </section>
            <div class="form-content">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <h4>Error : </h4>
                        @foreach ($errors->all() as $e)
                            <li>{{ $e }}</li>
                        @endforeach
                    </div>
                @endif

                @if ($message = Session::get('error'))
                    <div class="alert alert-danger alert-block">
                        <button type="button" class="close" data-dismiss="alert">x</button>
                        <strong>{{ $message }}</strong>
                    </div>
                @endif

                <form action="{{ route('daftar.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label for="nisn" class="form-label">NISN</label>
                            <input type="number" name="nisn" class="form-control" placeholder="NISN">
                        </div>

                        <div class="form-group col-md-4">
                            <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                            <input type="text" name="nama_lengkap" class="form-control" placeholder="Nama Lengkap">
                        </div>

                        <div class="form-group col-md-4">
                            <label for="jk" class="form-label">Jenis Kelamin</label>
                            <select name="jk" id="jk" class="form-control">
                                <option value="" selected disabled>-- Pilih Jenis Kelamin --</option>
                                <option value="L">Laki-laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="alamat" class="form-label">Alamat</label>
                            <textarea name="alamat" id="alamat" cols="30" rows="1" class="form-control" placeholder="Alamat"></textarea>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Email">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-4">
                            <label for="agama" class="form-label">Agama</label>
                            <select name="agama" id="agama" class="form-control">
                                <option value="" selected disabled>-- Pilih Agama --</option>
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Buddha">Buddha</option>
                                <option value="Konghucu">Konghucu</option>
                            </select>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="asal_smp" class="form-label">Asal SMP</label>
                            <input type="text" name="asal_smp" class="form-control" placeholder="Asal SMP">
                        </div>

                        <div class="form-group col-md-4">
                            <label for="jurusan" class="form-label">Jurusan</label>
                            <select name="jurusan" id="jurusan" class="form-control">
                                <option value="" selected disabled>-- Pilih Jurusan --</option>
                                <option value="RPL">Rekayasa Perangkat Lunak</option>
                                <option value="TBG">Tata Boga</option>
                                <option value="TBS">Tata Busana</option>
                                <option value="MMD">Multimedia</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 text-center">
                            <button type="submit" class="btn btn-primary">Daftar</button>
                            <button type="reset" class="btn btn-secondary" onclick="return confirm('Apakah anda yakin ingin menghapus seluruh data yang telah diisi?')">Reset</button>
                            <a href="{{ url('/') }}" class="btn btn-danger" onclick="return confirm('Apakah anda yakin akan kembali ke menu utama?')">Back</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
