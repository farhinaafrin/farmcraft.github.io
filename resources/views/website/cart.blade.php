@extends('layouts.website')
@section('content')


<!-- Body main wrapper start -->
<main>

    <!-- Breadcrumb-area-start -->
    <div class="breadcrumb-area pt-10 pb-10">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb__list">
                        <span><a href="{{ route('website') }}">Home</a></span>
                        <span class="dvdr"><i class="fa-regular fa-angle-right"></i></span>
                        <span>Cart</span>
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
                                    <th class="product-quantity">Quantity</th>
                                    
                                    <th class="product-remove">Remove</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($cartItems as $item)
                                <tr>
                                  
                                    <td class="product-thumbnail"><a href="#"><img  src="assets/img/trending/product/{{ $item->attributes->image }}"
                                                alt=""></a></td>
                                    <td class="product-name"><a href="">{{ $item->name }} </a></td>
                                    <td class="product-price"><span class="amount">৳{{ $item->price }}</span></td>
                                    {{-- <td class="product-quantity"><span class="amount">{{ $item->quantity }}</span></td> --}}
                                    <td class="product-quantity">
                                       <span class="amount">
                                           <form action="{{ route('cart.update') }}" method="POST">
                                             @csrf
                                             <input type="hidden" name="id" value="{{ $item->id}}" >
                                           <input type="number" name="quantity" value="{{ $item->quantity }}" 
                                           class="w-1 text-center bg-gray-100" />
                                           <button type="submit" class="btn btn-success" style="
                                           background-color: rgb(105, 156, 71) !important;">update</button>
                                           </form>
                                          </span>
                                     </td>
                                    
                                    <form action="{{ route('cart.remove') }}" method="POST">
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
                                <h2>Cart totals</h2>
                                <ul class="mb-20">
                                    <li>Total <span>${{ Cart::getTotal() }}</span></li>
                                   
                                </ul>
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
<!-- Body main wrapper end -->
@endsection
