<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Daftar extends Model
{
    protected $table = 'daftar';

    protected $fillable = [
        'nisn', 'nama_lengkap', 'jk', 'alamat', 'email', 'agama', 'asal_smp', 'jurusan'
    ];
    
}
