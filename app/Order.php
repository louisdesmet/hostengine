<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function product() {
        return $this->belongsTo('App\Product');
    }

    public function productKey() {
        return $this->belongsTo('App\ProductKey');
    }

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function orderDetails() {
        return $this->hasMany('App\OrderDetail');
    }
}
