<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alumni extends Model
{
    protected $table = 'alumnis';
    protected $primaryKey = 'id_alumni';
    public $timestamps = true;

    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class, 'id_mahasiswa');
    }

    public function tracer()
    {
        return $this->hasOne(Tracer::class, 'id_alumni');
    }

}
