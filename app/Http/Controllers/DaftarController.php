<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Daftar;
use App\User;
use Illuminate\Support\Facades\DB;
use PDF;

class DaftarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('daftar.daftar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nisn' => 'required|numeric',
            'nama_lengkap' => 'required',
            'jk' => 'required',
            'alamat' => 'required',
            'email' => 'required|unique:daftar',
            'agama' => 'required',
            'asal_smp' => 'required',
            'jurusan' => 'required'
        ]);

        $cek = DB::table('daftar')->where('nisn', $request->nisn)->first();

        if(!$cek)
        {
            $siswa = Daftar::create($request->all());

            $user = new User;
            $user->name = $request->nama_lengkap;
            $user->email = $request->email;
            $user->password = bcrypt($request->nisn);
            $user->akses = 'siswa';
            $user->siswa_id = $siswa->id;
            $user->save();

            toastr()->success('Selamat, Anda sudah terdaftar di SMK Merdeka Belajar', 'Sukses');
            return redirect()->route('daftar.print', $siswa->id);
        } else if($cek) {
            return redirect()->route('daftar.create')->with('error', 'Mohon maaf, NISN ini sudah digunakan. Silahkan langsung login');
        }
    }


    public function cetak($id)
    {
        $siswa = Daftar::findorfail($id);
        $pdf = PDF::loadview('daftar.print',compact('siswa'))->setPaper('A4','potrait');
        return $pdf->stream();
    }

    public function print($id)
    {
        $siswa = Daftar::findOrFail($id);

        return view('daftar.print', compact('siswa'));
    }

    public function dashboardSiswa()
    {
        return view('daftar.dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $siswa = Daftar::findOrFail($id);

        return view('daftar.show', compact('siswa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $siswa = Daftar::findOrFail($id);

        return view('daftar.edit', compact('siswa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nisn' => 'required',
            'nama_lengkap' => 'required',
            'jk' => 'required',
            'alamat' => 'required',
            'email' => 'required',
            'agama' => 'required',
            'asal_smp' => 'required',
            'jurusan' => 'required',
        ]);

        $siswa = Daftar::findOrFail($id);
        $siswa->update($request->all());

        return redirect()->route('dashboardSiswa')->with('success', 'Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $siswa = Daftar::findOrFail($id);
        $siswa->delete();

        return redirect()->route('login')->with('error', 'Data dan akun anda sudah dihapus');
    }
}
