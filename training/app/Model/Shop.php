<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    //
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * Get the products for the shop.
     */
    public function products()
    {
        return $this->hasMany('App\Model\Product');
    }

}
