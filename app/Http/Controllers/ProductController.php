<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductTierPrices;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        return response()->json(Product::all());
    }

    public function show($id)
    {
        return response()->json(Product::findOrFail($id)->with('tierPrices'));
    }

    public function destroy($id)
    {
        return response()->json(Product::findOrFail($id)->delete());
    }

    public function store(Request $request)
    {
        return Product::where($request->id)->firstOrNew()->fill($request->except('id'))->save();
    }

    /**
     * Return the lowest price available for a product
     *
     * @param integer $id Product ID
     * @param Request $request qty Quantity of purchase used for finding tier prices
     * @return void
     */
    public function calcPrice($id, Request $request)
    {
        $product = Product::findOrFail($id);
        $tierPrice = ProductTierPrices::where('product_id', $id)->where('qty', '<=', $request->qty)->orderBy('qty', 'desc')->pluck('price')->first();
        $productPrice = (Carbon::today()->isBetween($product->special_price_from, $product->special_price_to)) ? $product->special_price : $product->regular_price;
        return response()->json(['price' => (!empty($tierPrice) && $tierPrice < $productPrice) ? $tierPrice : $productPrice], 201);
     }
}
