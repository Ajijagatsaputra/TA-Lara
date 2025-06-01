<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tracer extends Model
{
    protected $table = 'tracers';
    protected $primaryKey = 'id_tracer';
    public $timestamps = true;

    public function alumni()
    {
        return $this->belongsTo(Alumni::class, 'id_alumni');
    }

}
