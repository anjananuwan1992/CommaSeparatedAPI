<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;


class CartController extends Controller
{
    public function show($id)
    {
        // Fetch the cart record by ID
        $cart = Cart::find($id);

        if ($cart) {
            // Explode the comma-separated products into an array
            $products = explode(',', $cart->products);

            return response()->json([
                'cart_id' => $cart->id,
                'products' => $products,
            ]);
        } else {
            return response()->json([
                'message' => 'Cart not found.'
            ], 404);
        }
    }
}
