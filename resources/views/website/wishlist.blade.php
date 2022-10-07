@extends('layouts.website')
@section('content')
<main>

    <!-- Breadcrumb-area-start -->
    <div class="breadcrumb-area pt-10 pb-10">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb__list">
                        <span><a href="{{ route('website') }}">Home</a></span>
                        <span class="dvdr"><i class="fa-regular fa-angle-right"></i></span>
                        <span>Wishlist</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb-area-end -->

    <!-- Cart area start  -->
    <section class="cart-area pt-110 pb-130">
        <div class="container small-container">
            <div class="row">
                <div class="col-12">
                    <div class="table-content table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="product-thumbnail">Images</th>
                                    <th class="cart-product-name">Product</th>
                                    <th class="product-price">Unit Price</th>
                                    
                                    
                                    <th class="product-remove">Remove</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($products as $item)
                                <tr>
                                  
                                    <td class="product-thumbnail"><a href="#"><img src="assets/img/trending/product/{{ $item->image}}"
                                                alt=""></a></td>
                                    <td class="product-name"><a href="">{{ $item->name }} </a></td>
                                    <td class="product-price"><span class="amount">৳{{ $item->price }}</span></td>
                                    
                                    
                                    <form action="{{ route('wishlist.destroy',$item->id) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                         <input type="hidden" value="{{ $item->id }}" name="id"> 
                                        <td class="product-remove"><button type="submit"><i
                                                    class="fa fa-times"></i></button></td>
                                        {{-- <td class=""><i class="fa fa-times"></i></td> --}}
                                    </form>


                                </tr>
                                @endforeach
                                {{-- @else
                           <p>the cart is empty</p>
                           @endif --}}


                            </tbody>
                        </table>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-5 ml-auto">
                            <div class="cart-page-total">
                                
                                <a class="bd-border__btn" href="{{ route('checkout.index') }}">Proceed to checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Cart area end  -->





</main>
@endsection