@extends('Website.layouts.default')
@section('content')
@include('Website.layouts.breadcrumb')
<section class="services-area pt-5 pb-5 clearfix" id="services__providing">
    <div class="container">
        <div class="row align-items-center" id="crm">
            <div class="col-12 col-lg-6 ">
                <div class="welcome-meter fadeInUp" data-wow-delay="0.7s">
                    <img src="{{asset('website/img/services/crm-erp.png')}}" alt="">
                </div>
            </div>
            
            <div class="col-12 col-lg-6">
                <div class="who-we-contant mt-s">
                    
                    <h4 class="bl-text fadeInUp" data-wow-delay="0.3s">{{trans('service.business_system_app')}}</h4>
                    <p class="fadeInUp" data-wow-delay="0.4s">{{trans('service.we_provide_a_intelligent')}}</p>
                    <p class="fadeInUp" data-wow-delay="0.5s">{{trans('service.strategy_implementation_by')}} </p>
                    <a class="btn dream-btn green-btn mt-30 fadeInUp" data-wow-delay="0.6s" href="#">{{trans('messages.read_more')}}</a>
                </div>
            </div>

        </div>
        <div class="clearfix mt-5"></div>
        <div class="row align-items-center" id="website">
            <div class="col-12 col-lg-6">
                <div class="who-we-contant mt-s">
                    
                    <h4 class="bl-text fadeInUp" data-wow-delay="0.3s">{{trans('service.website_development')}}</h4>
                    <p class="fadeInUp" data-wow-delay="0.4s">{{trans('service.text_website_development')}}</p>
                    <p class="fadeInUp" data-wow-delay="0.5s">{{trans('service.website_description_service')}}</p>
                    <a class="btn dream-btn green-btn mt-30 fadeInUp" data-wow-delay="0.6s" href="#">{{trans('messages.read_more')}}</a>
                </div>
            </div>
            <div class="col-12 col-lg-6 ">
                <div class="welcome-meter fadeInUp" data-wow-delay="0.7s">
                    <img src="{{asset('website/img/services/Web-Development.png')}}" alt="">
                </div>
            </div>
        </div>
        <div class="clearfix mt-5"></div>
        <div class="row align-items-center" id="front-end">
            <div class="col-12 col-lg-6 ">
                <div class="welcome-meter fadeInUp" data-wow-delay="0.7s">
                    <img src="{{asset('website/img/services/javascript.png')}}" alt="">
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="who-we-contant mt-s">
                    
                    <h4 class="bl-text fadeInUp" data-wow-delay="0.3s">{{trans('service.front_end_outsource')}}</h4>
                    <p class="fadeInUp" data-wow-delay="0.4s">{{trans('service.front_end_description_service')}}</p>
                    <p class="fadeInUp" data-wow-delay="0.5s">{{trans('service.front_end_description_1_service')}}</p>
                    <a class="btn dream-btn green-btn mt-30 fadeInUp" data-wow-delay="0.6s" href="{{route('outsource_development')}}">{{trans('messages.read_more')}}</a>
                </div>
            </div>
        </div>
        <div class="clearfix mt-5"></div>
        <div class="row align-items-center" id="app-mobile">
            <div class="col-12 col-lg-6">
                <div class="who-we-contant mt-s">
                    
                    <h4 class="bl-text fadeInUp" data-wow-delay="0.3s">{{trans('service.develope_smartphone')}}</h4>
                    <p class="fadeInUp" data-wow-delay="0.4s">{{trans('service.mobile_app_description_service')}}</p>
                    <a class="btn dream-btn green-btn mt-30 fadeInUp" data-wow-delay="0.6s" href="{{route('mobile_app_development')}}">{{trans('messages.read_more')}}</a>
                </div>
            </div>
            <div class="col-12 col-lg-6 ">
                <div class="welcome-meter fadeInUp" data-wow-delay="0.7s">
                    <img src="{{asset('website/img/services/mobile-application.png')}}" alt="">
                </div>
            </div>
        </div>
        <div class="clearfix mt-5"></div>
        <div class="row align-items-center" id="java">
            <div class="col-12 col-lg-6 ">
                <div class="welcome-meter fadeInUp" data-wow-delay="0.7s">
                    <img src="{{asset('website/img/services/java.png')}}" alt="">
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="who-we-contant mt-s">
                    
                    <h4 class="bl-text fadeInUp" data-wow-delay="0.3s">{{trans('service.java_system')}}</h4>
                    <p class="fadeInUp" data-wow-delay="0.4s">{{trans('service.java_system_description_service')}}</p>
                    <a class="btn dream-btn green-btn mt-30 fadeInUp" data-wow-delay="0.6s" href="{{route('java_system_dev')}}">{{trans('messages.read_more')}}</a>
                </div>
            </div>
        </div>
        <div class="clearfix mt-5"></div>
        <div class="row align-items-center" id="net">
            <div class="col-12 col-lg-6">
                <div class="who-we-contant mt-s">
                    
                    <h4 class="bl-text fadeInUp" data-wow-delay="0.3s">{{trans('service.net_system')}}</h4>
                    <p class="fadeInUp" data-wow-delay="0.4s">{{trans('service.net_system_description_service')}}</p>
                    <p class="fadeInUp" data-wow-delay="0.5s">{{trans('service.net_system_description_1_service')}}</p>
                    <a class="btn dream-btn green-btn mt-30 fadeInUp" data-wow-delay="0.6s" href="{{route('net_system_dev')}}">{{trans('messages.read_more')}}</a>
                </div>
            </div>
            <div class="col-12 col-lg-6 ">
                <div class="welcome-meter fadeInUp" data-wow-delay="0.7s">
                    <img src="{{asset('website/img/services/AspDotnet.png')}}" alt="">
                </div>
            </div>
        </div>
        <div class="clearfix mt-5"></div>
        <div class="row align-items-center" id="cobol">
            <div class="col-12 col-lg-6 ">
                <div class="welcome-meter fadeInUp" data-wow-delay="0.7s">
                    <img src="{{asset('website/img/services/cobol-service.png')}}" alt="">
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="who-we-contant mt-s">

                    <h4 class="bl-text fadeInUp" data-wow-delay="0.3s">{{trans('service.cobol_system_dev')}}</h4>
                    <p class="fadeInUp mb-0" data-wow-delay="0.4s">{{trans('service.text_cobol_development')}}</p>
                    <p class="fadeInUp" data-wow-delay="0.4s">{{trans('service.cobol_used_legacy')}}</p>
                    <a class="btn dream-btn green-btn mt-30 fadeInUp" data-wow-delay="0.6s" href="{{route('cobol_system_dev')}}">{{trans('messages.read_more')}}</a>
                </div>
            </div>
        </div>
        <div class="clearfix mt-5"></div>
        <div class="row align-items-center" id="net">
            <div class="col-12 col-lg-6">
                <div class="who-we-contant mt-s">
                    
                    <h4 class="bl-text fadeInUp" data-wow-delay="0.3s">{{trans('service.haken_title')}}</h4>
                    <p class="fadeInUp" data-wow-delay="0.4s">{{trans('service.haken_text_content')}}</p>
                    <a class="btn dream-btn green-btn mt-30 fadeInUp" data-wow-delay="0.6s" href="{{route('haken')}}">{{trans('messages.read_more')}}</a>
                </div>
            </div>
            <div class="col-12 col-lg-6 ">
                <div class="welcome-meter fadeInUp" data-wow-delay="0.7s">
                    <img src="{{asset('website/img/human-resources-service.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
