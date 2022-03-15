<?php

namespace App\Http\Controllers;

use App\Models\carmodels;
use App\Http\Requests\StorecarmodelsRequest;
use App\Http\Requests\UpdatecarmodelsRequest;

class CarmodelsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorecarmodelsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorecarmodelsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\carmodels  $carmodels
     * @return \Illuminate\Http\Response
     */
    public function show(carmodels $carmodels)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\carmodels  $carmodels
     * @return \Illuminate\Http\Response
     */
    public function edit(carmodels $carmodels)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatecarmodelsRequest  $request
     * @param  \App\Models\carmodels  $carmodels
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatecarmodelsRequest $request, carmodels $carmodels)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\carmodels  $carmodels
     * @return \Illuminate\Http\Response
     */
    public function destroy(carmodels $carmodels)
    {
        //
    }
}
