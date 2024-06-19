<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductCategory;

class ProductCategoryController extends Controller
{
    //

    public function index()
    {

        $productCategory = ProductCategory::with('products.variantProducts.subVariantProducts')->get();

        if(!$productCategory)
        {
            return response()->json([
                'success' => false,
            ]);
        }

        return response()->json([
            'success' => true,
            'data' => $productCategory
        ]);

    }

    public function show($slug)
    {
        $productCategory = ProductCategory::with('products.variantProducts.subVariantProducts')->where('slug',$slug)->first();

        if(!$productCategory)
        {
            return response()->json([
                'success' => false,
            ]);
        }

        return response()->json([
            'success' => true,
            'data' => $productCategory
        ]);
    }
}
