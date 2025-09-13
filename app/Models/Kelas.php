<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    //Nama tabel (opsional, default = "kelas" -> jamak)
    protected $table='Kelas';

    //kolom yang bisa diisi mass-assignment
    protected $fillable = [
        'ruangan',
        'jumlah',
    ];
}

