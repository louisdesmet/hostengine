<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name'
    ];

    public function orders() {
        return $this->hasMany('App\Order');
    }
    
    public function category() {
        return $this->belongsTo('App\Category');
    }

    public function vendor() {
        return $this->belongsTo('App\Vendor');
    }

    public function brand() {
        return $this->belongsTo('App\Brand');
    }

    public function productOptions() {
        return $this->hasMany('App\ProductOption');
    }
}
