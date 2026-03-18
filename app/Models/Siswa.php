<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswa';

    protected $fillable = [
        'nis',
        'nama',
        'gender',
        'tempat_lahir',
        'tgl_lahir',
        'email',
        'nama_ortu',
        'alamat',
        'phone_number',
        'kelas_id'
    ];

    protected $dates = ['tgl_lahir'];

    // Relasi ke kelas
    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'kelas_id');
    }
}