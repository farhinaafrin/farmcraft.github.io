@extends('layouts.website')
@section('content')
  

   <main>

      <!-- Breadcrumb-area-start -->
      <div class="breadcrumb-area pt-10 pb-10">
         <div class="container">
            <div class="row">
               <div class="col-12">
                  <div class="breadcrumb__list">
                     <span><a href="{{ route('home') }}">Home</a></span>
                     <span class="dvdr"><i class="fa-regular fa-angle-right"></i></span>
                     <span>Team </span>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Breadcrumb-area-end -->

      <!-- Member info area start  -->
      <section class="bd-trem__memder pt-115">
         <div class="container small-container">
            <div class="row align-items-center">
               <div class="col-lg-6">
                  <div class="member-details-thumb w-img mb-60">
                     <img src="assets/img/team/details/team-details-01.jpg" alt="team-thumb">
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="bd-team__member-info mb-60">
                     <span>Team</span>
                     <h3>Mehedi Hasan</h3>
                     <p class="mb-40">The spectacular Harbour Central is a brand new development in London’s The
                        Docklands, comprising
                        a total of 642 private
                        apartments divided across five residential buildings, along with a leisure complex.</p>
                     <div class="bd-team__member-details mb-40">
                        <div class="info-meta-single">
                           <div class="info-meta-icon">
                              <i class="fa-solid fa-phone-flip"></i>
                           </div>
                           <div class="info-meta-text">
                              <span class="meta-heading">Phone Number</span>
                              <span class="meta-link"><a href="tel:+(908)786789786">+(880) 000 000 0 0</a></span>
                           </div>
                        </div>
                        <div class="info-meta-single">
                           <div class="info-meta-icon">
                              <i class="fa-solid fa-envelope"></i>
                           </div>
                           <div class="info-meta-text">
                              <span class="meta-heading">Email Address</span>
                              <span class="meta-link"><a href=""><span class="__cf_email__" data-cfemail="5a33343c351a2d3f383f223b372a363f74393537">mehedi6403@gmail.com</span></a></span>
                           </div>
                        </div>
                        <div class="info-meta-single">
                           <div class="info-meta-icon">
                              <i class="fa-solid fa-location-dot"></i>
                           </div>
                           <div class="info-meta-text">
                              <span class="meta-heading">Location</span>
                              <span class="meta-link"><a href="#">Khustia, Bangladesh</a></span>
                           </div>
                        </div>
                     </div>
                     <div class="member-details-info-btn">
                        <a class="bd-fill__btn" href="{{ route('contact.index') }}">Get In Touch</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Member info area end  -->

      <!-- section-border -->
    
      <!-- section-border -->

      <!-- Skill-area-start -->
    
      <!-- Skill-area-end -->

      <!-- section-border -->
      

     
      <!-- Archivement-area-end -->


   </main>
   <!-- Body main wrapper end -->

   <!-- Footer area start -->
  
  @endsection