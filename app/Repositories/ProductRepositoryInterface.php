<?php


namespace App\Repositories;


use Illuminate\Http\Request;

/**
 * Interface ProductRepositoryInterface
 * @package App\Repositories
 */
interface ProductRepositoryInterface
{
    function findForLowestPrice($id, Request $request);
}
