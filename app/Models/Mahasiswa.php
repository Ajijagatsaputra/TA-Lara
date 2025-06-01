<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswas';
    protected $primaryKey = 'id_mahasiswa';
    public $timestamps = true;

    public function alumni()
    {
        return $this->hasMany(Alumni::class, 'id_mahasiswa');
    }
}
