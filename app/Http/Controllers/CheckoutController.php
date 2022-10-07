<?php

namespace App\Http\Controllers;

use App\Models\Checkout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
            if(!Auth::check()){
                return \redirect()->route('login');
            }
           
            else {
                return \view('website.checkout');
            }
       
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required|unique:contacts,email',
            
            'address' =>'required',
            'city' =>'required',
            'country' =>'required',
            'phone' =>'required',
            'zipcode' =>'required',
            

    
           ]);
           $checkouts = Checkout::create([
            'User_id'=> Auth::user()->id,
            'name'=> $request->name,
            'email' => $request->email,
            
            'address' => $request->address,
            'city' => $request->city,
            'country' => $request->country,
            'zipcode' => $request->zipcode,
            'phone' => $request->phone,
            'message' => $request->message,
    
           ]);
           Session::flash('success','Your order has successfully complete!!');
           return \redirect()->route('thanks');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Checkout  $checkout
     * @return \Illuminate\Http\Response
     */
    public function show(Checkout $checkout)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Checkout  $checkout
     * @return \Illuminate\Http\Response
     */
    public function edit(Checkout $checkout)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Checkout  $checkout
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Checkout $checkout)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Checkout  $checkout
     * @return \Illuminate\Http\Response
     */
    public function destroy(Checkout $checkout)
    {
        //
    }
}
