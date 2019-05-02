<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductOption extends Model
{
    protected $fillable = [
        'name'
    ];


    public function product() {
        return $this->belongsTo('App\Product');
    }

    public function prices() {
        return $this->hasMany('App\Price');
    }

}
