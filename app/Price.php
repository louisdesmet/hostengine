<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    protected $fillable = [
        'price'
    ];

    public function productOption() {
        return $this->belongsTo('App\ProductOption');
    }

}
