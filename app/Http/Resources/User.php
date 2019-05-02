<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class User extends JsonResource
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
            'name' => $this->name,
            'email' => $this->email,
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'company_name' => $this->company_name,
            'city' => $this->city,
            'postal_code' => $this->postal_code,
            'country' => $this->country,
            'phone_number' => $this->phone_number,
            'brand' => new Brand($this->whenLoaded('brand')),
            'role' => new Role($this->whenLoaded('role')),
            'users' => User::collection($this->whenLoaded('users')),
            'orders' => Order::collection($this->whenLoaded('orders')),
            'domains' => Domain::collection($this->whenLoaded('domains'))
        ];
    }
}
