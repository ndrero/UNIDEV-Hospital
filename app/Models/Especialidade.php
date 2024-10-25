<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Especialidade extends Model
{
    protected $fillable = [
        'nome'
    ];

    public function medicos()
    {
        return $this->belongsToMany('medicos_especialidades', 'especialidades_id', 'medicos_id');
    }
}
