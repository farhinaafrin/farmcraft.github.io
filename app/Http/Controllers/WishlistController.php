<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\wishlist;
use Illuminate\Http\Request;
use Session;
class WishlistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products= wishlist::orderBy('created_at','DESC')->paginate(20);
        return \view('website.wishlist',\compact('products'));
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
       

        $wishlists= wishlist::create([
            'name'=> $request->name,
            'image' => $request->image,
            'price' =>$request->price,
      
        ]);
        Session::flash('success','Item has been added to wishlist');
        return redirect()->route('wishlist.index');

    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\wishlist  $wishlist
     * @return \Illuminate\Http\Response
     */
    public function show(wishlist $wishlist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\wishlist  $wishlist
     * @return \Illuminate\Http\Response
     */
    public function edit(wishlist $wishlist)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\wishlist  $wishlist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, wishlist $wishlist)
    {
        //
    }
   
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\wishlist  $wishlist
     * @return \Illuminate\Http\Response
     */
    public function destroy(wishlist $wishlist)
    {
        if($wishlist){

          
            $wishlist->delete();
            Session::flash('remove','Item Deleted successfully');
            return \redirect()->back();
        }
    }
}
