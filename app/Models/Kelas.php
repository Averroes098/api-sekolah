<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $table = 'kelas';

    protected $fillable = [
        'nama_kelas'
    ];

    // Relasi ke siswa (1 kelas punya banyak siswa)
    public function siswa()
{
    return $this->hasMany(Siswa::class, 'kelas_id');
}

public function jadwal()
    {
    return $this->hasMany(Jadwal::class, 'kelas_id');
    }
}