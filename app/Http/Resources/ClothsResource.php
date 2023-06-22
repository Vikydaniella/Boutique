<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ClothsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => (string)$this->id,
            'id' => 'Cloths',
            'attributes'=> [
                'fabric'=> $this->fabric,
                'name'=> $this->name,
                'description'=> $this->description,
                'colour'=> $this->colour,
                'created_at'=> $this->created_at,
                'updated_at'=> $this->updated_at,
            ]];
    }
}
