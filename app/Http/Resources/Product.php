<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Product extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'description' => $this->description,
            'image' => $this->image,
            'brand' => new Brand($this->whenLoaded('brand')),
            'category' => new Category($this->whenLoaded('category')),
            'vendor' => new Vendor($this->whenLoaded('vendor')),
            'options' => ProductOption::collection($this->whenLoaded('productOptions'))
        ];       
    }
}
