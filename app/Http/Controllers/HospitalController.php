<?php

namespace App\Http\Controllers;

use App\Models\Hospital;
use App\Http\Requests\StoreHospitalRequest;
use App\Http\Requests\UpdateHospitalRequest;
use App\Http\Resources\HospitalResource;

class HospitalController extends Controller
{
    protected $hospital;

    public function __construct(Hospital $hospital) {
        $this->hospital = $hospital;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return (HospitalResource::collection($this->hospital->get()))->toJson();
    }

    /**
     * Display the specified resource.
     */
    public function show(Hospital $hospital)
    {
        return (new HospitalResource($hospital))->toJson();
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
    public function store(StoreHospitalRequest $request)
    {
        //
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Hospital $hospital)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateHospitalRequest $request, Hospital $hospital)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hospital $hospital)
    {
        //
    }
}
