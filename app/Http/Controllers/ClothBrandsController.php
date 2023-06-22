<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreClothBrandsRequest;
use App\Http\Requests\UpdateClothBrandsRequest;
use App\Models\ClothBrands;
use App\Http\Resources\ClothBrandsResource;
use App\Http\Requests\ClothBrandsRequest;

class ClothBrandsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ClothBrandsResource::collection(ClothBrands::all());
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
        $faker = \Faker\Factory::create(1);
        $clothBrand = ClothBrands::create([
            'name' => $faker->name
        ]);
        return new ClothBrandsResource($clothBrand);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ClothBrands  $clothBrand
     * @return \Illuminate\Http\Response
     */
    public function show(ClothBrands $clothBrand)
    {
        return new ClothBrandsResource($clothBrand);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ClothBrands  $clothBrands
     * @return \Illuminate\Http\Response
     */
    public function edit(ClothBrands $clothBrand)
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
    public function update(UpdateClothBrandsRequest $request, ClothBrands $clothBrand)
    {
        $clothBrand->update([
            'name' =>$request->input('name')
        ]);
        return new ClothBrandsResource($clothBrand);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ClothBrands  $clothBrands
     * @return \Illuminate\Http\Response
     */
    public function destroy(ClothBrands $clothBrand)
    {
        $clothBrand->delete();
        return response(null, 204);
    }
}
