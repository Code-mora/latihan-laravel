<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;

    //Nama tabel (opsional, default = "dosen" -> jamak)
    protected $table='Dosen';

    //kolom yang bisa diisi mass-assignment
    protected $fillable = [
        'nama',
        'nid',
    ];
}

