<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Cart;
use Session;
class CartController extends Controller
{   
   
   
    public function index()
    {
        $cartItems = \Cart::getContent();
        // dd($cartItems);
        return view('website.cart', compact('cartItems'));
    }

    public function store(Request $request)
    {
        \Cart::add([
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
           
            'attributes' => array(
                'image' => $request->image,
            )
        ]);
        Session::flash('success', 'Product is Added to Cart Successfully !');

        return redirect()->route('cart.index');
    }
    public function updateCart(Request $request)
    {
        \Cart::update(
            $request->id,
            [
                'quantity' => [
                    'relative' => false,
                    'value' => $request->quantity,
                    
                ],
            ]
        );

        Session::flash('success', 'Product is updated ');

        return redirect()->route('cart.index');
    }

    public function removeCart(Request $request)
    {
        \Cart::remove($request->id);
        session()->flash('remove', 'Item Cart Removed  !');

        return redirect()->back();
    }


    public function clearAllCart()
    {
        \Cart::clear();

        session()->flash('success', 'All Item Cart Clear Successfully !');

        return redirect()->route('cart.index');
    }



}
