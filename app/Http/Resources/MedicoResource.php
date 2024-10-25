<?php

namespace App\Http\Resources;

use App\Models\Medico;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MedicoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'nome' => $this->nome,
            // 'especialidade' => EspecialidadeResource::collection($this->especialidades)
            'especialidade' => $this->especialidades->pluck('nome')->implode(', ')
        ];
    }
}
