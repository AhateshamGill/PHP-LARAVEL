<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        $formFields = $request->validate([
            'Item_name' => ['required'],
            'Item_price' => ['required'],
            'Item_category' => ['required'],
            'Item_info' => ['required'],
            'Item_image' => ['required'],
            'Item_quantity' => ['required'],
        ]);

        $formFields['user_id'] = auth()->user()->id;

        Cart::create($formFields);

        return back()->with('message', 'Your product has been added to your cart Successfully.');
    }

    public function getCartItems()
    {
        $user = auth()->user()->id;
        $cartItems = Cart::where('user_id', $user)->get();
        return view('pages.admin.cart', compact('cartItems'));
    }
}
