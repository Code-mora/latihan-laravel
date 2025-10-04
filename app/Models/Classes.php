<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{

    //Nama tabel (opsional, default = "kelas" -> jamak)
    protected $table='classes';

    //kolom yang bisa diisi mass-assignment
    protected $fillable = [
        'nama_kelas',
    ];

    public function mahasiswa()
    {
        return $this->hasMany(Mahasiswa::class, 'kelas_id');
    }
}
