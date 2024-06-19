<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
// use App\Http\Resources\Api\Product as ProductResource;

class ProductController extends Controller
{
    //

    public function index(Request $request)
    {

        $products = Product::with(['variantProducts.subVariantProducts','category'])->get();

        if(!$products)
        {
            return response()->json([
                'success' => false,
            ]);
        }

        $json = [
            'success' => true,
            'data' => $products
        ];

        return response()->json($json, 200);
    }

    public function show(Request $request, $slug)
    {

        $product = Product::with(['variantProducts.subVariantProducts'])->where('slug', $slug)->first();

        if (!$product) {
            return response()->json([
                'success' => false,
                'message' => 'Product not found'
            ], 404);
        }

        $json = [
            'success' => true,
            'data' => $product
        ];

        return response()->json($json, 200);
    }
}
