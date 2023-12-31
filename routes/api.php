<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClothBrandsController;
use App\Http\Controllers\ClothsController;
use App\Models\ClothBrands;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->prefix('v1')->group(function(){
    Route::get('/user',function(Request $request){
    return $request->user();
});
    Route::apiresource('/clothbrands', ClothBrandsController::class);
    Route::apiresource('/cloths', ClothsController::class);
});
    