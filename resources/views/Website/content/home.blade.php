@extends('Website.layouts.default')
@section('content')
@include('Website.layouts.slider')
    <section class="what-we-do features pb-4 hex-pat-1" id="services">
        <div class="container">
            <div class="section-heading text-center pb-5">
                <h1 class=" bl-text limited text-uppercase fa-2x">{{trans('service.consulting_service')}}</h1>
                <span class="line"></span>
            </div>
            <div class="clearfix"></div>

            <div class="row">
                <div class="col-12 col-md-6 col-lg-4">
                    <!-- Content -->
                    <div class="service_single_content text-center mb-100 " >
                        <!-- Icon -->
                        <a href="#">
                            <div class="service_icon max mb-2">
                                <img src="{{ asset('website/img/services/s1.png') }}" alt="{{trans('service.business_application')}}">
                            </div>
                            <h3 class="d-blue bold"> {{trans('service.business_application')}} </h3>
                            <p>{{trans('service.text_business_application')}}</p>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <!-- Content -->
                    <div class="service_single_content text-center mb-100 ">
                        <!-- Icon -->
                        <a href="{{route('cobol_system_dev')}}" target="_blank">
                            <div class="service_icon max mb-2">
                                <img src="{{ asset('website/img/services/s2.png') }}" alt="{{trans('service.cobol_development')}}">
                            </div>
                            <h3 class="d-blue bold">{{trans('service.cobol_development')}}</h3>
                            <p>{{trans('service.text_cobol_development')}}</p>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <!-- Content -->
                    <div class="service_single_content text-center mb-100 ">
                        <!-- Icon -->
                        <a href="{{route('outsource_development')}}" target="_blank" >
                            <div class="service_icon max mb-2">
                                <img src="{{ asset('website/img/services/s3.png') }}" alt="{{trans('service.front_end_outsource')}}">
                            </div>
                            <h3 class="d-blue bold"> {{trans('service.front_end_outsource')}}</h3>
                            <p>{{trans('service.text_front_end')}}</p>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <!-- Content -->
                    <div class="service_single_content text-center mb-100 ">
                        <!-- Icon -->
                        <a href="{{route('java_system_dev')}}">
                            <div class="service_icon max mb-2">
                                <img src="{{ asset('website/img/services/s4.png') }}" alt="{{trans('service.java_system')}}">
                            </div>
                            <h3 class="d-blue bold">{{trans('service.java_system')}}</h3>
                            <p>{{trans('service.text_java_system')}}</p>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <!-- Content -->
                    <div class="service_single_content text-center mb-100 ">
                        <!-- Icon -->
                        <a href="{{route('mobile_app_development')}}" target="_blank" >
                            <div class="service_icon max mb-2">
                                <img src="{{ asset('website/img/services/s5.png') }}" alt="{{trans('service.develope_smartphone')}}">
                            </div>
                            <h3 class="d-blue bold">{{trans('service.develope_smartphone')}}</h3>
                            <p>{{trans('service.text_develope_smartphone')}}</p>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <!-- Content -->
                    <div class="service_single_content text-center mb-100 ">
                        <!-- Icon -->
                        <a href="{{route('net_system_dev')}}">
                            <div class="service_icon max mb-2">
                                <img src="{{ asset('website/img/services/s6.png') }}" alt="{{trans('service.net_system')}}">
                            </div>
                            <h3 class="d-blue bold">{{trans('service.net_system')}}</h3>
                            <p>{{trans('service.text_net_system')}}</p>
                        </a>
                    </div>
                </div>

            </div>
       
      </div>
    </section>
    <section class="what-we-do develop-tools pt-4 hex-pat-1 pb-4" id="develop__tools">
        <div class="container">
            <div class="section-heading text-center pb-5">
                <h2 class=" bl-text limited text-uppercase">{{trans('service.dev_tools')}}</h2>
                <span class="line"></span>
            </div>
            <div class="clearfix"></div>
            <div class="all-language">
                <div class="row  pt-1 pb-1">
                    <div class="all-language col-md-2 col-sm-4 col-6">
                        <img src="{{ asset('website/img/dev-tools/java.png') }}" alt="{{trans('service._java_system')}}">
                    </div>
                    <div class="all-language col-md-2 col-sm-4 col-6">
                        <img src="{{ asset('website/img/dev-tools/c_sharp.png') }}" alt="{{trans('service.dev_tools')}}">
                    </div>
                    <div class="all-language col-md-2 col-sm-4 col-6">
                        <img src="{{ asset('website/img/dev-tools/dotnet.png') }}" alt="{{trans('service._net_system')}}">
                    </div>
                    <div class="all-language col-md-2 col-sm-4 col-6">
                        <img src="{{ asset('website/img/dev-tools/python.png') }}" alt="Python {{trans('service.dev_tools')}}">
                    </div>
                    <div class="all-language col-md-2 col-sm-4 col-6">
                        <img src="{{ asset('website/img/dev-tools/php.png') }}" alt="PHP {{trans('service.dev_tools')}}">
                    </div>
                    <div class="all-language col-md-2 col-sm-4 col-6">
                        <img src="{{ asset('website/img/dev-tools/angular.png') }}" alt="Angular {{trans('service.dev_tools')}}">
                    </div>
                </div>
                <div class="d-md-block"></div>
                <div class="row   pt-1 pb-1">
                    <div class="all-language col-md-2 col-sm-4 col-6">
                        <img src="{{ asset('website/img/dev-tools/react.png') }}" alt="React {{trans('service.dev_tools')}}">
                    </div>
                    <div class="all-language col-md-2 col-sm-4 col-6">
                        <img src="{{ asset('website/img/dev-tools/redux.png') }}" alt="Redux {{trans('service.dev_tools')}}">
                    </div>
                    <div class="all-language col-md-2 col-sm-4 col-6">
                        <img src="{{ asset('website/img/dev-tools/fabricjs.png') }}" alt="Fabricjs {{trans('service.dev_tools')}}">
                    </div>
                    <div class="all-language col-md-2 col-sm-4 col-6">
                        <img src="{{ asset('website/img/dev-tools/spring.png') }}" alt="{{trans('service.java_system')}}">
                    </div>
                    <div class="all-language col-md-2 col-sm-4 col-6">
                        <img src="{{ asset('website/img/dev-tools/Swagger.png') }}" alt="Swagger {{trans('service.dev_tools')}}">
                    </div>
                    <div class="all-language col-md-2 col-sm-4 col-6">
                        <img src="{{ asset('website/img/dev-tools/mysql.png') }}" alt="Mysql {{trans('service.dev_tools')}}">
                    </div>  
                </div>
                <div class="d-md-block"></div>
                <div class="row pt-1 pb-1">
                    <div class="all-language col-md-2 col-sm-4 col-6">
                        <img src="{{ asset('website/img/dev-tools/oracle.png') }}" alt="Oracle {{trans('service.dev_tools')}}">
                    </div>
                    <div class="all-language col-md-2 col-sm-4 col-6">
                        <img src="{{ asset('website/img/dev-tools/sql_server.png') }}" alt="SQL Server {{trans('service.dev_tools')}}">
                    </div>
                    <div class="all-language col-md-2 col-sm-4 col-6">
                        <img src="{{ asset('website/img/dev-tools/rabbit.png') }}" alt="Rabbit {{trans('service.dev_tools')}}">
                    </div>
                    <div class="all-language col-md-2 col-sm-4 col-6">
                        <img src="{{ asset('website/img/dev-tools/mongodb.png') }}" alt="MongoDb {{trans('service.dev_tools')}}">
                    </div>
                    <div class="all-language col-md-2 col-sm-4 col-6">
                        <img src="{{ asset('website/img/dev-tools/docker.png') }}" alt="Docker {{trans('service.dev_tools')}}">
                    </div>
                    <div class="all-language col-md-2 col-sm-4 col-6">
                        <img src="{{ asset('website/img/dev-tools/aws.png') }}" alt="Amazon Web Service {{trans('service.dev_tools')}}">
                    </div>
                </div>
                <div class="d-md-block"></div>
                <div class="row   pt-1 pb-1 col-md-offset-4 col-sm-offset-0">
                    <div class="all-language col-md-2 col-sm-4 col-6">
                        <img src="{{ asset('website/img/dev-tools/notejs.png') }}" alt="Nodejs {{trans('service.dev_tools')}}">
                    </div>
                    <div class="all-language col-md-2 col-sm-4 col-6">
                        <img src="{{ asset('website/img/dev-tools/firebase.png') }}" alt="Firebase {{trans('service.dev_tools')}}">
                    </div>
                    <div class="all-language col-md-2 col-sm-4 col-6">
                        <img src="{{ asset('website/img/dev-tools/consul.png') }}" alt="Consul {{trans('service.dev_tools')}}">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="what-we-do contact_us pt-5 pb-5 clearfix" id="section__contact_us">
        <div class="container">
            <div class="row">
                <div class="box__contact_us col-12 col-md-12 p-4">
                    <div class="row pb-3 ">
                        <div class="col-md-6 col-sm-12 m-b-sm-5">
                            <h4 class="text-center mb-3">{{trans('messages.have_questions')}}</h4>
                            <div class="d-flex">
                                <div class="align-items-center d-flex flex-1 justify-content-center">
                                    <a href="tel:+842462900388" class="text-body font-weight-bold"><i class="fa fa-phone"></i>&nbsp;(+84) 24-6290-0388</a>
                                </div>
                                <div class="align-items-center d-flex flex-1 justify-content-center">
                                    <a class="btn dream-btn more-btn  mt-30" href="{{route('contact')}}">{{trans('messages.contact_us')}}</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <h4 class="text-center mb-3">{{trans('messages.profile')}}</h4>
                            <div class="d-flex">
                                <div class="align-items-center d-flex flex-1 justify-content-center">
                                    <a class="btn dream-btn more-btn  mt-30" target="_blank" href="{{url('profile/Hachinet_Profile_JA.pdf')}}">
                                        <img class="icon_language" src="{{ asset('static/img/flags/Japan.png') }}"> {{trans('messages.profile')}}
                                    </a>
                                </div>
                                <div class="align-items-center d-flex flex-1 justify-content-center">
                                    <a class="btn dream-btn more-btn  mt-30" target="_blank" href="{{url('profile/Hachinet_Profile_EN.pdf')}}">
                                        <img class="icon_language" src="{{ asset('static/img/flags/USA.png') }}"> {{trans('messages.profile')}}
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about-us-area pt-5 pb-4 clearfix" >
        <div class="container">
            <div class="row align-items-center">

                <div class="col-12 col-lg-6">
                    <div class="">
                        <img src="{{asset('website/img/about2.png')}}" alt="{{trans('service.text_net_system')}}">
                    </div>
                </div>

                <div class="col-12 col-lg-6 mt-s">
                    <div class="who-we-contant mb-30">
                        
                        <h4 class="bl-text ">{{trans('service.text_net_system')}}</h4>
                        <p class="" >{{trans('service.strategy_implementation_by')}}</p>
                        <div class="row mt-5">
                            <div class="col-12 col-md-6 col-sm-6 mb-3">
                                <a class="btn dream-btn more-btn  mt-30" href="{{route('net_system_dev')}}">{{trans('service._net_system')}}</a>
                            </div>
                            <div class="col-12 col-md-6 col-sm-6 mb-3">
                                <a class="btn dream-btn more-btn  mt-30" href="{{route('java_system_dev')}}">{{trans('service._java_system')}}</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row align-items-center">

                <div class="col-12 col-lg-6 mt-s">
                    <div class="who-we-contant mb-30">
                        
                        <h4 class="bl-text ">{{trans('service.high_speed_development')}}</h4>
                        <p class="">{{trans('service.we_are_now_developing')}}</p>
                        <div class="row mt-5">
                            <div class="col-12 col-md-6 col-sm-6 mb-3">
                                <a class="btn dream-btn more-btn mt-30" target="_blank" href="{{route('outsource_development')}}">{{trans('service.front_end')}}</a>
                            </div>
                            <div class="col-12 col-md-6 col-sm-6 mb-3">
                                <a class="btn dream-btn more-btn mt-30" target="_blank" href="{{route('mobile_app_development')}}">{{trans('service.mobile_and_application')}}</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="">
                        <img src="{{asset('website/img/about1.png')}}" alt="{{trans('service.high_speed_development')}}">
                    </div>
                </div>

            </div>
            <div class="row align-items-center">

                <div class="col-12 col-lg-6">
                    <div class="">
                        <img src="{{asset('website/img/learning.png')}}" alt="{{trans('service.text_cobol_development')}}">
                    </div>
                </div>

                <div class="col-12 col-lg-6 mt-s">
                    <div class="who-we-contant mb-30">

                        <h4 class="bl-text ">{{trans('service.text_cobol_development')}}</h4>
                        <p class="" >{{trans('service.cobol_used_legacy')}}</p>
                        <div class="row mt-5">
                            <div class="col-12 col-md-6 col-sm-6 mb-3">
                                <a class="btn dream-btn more-btn  mt-30" href="{{route('cobol_system_dev')}}">{{trans('service.cobol_system_dev')}}</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row align-items-center">

                <div class="col-12 col-lg-6 mt-s">
                    <div class="who-we-contant mb-30">
                        
                        <h4 class="bl-text ">{{trans('service.haken_title')}}</h4>
                        <p class="">{{trans('service.haken_text_content')}}</p>
                        <div class="row mt-5">
                            <div class="col-12 col-md-6 col-sm-6 mb-3">
                                <a class="btn dream-btn more-btn mt-30" target="_blank" href="{{route('haken')}}">{{trans('service.haken_button')}}</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="">
                        <img src="{{asset('website/img/human-resources-service.png')}}" alt="{{trans('service.high_speed_development')}}">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="what-we-do news pt-5 pb-5 clearfix" id="section__news">
        <div class="container">
            <div class="row">
                <div class="box__news col-12 col-md-12 p-4">
                    <div class="section-heading text-center pb-4">
                        <h2 class=" bl-text limited text-uppercase">{{trans('messages.news')}}</h2>
                        <span class="line"></span>
                    </div>
                    <div class="clearfix"></div>
                    <div class="row pb-3">
                        @foreach ($posts as $post)
                        <div class="col-md-6 col-sm-12">
                            <div class="row pb-1">
                                <div class="col-6 col-md-4 col-sm-5">
                                    <div class="text-date text-center">{{$post->createdAt}}</div>
                                </div>
                                <div class="col-6 col-md-8 col-sm-7 pl-0">
                                    <div class="text-title font-weight-bold title__custom">
                                        <a href="{{route('magazine.show', $post->postSlug)}}" class="text-body">
                                            {{$post->postTitle}}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="col-12 col-md-12 col-sm-12 mt-3">
                        <div class="text-center">
                            <a class="btn dream-btn more-btn fadeInUp mt-30" data-wow-delay="0.6s" href="{{route('news')}}">{{trans('messages.read_more')}}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="what-we-do cooperation pb-4 hex-pat-1" id="cooperation__forms">
        <div class="container">
            <div class="section-heading text-center pb-5 pt-5">
                <h2 class=" bl-text limited text-uppercase">{{trans('service.cooperation_form')}}</h2>
                <span class="line"></span>
            </div>
            <div class="clearfix"></div>

            <div class="row">
                <div class="col-12 col-md-6 col-lg-4">
                    <!-- Content -->
                    <div class="service_single_content mb-100 ">
                        <!-- Icon -->
                        <div class="border-bottom max text-center mb-3 pb-2 service_icon">
                            <img src="{{ asset('website/img/Hachinet-Offshore1.png') }}" alt="{{trans('messages.onsite_offshore')}}">
                        </div>
                        <h5 class="d-blue bold text-center">{{trans('messages.onsite_offshore')}}</h5>
                        <div class="grid-content">
                            <ul class="cd-pricing-features">
                                <li><p><i class="fa fa-check-circle-o"></i>&nbsp;{{trans('messages.move_member')}}</p></li>
                                <li><p><i class="fa fa-check-circle-o"></i>&nbsp;{{trans('messages.upstream')}}</p></li>
                                <li><p><i class="fa fa-check-circle-o"></i>&nbsp;{{trans('messages.deploy_coopera')}}</p></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <!-- Content -->
                    <div class="service_single_content mb-100">
                        <!-- Icon -->
                        <div class="border-bottom max text-center mb-3 pb-2 service_icon">
                            <img src="{{ asset('website/img/Hachinet-Offshore2.png') }}" alt="{{trans('messages.full_offshore')}}">
                        </div>
                        <h5 class="d-blue bold text-center">{{trans('messages.full_offshore')}}</h5>
                        <div class="grid-content">
                            <ul class="cd-pricing-features">
                                <li><p><i class="fa fa-check-circle-o"></i>&nbsp;{{trans('messages.all_members_proj')}}</p></li>
                                <li><p><i class="fa fa-check-circle-o"></i>&nbsp;{{trans('messages.pm_brse')}}</p></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <!-- Content -->
                    <div class="service_single_content mb-100">
                        <!-- Icon -->
                        <div class="border-bottom max text-center mb-3 pb-2 service_icon">
                            <img src="{{ asset('website/img/Hachinet-Offshore3.png') }}" alt="{{trans('messages.customers_offshore')}}">
                        </div>
                        <h5 class="d-blue bold text-center">{{trans('messages.customers_offshore')}}</h5>
                        <div class="grid-content">
                            <ul class="cd-pricing-features">
                                <li><p><i class="fa fa-check-circle-o"></i>&nbsp;{{trans('messages.customers_pm')}}</p></li>
                                <li><p><i class="fa fa-check-circle-o"></i>&nbsp;{{trans('messages.communicate_pm')}}</p></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
       
      </div>
    </section>
@endsection
