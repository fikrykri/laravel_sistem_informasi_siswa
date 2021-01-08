<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $table = 'siswa';

    // memberi izin untuk mengisi setiap kolom nama,nis,dan tgl_lahir
    protected $fillable = ['nama', 'nis', 'tgl_lahir'];
}
