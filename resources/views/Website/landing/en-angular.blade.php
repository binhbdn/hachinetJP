@extends('Website.layouts.landing_layout')
@section('custom-css')
<link rel="stylesheet" href="{{ asset('landing/angular/css/style.css') }}">
<style>
    
</style>
@endsection
@section('content')
<section class="hero-section main-page section-padding" id="home">
    <!-- Hero Content -->
    <div class="hero-section-content">
        
        <div class="container ">
            <div class="row align-items-center">
                <!-- Welcome Content -->
                <div class="col-12 col-lg-6 col-md-12">
                    <div class="welcome-content">
                        <h1 class="fadeInUp bold" data-wow-delay="0.2s">OUTSOURCE ANGULAR DEVELOPMENT SERVICES</h1>
                        <p class="w-text fadeInUp" data-wow-delay="0.3s">Hiring Angular developers to develop highly extensible business network application</p>
                    </div>
                </div>
                <div class="col-12 col-lg-6 col-md-12 ">
                    <div class="mt-30 fadeInUp relative" style="" data-wow-delay="0.5s">
                        <img src="{{ asset('landing/angular/img/core-img/banner.png') }}" alt="" class="img-responsive center-block">
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</section>

<div class="clearfix"></div>

<section class="about-us-area section-padding-70-70">
    
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg-3 col-md-12 ">
               
                <div class="col-xs-12">
                    <div class="article special box-shadow">
                        <h3 class="article__title">20+ Developer Profiles</h3> 
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="article special box-shadow">
                        <h3 class="article__title"> Over 4 Years of Experience</h3> 
                    </div>
                </div>
                
            </div>

            <div class="col-12 col-lg-3 col-md-12">
                
                <div class="col-xs-12">
                    <div class="article special box-shadow mts-50">
                        <h3 class="article__title">24/7<br> Support Time</h3> 
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="article special box-shadow">
                        <h3 class="article__title">Optimal Solutions</h3> 
                    </div>
                </div>
                
            </div>
            
            <div class="col-12 col-lg-6 offset-lg-0 col-md-10 offset-md-1">
                <div class="who-we-contant mt-s">
                    
                    <h4 class="bl-text fadeInUp bold" data-wow-delay="0.3s">Choosing Angular development team at HACHINET in Vietnam is to save time and money.</h4>
                    <p class="fadeInUp" data-wow-delay="0.4s">If you're looking for competitive Angular development services for your backend project, you've landed in the right place. At Hachinet, we offer you the opportunity to hire dedicated Angular developers, set up a team in our office and free you from many hiring burdens.</p>
                    <p class="fadeInUp" data-wow-delay="0.5s">Our developers have expertise in the latest in vogue Angular framework like Mean.io, Bootstrap, Protractor, LumX...</p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Start what we do section -->
<section class="what-we-do features section-padding-0-70 hex-pat-1" id="services">
  <div class="container">
     <div class="section-heading text-center">
        <h2 class=" bl-text limited">Why choose HACHINET</h2>
        <p class=" fadeInUp" >We are one of the most young and dynamic software development companies in Vietnam. Through outsourcing services in Vietnam - an attractive country for software outsourcing, we provide full-stack of digital solutions for business and staff growth.</p>
    </div>
    <div class="clearfix"></div>

        <div class="row">
            <div class="col-12 col-md-6 col-lg-4">
                <!-- Content -->
                <div class="service_single_content text-center mb-100 fadeInUp" data-wow-delay="0.2s">
                    <!-- Icon -->
                    <div class="service_icon max">
                        <img src="{{ asset('landing/angular/img/services/w1.png')}}" alt="">
                    </div>
                    <h6 class="d-blue bold"> INTRODUCTORY RATES</h6>
                    <p>up to 3 months</p>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <!-- Content -->
                <div class="service_single_content text-center mb-100 fadeInUp" data-wow-delay="0.3s">
                    <!-- Icon -->
                    <div class="service_icon max">
                        <img src="{{ asset('landing/angular/img/services/w2.png')}}" alt="">
                    </div>
                    <h6 class="d-blue bold">100% TRANSPARENT</h6>
                    <p>rates & cost structure</p>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <!-- Content -->
                <div class="service_single_content text-center mb-100 fadeInUp" data-wow-delay="0.4s">
                    <!-- Icon -->
                    <div class="service_icon max">
                        <img src="{{ asset('landing/angular/img/services/w3.png')}}" alt="">
                    </div>
                    <h6 class="d-blue bold"> YOUR TIME ZONE</h6>
                    <p>easy communication</p>
                </div>
            </div>

        </div>
   
  </div>
</section>
<!-- End what we do section -->

<!-- ##### About Us Area Start ##### -->
<section class="about-us-area section-padding-0-100 clearfix" id="about">
    
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg-6 ">
                <div class="welcome-meter fadeInUp" data-wow-delay="0.7s">
                    <img src="{{ asset('landing/angular/img/core-img/about.png')}}"  alt="">
                </div>
            </div>
            
            <div class="col-12 col-lg-6">
                <div class="who-we-contant mt-s">
                    
                    <h4 class="bl-text fadeInUp" data-wow-delay="0.3s">Exclusive Features</h4>
                    <div class="list-wrap align-items-center">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="side-feature-list-item">
                                    <img src="{{ asset('landing/angular/img/features/feature-1.svg') }}" class="check-mark-icon" alt="">
                                    <div class="foot-c-info">Fully Responsive</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="side-feature-list-item">
                                    <img src="{{ asset('landing/angular/img/features/feature-2.svg') }}" class="check-mark-icon" alt="">
                                    <div class="foot-c-info">Clean &amp; Modern Design</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="side-feature-list-item">
                                    <img src="{{ asset('landing/angular/img/features/feature-3.svg') }}" class="check-mark-icon" alt="">
                                    <div class="foot-c-info">Multi-Device Testing </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="side-feature-list-item">
                                    <img src="{{ asset('landing/angular/img/features/feature-4.svg') }}" class="check-mark-icon" alt="">
                                    <div class="foot-c-info">Great User Experience</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="side-feature-list-item">
                                    <img src="{{ asset('landing/angular/img/features/feature-5.svg') }}" class="check-mark-icon" alt="">
                                    <div class="foot-c-info">Creative Layout</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="side-feature-list-item">
                                    <img src="{{ asset('landing/angular/img/features/feature-6.svg') }}" class="check-mark-icon" alt="">
                                    <div class="foot-c-info">100% Fully Responsive</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="side-feature-list-item">
                                    <img src="{{ asset('landing/angular/img/features/feature-5.svg') }}" class="check-mark-icon" alt="">
                                    <div class="foot-c-info">Easy To Access Social Media</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="side-feature-list-item">
                                    <img src="{{ asset('landing/angular/img/features/feature-5.svg') }}" class="check-mark-icon" alt="">
                                    <div class="foot-c-info">Multi-language Available</div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-1 offset-lg-0"></div>

        </div>
    </div>
</section>
<!-- ##### About Us Area End ##### -->

<section class="what-we-do features section-padding-0-70 hex-pat-1" id="services">
  <div class="container">
     <div class="section-heading text-center">
        <h2 class=" bl-text limited">Choose your plan</h2>
    </div>
    <div class="clearfix"></div>

        <div class="row">
            <div class="col-12 col-md-6 col-lg-4">
                <!-- Content -->
                <div class="service_single_content text-center mb-100 fadeInUp" data-wow-delay="0.2s">
                    <div class="pricing-table position-relative text-center rounded-lg transition ">
                        <span class="badge badge-pill badge-warning font-weight-medium mb-3 py-2 px-4">LEVEL 2</span>
                        <div class="h1 text-dark">$1500<span class="paragraph text-lowercase"> / mo</span></div>
                        <h5 class="mb-4 font-weight-normal text-color">Best for small businesses</h5>
                        <hr>
                        <ul class="list-unstyled my-4">
                          <li class="my-3">LABO Contract</li>
                          <li class="my-3">Contract under 3 months</li>
                        </ul>
                        <a href="#" class="btn btn-outline-warning">select plan</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <!-- Content -->
                <div class="service_single_content text-center mb-100 fadeInUp" data-wow-delay="0.3s">
                    <div class="pricing-table position-relative text-center rounded-lg transition">
                        <span class="badge badge-pill badge-warning font-weight-medium mb-3 py-2 px-4">LEVEL 3</span>
                        <div class="h1 text-dark">$2000<span class="paragraph text-lowercase"> / mo</span></div>
                        <h5 class="mb-4 font-weight-normal text-color">Best for standard businesses</h5>
                        <hr>
                        <ul class="list-unstyled my-4">
                          <li class="my-3">LABO Contract</li>
                          <li class="my-3">Contract 3 - 6 months</li>
                        </ul>
                        <a href="#" class="btn btn-outline-warning">select plan</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <!-- Content -->
                <div class="service_single_content text-center mb-100 fadeInUp" data-wow-delay="0.4s">
                    <!-- Icon -->
                    <div class="pricing-table position-relative text-center rounded-lg transition ">
                        <span class="badge badge-pill badge-warning font-weight-medium mb-3 py-2 px-4">LEVEL 4</span>
                        <div class="h1 text-dark">$2500<span class="paragraph text-lowercase"> / mo</span></div>
                        <h5 class="mb-4 font-weight-normal text-color">Best for large businesses</h5>
                        <hr>
                        <ul class="list-unstyled my-4">
                          <li class="my-3">LABO Contract</li>
                          <li class="my-3">Contract over 6 months</li>
                        </ul>
                        <a href="#" class="btn btn-outline-warning">select plan</a>
                    </div>
                </div>
            </div>

        </div>
  </div>
</section>
<div class="section pt-0">
    <div class="container">
        <div class="text-center">
            <h2 class=" bl-text limited">{{trans('landing.faqw')}}</h2>
        </div>
        <div class="clearfix"></div>
        <div class="row pt-4">
            <div class="col-md-6">
                <h4 class="mb-3">{{trans('landing.faq1')}}</h4>
                <p class="light-font mb-5">{{trans('landing.faw1')}}</p>
                <h4 class="mb-3">{{trans('landing.faq2')}}</h4>
                <p class="light-font mb-5">{{trans('landing.faw2')}}</p>

            </div>
            <div class="col-md-6">
                <h4 class="mb-3">{{trans('landing.faq3')}} </h4>
                <p class="light-font mb-5">{{trans('landing.faw3')}}</p>
                <h4 class="mb-3">{{trans('landing.faq4')}}</h4>
                <p class="light-font mb-5">{{trans('landing.faw4')}}</p>

            </div>
        </div>
    </div>

</div>
@endsection
@section('javascript-custom')
<script></script>
@endsection