<?php

namespace App\Http\Controllers;

use App\Daftar;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $siswa = Daftar::all();

        return view('home', compact('siswa'));
    }

    public function hapus($id)
    {
        $siswa = Daftar::findOrFail($id);
        $siswa->delete();

        return redirect()->route('login')->with('error', 'Data dan akun anda sudah dihapus');
    }
}
