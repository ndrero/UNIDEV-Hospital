<?php

namespace App\Http\Controllers;

use App\Models\Medico;
use App\Http\Requests\StoreMedicosRequest;
use App\Http\Requests\UpdateMedicosRequest;
use App\Http\Resources\MedicoResource;

class MedicoController extends Controller
{
    protected $medico;

    public function __construct(Medico $medico) {
        $this->medico = $medico;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $medicos = Medico::with('especialidades')->get();
        return (MedicoResource::collection($medicos))->toJson();
    }

    /**
     * Display the specified resource.
     */
    public function show(Medico $medico)
    {
        return (new MedicoResource($medico))->toJson();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMedicosRequest $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Medico $medico)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMedicosRequest $request, Medico $medico)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Medico $medico)
    {
        //
    }
}
