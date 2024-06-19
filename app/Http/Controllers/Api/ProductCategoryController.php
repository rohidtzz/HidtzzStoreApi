<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductCategory;

class ProductCategoryController extends Controller
{
    //

    public function index($slug)
    {

        $productCategory = ProductCategory::with('products')->where('slug',$slug)->first();

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
