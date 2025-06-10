<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumni extends Model
{
    use HasFactory;

    protected $table = 'alumni';

    protected $fillable = [
        'id_users',
        'nim',
        'nama_lengkap',
        'prodi',
        'alamat',
        'no_hp',
        'kelas',
        'jalur',
        'tahun_masuk',
        'tahun_lulus',
        'status_mahasiswa',
    ];

    // Relasi ke model Mahasiswa
    public function users()
    {
        return $this->belongsTo(User::class, 'id_users');
    }

    // Relasi ke model Tracerstudy
    public function tracerstudy()
    {
        return $this->hasMany(Tracerstudy::class, 'id_alumni');
    }
}
