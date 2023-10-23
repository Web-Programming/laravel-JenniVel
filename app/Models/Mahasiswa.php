<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    //jika nama table berbeda
    protected $table = "mahasiswa";

    //Untuk mengatur kolom yang boleh di isi saat mass insert
    // protected $fillable = ['npm', 'nama', 'tempat_lahir'];

    //mengatur kolom yang tidak boleh di isi
    // protected $guard =  [];
}
