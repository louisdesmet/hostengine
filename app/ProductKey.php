<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductKey extends Model
{
    
    public function product() {
        return $this->belongsTo('App\Product');
    }
    
    public function language() {
        return $this->belongsTo('App\Language');
    }

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function order() {
        return $this->hasOne('App\Order');
    }
    
}
