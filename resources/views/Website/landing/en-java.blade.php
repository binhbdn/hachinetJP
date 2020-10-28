@extends('Website.layouts.landing_layout')
@section('custom-css')
<link rel="stylesheet" href="{{ asset('landing/java/css/style.css') }}">
<style>
    
</style>
@endsection
@section('content')
<section class="banner-url">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1 class="text-h1-java">JAVA SYSTEM<br>DEVELOPMENT</h1>
                <p class="text-span-java">Java of Hachinet is the end-to-end software
development services (from consultancy to support)</p>
            </div>
            <div class="col-md-6">
            </div>
        </div>
    </div>
</section>
<section>
    <h2 class="text-h2">PROVIDING JAVA DEVELOPMENT SERVICES</h2>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="mg-20-jv">
                    <span class="span-java">Application Development</span>
                    <hr class="java-line-1">
                    <hr class="java-line-2">
                </div>
                <div class="mg-20-jv">
                    <span class="span-java-1">Custom JAVA Development</span>
                    <hr class="java-line-3">
                    <hr class="java-line-4">
                </div>
                <div class="mg-20-jv">
                    <span class="span-java-2">Java Consultancy</span>
                    <hr class="java-line-5">
                    <hr class="java-line-6">
                </div>
                <div class="mg-20-jv">
                    <span class="span-java-3">Mobile Services</span>
                    <hr class="java-line-7">
                    <hr class="java-line-8">
                </div>
            </div>
            <div class="col-md-4">
                <img class="img-java-diagram" src="{{asset('landing/java/img/rectangle24-java.png')}}" width="100%">
            </div>
            <div class="col-md-4">
                 <div class="mg-20-jv">
                    <span class="span-java-4">Java Web Development</span>
                    <hr class="java-line-9">
                    <hr class="java-line-10">
                </div>
                <div class="mg-20-jv">
                    <span class="span-java-5">Desktop Application</span>
                    <hr class="java-line-11">
                    <hr class="java-line-12">
                </div>
                <div class="mg-20-jv">
                    <span class="span-java-6">Social Security Project</span>
                    <hr class="java-line-13">
                    <hr class="java-line-14">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="framework-url">
    <h2 class="text-h2" style="padding-top: 20px;">JAVA FRAMEWORK</h2>
    <br><br> 
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <img class="" src="{{asset('landing/java/img/rectangle34-java.png')}}" width="100%">
        </div>
    </div>
    <br><br>    
</section>
<section>
    <h2 class="text-h2" style="padding-top: 20px;">PRODUCTS &amp; SOLUTIONS</h2>
    <br><br> 
    <div class="container">
        <div class="row">
            <div class="col-md-3" style="padding: 0px;">
                <div>
                    <img class="" src="{{asset('landing/java/img/rectangle36-java.png')}}" width="100%">
                </div>
            </div>
            <div class="col-md-3" style="padding: 0px;">
                <div>
                    <img class="" src="{{asset('landing/java/img/rectangle37-java.png')}}" width="100%">
                </div>
            </div>
            <div class="col-md-3" style="padding: 0px;">
                <div>
                    <img class="" src="{{asset('landing/java/img/rectangle38-java.png')}}" width="100%">
                </div>
            </div>
            <div class="col-md-3" style="padding: 0px;">
                <div>
                    <img class="" src="{{asset('landing/java/img/rectangle39-java.png')}}" width="100%">
                </div>
            </div>
        </div>
    </div>    
    <br><br>
</section>
<div class="section mb-3" id="pricing">
        <h2 class="text-h2" style="padding-top: 20px">Choose Your Plan</h2>
        <br><br> 
        <div class="container">
            <div class="card-deck">
                <div class="card pricing">
                    <div class="card-head">
                        <small class="badge-pill badge-warning d-inline p-2 text-black">Project Base</small>
                        <span class="price mt-3">2,500 USD<sub>/MM</sub></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <div class="list-group-item">Project Base</div>
                        <div class="list-group-item">1-person project</div>
                        <div class="list-group-item">Contract under 3 months</div>
                    </ul>
                    <div class="card-body">
                        <a href="#" class="btn btn-warning btn-lg btn-block">Contact Us</a>
                    </div>
                </div>
                <div class="card pricing shadow">
                    <div class="card-head">
                        <small class="badge-pill badge-warning d-inline p-2 text-black">LABO PROJECT</small>
                        <span class="price mt-3">21,700 USD<sub>/Year</sub></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <div class="list-group-item">Contract over 6 months</div>
                        <div class="list-group-item">Long term labo contract</div>
                        <div class="list-group-item">Team of 2 or more people</div>
                    </ul>
                    <div class="card-body">
                        <a href="#" class="btn btn-warning btn-lg btn-block">Contact Us</a>
                    </div>
                </div>
                <div class="card pricing ">
                    <div class="card-head">
                        <small class="badge-pill badge-warning d-inline p-2 text-black">LABO PROJECT</small>
                        <span class="price mt-3">2000 USD<sub>/MM</sub></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <div class="list-group-item">From 3 people or more</div>
                        <div class="list-group-item">LABO Contract</div>
                        <div class="list-group-item">Contract over 3 months</div>
                    </ul>
                    <div class="card-body">
                        <a href="#" class="btn btn-warning btn-lg btn-block">Contact Us</a>
                    </div>
                </div>
                
            </div>
            <!-- // end .pricing -->


    </div>

</div>
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
