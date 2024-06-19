<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\VariantProduct;
use App\Models\SubVariantProduct;
use App\Models\Cart;


class CartController extends Controller
{

    public function index()
    {

        return Cart::all();

    }

    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'qty' => 'required|integer',
            'variant_product_id' => 'required|exists:variant_products,id',
            'sub_variant_product_id' => 'required|exists:sub_variant_products,id',
        ]);

        $product = Product::find($request->product_id);
        $variantProduct = VariantProduct::find($request->variant_product_id);
        $subVariantProduct = SubVariantProduct::find($request->sub_variant_product_id);

        $cart = Cart::create([
            'product_id' => $product->id,
            'qty' => $request->qty,
            'variant_product_id' => $variantProduct->id,
            'sub_variant_product_id' => $subVariantProduct->id,
            'total' => $product->price + $variantProduct->price + $subVariantProduct->price,
        ]);

        return response()->json([
            'success' => true,
            'data' => $cart
        ]);

    }
}
