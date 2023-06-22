<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cloth extends Model
{
    use HasFactory;

    protected $fillable = ['fabric', 'description', 'colour']
    ;

    public function cloth()
    {
        return $this->hasManyThrough(
            '\App\Models\ClothBrands',
            '\App\Models\ClothClothBrand',
            'cloth_id',
            'id',
            'id',
            'clothbrand_id'

        );
    }
}
