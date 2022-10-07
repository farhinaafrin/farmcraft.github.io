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
                     <span><a href="/">Home</a></span>
                     <span class="dvdr"><i class="fa-regular fa-angle-right"></i></span>
                     <span>Checkout</span>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Breadcrumb-area-end -->

     

      <!-- checkout-area start -->
      <section class="checkout-area pb-100">
         <div class="container small-container">
            <form action="{{ route('checkout.store') }}" method="POST">
               @csrf
               <div class="row">
                  @include('website.errors')
                  <div class="col-lg-6">
                     <div class="checkbox-form">
                        <h3>Billing Details</h3>
                        <div class="row">
                           <div class="col-md-12">
                              <div class="checkout-form-list">
                                 <label>Country <span class="required">*</span></label>
                                 <input type="text" name="country"  id="country" placeholder="" />
                              </div>
                           </div>
                           <div class="col-md-12">
                              <div class="checkout-form-list">
                                 <label>Name <span class="required">*</span></label>
                                 <input type="name" name="name" id="name" placeholder="" />
                              </div>
                           </div>
                           
                           
                           <div class="col-md-12">
                              <div class="checkout-form-list">
                                 <label>Address <span class="required">*</span></label>
                                 <input type="text" name="address"  id="address" placeholder="Street address" />
                              </div>
                           </div>
                           
                           <div class="col-md-12">
                              <div class="checkout-form-list">
                                 <label>Town / City <span class="required">*</span></label>
                                 <input type="text" name="city" id="city" placeholder="Town / City" />
                              </div>
                           </div>
                          
                           <div class="col-md-6">
                              <div class="checkout-form-list">
                                 <label>Postcode / Zip <span class="required">*</span></label>
                                 <input type="text" name="zipcode" id="zipcode" placeholder="Postcode / Zip" />
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="checkout-form-list">
                                 <label>Email Address <span class="required">*</span></label>
                                 <input type="email" name="email" id="email" placeholder="" />
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="checkout-form-list">
                                 <label>Phone <span class="required">*</span></label>
                                 <input type="text" name="phone" id="phone" placeholder="Phone Number" />
                              </div>
                           </div>
                           <div class="col-md-12">
                              <div class="bd-single__form-input mb-20">
                                 <label>Other Notes</label>
                                  <textarea name="message" id="message" placeholder=""></textarea>
                              </div>
                          </div>
                           
                        </div>
                        
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="your-order mb-30 ">
                        <h3>Your order</h3>
                       

                        <div class="payment-method">
                           <div class="accordion" id="checkoutAccordion">
                              <div class="accordion-item">
                                 <h2 class="accordion-header" id="checkoutOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                       data-bs-target="#bankOne" aria-expanded="true" aria-controls="bankOne">
                                       Direct Bank Transfer
                                    </button>
                                 </h2>
                                 <div id="bankOne" class="accordion-collapse collapse show"
                                    aria-labelledby="checkoutOne" data-bs-parent="#checkoutAccordion">
                                    <div class="accordion-body">
                                       Make your payment directly into our bank account. Please use your
                                       Order ID
                                       as the payment reference. Your order won’t be shipped until the
                                       funds have
                                       cleared in our account.
                                    </div>
                                 </div>
                              </div>
                              <div class="accordion-item">
                                 <h2 class="accordion-header" id="paymentTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                       data-bs-target="#payment" aria-expanded="false" aria-controls="payment">
                                       Cheque Payment
                                    </button>
                                 </h2>
                                 <div id="payment" class="accordion-collapse collapse" aria-labelledby="paymentTwo"
                                    data-bs-parent="#checkoutAccordion">
                                    <div class="accordion-body">
                                       Please send your cheque to Store Name, Store Street, Store Town,
                                       Store
                                       State / County, Store
                                       Postcode.
                                    </div>
                                 </div>
                              </div>
                              <div class="accordion-item">
                                 <h2 class="accordion-header" id="paypalThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                       data-bs-target="#paypal" aria-expanded="false" aria-controls="paypal">
                                       PayPal
                                    </button>
                                 </h2>
                                 <div id="paypal" class="accordion-collapse collapse" aria-labelledby="paypalThree"
                                    data-bs-parent="#checkoutAccordion">
                                    <div class="accordion-body">
                                       Pay via PayPal; you can pay with your credit card if you don’t have
                                       a
                                       PayPal account.
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="order-button-payment mt-20">
                              <button type="submit" class="bd-fill__btn">Place order</button>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </form>
         </div>
      </section>
      <!-- checkout-area end -->

   </main>
   <!-- Body main wrapper end -->

   @endsection