<?php

namespace App\Repositories;

use App\Product;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

/**
 * Class ProductRepository
 * @package App\Repositories
 */
class ProductRepository implements ProductRepositoryInterface
{

    private $priceOfReportedQuantity;

    /**
     * Search for the lowest available price according to the id entered.
     *
     * @param $id
     * @param Request $request
     * @return JsonResponse
     */
    function findForLowestPrice($id, Request $request)
    {

        $product = Product::findOrFail($id);

        if ($this->isQtyReported($product->tierPrices, $request)) {
            return response()->json(['lowest-price' => $this->getLowestPrice($product->special_price)], 201);
        }

        return response()->json(['error' => 'Os valores informados não são válidos.'], 412);

    }

    /**
     * Checks whether the value entered as input in the request body
     * exists between quantity levels.
     *
     * @param $tierPrices
     * @param Request $request
     * @return bool
     */
    private function isQtyReported($tierPrices, Request $request):bool
    {
        $checkQty = false;

        foreach ($tierPrices as $tierPrice) {
            if (in_array($request->input('qty'), (array)$tierPrice->qty)) {
                $checkQty = true;
                $this->priceOfReportedQuantity = $tierPrice->price;
                break;
            }
        }

        return $checkQty;
    }

    /**
     * Receive the value of the promotional price as input, to be compared
     * with the reported value according to the quantity informed. The smallest value between both
     * is returned.
     *
     * @param $specialPrice
     * @return float
     */
    private function getLowestPrice($specialPrice):float
    {
        $lowestPrice = $this->priceOfReportedQuantity < $specialPrice?
            $this->priceOfReportedQuantity : $specialPrice;

        return $lowestPrice;
    }

}
