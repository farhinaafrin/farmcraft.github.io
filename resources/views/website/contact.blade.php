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
                        <span>Contact</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb-area-end -->

    <!-- Contact-area-start -->
    <section class="bd-Contact__area pt-105">
        <div class="container">
            <div class="row g-0 justify-content-center">
                <div class="col-xxl-7 col-xl-7 col-lg-8 col-md-12">
                    <div class="bd-contact__main-wrapper mb-70">
                        <div class="bd-section__title-wrapper">
                            <h2 class="bd-section__title mb-50">
                                Get in Touch
                            </h2>
                        </div>
                        <div class="bd-contact__form">
                            <form action="{{ route('contact.store')}}" method="POST">
                                @csrf
                                <div class="row">
                                    
                                    @include('website.errors')
                                    <div class="col-md-6">
                                        <div class="bd-single__form-input mb-20">
                                            <input type="name" name="name" id="name" placeholder="Name" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="bd-single__form-input mb-20">
                                            <input type="text" name="phone" id="phone" placeholder="Phone" />
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="bd-single__form-input mb-20">
                                            <input  type="email" name="email" id="email" placeholder="Email" />
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="bd-single__form-input mb-20">
                                            <textarea name="message" name="massage" id="message" placeholder="Messages"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="contact-btn">
                                    <button type="submit" class="bd-fill__btn"> Submit Now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-lg-4">
                    <div class="bd__sidebar-wrapper mb-70">
                        <div class="bd-sidebar__support">
                            <div class="bd-sidebar__title">
                                <h4>Support Contact</h4>
                            </div>
                            <div class="bd-sidebar__content">
                                <div class="bd-contact__list">
                                    <div class="bd-contact__item">
                                        <div class="bd-contact__item-list">
                                            <div class="bd-contact__icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="21.375" height="21.375"
                                                    viewBox="0 0 21.375 21.375">
                                                    <path id="Path_8" data-name="Path 8"
                                                        d="M1.688,16.386c.038-.031,4.3-3.085,5.463-2.885.556.1.875.477,1.513,1.238.1.123.35.415.541.624a8.877,8.877,0,0,0,1.176-.479,9.761,9.761,0,0,0,4.5-4.5A8.876,8.876,0,0,0,15.363,9.2c-.209-.192-.5-.439-.628-.544-.756-.634-1.135-.953-1.233-1.51C13.3,6,16.354,1.725,16.386,1.687A1.631,1.631,0,0,1,17.6,1c1.238,0,4.774,4.586,4.774,5.359,0,.045-.065,4.608-5.691,10.331C10.966,22.31,6.4,22.375,6.359,22.375,5.586,22.375,1,18.84,1,17.6A1.629,1.629,0,0,1,1.688,16.386Zm4.75,4.56c.623-.051,4.452-.556,9.239-5.26,4.727-4.813,5.22-8.653,5.269-9.248a19.276,19.276,0,0,0-3.353-3.962c-.028.029-.066.071-.115.127a25.216,25.216,0,0,0-2.546,4.32,8.469,8.469,0,0,0,.724.649,7.149,7.149,0,0,1,1.077,1.013l.173.242-.051.293A8.135,8.135,0,0,1,16.166,11,11.193,11.193,0,0,1,11,16.166a8.115,8.115,0,0,1-1.882.688l-.293.051-.242-.173A7.209,7.209,0,0,1,7.568,15.65c-.223-.266-.522-.622-.634-.722A25.054,25.054,0,0,0,2.6,17.477c-.059.05-.1.088-.128.113a19.259,19.259,0,0,0,3.962,3.354Z"
                                                        transform="translate(-1 -1)" fill="#699c47" />
                                                </svg>
                                            </div>
                                            <div class="bd-contact__content">
                                                <div class="bd-contact__title">
                                                    <h4>Phone</h4>
                                                </div>
                                                <span>Mobile :
                                                    <a href="#"><span>(+880)
                                                            000-000-0000</span></a></span>
                                                <span>Mobile :
                                                    <a href="#"><span>(+880) 000-000
                                                            -000</span></a></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bd-contact__item">
                                        <div class="bd-contact__item-list">
                                            <div class="bd-contact__icon">
                                                <svg id="email_3_" data-name="email (3)"
                                                    xmlns="http://www.w3.org/2000/svg" width="22.57" height="16.271"
                                                    viewBox="0 0 22.57 16.271">
                                                    <path id="Path_10" data-name="Path 10"
                                                        d="M20.933,20.521H4.137A2.9,2.9,0,0,1,1.25,17.634V7.137A2.9,2.9,0,0,1,4.137,4.25h16.8A2.9,2.9,0,0,1,23.82,7.137v10.5A2.9,2.9,0,0,1,20.933,20.521Zm-16.8-14.7A1.312,1.312,0,0,0,2.825,7.137v10.5a1.312,1.312,0,0,0,1.312,1.312h16.8a1.312,1.312,0,0,0,1.312-1.312V7.137a1.312,1.312,0,0,0-1.312-1.312Z"
                                                        transform="translate(-1.25 -4.25)" fill="#699c47" />
                                                    <path id="Path_11" data-name="Path 11"
                                                        d="M12.534,13.7a3.412,3.412,0,0,1-1.732-.472L1.638,7.778a.8.8,0,0,1-.283-1.05A.777.777,0,0,1,2.4,6.455l9.175,5.438a1.774,1.774,0,0,0,1.848,0L22.6,6.455a.777.777,0,0,1,1.05.273.8.8,0,0,1-.283,1.05l-9.1,5.448a3.412,3.412,0,0,1-1.732.472Z"
                                                        transform="translate(-1.249 -4.145)" fill="#699c47" />
                                                </svg>
                                            </div>
                                            <div class="bd-contact__content">
                                                <div class="bd-contact__title">
                                                    <h4>Email</h4>
                                                </div>
                                                <span><a
                                                        href="#"><span
                                                            class="__cf_email__"
                                                            data-cfemail="d891b6beb798bda0b9b5a8b4bdf6bbb7b5">[email&#160;protected]</span></a></span>
                                                <span><a
                                                        href="#"><span
                                                            class="__cf_email__"
                                                            data-cfemail="c487abaab0a5a7b084a1bca5a9b4a8a1eaa7aba9">[email&#160;protected]</span></a></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bd-contact__item">
                                        <div class="bd-contact__item-list">
                                            <div class="bd-contact__icon">
                                                <svg id="pin" xmlns="http://www.w3.org/2000/svg" width="17.41"
                                                    height="21.729" viewBox="0 0 17.41 21.729">
                                                    <g id="Group_2184" data-name="Group 2184"
                                                        transform="translate(4.671 4.671)">
                                                        <g id="Group_2183" data-name="Group 2183">
                                                            <path id="Path_3602" data-name="Path 3602"
                                                                d="M164.981,110.062a4.034,4.034,0,1,0,4.034,4.034A4.039,4.039,0,0,0,164.981,110.062Zm0,6.369a2.335,2.335,0,1,1,2.335-2.335A2.338,2.338,0,0,1,164.981,116.431Z"
                                                                transform="translate(-160.947 -110.062)"
                                                                fill="#699c47" />
                                                        </g>
                                                    </g>
                                                    <g id="Group_2186" data-name="Group 2186">
                                                        <g id="Group_2185" data-name="Group 2185">
                                                            <path id="Path_3603" data-name="Path 3603"
                                                                d="M59.59,0a8.715,8.715,0,0,0-8.7,8.7v.241c0,2.428,1.392,5.256,4.137,8.408A35.783,35.783,0,0,0,59.056,21.3l.534.431.534-.431a35.775,35.775,0,0,0,4.035-3.944c2.745-3.151,4.137-5.98,4.137-8.408V8.705A8.715,8.715,0,0,0,59.59,0ZM66.6,8.946c0,4.1-5.286,9.068-7.006,10.576-1.721-1.508-7.006-6.474-7.006-10.576V8.705a7.006,7.006,0,0,1,14.013,0Z"
                                                                transform="translate(-50.885)" fill="#699c47" />
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class="bd-contact__content">
                                                <div class="bd-contact__title">
                                                    <h4>Location</h4>
                                                </div>
                                                <p>
                                                   Dhaka, <br />
                                                    Bangladesh- 00000
                                                </p>
                                            </div>
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
    <!-- Contact-area-end -->

    <!-- Google-map-area-start -->
    <div class="bd-google__map-area pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-10 col-xl-11">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d233668.38703802988!2d90.27919518029097!3d23.780573257422212!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8b087026b81%3A0x8fa563bbdd5904c2!2sDhaka!5e0!3m2!1sen!2sbd!4v1663868231113!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- Google-map-area-end -->
</main>
<!-- Body main wrapper end -->
@endsection
