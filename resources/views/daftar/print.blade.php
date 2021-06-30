<html lang="en">
<head>
    <title>Print Bukti Pendaftaran | SMK Semangat 45</title>
    @toastr_css
</head>
<body style="font-family: sans-serif">
    <div class="container">
        <center>
            <table width="94%" border="0">
                <tr>
                    <td>
                        <center><b>PENDAFTARAN PESERTA DIDIK BARU</b></center>
                        <center><b>SMK SEMANGAT 45</b></center>
                    </td>
                </tr>
            </table>
        </center>
        <br>
        <h4><b>DATA DIRI CALON PESERTA DIDIK</b></h4>
        <table>
            <tr>
                <td><b>No Pendaftaran : </b>{{ $siswa->id }}</td>
            </tr>
            <tr>
                <td><b>NISN : </b>{{ $siswa->nisn }}</td>
            </tr>
            <tr>
                <td><b>Nama Lengkap : </b>{{ $siswa->nama_lengkap }}</td>
            </tr>
            <tr>
                <td><b>Jenis Kelamin : </b>{{ $siswa->jk }}</td>
            </tr>
            <tr>
                <td><b>Alamat : </b>{{ $siswa->alamat }}</td>
            </tr>
            <tr>
                <td><b>Email : </b>{{ $siswa->email }}</td>
            </tr>
            <tr>
                <td><b>Agama : </b>{{ $siswa->agama }}</td>
            </tr>
            <tr>
                <td><b>Asal SMP : </b>{{ $siswa->asal_smp }}</td>
            </tr>
            <tr>
                <td><b>Jurusan : </b>{{ $siswa->jurusan }}</td>
            </tr>
        </table>
        <h4><b>INFORMASI AKUN</b></h4>
        <p>Gunakan akun ini untuk login</p>
        <table>
            <tr>
                <td><b>Email : </b>{{ $siswa->email }}</td>
            </tr>
            <tr>
                <td><b>Password : </b>{{ $siswa->nisn }}</td>
            </tr>
        </table>
        <p>Pilih menu di bawah ini : </p>
        <a href="{{ route('daftar.cetak', $siswa->id) }}">Cetak PDF</a>
        <a href="{{ route('login') }}">Login</a>
    </div>
</body>
@jquery
@toastr_js
@toastr_render
</html>
