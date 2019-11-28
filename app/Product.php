<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    protected $table = 'products';
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'name',
        'regular_price',
        'special_price',
        'special_price_from',
        'special_price_to'
    ];

    public function tierPrices()
    {
        return $this->hasMany('App\ProductTierPrices');
    }

}
