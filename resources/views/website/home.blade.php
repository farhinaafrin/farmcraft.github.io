@extends('layouts.website')
@section('content')
<main>

   <!-- Banner-area-start -->
   <section class="bd-banner__area grey-bg banner__overlay banner__height-1 p-relative">
      <div class="bd-banner__image-1">
         <img src="{{ asset('assets/img/banner/banner-1.jpg')}}" alt="banner-img">
      </div>
      <div class="bd-banner__line">
         <img src="{{ asset('assets/img/banner/banner-line.png')}}" alt="banner-line">
      </div>
      <div class="container">
         <div class="row g-0 align-items-center">
            <div class="col-xxl-7 col-xl-6 col-lg-6">
               <div class="bd-banner__content-box mb-60">
                  <div class="bd-banner__text">
                     <h2>Pure Organic <br>Food Shop</h2>
                  </div>
                  <div class="row">
                     <div class="col-xxl-5">
                     </div>
                     <div class="col-xxl-6">
                        <div class="bd-banner__content__wrap">
                           <div class="bd-banner__content">
                              <p>Organic foods include fresh produce, meats, and dairy products as well as processed
                                 foods such as fruits frozen meals.</p>
                              <div class="bd-banner__button">
                                 <div class="bd-button__inner">
                                    <a class="bd-bn__btn-1" href="product-details.html">Shop Now</a>
                                 </div>
                                 <div class="bd-banner__link">
                                    <a class="banner-video__btn popup-video"
                                       href="https://www.youtube.com/watch?v=fSv6UgCkuTU"><i
                                          class="fa-solid fa-play"></i><span>Watch our<br>videos</span></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-xxl-5 col-xl-6 col-lg-6">
               <div class="bd-banner__right d-flex justify-content-end p-relative z-index-1 mb-60">
                  <div class="bd-banner__active  swiper-container">
                     <div class="swiper-wrapper">
                        <div class="swiper-slide">
                           <div class="bd-banner__image-2">
                              <img src="{{ asset('assets/img/banner/slider/slider-01.jpg')}}" alt="banner-img">
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="bd-banner__image-2">
                              <img src="{{ asset('assets/img/banner/slider/slider-02.jpg')}}" alt="banner-img">
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="bd-banner__image-2">
                              <img src="{{ asset('assets/img/banner/slider/slider-03.jpg')}}" alt="banner-img">
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="bd-banner__shape">
                     <span class="counter">80</span><span>k</span>
                     <span class="bd-banner__shape-line"></span>
                     <p>
                        Metric ton product <br>
                        supplied
                     </p>
                  </div>
                  <!-- If we need pagination -->
                  <div class="bd-banner-pagination banner-pagination-1"></div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- Banner-area-end -->

   <!-- Step-area-start -->
   <section class="bd-step__area pt-130 pb-65">
      <div class="container">
         <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-7 col-md-8">
               <div class="bd-section__title-wrapper p-relative mb-85">
                  <div class="bd-section__img w-img">
                     <img src="{{ asset('assets/img/step/title-img.png')}}" alt="title-img">
                  </div>
                  <span class="bd-step__title">and pure products</span>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
               <div class="bd-step__item text-center p-relative mb-60">
                  <div class="bd-step__arrow">
                     <img src="{{ asset('assets/img/step/step-arrow-1.png')}}" alt="step-arrow">
                  </div>
                  <div class="bd-step__icon">
                     <img src="{{ asset('assets/img/step/step-1.png')}}" alt="step-icon">
                  </div>
                  <div class="bd-step__content">
                     <h3><a href="about.html">Planning</a></h3>
                     <p>Consider how some search engines autocorrect for spen</p>
                  </div>
               </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
               <div class="bd-step__item text-center p-relative mb-60">
                  <div class="bd-step__arrow">
                     <img src="{{ asset('assets/img/step/step-arrow-2.png')}}" alt="step-arrow">
                  </div>
                  <div class="bd-step__icon">
                     <img src="{{ asset('assets/img/step/step-2.png')}}" alt="step-icon">
                  </div>
                  <div class="bd-step__content">
                     <h3><a href="about.html">Seeding</a></h3>
                     <p>Consider how some search engines autocorrect for spen</p>
                  </div>
               </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
               <div class="bd-step__item text-center p-relative mb-60">
                  <div class="bd-step__arrow">
                     <img src="{{ asset('assets/img/step/step-arrow-1.png')}}" alt="step-arrow">
                  </div>
                  <div class="bd-step__icon">
                     <img src="{{ asset('assets/img/step/step-1.png')}}" alt="step-icon">
                  </div>
                  <div class="bd-step__content">
                     <h3><a href="about.html">Quality Assure</a></h3>
                     <p>Consider how some search engines autocorrect for spen</p>
                  </div>
               </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
               <div class="bd-step__item text-center p-relative mb-60">
                  <div class="bd-step__icon">
                     <img src="{{ asset('assets/img/step/step-3.png')}}" alt="step-icon">
                  </div>
                  <div class="bd-step__content">
                     <h3><a href="about.html">Marketing</a></h3>
                     <p>Consider how some search engines autocorrect for spen</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- Step-area-end -->

   <!-- About-area-start -->
   <section class="bd-about__area grey-bg p-relative z-index-1 pt-130 pb-70">
      <div class="container">
         <div class="bd-about__bg-wrapper p-relative">
            <img class="bd-about__bg-shape " src="assets/img/about/about-big-shape.png')}}" alt="about-big-shape">
         </div>
         <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6">
               <div class="bd-about__content-wrapper mb-60">
                  <div class="bd-section__title-wrapper mb-35">
                     <span class="bd-sub__title">About Us</span>
                     <h2 class="bd-section__title mb-35">We believe in pure and organic quality</h2>
                     <p>We had reached a great height in the atmosphere, for the sky was a dead black, and the stars
                        had ceased to twinkle. By the same illusion which lifts the horizon of the sea to the level.
                     </p>
                  </div>
                  <div class="bd-about__content">
                     <div class="bd-about__features">
                        <div class="bd-adbout__icon">
                           <img src="{{ asset('assets/img/about/about-icon.png')}}" alt="about-icon">
                        </div>
                        <div class="bd-about__text">
                           <h4>100% Healthy Quality</h4>
                           <p>The stars had ceased to twinkle. By the same illusion which lifts the horizon of the
                              sea to the level.</p>
                        </div>
                     </div>
                     <div class="bd-about__action">
                        <a class="bd-bn__btn-1" href="about.html">About Us</a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-xl-6 col-lg-6">
               <div class="bd-about__thumb-wrapper p-relative mb-60 ">
                  <div class="bd-about__thumb-1 w-img">
                     <img src="{{ asset('assets/img/about/about-img-1.jpg')}}" alt="about-img">
                  </div>
                  <div class="bd-about__thumb-2">
                     <img src="{{ asset('assets/img/about/about-img-2.jpg')}}" alt="about-img">
                  </div>
                  <div class="bd-about__quite-box">
                     <div class="quite-content">
                        <p>"Organic foods are very
                           helpful to our human
                           body"</p>
                     </div>
                     <div class="quite-icon">
                        <i class="flaticon-quote"></i>
                     </div>
                     <div class="bd-about__quite-name">
                        <span>Daniel Nirob</span>
                     </div>
                  </div>
                  <div class="bd-about__shape-1">
                     <img src="{{ asset('assets/img/about/about-shape-1.png')}}" alt="about-shape">
                  </div>
                  <div class="bd-about__shape-2"></div>
                  <div class="bd-about__shape-3"></div>
                  <div class="bd-about__shape-4"></div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- About-area-end -->

   <!-- Product-area-start -->
   <section class="bd-product__area pt-125 pb-95">
      <div class="container">
         <div class="row align-items-center">
            <div class="col-xl-5 col-lg-5">
               <div class="bd-section__title-wrapper mb-60">
                  <span class="bd-sub__title">Organic Products</span>
                  <h2 class="bd-section__title mb-30">Featured Product</h2>
               </div>
            </div>
            <div class="col-xl-7 col-lg-7">
               <div class="bd-bananna-nav mb-60">
                  <nav>
                     <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <button class="nav-link active" id="nav-product-1-tab" data-bs-toggle="tab"
                           data-bs-target="#nav-product-1" type="button" role="tab" aria-controls="nav-product-1"
                           aria-selected="true">Show All
                           <svg id="Group_4546" data-name="Group 4546" xmlns="http://www.w3.org/2000/svg"
                              width="26.513" height="26.513" viewBox="0 0 26.513 26.513">
                              <path id="Path_12014" data-name="Path 12014"
                                 d="M246.519,338.6a.518.518,0,0,1-.518-.518v-5.654a.518.518,0,1,1,1.036,0v5.654A.518.518,0,0,1,246.519,338.6Z"
                                 transform="translate(-233.262 -314.726)" fill="#777" />
                              <g id="Group_4544" data-name="Group 4544" transform="translate(6.718 17.082)">
                                 <g id="Group_4542" data-name="Group 4542" transform="translate(10.791)">
                                    <path id="Path_12015" data-name="Path 12015"
                                       d="M338.64,336.966a.518.518,0,0,1-.508-.623l1.25-6.061a.518.518,0,0,1,1.014.209l-1.25,6.061A.518.518,0,0,1,338.64,336.966Z"
                                       transform="translate(-338.122 -329.87)" fill="#777" />
                                 </g>
                                 <g id="Group_4543" data-name="Group 4543" transform="translate(0 0)">
                                    <path id="Path_12016" data-name="Path 12016"
                                       d="M131.5,336.966a.518.518,0,0,1-.507-.413l-1.25-6.061a.518.518,0,0,1,1.014-.209l1.25,6.061a.518.518,0,0,1-.508.623Z"
                                       transform="translate(-129.736 -329.87)" fill="#777" />
                                 </g>
                              </g>
                              <g id="Group_4545" data-name="Group 4545" transform="translate(12.749 14.823)">
                                 <path id="Path_12017" data-name="Path 12017"
                                    d="M246.718,287.292a.518.518,0,1,1,.508-.417A.523.523,0,0,1,246.718,287.292Z"
                                    transform="translate(-246.202 -286.257)" fill="#777" />
                              </g>
                              <path id="Path_12018" data-name="Path 12018"
                                 d="M26,12.1H23.681V8.859a3.843,3.843,0,0,0-.214-1.267,3.907,3.907,0,0,0-2.016-2.231V.518A.518.518,0,0,0,20.933,0H18.005a.518.518,0,0,0-.518.518V5.361a3.9,3.9,0,0,0-2.016,2.231h0a3.847,3.847,0,0,0-.179.75,2.955,2.955,0,0,1-.354-.165,3.894,3.894,0,0,1-.454-.33,2.7,2.7,0,0,0-1.329-.69,2.7,2.7,0,0,0-1.46.333,3.894,3.894,0,0,1-.522.2,4.193,4.193,0,0,1-.581.1,2.7,2.7,0,0,0-1.4.444,1.623,1.623,0,0,0-.483.632A3.086,3.086,0,0,0,7.1,7.651L7.07,7.64l.358-1.782a1.59,1.59,0,0,0-.321-1.311A1.66,1.66,0,0,0,4.571,4.5a1.62,1.62,0,0,0-.127.167,1.747,1.747,0,0,0-.694-.428A1.816,1.816,0,0,0,1.394,5.7a1.747,1.747,0,0,0,.066.78,1.611,1.611,0,0,0-.2.036A1.66,1.66,0,0,0,.142,8.795a1.59,1.59,0,0,0,1.019.886l1.754.5q-.007.043-.013.086A3.089,3.089,0,0,0,3.206,12.1H.518A.518.518,0,0,0,0,12.621V15.34a.518.518,0,0,0,.518.518H1.659l1.719,8.835a2.254,2.254,0,0,0,2.209,1.82H20.926a2.254,2.254,0,0,0,2.209-1.82l1.719-8.835H26a.518.518,0,0,0,.518-.518V12.621A.518.518,0,0,0,26,12.1Zm-9.7-3.244a2.826,2.826,0,0,1,.06-.579h6.233a2.817,2.817,0,0,1,.06.579V12.1H16.293Zm2.23-7.824h1.892V2.864H18.523ZM18.178,6.2a.518.518,0,0,0,.345-.488V3.9h1.892V5.707a.518.518,0,0,0,.345.488,2.86,2.86,0,0,1,1.375,1.05H16.8A2.856,2.856,0,0,1,18.178,6.2ZM9.826,9.054a1.923,1.923,0,0,1,.889-.235,5.007,5.007,0,0,0,.731-.124,4.693,4.693,0,0,0,.671-.258,1.9,1.9,0,0,1,.907-.252,1.9,1.9,0,0,1,.815.472,4.689,4.689,0,0,0,.584.419,5,5,0,0,0,.676.3l.158.062V12.1H10.068l-.745-1.874a5.036,5.036,0,0,0,.18-.513,1.364,1.364,0,0,1,.322-.662ZM1.444,8.684a.55.55,0,0,1-.356-.311A.624.624,0,0,1,1.5,7.522a.55.55,0,0,1,.464.09.518.518,0,0,0,.818-.5l-.068-.432a.518.518,0,0,0-.127-.267.694.694,0,0,1-.173-.572.78.78,0,0,1,1.006-.626.694.694,0,0,1,.436.408.518.518,0,0,0,.169.222l.365.277A.518.518,0,0,0,5.22,5.63a.55.55,0,0,1,.132-.454.624.624,0,0,1,.947.019.55.55,0,0,1,.114.459L6.043,7.491A3.266,3.266,0,0,0,3.251,9.2ZM4.431,12.07a2.044,2.044,0,0,1-.5-1.661A2.206,2.206,0,0,1,6.781,8.634,2.044,2.044,0,0,1,8.047,9.821L8.954,12.1H4.461Zm21.047,2.752H15.6a.518.518,0,1,0,0,1.036h8.2l-1.681,8.637a1.217,1.217,0,0,1-1.192.982H5.587A1.217,1.217,0,0,1,4.4,24.495L2.714,15.858h8.2a.518.518,0,0,0,0-1.036H1.036V13.139H25.477Z"
                                 transform="translate(0)" fill="#777" />
                           </svg>

                        </button>
                        <button class="nav-link" id="nav-product-2-tab" data-bs-toggle="tab"
                           data-bs-target="#nav-product-2" type="button" role="tab" aria-controls="nav-product-2"
                           aria-selected="false">Vegetable
                           <svg xmlns="http://www.w3.org/2000/svg" width="25.224" height="26.037"
                              viewBox="0 0 25.224 26.037">
                              <path id="Path_12004" data-name="Path 12004"
                                 d="M31.574,16.391a3.741,3.741,0,0,0,.233-6.035,6.768,6.768,0,0,0-9.155-9.294,3.32,3.32,0,0,0-4.94.08,4.877,4.877,0,1,0-6.236,7.5,4.252,4.252,0,0,0,2.557,4.212,18.411,18.411,0,0,1-3.1,4.129l-2.46,2.46a1.627,1.627,0,0,0,0,2.3L12.3,25.561a1.625,1.625,0,0,0,2.3,0L15.959,24.2a14.2,14.2,0,0,1,7.515-3.916,4.878,4.878,0,1,0,8.1-3.891ZM12.5,9.292a4.849,4.849,0,0,0,2.076.464,4.9,4.9,0,0,0,.842-.073l-.228.626q-.3.834-.691,1.637A3.26,3.26,0,0,1,12.5,9.292Zm11.035,9.948a15.181,15.181,0,0,0-4.609,1.535,1.258,1.258,0,0,0-.342-.625l-.62-.62a1.267,1.267,0,0,0-1.792,0L14.7,21a.509.509,0,0,0,.719.719l1.473-1.473a.25.25,0,0,1,.354,0l.62.62a.25.25,0,0,1,0,.354l-.369.369a.512.512,0,0,0-.062.075,15.035,15.035,0,0,0-2.195,1.811l-1.363,1.363a.609.609,0,0,1-.86,0l-2.7-2.7,2.567-2.568a.509.509,0,0,0-.719-.719L9.6,21.421l-.4-.4a.609.609,0,0,1,0-.86l2.46-2.46a19.456,19.456,0,0,0,4.49-7.043l.375-1.027a4.86,4.86,0,0,0,1.35,1.1l-1.143,3.994a.509.509,0,0,0,.849.5L21.1,11.7a6.721,6.721,0,0,0,1.236,1,4.877,4.877,0,0,0-.126,1.1,4.929,4.929,0,0,0,.129,1.125l-2.482,2.482a.509.509,0,0,0,.36.868H22.7a.509.509,0,0,0,0-1.017H21.445l1.276-1.276A4.854,4.854,0,0,0,24.1,17.656,4.825,4.825,0,0,0,23.536,19.241Zm-5.289-6.128.569-1.99a4.891,4.891,0,0,0,1.221.2Zm10.02,10.8a3.875,3.875,0,0,1-3.781-3.793,3.835,3.835,0,0,1,.709-2.3.532.532,0,0,0,.094-.213.51.51,0,0,0-.232-.524A3.845,3.845,0,0,1,23.4,14.946c0-.012-.007-.025-.011-.037a3.886,3.886,0,0,1,.024-2.287.514.514,0,0,0-.236-.609,5.818,5.818,0,0,1-1.813-1.567.509.509,0,0,0-.491-.194,3.9,3.9,0,0,1-.655.056,3.846,3.846,0,0,1-3.26-1.793.509.509,0,0,0-.657-.182,3.82,3.82,0,0,1-1.724.406,3.861,3.861,0,1,1,2.8-6.52c.034.034.07.068.1.1a3.847,3.847,0,0,1,.967,2.543.518.518,0,0,0,.494.52.509.509,0,0,0,.523-.508,4.86,4.86,0,0,0-1.036-3,2.3,2.3,0,0,1,3.69.142.508.508,0,0,0,.7.137,5.75,5.75,0,0,1,7.9,8.032.51.51,0,0,0-.049.058,5.823,5.823,0,0,1-4.623,2.481.522.522,0,0,0-.522.475.509.509,0,0,0,.507.542h.006a6.822,6.822,0,0,0,5.187-2.55,2.725,2.725,0,0,1-.783,4.651.509.509,0,0,0-.086.91,3.862,3.862,0,0,1-2.085,7.161Z"
                                 transform="translate(-8.001)" fill="#777" />
                           </svg>
                        </button>
                        <button class="nav-link" id="nav-product-3-tab" data-bs-toggle="tab"
                           data-bs-target="#nav-product-3" type="button" role="tab" aria-controls="nav-product-3"
                           aria-selected="false">Fruit & Food
                           <svg xmlns="http://www.w3.org/2000/svg" width="28.076" height="26.037"
                              viewBox="0 0 28.076 26.037">
                              <path id="Path_11967" data-name="Path 11967"
                                 d="M27.905,29.613a.548.548,0,0,0-.185-.32A3.457,3.457,0,0,1,26.535,27l-.016-.089a.548.548,0,0,0-.463-.444,1.831,1.831,0,0,0-.254-.017,2.52,2.52,0,0,0-1.723.711.549.549,0,0,0-.146.305c-.039.295-.059.564-.077.8-.067.9-.127.992-.4,1.078a.548.548,0,0,0-.358.36,12.668,12.668,0,0,1-1.012,2.368c-.2-.39-.43-.74-.639-1.066a3.1,3.1,0,0,1-.78-2.208c.449-2.53.221-4.436-.677-5.665a3.607,3.607,0,0,0-2.079-1.369,2.417,2.417,0,0,1,1.625-2.094.548.548,0,0,0-.284-1.059,3.511,3.511,0,0,0-2.428,3.016,3.638,3.638,0,0,0-2.324.787c-1.2.955-1.917,2.73-2.146,5.274-.069.766-.564,1.213-1.25,1.831A7.944,7.944,0,0,0,9.42,31.44a6.793,6.793,0,0,0-1.986-.477,2.4,2.4,0,0,1,1.613-2.017.548.548,0,1,0-.284-1.059,2.928,2.928,0,0,0-.824.372,3.242,3.242,0,0,0-4.015-2.49.548.548,0,0,0-.388.388,3.254,3.254,0,0,0,.839,3.132,3.218,3.218,0,0,0,2.1.944,4.11,4.11,0,0,0-.151.725,6.846,6.846,0,0,0,.517,13.673,6.781,6.781,0,0,0,3.883-1.208c.18.079.361.155.543.227a13.49,13.49,0,0,0,4.957.981,11.041,11.041,0,0,0,7.076-2.491,13.9,13.9,0,0,0,4.439-7.289A14.236,14.236,0,0,0,27.905,29.613Zm-16.068.721a3.86,3.86,0,0,0,1.608-2.547c.2-2.235.786-3.755,1.739-4.516a2.641,2.641,0,0,1,2.078-.517A2.6,2.6,0,0,1,19.1,23.78c.715.978.878,2.6.483,4.827a4.055,4.055,0,0,0,.938,2.993,8.4,8.4,0,0,1,.866,1.593,13.153,13.153,0,0,1-7.738,5.328A6.845,6.845,0,0,0,10.4,31.935,7.122,7.122,0,0,1,11.837,30.334ZM5.151,28.513a2.155,2.155,0,0,1-.616-1.746,2.173,2.173,0,0,1,.228-.012,2.131,2.131,0,0,1,1.517.628A2.154,2.154,0,0,1,6.9,29.129a2.172,2.172,0,0,1-.228.012h0A2.131,2.131,0,0,1,5.151,28.513Zm1.7,15.02a5.744,5.744,0,1,1,5.672-4.807q-.529.068-1.065.087a4.708,4.708,0,0,0-.239-2.82.548.548,0,0,0-1.015.416,3.621,3.621,0,0,1,.127,2.387,12.056,12.056,0,0,1-2.345-.388.548.548,0,0,0-.459.083,3.146,3.146,0,0,0-1.27,1.616.548.548,0,0,0,.165.6,18.532,18.532,0,0,0,3.144,2.146A5.7,5.7,0,0,1,6.846,43.532Zm19.839-8.967c-1.5,5.615-5.413,8.967-10.456,8.967a14.308,14.308,0,0,1-8.79-3.406,1.953,1.953,0,0,1,.517-.593,13.018,13.018,0,0,0,3.117.383,13.241,13.241,0,0,0,8.206-2.9A14.609,14.609,0,0,0,22.438,33.6c.01-.014.02-.028.029-.043a13.991,13.991,0,0,0,1.6-3.279c.769-.387.827-1.17.884-1.93.013-.174.026-.352.047-.54a1.485,1.485,0,0,1,.533-.232,4.3,4.3,0,0,0,1.328,2.419A13.265,13.265,0,0,1,26.685,34.565Z"
                                 transform="translate(0 -18.592)" fill="#777" />
                           </svg>
                        </button>
                        <button class="nav-link" id="product-4-tab" data-bs-toggle="tab" data-bs-target="#product-4"
                           type="button" role="tab" aria-controls="product-4" aria-selected="false">Dairy & Bakery
                           <svg id="ice-cream" xmlns="http://www.w3.org/2000/svg" width="23" height="26.037"
                              viewBox="0 0 23 26.037">
                              <path id="Path_11972" data-name="Path 11972"
                                 d="M30,3.92a1.92,1.92,0,0,0-3.378-1.249L22.809,7.119a5.671,5.671,0,0,0-1.048-1.372A5.573,5.573,0,0,0,17.63,4.174a5.682,5.682,0,0,0-5.4,5.224A5.645,5.645,0,0,0,7,15.019v4.774a1.261,1.261,0,0,0,.95,1.234,1.372,1.372,0,0,0,.371.051,1.291,1.291,0,0,0,.674-.193l1.928,6.837a.434.434,0,0,0,.417.316H24.358a.434.434,0,0,0,.418-.318l1.906-6.862a1.2,1.2,0,0,0,.584.23,1.3,1.3,0,0,0,1.431-1.3V15.019a5.653,5.653,0,0,0-4.191-5.456l4.831-4.187A1.924,1.924,0,0,0,30,3.92ZM17.663,5.041A4.768,4.768,0,0,1,22.6,9.4a5.656,5.656,0,0,0-5.164,5.174,1.341,1.341,0,0,0-.915.35,1.286,1.286,0,0,0-.41.96.434.434,0,0,1-.868,0v-1.43a1.274,1.274,0,0,0-.451-.984,4.769,4.769,0,0,1,2.868-8.432Zm6.647,18.2h.043a1.422,1.422,0,0,0,.857-.324l-.181.653a2.487,2.487,0,0,0-1.176.661,1.422,1.422,0,0,1-1.024.492,1.234,1.234,0,0,1-.948-.478,2.025,2.025,0,0,0-3.1,0,1.176,1.176,0,0,1-1.893,0,2.022,2.022,0,0,0-3.093,0,1.232,1.232,0,0,1-.946.478,1.486,1.486,0,0,1-1.04-.494,2.576,2.576,0,0,0-1.157-.653l-1.1-3.888h0a1.263,1.263,0,0,0-.105-.256.609.609,0,0,1-.037-.076c-.016-.046.024-.118.071-.168.168-.181.45-.021,1.16.519a3.539,3.539,0,0,0,1.994.953,5.6,5.6,0,0,0,2.993-.868h4.415q.17.107.348.2a5.783,5.783,0,0,0,1.5.521c.112.024.227.043.344.062a1.648,1.648,0,0,1,.779.253.56.56,0,0,1,.168.59l-.024.092a1.8,1.8,0,0,0-.085.591,1.188,1.188,0,0,0,1.23,1.138Zm1.785-3.511-.442,1.591c0-.852.007-2.179.007-2.181a.217.217,0,0,1,.434,0v.585S26.094,19.729,26.094,19.731ZM16.7,18.924a5.653,5.653,0,0,0,1.15-1.749A5.714,5.714,0,0,0,19,18.924ZM8.686,20.005a.428.428,0,0,1-.5.184.408.408,0,0,1-.316-.4V15.019a4.777,4.777,0,0,1,4.365-4.753,5.626,5.626,0,0,0,2,3.873.415.415,0,0,1,.139.317v1.43a1.3,1.3,0,1,0,2.6-.017.416.416,0,0,1,.134-.308.465.465,0,0,1,.279-.112,4.778,4.778,0,0,1-4.751,4.343,3.007,3.007,0,0,1-1.469-.775c-.707-.538-1.587-1.209-2.321-.421A1.029,1.029,0,0,0,8.6,19.645a1.556,1.556,0,0,0,.085.188.751.751,0,0,1,.038.079.2.2,0,0,1-.034.094Zm15.343,7.164H11.668l-.708-2.511c.095.069.188.145.287.23a2.309,2.309,0,0,0,1.6.7,2.057,2.057,0,0,0,1.547-.719,1.175,1.175,0,0,1,1.892,0,2.023,2.023,0,0,0,3.094,0,1.178,1.178,0,0,1,1.895,0,2.061,2.061,0,0,0,1.548.719,2.262,2.262,0,0,0,1.595-.706c.109-.1.209-.176.309-.249Zm3.8-12.151v4.774a.429.429,0,0,1-.142.322.436.436,0,0,1-.337.11.515.515,0,0,1-.389-.5v-.583a1.085,1.085,0,0,0-2.17,0s-.009,2.417-.009,2.823a.428.428,0,0,1-.457.411.326.326,0,0,1-.381-.321A1.156,1.156,0,0,1,24,21.738l.027-.1a1.415,1.415,0,0,0-.455-1.47,2.338,2.338,0,0,0-1.2-.442c-.1-.016-.2-.033-.3-.054a4.925,4.925,0,0,1-1.274-.438,4.774,4.774,0,0,1,2.063-8.982,4.775,4.775,0,0,1,4.961,4.771Zm.939-10.3-5.3,4.6a5.6,5.6,0,0,0-.274-1.311l4.088-4.77A1.054,1.054,0,1,1,28.769,4.72Z"
                                 transform="translate(-7 -2)" fill="#777" />
                              <path id="Path_11973" data-name="Path 11973" d="M35,11h.434v.868H35Z"
                                 transform="translate(-22.849 -7.094)" fill="#777" />
                              <path id="Path_11974" data-name="Path 11974" d="M29,13h.434v.868H29Z"
                                 transform="translate(-19.453 -8.226)" fill="#777" />
                              <path id="Path_11975" data-name="Path 11975" d="M25,16h.434v.868H25Z"
                                 transform="translate(-17.189 -9.925)" fill="#777" />
                              <path id="Path_11976" data-name="Path 11976" d="M33,15h.434v.868H33Z"
                                 transform="translate(-21.717 -9.359)" fill="#777" />
                              <path id="Path_11977" data-name="Path 11977" d="M39,15h.434v.868H39Z"
                                 transform="translate(-25.113 -9.359)" fill="#777" />
                              <path id="Path_11978" data-name="Path 11978" d="M16,24h.434v.868H16Z"
                                 transform="translate(-12.094 -14.453)" fill="#777" />
                              <path id="Path_11979" data-name="Path 11979" d="M13,26h.434v.868H13Z"
                                 transform="translate(-10.396 -15.585)" fill="#777" />
                              <path id="Path_11980" data-name="Path 11980" d="M45,24h.434v.868H45Z"
                                 transform="translate(-28.51 -14.453)" fill="#777" />
                              <path id="Path_11981" data-name="Path 11981" d="M38,26h.434v.868H38Z"
                                 transform="translate(-24.547 -15.585)" fill="#777" />
                              <path id="Path_11982" data-name="Path 11982" d="M42,28h.434v.868H42Z"
                                 transform="translate(-26.812 -16.717)" fill="#777" />
                              <path id="Path_11983" data-name="Path 11983" d="M50,26h.434v.868H50Z"
                                 transform="translate(-31.34 -15.585)" fill="#777" />
                           </svg>

                        </button>
                        <button class="nav-link" id="product-5-tab" data-bs-toggle="tab" data-bs-target="#product-5"
                           type="button" role="tab" aria-controls="product-5" aria-selected="false">Grocery & Major
                           <svg xmlns="http://www.w3.org/2000/svg" width="29.088" height="26.037"
                              viewBox="0 0 29.088 26.037">
                              <g id="garlic" transform="translate(0)">
                                 <path id="Path_11998" data-name="Path 11998"
                                    d="M389.511,92.486l.013.014a.643.643,0,1,0,.946-.872l-.005-.006-.005-.006a.643.643,0,0,0-.949.869Zm0,0"
                                    transform="translate(-367.345 -85.526)" fill="#777" />
                                 <path id="Path_11999" data-name="Path 11999"
                                    d="M190.5,117.636c.507-.471,1.04-.933,1.556-1.379.3-.259.608-.526.909-.793a.643.643,0,0,0-.854-.963c-.3.262-.6.527-.9.783-.524.454-1.066.923-1.59,1.41-1.428,1.327-2.961,2.958-3.09,5.533q0,.02,0,.041a4.815,4.815,0,0,0,1.036,2.927.643.643,0,1,0,1.013-.793,3.54,3.54,0,0,1-.762-2.131c.1-1.877,1.1-3.166,2.679-4.634Zm0,0"
                                    transform="translate(-176.292 -106.983)" fill="#777" />
                                 <path id="Path_12000" data-name="Path 12000"
                                    d="M362.221,186.523a.643.643,0,0,0-.643.643v.028a.643.643,0,1,0,1.287,0v-.028A.643.643,0,0,0,362.221,186.523Zm0,0"
                                    transform="translate(-341.147 -174.522)" fill="#777" />
                                 <path id="Path_12001" data-name="Path 12001"
                                    d="M120.912,291.241a.659.659,0,0,0,.127-.013l.021,0a.643.643,0,1,0-.148.017Zm0,0"
                                    transform="translate(-113.474 -271.297)" fill="#777" />
                                 <path id="Path_12002" data-name="Path 12002"
                                    d="M60.506,250.955a.637.637,0,0,0,.2.032.644.644,0,0,0,.2-1.255,2.756,2.756,0,0,1-1.816-1.938c-.01-.064-.019-.128-.026-.192a.643.643,0,1,0-1.279.145c.011.092.024.186.039.278,0,.014.005.029.009.043a4.05,4.05,0,0,0,2.672,2.885Zm0,0"
                                    transform="translate(-54.066 -231.138)" fill="#777" />
                                 <path id="Path_12003" data-name="Path 12003"
                                    d="M29.066,22.778a9.617,9.617,0,0,0-.912-2.431.585.585,0,0,0-.271-.239,7.569,7.569,0,0,0-1.144-.376,8.388,8.388,0,0,0,1.286-4.512c0-3.407-1.836-5.53-3.457-7.4a.523.523,0,0,0-.8-.009.705.705,0,0,0-.008.91c1.892,2.187,3.132,3.821,3.132,6.5a6.915,6.915,0,0,1-1.471,4.319,7.156,7.156,0,0,0-2.826.451l-.075.028-.109.042L22.3,20.1l-.05.021a9.2,9.2,0,0,0-1.427.755,10.869,10.869,0,0,0-.9.646,5.125,5.125,0,0,1-.75-.258,8.207,8.207,0,0,0,2.577-6.049v-.83a.573.573,0,1,0-1.136,0v.83a6.7,6.7,0,0,1-2.857,5.595h0a5.181,5.181,0,0,1-2.853.872,5.275,5.275,0,0,1-3.5-1.364.563.563,0,0,0-.049-.051,6.664,6.664,0,0,1-2.072-3.943l0-.023q-.011-.073-.02-.146l-.005-.039c-.005-.044-.01-.087-.015-.131,0-.016,0-.033-.005-.049,0-.041-.008-.082-.011-.123,0-.018,0-.037,0-.055,0-.04-.006-.08-.008-.12,0-.019,0-.038,0-.057,0-.041,0-.083,0-.124,0-.017,0-.034,0-.052q0-.088,0-.176c0-.112.01-.222.018-.332,0-.035.006-.07.009-.1.006-.074.012-.147.02-.22,0-.04.01-.079.014-.119.008-.067.016-.133.026-.2.006-.04.012-.08.018-.119q.015-.1.032-.194.01-.057.021-.112c.013-.066.026-.132.041-.2.007-.033.014-.066.022-.1.016-.071.034-.141.051-.21.006-.026.013-.052.02-.078q.033-.122.069-.242l.011-.038a11.791,11.791,0,0,1,3.158-4.789l.021-.021.149-.151L13,7.9c.246-.246.494-.488.741-.729,1.721-1.681,3.5-3.415,4.086-5.885h1.342a15.478,15.478,0,0,0,2.057,4.269.525.525,0,0,0,.8.117.7.7,0,0,0,.1-.9,13.9,13.9,0,0,1-2-4.315A.581.581,0,0,0,19.58,0H17.371a.593.593,0,0,0-.559.527C16.438,2.837,14.766,4.469,13,6.2l-.387.379A12.4,12.4,0,0,1,8.866,2.188a.546.546,0,0,0-.617-.313l-1.9.47a.634.634,0,0,0-.446.65c.061,2.034-1.1,3.781-2.32,5.629C2.017,11,.236,13.684.826,17.458l0,.025a7.055,7.055,0,0,0,1.9,3.662,8.267,8.267,0,0,0-1.561.341.565.565,0,0,0-.268.19,6.042,6.042,0,0,0-.861,1.758.72.72,0,0,0,.044.556c.551,1.045,2.268,1.544,3.242,1.748a12.046,12.046,0,0,0,2.438.252,6.475,6.475,0,0,0,4.215-1.22.676.676,0,0,0,.217-.481.688.688,0,0,0-.183-.5,8.925,8.925,0,0,0-1.489-1.182,5.872,5.872,0,0,0,2.106-1.272l.1.028a6.319,6.319,0,0,0,4.171,1.61,6.188,6.188,0,0,0,3.139-.868,6.445,6.445,0,0,0,.8.4,9.361,9.361,0,0,0-.8.913.708.708,0,0,0,.03.862,6.062,6.062,0,0,0,4.673,1.759,10.511,10.511,0,0,0,2.01-.2c1.693-.333,3.707-1.2,4.282-2.616a.722.722,0,0,0,.03-.447ZM1.943,17.22C1.445,14,3,11.661,4.5,9.4c1.194-1.8,2.426-3.663,2.541-5.9L8.09,3.231a13.617,13.617,0,0,0,3.646,4.223,18.527,18.527,0,0,0-1.51,1.752l-.088.119-.033.045c-.046.063-.091.127-.136.191l-.014.02A10.152,10.152,0,0,0,8.1,14.526c0,.009,0,.018,0,.026q-.014.144-.024.292c0,.017,0,.034,0,.05-.006.1-.012.2-.015.3,0,.009,0,.017,0,.026,0,.064,0,.127,0,.191,0,.023,0,.046,0,.069,0,.04,0,.08,0,.121s0,.056,0,.084,0,.069.006.1,0,.061.007.092,0,.063.007.094.006.065.009.1.006.058.009.087.007.068.011.1.007.054.01.081.009.07.014.105l.011.075.017.11.012.067c.006.039.013.077.02.116,0,.019.007.037.011.056.008.042.016.083.025.125l.008.035q.088.414.214.811l0,.009c.016.051.034.1.051.153l.005.015q.026.076.054.152l0,.012c.019.052.039.1.059.156l0,0a7.946,7.946,0,0,0,1.19,2.075,4.7,4.7,0,0,1-1.991,1.066,4.369,4.369,0,0,1-1.384.117h0a4.407,4.407,0,0,1-1.124-.238h0q-.182-.064-.361-.145l-.006,0a4.842,4.842,0,0,1-.844-.492,5.606,5.606,0,0,1-2.165-3.5ZM3.53,24.473a5.311,5.311,0,0,1-2.3-.938,5.269,5.269,0,0,1,.427-.866,7.028,7.028,0,0,1,2.952-.228,5.428,5.428,0,0,0,1.694.437,9.139,9.139,0,0,1,2.309,1.311,8.844,8.844,0,0,1-5.079.283Zm21.03.1a6.7,6.7,0,0,1-5.256-.8A10.9,10.9,0,0,1,20.429,22.7l0,0,.128-.1.03-.024.106-.083.138-.1.021-.016.124-.09h0A6.946,6.946,0,0,1,25.6,20.84h.045a6.279,6.279,0,0,1,1.654.4,9.3,9.3,0,0,1,.6,1.636,5.451,5.451,0,0,1-3.346,1.7Zm0,0"
                                    transform="translate(0 0)" fill="#777" />
                              </g>
                           </svg>

                        </button>
                     </div>
                  </nav>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-xxl-12">
               <div class="tab-content" id="nav-tabContent">
                  <div class="tab-pane fade show active" id="nav-product-1" role="tabpanel"
                     aria-labelledby="nav-product-1-tab">
                     <div class="row">
                        <div class="col-12">
                           <div class="bd-product__wrapper p-relative">
                              <div class="bd-product__active swiper-container">
                                 <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                       <div class="bd-product__item text-center p-relative mb-30">
                                          <div class="bd-product__thumb w-img">
                                             <a href="product-details.html"><img
                                                   src="assets/img/product/product-01.png')}}" alt="product-img"></a>
                                             <div class="bd-product__action">
                                                <a class="cart-btn" href="javascript:void(0)" data-toggle="tooltip"
                                                   data-placement="top" title="Quick View" data-bs-toggle="modal"><i
                                                      class="fal fa-cart-arrow-down"></i></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                   title="Quick Shop" data-bs-toggle="modal"
                                                   data-bs-target="#productmodal"><i class="fal fa-eye"></i></a>
                                                <a class="wishlist-btn" href="javascript:void(0)"
                                                   data-toggle="tooltip" data-placement="top" title="Quick Wishlist"
                                                   data-bs-toggle="modal"> <i class="fal fa-heart"></i></a>
                                             </div>
                                          </div>
                                          <div class="bd-product__content">
                                             <h4 class="bd-product__title"><a href="product-details.html">Tock Orange
                                                   Juice</a></h4>
                                             <div class="bd-product__price">
                                                <span class="bd-product__old-price"><del>$18.00</del></span><span
                                                   class="bd-product__new-price">$9.00</span>
                                             </div>
                                             <div class="bd-product__icon">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                             </div>
                                          </div>
                                          <div class="bd-product__tag">
                                             <span class="tag-text theme-bg">New</span>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="swiper-slide">
                                       <div class="bd-product__item text-center p-relative mb-30">
                                          <div class="bd-product__thumb w-img">
                                             <a href="product-details.html"><img
                                                   src="assets/img/product/product-11.png')}}" alt="product-img"></a>
                                             <div class="bd-product__action">
                                                <a class="cart-btn" href="javascript:void(0)" data-toggle="tooltip"
                                                   data-placement="top" title="Quick View" data-bs-toggle="modal"><i
                                                      class="fal fa-cart-arrow-down"></i></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                   title="Quick Shop" data-bs-toggle="modal"
                                                   data-bs-target="#productmodal"><i class="fal fa-eye"></i></a>
                                                <a class="wishlist-btn" href="javascript:void(0)"
                                                   data-toggle="tooltip" data-placement="top" title="Quick Wishlist"
                                                   data-bs-toggle="modal"> <i class="fal fa-heart"></i></a>
                                             </div>
                                          </div>
                                          <div class="bd-product__content">
                                             <h4 class="bd-product__title"><a href="product-details.html">Milk Cream
                                                   Smetana</a></h4>
                                             <div class="bd-product__price">
                                                <span class="bd-product__old-price"><del>$22.00</del></span><span
                                                   class="bd-product__new-price">$15.00</span>
                                             </div>
                                             <div class="bd-product__icon">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="swiper-slide">
                                       <div class="bd-product__item text-center mb-30">
                                          <div class="bd-product__thumb w-img">
                                             <a href="product-details.html"><img
                                                   src="assets/img/product/product-06.png')}}" alt="product-img"></a>
                                             <div class="bd-product__action">
                                                <a class="cart-btn" href="javascript:void(0)" data-toggle="tooltip"
                                                   data-placement="top" title="Quick View" data-bs-toggle="modal"><i
                                                      class="fal fa-cart-arrow-down"></i></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                   title="Quick Shop" data-bs-toggle="modal"
                                                   data-bs-target="#productmodal"><i class="fal fa-eye"></i></a>
                                                <a class="wishlist-btn" href="javascript:void(0)"
                                                   data-toggle="tooltip" data-placement="top" title="Quick Wishlist"
                                                   data-bs-toggle="modal"> <i class="fal fa-heart"></i></a>
                                             </div>
                                          </div>
                                          <div class="bd-product__content">
                                             <h4 class="bd-product__title"><a href="product-details.html">Organic
                                                   Apple</a></h4>
                                             <div class="bd-product__price">
                                                <span class="bd-product__old-price"><del>$20.00</del></span><span
                                                   class="bd-product__new-price">$12.00</span>
                                             </div>
                                             <div class="bd-product__icon">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                             </div>
                                          </div>
                                          <div class="bd-product__tag">
                                             <span class="tag-text yellow-bg">30%</span>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="swiper-slide">
                                       <div class="bd-product__item text-center p-relative mb-30">
                                          <div class="bd-product__thumb w-img">
                                             <a href="product-details.html"><img
                                                   src="assets/img/product/product-04.png')}}" alt="product-img"></a>
                                             <div class="bd-product__action">
                                                <a class="cart-btn" href="javascript:void(0)" data-toggle="tooltip"
                                                   data-placement="top" title="Quick View" data-bs-toggle="modal"><i
                                                      class="fal fa-cart-arrow-down"></i></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                   title="Quick Shop" data-bs-toggle="modal"
                                                   data-bs-target="#productmodal"><i class="fal fa-eye"></i></a>
                                                <a class="wishlist-btn" href="javascript:void(0)"
                                                   data-toggle="tooltip" data-placement="top" title="Quick Wishlist"
                                                   data-bs-toggle="modal"> <i class="fal fa-heart"></i></a>
                                             </div>
                                          </div>
                                          <div class="bd-product__content">
                                             <h4 class="bd-product__title"><a href="product-details.html">Fresh Payaz
                                                   Onion</a></h4>
                                             <div class="bd-product__price">
                                                <span class="bd-product__old-price"><del>$18.00</del></span><span
                                                   class="bd-product__new-price">$9.00</span>
                                             </div>
                                             <div class="bd-product__icon">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <!-- If we need navigation buttons -->
                              <div class="bd-product__nav">
                                 <button class="product-button-prev"><i
                                       class="fa-regular fa-angle-left"></i></button>
                                 <button class="product-button-next"><i
                                       class="fa-regular fa-angle-right"></i></button>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="tab-pane fade" id="nav-product-2" role="tabpanel" aria-labelledby="nav-product-2-tab">
                     <div class="row">
                        <div class="col-12">
                           <div class="bd-product__wrapper p-relative">
                              <div class="bd-product__active swiper-container">
                                 <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                       <div class="bd-product__item text-center p-relative mb-30">
                                          <div class="bd-product__thumb w-img">
                                             <a href="product-details.html"><img
                                                   src="assets/img/product/product-02.png')}}" alt="product-img"></a>
                                             <div class="bd-product__action">
                                                <a class="cart-btn" href="javascript:void(0)" data-toggle="tooltip"
                                                   data-placement="top" title="Quick View" data-bs-toggle="modal"><i
                                                      class="fal fa-cart-arrow-down"></i></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                   title="Quick Shop" data-bs-toggle="modal"
                                                   data-bs-target="#productmodal"><i class="fal fa-eye"></i></a>
                                                <a class="wishlist-btn" href="javascript:void(0)"
                                                   data-toggle="tooltip" data-placement="top" title="Quick Wishlist"
                                                   data-bs-toggle="modal"> <i class="fal fa-heart"></i></a>
                                             </div>
                                          </div>
                                          <div class="bd-product__content">
                                             <h4 class="bd-product__title"><a href="product-details.html">Organic
                                                   Badhakopy</a></h4>
                                             <div class="bd-product__price">
                                                <span class="bd-product__old-price"><del>$12.00</del></span><span
                                                   class="bd-product__new-price">$9.00</span>
                                             </div>
                                             <div class="bd-product__icon">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                             </div>
                                          </div>
                                          <div class="bd-product__tag">
                                             <span class="tag-text theme-bg">New</span>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="swiper-slide">
                                       <div class="bd-product__item text-center p-relative mb-30">
                                          <div class="bd-product__thumb w-img">
                                             <a href="product-details.html"><img
                                                   src="assets/img/product/product-04.png')}}" alt="product-img"></a>
                                             <div class="bd-product__action">
                                                <a class="cart-btn" href="javascript:void(0)" data-toggle="tooltip"
                                                   data-placement="top" title="Quick View" data-bs-toggle="modal"><i
                                                      class="fal fa-cart-arrow-down"></i></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                   title="Quick Shop" data-bs-toggle="modal"
                                                   data-bs-target="#productmodal"><i class="fal fa-eye"></i></a>
                                                <a class="wishlist-btn" href="javascript:void(0)"
                                                   data-toggle="tooltip" data-placement="top" title="Quick Wishlist"
                                                   data-bs-toggle="modal"> <i class="fal fa-heart"></i></a>
                                             </div>
                                          </div>
                                          <div class="bd-product__content">
                                             <h4 class="bd-product__title"><a href="product-details.html">Fresh Payaz
                                                   Onion</a></h4>
                                             <div class="bd-product__price">
                                                <span class="bd-product__old-price"><del>$14.00</del></span><span
                                                   class="bd-product__new-price">$9.00</span>
                                             </div>
                                             <div class="bd-product__icon">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="swiper-slide">
                                       <div class="bd-product__item text-center mb-30">
                                          <div class="bd-product__thumb w-img">
                                             <a href="product-details.html"><img
                                                   src="assets/img/product/product-08.png')}}" alt="product-img"></a>
                                             <div class="bd-product__action">
                                                <a class="cart-btn" href="javascript:void(0)" data-toggle="tooltip"
                                                   data-placement="top" title="Quick View" data-bs-toggle="modal"><i
                                                      class="fal fa-cart-arrow-down"></i></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                   title="Quick Shop" data-bs-toggle="modal"
                                                   data-bs-target="#productmodal"><i class="fal fa-eye"></i></a>
                                                <a class="wishlist-btn" href="javascript:void(0)"
                                                   data-toggle="tooltip" data-placement="top" title="Quick Wishlist"
                                                   data-bs-toggle="modal"> <i class="fal fa-heart"></i></a>
                                             </div>
                                          </div>
                                          <div class="bd-product__content">
                                             <h4 class="bd-product__title"><a href="product-details.html">Orange
                                                   Cauliflower </a></h4>
                                             <div class="bd-product__price">
                                                <span class="bd-product__old-price"><del>$9.00</del></span><span
                                                   class="bd-product__new-price">$9.00</span>
                                             </div>
                                             <div class="bd-product__icon">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                             </div>
                                          </div>
                                          <div class="bd-product__tag">
                                             <span class="tag-text yellow-bg">New</span>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="swiper-slide">
                                       <div class="bd-product__item text-center p-relative mb-30">
                                          <div class="bd-product__thumb w-img">
                                             <a href="product-details.html"><img
                                                   src="assets/img/product/product-09.png')}}" alt="product-img"></a>
                                             <div class="bd-product__action">
                                                <a class="cart-btn" href="javascript:void(0)" data-toggle="tooltip"
                                                   data-placement="top" title="Quick View" data-bs-toggle="modal"><i
                                                      class="fal fa-cart-arrow-down"></i></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                   title="Quick Shop" data-bs-toggle="modal"
                                                   data-bs-target="#productmodal"><i class="fal fa-eye"></i></a>
                                                <a class="wishlist-btn" href="javascript:void(0)"
                                                   data-toggle="tooltip" data-placement="top" title="Quick Wishlist"
                                                   data-bs-toggle="modal"> <i class="fal fa-heart"></i></a>
                                             </div>
                                          </div>
                                          <div class="bd-product__content">
                                             <h4 class="bd-product__title"><a href="product-details.html">Orange
                                                   Vagetable</a></h4>
                                             <div class="bd-product__price">
                                                <span class="bd-product__old-price"><del>$6.00</del></span><span
                                                   class="bd-product__new-price">$9.00</span>
                                             </div>
                                             <div class="bd-product__icon">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <!-- If we need navigation buttons -->
                              <div class="bd-product__nav">
                                 <button class="product-button-prev"><i
                                       class="fa-regular fa-angle-left"></i></button>
                                 <button class="product-button-next"><i
                                       class="fa-regular fa-angle-right"></i></button>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="tab-pane fade" id="nav-product-3" role="tabpanel" aria-labelledby="nav-product-3-tab">
                     <div class="row">
                        <div class="col-12">
                           <div class="bd-product__wrapper p-relative">
                              <div class="bd-product__active swiper-container">
                                 <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                       <div class="bd-product__item text-center p-relative mb-30">
                                          <div class="bd-product__thumb w-img">
                                             <a href="product-details.html"><img
                                                   src="assets/img/product/product-05.png')}}" alt="product-img"></a>
                                             <div class="bd-product__action">
                                                <a class="cart-btn" href="javascript:void(0)" data-toggle="tooltip"
                                                   data-placement="top" title="Quick View" data-bs-toggle="modal"><i
                                                      class="fal fa-cart-arrow-down"></i></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                   title="Quick Shop" data-bs-toggle="modal"
                                                   data-bs-target="#productmodal"><i class="fal fa-eye"></i></a>
                                                <a class="wishlist-btn" href="javascript:void(0)"
                                                   data-toggle="tooltip" data-placement="top" title="Quick Wishlist"
                                                   data-bs-toggle="modal"> <i class="fal fa-heart"></i></a>
                                             </div>
                                          </div>
                                          <div class="bd-product__content">
                                             <h4 class="bd-product__title"><a href="product-details.html">Orange
                                                   pomegranate </a></h4>
                                             <div class="bd-product__price">
                                                <span class="bd-product__old-price"><del>$30.00</del></span><span
                                                   class="bd-product__new-price">$20.00</span>
                                             </div>
                                             <div class="bd-product__icon">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                             </div>
                                          </div>
                                          <div class="bd-product__tag">
                                             <span class="tag-text theme-bg">New</span>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="swiper-slide">
                                       <div class="bd-product__item text-center p-relative mb-30">
                                          <div class="bd-product__thumb w-img">
                                             <a href="product-details.html"><img
                                                   src="assets/img/product/product-06.png')}}" alt="product-img"></a>
                                             <div class="bd-product__action">
                                                <a class="cart-btn" href="javascript:void(0)" data-toggle="tooltip"
                                                   data-placement="top" title="Quick View" data-bs-toggle="modal"><i
                                                      class="fal fa-cart-arrow-down"></i></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                   title="Quick Shop" data-bs-toggle="modal"
                                                   data-bs-target="#productmodal"><i class="fal fa-eye"></i></a>
                                                <a class="wishlist-btn" href="javascript:void(0)"
                                                   data-toggle="tooltip" data-placement="top" title="Quick Wishlist"
                                                   data-bs-toggle="modal"> <i class="fal fa-heart"></i></a>
                                             </div>
                                          </div>
                                          <div class="bd-product__content">
                                             <h4 class="bd-product__title"><a href="product-details.html">Orange
                                                   Apple</a></h4>
                                             <div class="bd-product__price">
                                                <span class="bd-product__old-price"><del>$15.00</del></span><span
                                                   class="bd-product__new-price">$10.00</span>
                                             </div>
                                             <div class="bd-product__icon">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="swiper-slide">
                                       <div class="bd-product__item text-center mb-30">
                                          <div class="bd-product__thumb w-img">
                                             <a href="product-details.html"><img
                                                   src="assets/img/product/product-07.png')}}" alt="product-img"></a>
                                             <div class="bd-product__action">
                                                <a class="cart-btn" href="javascript:void(0)" data-toggle="tooltip"
                                                   data-placement="top" title="Quick View" data-bs-toggle="modal"><i
                                                      class="fal fa-cart-arrow-down"></i></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                   title="Quick Shop" data-bs-toggle="modal"
                                                   data-bs-target="#productmodal"><i class="fal fa-eye"></i></a>
                                                <a class="wishlist-btn" href="javascript:void(0)"
                                                   data-toggle="tooltip" data-placement="top" title="Quick Wishlist"
                                                   data-bs-toggle="modal"> <i class="fal fa-heart"></i></a>
                                             </div>
                                          </div>
                                          <div class="bd-product__content">
                                             <h4 class="bd-product__title"><a href="product-details.html">Orange
                                                   Lemon</a></h4>
                                             <div class="bd-product__price">
                                                <span class="bd-product__old-price"><del>$18.00</del></span><span
                                                   class="bd-product__new-price">$14.00</span>
                                             </div>
                                             <div class="bd-product__icon">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                             </div>
                                          </div>
                                          <div class="bd-product__tag">
                                             <span class="tag-text yellow-bg">New</span>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="swiper-slide">
                                       <div class="bd-product__item text-center p-relative mb-30">
                                          <div class="bd-product__thumb w-img">
                                             <a href="product-details.html"><img
                                                   src="assets/img/product/product-03.png')}}" alt="product-img"></a>
                                             <div class="bd-product__action">
                                                <a class="cart-btn" href="javascript:void(0)" data-toggle="tooltip"
                                                   data-placement="top" title="Quick View" data-bs-toggle="modal"><i
                                                      class="fal fa-cart-arrow-down"></i></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                   title="Quick Shop" data-bs-toggle="modal"
                                                   data-bs-target="#productmodal"><i class="fal fa-eye"></i></a>
                                                <a class="wishlist-btn" href="javascript:void(0)"
                                                   data-toggle="tooltip" data-placement="top" title="Quick Wishlist"
                                                   data-bs-toggle="modal"> <i class="fal fa-heart"></i></a>
                                             </div>
                                          </div>
                                          <div class="bd-product__content">
                                             <h4 class="bd-product__title"><a href="product-details.html">Orange
                                                   Banana</a></h4>
                                             <div class="bd-product__price">
                                                <span class="bd-product__old-price"><del>$16.00</del></span><span
                                                   class="bd-product__new-price">$12.00</span>
                                             </div>
                                             <div class="bd-product__icon">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <!-- If we need navigation buttons -->
                              <div class="bd-product__nav">
                                 <button class="product-button-prev"><i
                                       class="fa-regular fa-angle-left"></i></button>
                                 <button class="product-button-next"><i
                                       class="fa-regular fa-angle-right"></i></button>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="tab-pane fade" id="product-4" role="tabpanel" aria-labelledby="product-4-tab">
                     <div class="row">
                        <div class="col-12">
                           <div class="bd-product__wrapper p-relative">
                              <div class="bd-product__active swiper-container">
                                 <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                       <div class="bd-product__item text-center p-relative mb-30">
                                          <div class="bd-product__thumb w-img">
                                             <a href="product-details.html"><img
                                                   src="assets/img/product/product-10.png')}}" alt="product-img"></a>
                                             <div class="bd-product__action">
                                                <a class="cart-btn" href="javascript:void(0)" data-toggle="tooltip"
                                                   data-placement="top" title="Quick View" data-bs-toggle="modal"><i
                                                      class="fal fa-cart-arrow-down"></i></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                   title="Quick Shop" data-bs-toggle="modal"
                                                   data-bs-target="#productmodal"><i class="fal fa-eye"></i></a>
                                                <a class="wishlist-btn" href="javascript:void(0)"
                                                   data-toggle="tooltip" data-placement="top" title="Quick Wishlist"
                                                   data-bs-toggle="modal"> <i class="fal fa-heart"></i></a>
                                             </div>
                                          </div>
                                          <div class="bd-product__content">
                                             <h4 class="bd-product__title"><a href="product-details.html">Organic
                                                   Fresh Milk</a></h4>
                                             <div class="bd-product__price">
                                                <span class="bd-product__old-price"><del>$14.00</del></span><span
                                                   class="bd-product__new-price">$10.00</span>
                                             </div>
                                             <div class="bd-product__icon">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                             </div>
                                          </div>
                                          <div class="bd-product__tag">
                                             <span class="tag-text theme-bg">New</span>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="swiper-slide">
                                       <div class="bd-product__item text-center p-relative mb-30">
                                          <div class="bd-product__thumb w-img">
                                             <a href="product-details.html"><img
                                                   src="assets/img/product/product-11.png')}}" alt="product-img"></a>
                                             <div class="bd-product__action">
                                                <a class="cart-btn" href="javascript:void(0)" data-toggle="tooltip"
                                                   data-placement="top" title="Quick View" data-bs-toggle="modal"><i
                                                      class="fal fa-cart-arrow-down"></i></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                   title="Quick Shop" data-bs-toggle="modal"
                                                   data-bs-target="#productmodal"><i class="fal fa-eye"></i></a>
                                                <a class="wishlist-btn" href="javascript:void(0)"
                                                   data-toggle="tooltip" data-placement="top" title="Quick Wishlist"
                                                   data-bs-toggle="modal"> <i class="fal fa-heart"></i></a>
                                             </div>
                                          </div>
                                          <div class="bd-product__content">
                                             <h4 class="bd-product__title"><a href="product-details.html">Organic
                                                   Full Cream Milk</a></h4>
                                             <div class="bd-product__price">
                                                <span class="bd-product__old-price"><del>$20.00</del></span><span
                                                   class="bd-product__new-price">$16.00</span>
                                             </div>
                                             <div class="bd-product__icon">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="swiper-slide">
                                       <div class="bd-product__item text-center mb-30">
                                          <div class="bd-product__thumb w-img">
                                             <a href="product-details.html"><img
                                                   src="assets/img/product/product-12.png')}}" alt="product-img"></a>
                                             <div class="bd-product__action">
                                                <a class="cart-btn" href="javascript:void(0)" data-toggle="tooltip"
                                                   data-placement="top" title="Quick View" data-bs-toggle="modal"><i
                                                      class="fal fa-cart-arrow-down"></i></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                   title="Quick Shop" data-bs-toggle="modal"
                                                   data-bs-target="#productmodal"><i class="fal fa-eye"></i></a>
                                                <a class="wishlist-btn" href="javascript:void(0)"
                                                   data-toggle="tooltip" data-placement="top" title="Quick Wishlist"
                                                   data-bs-toggle="modal"> <i class="fal fa-heart"></i></a>
                                             </div>
                                          </div>
                                          <div class="bd-product__content">
                                             <h4 class="bd-product__title"><a href="product-details.html">Dairy Fresh
                                                   Milk</a></h4>
                                             <div class="bd-product__price">
                                                <span class="bd-product__old-price"><del>$16.00</del></span><span
                                                   class="bd-product__new-price">$13.00</span>
                                             </div>
                                             <div class="bd-product__icon">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                             </div>
                                          </div>
                                          <div class="bd-product__tag">
                                             <span class="tag-text yellow-bg">New</span>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="swiper-slide">
                                       <div class="bd-product__item text-center p-relative mb-30">
                                          <div class="bd-product__thumb w-img">
                                             <a href="product-details.html"><img
                                                   src="assets/img/product/product-13.png')}}" alt="product-img"></a>
                                             <div class="bd-product__action">
                                                <a class="cart-btn" href="javascript:void(0)" data-toggle="tooltip"
                                                   data-placement="top" title="Quick View" data-bs-toggle="modal"><i
                                                      class="fal fa-cart-arrow-down"></i></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                   title="Quick Shop" data-bs-toggle="modal"
                                                   data-bs-target="#productmodal"><i class="fal fa-eye"></i></a>
                                                <a class="wishlist-btn" href="javascript:void(0)"
                                                   data-toggle="tooltip" data-placement="top" title="Quick Wishlist"
                                                   data-bs-toggle="modal"> <i class="fal fa-heart"></i></a>
                                             </div>
                                          </div>
                                          <div class="bd-product__content">
                                             <h4 class="bd-product__title"><a href="product-details.html">Orange Milk
                                                   Chocolate</a></h4>
                                             <div class="bd-product__price">
                                                <span class="bd-product__old-price"><del>$8.00</del></span><span
                                                   class="bd-product__new-price">$6.00</span>
                                             </div>
                                             <div class="bd-product__icon">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <!-- If we need navigation buttons -->
                              <div class="bd-product__nav">
                                 <button class="product-button-prev"><i
                                       class="fa-regular fa-angle-left"></i></button>
                                 <button class="product-button-next"><i
                                       class="fa-regular fa-angle-right"></i></button>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="tab-pane fade" id="product-5" role="tabpanel" aria-labelledby="product-5-tab">
                     <div class="row">
                        <div class="col-12">
                           <div class="bd-product__wrapper p-relative">
                              <div class="bd-product__active swiper-container">
                                 <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                       <div class="bd-product__item text-center p-relative mb-30">
                                          <div class="bd-product__thumb w-img">
                                             <a href="product-details.html"><img
                                                   src="assets/img/product/product-06.png')}}" alt="product-img"></a>
                                             <div class="bd-product__action">
                                                <a class="cart-btn" href="javascript:void(0)" data-toggle="tooltip"
                                                   data-placement="top" title="Quick View" data-bs-toggle="modal"><i
                                                      class="fal fa-cart-arrow-down"></i></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                   title="Quick Shop" data-bs-toggle="modal"
                                                   data-bs-target="#productmodal"><i class="fal fa-eye"></i></a>
                                                <a class="wishlist-btn" href="javascript:void(0)"
                                                   data-toggle="tooltip" data-placement="top" title="Quick Wishlist"
                                                   data-bs-toggle="modal"> <i class="fal fa-heart"></i></a>
                                             </div>
                                          </div>
                                          <div class="bd-product__content">
                                             <h4 class="bd-product__title"><a href="product-details.html">Orange
                                                   Fresh Apple</a></h4>
                                             <div class="bd-product__price">
                                                <span class="bd-product__old-price"><del>$15.00</del></span><span
                                                   class="bd-product__new-price">$12.00</span>
                                             </div>
                                             <div class="bd-product__icon">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                             </div>
                                          </div>
                                          <div class="bd-product__tag">
                                             <span class="tag-text theme-bg">New</span>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="swiper-slide">
                                       <div class="bd-product__item text-center p-relative mb-30">
                                          <div class="bd-product__thumb w-img">
                                             <a href="product-details.html"><img
                                                   src="assets/img/product/product-09.png')}}" alt="product-img"></a>
                                             <div class="bd-product__action">
                                                <a class="cart-btn" href="javascript:void(0)" data-toggle="tooltip"
                                                   data-placement="top" title="Quick View" data-bs-toggle="modal"><i
                                                      class="fal fa-cart-arrow-down"></i></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                   title="Quick Shop" data-bs-toggle="modal"
                                                   data-bs-target="#productmodal"><i class="fal fa-eye"></i></a>
                                                <a class="wishlist-btn" href="javascript:void(0)"
                                                   data-toggle="tooltip" data-placement="top" title="Quick Wishlist"
                                                   data-bs-toggle="modal"> <i class="fal fa-heart"></i></a>
                                             </div>
                                          </div>
                                          <div class="bd-product__content">
                                             <h4 class="bd-product__title"><a href="product-details.html">Orange
                                                   Vagetable</a></h4>
                                             <div class="bd-product__price">
                                                <span class="bd-product__old-price"><del>$10.00</del></span><span
                                                   class="bd-product__new-price">$08.00</span>
                                             </div>
                                             <div class="bd-product__icon">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="swiper-slide">
                                       <div class="bd-product__item text-center mb-30">
                                          <div class="bd-product__thumb w-img">
                                             <a href="product-details.html"><img
                                                   src="assets/img/product/product-14.png')}}" alt="product-img"></a>
                                             <div class="bd-product__action">
                                                <a class="cart-btn" href="javascript:void(0)" data-toggle="tooltip"
                                                   data-placement="top" title="Quick View" data-bs-toggle="modal"><i
                                                      class="fal fa-cart-arrow-down"></i></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                   title="Quick Shop" data-bs-toggle="modal"
                                                   data-bs-target="#productmodal"><i class="fal fa-eye"></i></a>
                                                <a class="wishlist-btn" href="javascript:void(0)"
                                                   data-toggle="tooltip" data-placement="top" title="Quick Wishlist"
                                                   data-bs-toggle="modal"> <i class="fal fa-heart"></i></a>
                                             </div>
                                          </div>
                                          <div class="bd-product__content">
                                             <h4 class="bd-product__title"><a href="product-details.html">Orange
                                                   Grocery Store</a></h4>
                                             <div class="bd-product__price">
                                                <span class="bd-product__old-price"><del>$9.00</del></span><span
                                                   class="bd-product__new-price">$9.00</span>
                                             </div>
                                             <div class="bd-product__icon">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                             </div>
                                          </div>
                                          <div class="bd-product__tag">
                                             <span class="tag-text yellow-bg">New</span>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="swiper-slide">
                                       <div class="bd-product__item text-center p-relative mb-30">
                                          <div class="bd-product__thumb w-img">
                                             <a href="product-details.html"><img
                                                   src="assets/img/product/product-15.png')}}" alt="product-img"></a>
                                             <div class="bd-product__action">
                                                <a class="cart-btn" href="javascript:void(0)" data-toggle="tooltip"
                                                   data-placement="top" title="Quick View" data-bs-toggle="modal"><i
                                                      class="fal fa-cart-arrow-down"></i></a>
                                                <a href="#" data-toggle="tooltip" data-placement="top"
                                                   title="Quick Shop" data-bs-toggle="modal"
                                                   data-bs-target="#productmodal"><i class="fal fa-eye"></i></a>
                                                <a class="wishlist-btn" href="javascript:void(0)"
                                                   data-toggle="tooltip" data-placement="top" title="Quick Wishlist"
                                                   data-bs-toggle="modal"> <i class="fal fa-heart"></i></a>
                                             </div>
                                          </div>
                                          <div class="bd-product__content">
                                             <h4 class="bd-product__title"><a href="product-details.html">Fresh Food
                                                   Rice</a></h4>
                                             <div class="bd-product__price">
                                                <span class="bd-product__old-price"><del>$30.00</del></span><span
                                                   class="bd-product__new-price">$24.00</span>
                                             </div>
                                             <div class="bd-product__icon">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <!-- If we need navigation buttons -->
                              <div class="bd-product__nav">
                                 <button class="product-button-prev"><i
                                       class="fa-regular fa-angle-left"></i></button>
                                 <button class="product-button-next"><i
                                       class="fa-regular fa-angle-right"></i></button>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- Product-area-end -->

   <!-- Why-choose-area-start -->
   <section class="bd-why-choose__area grey-bg-2 pt-125 pb-195">
      <div class="container">
         <div class="row">
            <div class="col-12">
               <div class="bd-section__title-wrapper text-center mb-60">
                  <span class="bd-sub__title">Why Choose Us</span>
                  <h2 class="bd-section__title mb-30">6 reasons to Choose us</h2>
               </div>
            </div>
         </div>
         <div class="row g-0 align-items-center">
            <div class="col-xl-4 col-lg-4 col-md-6">
               <div class="bd-choose__wrapper choose-wrapper__left mb-60">
                  <div class="bd-choose__item">
                     <div class="bd-choose__content text-end">
                        <h4>100% Organic</h4>
                        <p>We show that the seemingly simple process of text realization</p>
                     </div>
                     <div class="bd-choose__icon choose-icon__left">
                        <img src="{{ asset('assets/img/why-choose/why-choose-01.png')}}" alt="why-choose-img">
                     </div>
                  </div>
                  <div class="bd-choose__item">
                     <div class="bd-choose__content text-end">
                        <h4>Neat & Clean</h4>
                        <p>We show that the seemingly simple process of text realization</p>
                     </div>
                     <div class="bd-choose__icon choose-icon__left">
                        <img src="{{ asset('assets/img/why-choose/why-choose-02.png')}}" alt="why-choose-img">
                     </div>
                  </div>
                  <div class="bd-choose__item">
                     <div class="bd-choose__content text-end">
                        <h4>No Preservation</h4>
                        <p>We show that the seemingly simple process of text realization</p>
                     </div>
                     <div class="bd-choose__icon choose-icon__left">
                        <img src="{{ asset('assets/img/why-choose/why-choose-03.png')}}" alt="why-choose-img">
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
               <div class="bd-choose__thumb text-center w-img mb-30">
                  <img src="{{ asset('assets/img/why-choose/why-choose-big.png')}}" alt="choose-big">
               </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
               <div class="bd-choose__wrapper choose-wrapper__right mb-60">
                  <div class="bd-choose__item">
                     <div class="bd-choose__icon choose__icon-right">
                        <img src="{{ asset('assets/img/why-choose/why-choose-04.png')}}" alt="why-choose-img">
                     </div>
                     <div class="bd-choose__content text-start">
                        <h4>Export Quality</h4>
                        <p>We show that the seemingly simple process of text realization</p>
                     </div>
                  </div>
                  <div class="bd-choose__item">
                     <div class="bd-choose__icon choose__icon-right">
                        <img src="{{ asset('assets/img/why-choose/why-choose-05.png')}}" alt="why-choose-img">
                     </div>
                     <div class="bd-choose__content text-start">
                        <h4>Trendy Design</h4>
                        <p>We show that the seemingly simple process of text realization</p>
                     </div>
                  </div>
                  <div class="bd-choose__item">
                     <div class="bd-choose__icon choose__icon-right">
                        <img src="{{ asset('assets/img/why-choose/why-choose-06.png')}}" alt="why-choose-img">
                     </div>
                     <div class="bd-choose__content text-start">
                        <h4>Fast Delivery</h4>
                        <p>We show that the seemingly simple process of text realization</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- Why-choose-area-end -->

   <!-- counter-area-start -->
   <section class="bd-counter__area fix">
      <div class="container">
         <div class="bd-counter__main theme-bg pt-100 pb-35">
            <div class="row">
               <span class="bd-counter-shape-line"></span>
               <div class="col-xl-3 col-lg-3 col-md-6">
                  <div class="bd-counter__single-item mb-60">
                     <div class="bd-counter__content">
                        <span class="counter">89</span><span>k</span><span>+</span>
                        <h4>Organic Products</h4>
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6">
                  <div class="bd-counter__single-item mb-60">
                     <div class="bd-counter__content">
                        <span class="counter">80</span><span>k</span><span>+</span>
                        <h4>Metric to supplied</h4>
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6">
                  <div class="bd-counter__single-item mb-60">
                     <div class="bd-counter__content">
                        <span class="counter">40</span><span>k</span><span>+</span>
                        <h4>Experienced Farmer</h4>
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6">
                  <div class="bd-counter__single-item mb-60">
                     <div class="bd-counter__content">
                        <span class="counter">25</span><span>k</span><span>+</span>
                        <h4>Organic Awards</h4>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- counter-area-end -->

   <!-- News-area-start -->
   <section class="bd-news__area pt-125 pb-60">
      <div class="container">
         <div class="row">
            <div class="col-12">
               <div class="bd-section__title-wrapper text-center mb-60">
                  <span class="bd-sub__title">News Insight</span>
                  <h2 class="bd-section__title mb-30">News From Banana</h2>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6">
               <div class="bd-news__item mb-60">
                  <div class="bd-news__thumb w-img">
                     <a href="news-details.html"><img src="{{ asset('assets/img/news/news-thumb-01.jpg')}}" alt="news-image"></a>
                  </div>
                  <div class="bd-news__content">
                     <div class="bd-news__meta-list">
                        <div class="bd-news__meta-item">
                           <span><a href="news.html"><i class="fa-light fa-folder-open"></i>Health</a></span>
                        </div>
                        <div class="bd-news__meta-item">
                           <span><i class="fa-regular fa-clock"></i>31 Mar 2021</span>
                        </div>
                     </div>
                     <div class="bd-news__title">
                        <h3><a href="news-details.html">Worthy Cyber Monday Organic Food
                              From Foodpond</a></h3>
                     </div>
                     <a class="bd-news__btn" href="news-details.html">Read More<span><i
                              class="fa-solid fa-arrow-left"></i><i class="fa-solid fa-arrow-left"></i></span></a>
                  </div>
               </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
               <div class="bd-news__item mb-60">
                  <div class="bd-news__thumb w-img">
                     <a href="news-details.html"><img src="{{ asset('assets/img/news/news-thumb-02.jpg')}}" alt="news-image"></a>
                  </div>
                  <div class="bd-news__content">
                     <div class="bd-news__meta-list">
                        <div class="bd-news__meta-item">
                           <span><a href="news.html"><i class="fa-light fa-folder-open"></i>Health</a></span>
                        </div>
                        <div class="bd-news__meta-item">
                           <span><i class="fa-regular fa-clock"></i>20 Mar 2021</span>
                        </div>
                     </div>
                     <div class="bd-news__title">
                        <h3><a href="news-details.html">Holiday Home Delivery We have
                              Recently Orderedd</a></h3>
                     </div>
                     <a class="bd-news__btn" href="news-details.html">Read More<span><i
                              class="fa-solid fa-arrow-left"></i><i class="fa-solid fa-arrow-left"></i></span></a>
                  </div>
               </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
               <div class="bd-news__item mb-60">
                  <div class="bd-news__thumb w-img">
                     <a href="news-details.html"><img src="{{ asset('assets/img/news/news-thumb-03.jpg')}}" alt="news-image"></a>
                  </div>
                  <div class="bd-news__content">
                     <div class="bd-news__meta-list">
                        <div class="bd-news__meta-item">
                           <span><a href="news.html"><i class="fa-light fa-folder-open"></i>Health</a></span>
                        </div>
                        <div class="bd-news__meta-item">
                           <span><i class="fa-regular fa-clock"></i>15 May 2021</span>
                        </div>
                     </div>
                     <div class="bd-news__title">
                        <h3><a href="news-details.html">Unique Ideas for Healthy Food You
                              Haven’t heard yet</a></h3>
                     </div>
                     <a class="bd-news__btn" href="news-details.html">Read More<span><i
                              class="fa-solid fa-arrow-left"></i><i class="fa-solid fa-arrow-left"></i></span></a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- News-area-end -->
</main>
@endsection