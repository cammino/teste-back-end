<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['qty'];

    public function tierPrices(){
        return $this->hasMany('App\TierPrice', 'product_id');
    }
}
