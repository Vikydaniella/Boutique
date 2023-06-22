<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreClothRequest;
use App\Http\Requests\UpdateClothRequest;
use App\Models\Cloth;
use App\Http\Resources\ClothsResource;

class ClothsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ClothsResource::collection(Cloth::all());
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
     * @param  \App\Http\Requests\StoreClothRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreClothRequest $request)
    {
        $faker = \Faker\Factory::create(1);
        $cloth = Cloth::create([
            'fabric' => $faker->text,
            'description' => $faker->sentence,
            'colour' => $faker->text,
        ]);
        return new ClothsResource($cloth);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cloth  $cloth
     * @return \Illuminate\Http\Response
     */
    public function show(Cloth $cloth)
    {
        return $cloth->clothbrand;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cloth  $cloth
     * @return \Illuminate\Http\Response
     */
    public function edit(Cloth $cloth)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateClothRequest  $request
     * @param  \App\Models\Cloth  $cloth
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateClothRequest $request, Cloth $cloth)
    {
        $cloth->update([
            'fabric' =>$request->input('fabric'),
            'description' =>$request->input('description'),
            'colour' =>$request->input('colour')
        ]);
        return new ClothsResource($cloth);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cloth  $cloth
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cloth $cloth)
    {
        $cloth->delete();
        return response(null, 204);
    }
}
