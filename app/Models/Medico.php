<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'crm',
        'hospital_id',
    ];

    public function hospital()
    {
        return $this->belongsTo(Hospital::class, 'hospital_id', 'id');
    }

    public function especialidades()
    {
        return $this->belongsToMany(Especialidade::class, 'medicos_especialidades', 'medicos_id', 'especialidades_id');
    }
}
