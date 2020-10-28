@extends('Website.layouts.landing_layout')
@section('custom-css')
    <link rel="stylesheet" href="{{ asset('landing/haken/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/haken/css/LineIcons.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/haken/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/haken/css/default.css') }}">
    <style>

    </style>
@endsection
@section('content')
	<header class="header-banner">
        <div id="home" class="header-hero bg_cover" style="background-image: url({{asset('landing/haken/images/banner.png')}})">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-10">
                        <div class="header-content text-center">
                            <h3 class="header-title">{{trans('service.haken_txt_title')}}</h3>
                            <p class="text">{{trans('service.haken_txt_1')}}</p>
                            <ul class="header-btn">
                                <li><a class="main-btn btn-hachinet" href="#">{{trans('service.haken_txt_register')}}</a></li>
                                <li><a class="main-btn btn-two video-popup" href="https://www.youtube.com/watch?v=jlywRNDwUyc">{{trans('service.haken_txt_watch')}}<i class="lni-play"></i></a></li>
                            </ul>
                        </div> <!-- header content -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
            <div class="header-shape">
                <img src="{{asset('landing/haken/images/header-shape.svg')}}" alt="shape">
            </div>
        </div> <!-- header content -->
    </header>
	<section id="service" class="services-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title pb-10">
                        <h4 class="title">{{trans('service.haken_txt_benefits')}}</h4>
                        <p class="text">{{trans('service.haken_txt_benefits_desc')}}</p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="services-content mt-40 d-sm-flex">
                                <div class="services-icon">
                                    <i class="lni-bolt"></i>
                                </div>
                                <div class="services-content media-body">
                                    <h4 class="services-title">{{trans('service.haken_txt_flexible')}}</h4>
                                    <p class="text">{{trans('service.haken_txt_flexible_desc')}}</p>
                                </div>
                            </div> <!-- services content -->
                        </div>
                        <div class="col-md-6">
                            <div class="services-content mt-40 d-sm-flex">
                                <div class="services-icon">
                                    <i class="lni-bar-chart"></i>
                                </div>
                                <div class="services-content media-body">
                                    <h4 class="services-title">{{trans('service.haken_txt_concentration')}}</h4>
                                    <p class="text">{{trans('service.haken_txt_concentration_desc')}}</p>
                                </div>
                            </div> <!-- services content -->
                        </div>
                        <div class="col-md-6">
                            <div class="services-content mt-40 d-sm-flex">
                                <div class="services-icon">
                                    <i class="lni-brush"></i>
                                </div>
                                <div class="services-content media-body">
                                    <h4 class="services-title">{{trans('service.haken_txt_saving')}}</h4>
                                    <p class="text">{{trans('service.haken_txt_saving_desc')}}</p>
                                </div>
                            </div> <!-- services content -->
                        </div>
                        <div class="col-md-6">
                            <div class="services-content mt-40 d-sm-flex">
                                <div class="services-icon">
                                    <i class="lni-bulb"></i>
                                </div>
                                <div class="services-content media-body">
                                    <h4 class="services-title">{{trans('service.haken_txt_abundant')}}</h4>
                                    <p class="text">{{trans('service.haken_txt_abundant_desc')}}</p>
                                </div>
                            </div> <!-- services content -->
                        </div>
                    </div> <!-- row -->
                </div> <!-- row -->
            </div> <!-- row -->
        </div> <!-- conteiner -->
        <div class="services-image d-lg-flex align-items-center">
            <div class="image">
                <img src="{{asset('landing/haken/images/services.png')}}" alt="Services">
            </div>
        </div> <!-- services image -->
    </section>

    <!--====== SERVICES PART ENDS ======-->

    <!--====== PRICING PART START ======-->

    <section id="pricing" class="pricing-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center pb-10">
                        <h4 class="title">{{trans('service.haken_txt_our_pricing')}}</h4>
                        <p class="text">{{trans('service.haken_txt_type_contract')}}</p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single-pricing mt-40">
                        <div class="pricing-header text-center">
                            <h5 class="sub-title">{{trans('service.haken_txt_under_3')}}</h5>
                            <span class="price">1</span>
                            <p class="year">{{trans('service.haken_txt_short_term')}}</p>
                        </div>
                        <div class="pricing-list">
                            <ul>
                                <li><i class="lni-check-mark-circle"></i> {{trans('service.haken_txt_visa_fee')}}</li>
                                <li><i class="lni-check-mark-circle"></i> {{trans('service.haken_txt_airfare_fee')}}</li>
                                <li><i class="lni-check-mark-circle"></i> {{trans('service.haken_txt_travelling_fee')}}</li>
                                <li><i class="lni-check-mark-circle"></i> {{trans('service.haken_txt_accomodation_fee')}}</li>
                            </ul>
                        </div>
                        <div class="pricing-btn text-center">
                            <a class="main-btn" href="#">{{trans('service.haken_txt_get_started')}}</a>
                        </div>
                        <div class="buttom-shape">
                            <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 350 112.35"><defs><style>.color-1{fill:#2bdbdc;isolation:isolate;}.cls-1{opacity:0.1;}.cls-2{opacity:0.2;}.cls-3{opacity:0.4;}.cls-4{opacity:0.6;}</style></defs><title>bottom-part1</title><g id="bottom-part"><g id="Group_747" data-name="Group 747"><path id="Path_294" data-name="Path 294" class="cls-1 color-1" d="M0,24.21c120-55.74,214.32,2.57,267,0S349.18,7.4,349.18,7.4V82.35H0Z" transform="translate(0 0)"/><path id="Path_297" data-name="Path 297" class="cls-2 color-1" d="M350,34.21c-120-55.74-214.32,2.57-267,0S.82,17.4.82,17.4V92.35H350Z" transform="translate(0 0)"/><path id="Path_296" data-name="Path 296" class="cls-3 color-1" d="M0,44.21c120-55.74,214.32,2.57,267,0S349.18,27.4,349.18,27.4v74.95H0Z" transform="translate(0 0)"/><path id="Path_295" data-name="Path 295" class="cls-4 color-1" d="M349.17,54.21c-120-55.74-214.32,2.57-267,0S0,37.4,0,37.4v74.95H349.17Z" transform="translate(0 0)"/></g></g></svg>
                        </div>
                    </div> <!-- single pricing -->
                </div>
                
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single-pricing pro mt-40">
                        <div class="pricing-baloon">
                            <img src="{{asset('landing/haken/images/baloon.svg')}}" alt="baloon">
                        </div>
                        <div class="pricing-header">
                            <h5 class="sub-title">{{trans('service.haken_txt_under_6')}}</h5>
                            <span class="price">2</span>
                            <p class="year">{{trans('service.haken_txt_medium_term')}}</p>
                        </div>
                        <div class="pricing-list">
                            <ul>
                                <li><i class="lni-check-mark-circle"></i> {{trans('service.haken_txt_visa_free')}}</li>
                                <li><i class="lni-check-mark-circle"></i> {{trans('service.haken_txt_airfare_free')}}</li>
                                <li><i class="lni-check-mark-circle"></i> {{trans('service.haken_txt_travelling_free')}}</li>
                                <li><i class="lni-check-mark-circle"></i> {{trans('service.haken_txt_accomodation_fee')}}</li>
                            </ul>
                        </div>
                        <div class="pricing-btn text-center">
                            <a class="main-btn" href="#">{{trans('service.haken_txt_get_started')}}</a>
                        </div>
                        <div class="buttom-shape">
                            <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 350 112.35"><defs><style>.color-2{fill:#ffb701;isolation:isolate;}.cls-1{opacity:0.1;}.cls-2{opacity:0.2;}.cls-3{opacity:0.4;}.cls-4{opacity:0.6;}</style></defs><title>bottom-part1</title><g id="bottom-part"><g id="Group_747" data-name="Group 747"><path id="Path_294" data-name="Path 294" class="cls-1 color-2" d="M0,24.21c120-55.74,214.32,2.57,267,0S349.18,7.4,349.18,7.4V82.35H0Z" transform="translate(0 0)"/><path id="Path_297" data-name="Path 297" class="cls-2 color-2" d="M350,34.21c-120-55.74-214.32,2.57-267,0S.82,17.4.82,17.4V92.35H350Z" transform="translate(0 0)"/><path id="Path_296" data-name="Path 296" class="cls-3 color-2" d="M0,44.21c120-55.74,214.32,2.57,267,0S349.18,27.4,349.18,27.4v74.95H0Z" transform="translate(0 0)"/><path id="Path_295" data-name="Path 295" class="cls-4 color-2" d="M349.17,54.21c-120-55.74-214.32,2.57-267,0S0,37.4,0,37.4v74.95H349.17Z" transform="translate(0 0)"/></g></g></svg>
                        </div>
                    </div> <!-- single pricing -->
                </div>
                
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single-pricing enterprise mt-40">
                        <div class="pricing-flower">
                            <img src="{{asset('landing/haken/images/flower.svg')}}" alt="flower">
                        </div>
                        <div class="pricing-header text-right">
                            <h5 class="sub-title">{{trans('service.haken_txt_more_year')}}</h5>
                            <span class="price">3</span>
                            <p class="year">{{trans('service.haken_txt_long_term')}}</p>
                        </div>
                        <div class="pricing-list">
                            <ul>
                                <li><i class="lni-check-mark-circle"></i> {{trans('service.haken_txt_visa_free')}}</li>
                                <li><i class="lni-check-mark-circle"></i> {{trans('service.haken_txt_airfare_free')}}</li>
                                <li><i class="lni-check-mark-circle"></i> {{trans('service.haken_txt_travelling_free')}}</li>
                                <li><i class="lni-check-mark-circle"></i> {{trans('service.haken_txt_accomodation_free')}}</li>
                            </ul>
                        </div>
                        <div class="pricing-btn text-center">
                            <a class="main-btn" href="#">{{trans('service.haken_txt_get_started')}}</a>
                        </div>
                        <div class="buttom-shape">
                            <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 350 112.35"><defs><style>.color-3{fill:#4da422;isolation:isolate;}.cls-1{opacity:0.1;}.cls-2{opacity:0.2;}.cls-3{opacity:0.4;}.cls-4{opacity:0.6;}</style></defs><title>bottom-part1</title><g id="bottom-part"><g id="Group_747" data-name="Group 747"><path id="Path_294" data-name="Path 294" class="cls-1 color-3" d="M0,24.21c120-55.74,214.32,2.57,267,0S349.18,7.4,349.18,7.4V82.35H0Z" transform="translate(0 0)"/><path id="Path_297" data-name="Path 297" class="cls-2 color-3" d="M350,34.21c-120-55.74-214.32,2.57-267,0S.82,17.4.82,17.4V92.35H350Z" transform="translate(0 0)"/><path id="Path_296" data-name="Path 296" class="cls-3 color-3" d="M0,44.21c120-55.74,214.32,2.57,267,0S349.18,27.4,349.18,27.4v74.95H0Z" transform="translate(0 0)"/><path id="Path_295" data-name="Path 295" class="cls-4 color-3" d="M349.17,54.21c-120-55.74-214.32,2.57-267,0S0,37.4,0,37.4v74.95H349.17Z" transform="translate(0 0)"/></g></g></svg>
                        </div>
                    </div> <!-- single pricing -->
                </div>
            </div> <!-- row -->
        </div> <!-- conteiner -->
    </section>

    <!--====== PRICING PART ENDS ======-->
    
     <!--====== CALL TO ACTION PART START ======-->

    <section id="call-to-action" class="call-to-action">
        <div class="call-action-image">
            <img src="{{asset('landing/haken/images/call-to-action.png')}}" alt="call-to-action">
        </div>
        
        <div class="container-fluid">
            <div class="row justify-content-end">
                <div class="col-lg-6">
                    <div class="call-action-content text-center">
                        <h2 class="call-title">{{trans('service.haken_txt_contact')}}</h2>
                        <p class="text">{{trans('service.haken_txt_contact_desc')}}</p>
                        <div class="call-newsletter">
                            <i class="lni-envelope"></i>
                            <input type="text" placeholder="example@email.com">
                            <button type="submit">{{trans('service.haken_txt_register')}}</button>
                        </div>
                    </div> <!-- slider-content -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== CALL TO ACTION PART ENDS ======-->
    
    <!--====== CONTACT PART START ======-->

    <section id="contact" class="contact-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center pb-10">
                        <h4 class="title">{{trans('service.haken_txt_get_in_touch')}}</h4>
                        <p class="text">{{trans('service.haken_txt_please')}}</p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="contact-form">
                        <form id="contact-form" action="assets/contact.php" method="post" data-toggle="validator">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="single-form form-group">
                                        <input type="text" name="name" placeholder="{{trans('service.haken_txt_message_1')}}" data-error="Name is required." required="required">
                                        <div class="help-block with-errors"></div>
                                    </div> <!-- single form -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-form form-group">
                                        <input type="email" name="email" placeholder="{{trans('service.haken_txt_message_2')}}" data-error="Valid email is required." required="required">
                                        <div class="help-block with-errors"></div>
                                    </div> <!-- single form -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-form form-group">
                                        <input type="text" name="subject" placeholder="{{trans('service.haken_txt_message_3')}}" data-error="Subject is required." required="required">
                                        <div class="help-block with-errors"></div>
                                    </div> <!-- single form -->
                                </div>
                                <div class="col-md-6">
                                    <div class="single-form form-group">
                                        <input type="text" name="phone" placeholder="{{trans('service.haken_txt_message_4')}}" data-error="Phone is required." required="required">
                                        <div class="help-block with-errors"></div>
                                    </div> <!-- single form -->
                                </div>
                                <div class="col-md-12">
                                    <div class="single-form form-group">
                                        <textarea placeholder="{{trans('service.haken_txt_message_5')}}" name="message" data-error="Please, leave us a message." required="required"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div> <!-- single form -->
                                </div>
                                <p class="form-message"></p>
                                <div class="col-md-12">
                                    <div class="single-form form-group text-center">
                                        <button type="submit" class="main-btn">{{trans('service.haken_txt_send_message')}}</button>
                                    </div> <!-- single form -->
                                </div>
                            </div> <!-- row -->
                        </form>
                    </div> <!-- row -->
                </div>
            </div> <!-- row -->
        </div> <!-- conteiner -->
    </section>
@endsection
@section('javascript-custom')
    <script src="{{ asset('landing/haken/js/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('landing/haken/js/modernizr-3.6.0.min.js') }}"></script>
    <script src="{{ asset('landing/haken/js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('landing/haken/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('landing/haken/js/main.js') }}"></script>
    <script></script>
@endsection

