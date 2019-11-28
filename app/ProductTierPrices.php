<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductTierPrices extends Model
{
    use SoftDeletes;

    protected $table = 'product_tier_prices';
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'product_id',
        'qty',
        'price'
    ];

    public function product()
    {
        return $this->belongsTo('App\Product');
    }

}
