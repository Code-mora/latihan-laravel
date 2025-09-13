<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matkul extends Model
{
    use HasFactory;

    //Nama tabel (opsional, default = "matkul" -> jamak)
    protected $table='matkul';

    //kolom yang bisa diisi mass-assignment
    protected $fillable = [
        'nama',
        'deskripsi',
    ];
}
