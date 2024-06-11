<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Resources\Api\Product as ProductResource;

class ProductController extends Controller
{
    //

    public function index(Request $request)
    {

        $products = Product::all();
        return ProductResource::collection($products);
        // $json = [
        //     'data' => $products,
        //     "message" => "Success get all products"
        // ];

        // return response()->json($json, 200);
    }

    public function show(Request $request, $slug)
    {

        $product = Product::where('slug', $slug)->first();

        if (!$product) {
            return response()->json(['message' => 'Product not found'], 404);
        }

        $json = [
            'data' => $product,
            "message" => "Success get product"
        ];

        return response()->json($json, 200);
    }
}
