<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreClothBrandsRequest;
use App\Http\Requests\UpdateClothBrandsRequest;
use App\Models\ClothBrands;

class ClothBrandsController extends Controller
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
     * @param  \App\Http\Requests\StoreClothBrandsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreClothBrandsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ClothBrands  $clothBrands
     * @return \Illuminate\Http\Response
     */
    public function show(ClothBrands $clothBrands)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ClothBrands  $clothBrands
     * @return \Illuminate\Http\Response
     */
    public function edit(ClothBrands $clothBrands)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateClothBrandsRequest  $request
     * @param  \App\Models\ClothBrands  $clothBrands
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateClothBrandsRequest $request, ClothBrands $clothBrands)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ClothBrands  $clothBrands
     * @return \Illuminate\Http\Response
     */
    public function destroy(ClothBrands $clothBrands)
    {
        //
    }
}
