<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Order extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'status' => $this->status,
            'date' => $this->date,
            'domain' => $this->domain,
            'product' => new Product($this->whenLoaded('product')),
            'user' => new User($this->whenLoaded('user')),
            'product_key' => new ProductKey($this->whenLoaded('productKey')),
            'order_details' => OrderDetail::collection($this->whenLoaded('orderDetails')),
        ];
    }
}
