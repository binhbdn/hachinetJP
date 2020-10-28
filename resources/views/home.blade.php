@extends('layouts.app')

@section('content')
        <!--================Home Banner Area =================-->
        <section class="home_banner_area">
            <div id="particles-js">
                <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
            </div>
            <div class="banner__text">
                    <div class="container">
                    <div class="banner_content text-center">
                            <span class="orbs">
                              <span>h</span>
                              <span>a</span>
                              <span>c</span>
                              <span>h</span>
                              <span>i</span>
                              <span>n</span>
                              <span>e</span>
                              <span>t</span>
                            </span>
                            <span class="glow">{{ trans('messages.title_slide_home') }}</span>
                        <a class="black_btn" href="{{ url('contact') }}">{{ trans('messages.contact') }}</a>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
    
        <!--================Feature Area =================-->
        <section class="feature_area" id="service">
            <div class="container">
                <div class="main_title">
                    <h1>{{ trans('messages.consulting_service') }}</h1>
                </div>
                <div class="row feature_inner">
                    <div class="col-lg-4 col-md-6">
                        <div class="feature_item">
                            <h4><i class="lnr lnr-user"></i>
                                <a class="text-dark" target="_blank" href="{{url('business-systems')}}" title="">{{ trans('messages.Business_application') }}</a>
                            </h4>
                            <p>{{ trans('messages.develop_system') }}</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="feature_item">
                            <h4><i class="lnr lnr-license"></i>
                                <a class="text-dark" target="_blank" href="{{url('website-development')}}" title="">{{ trans('messages.website_development') }}</a>
                            </h4>
                            <p>{{ trans('messages.design_support') }}</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="feature_item">
                            <h4><i class="lnr lnr-phone"></i>
                                <a class="text-dark" target="_blank" href="{{url('home')}}" title="">{{ trans('messages.development_blockchain') }}</a>
                            </h4>
                            <p>{{ trans('messages.customer_system_design') }}</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="feature_item">
                            <h4><i class="lnr lnr-rocket"></i>
                                <a class="text-dark" target="_blank" href="{{url('home')}}" title="">{{ trans('messages.testing') }}</a>
                            </h4>
                            <p>{{ trans('messages.support_testing') }}</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="feature_item">
                            <h4><i class="lnr lnr-diamond"></i>
                                <a class="text-dark" target="_blank" href="{{url('smartphone-application-development')}}" title="">{{ trans('messages.develope_smartphone') }}</a>
                            </h4>
                            <p>{{ trans('messages.original_service_provider') }}</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="feature_item">
                            <h4><i class="lnr lnr-bubble"></i>
                                <a class="text-dark" target="_blank" href="{{url('home')}}" title="">{{ trans('messages.legacy_migration') }}</a>
                            </h4>
                            <p>{{ trans('messages.we_will_implement_the_process') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Feature Area =================-->


        <!-- begin feature -->
        <section id="features" class="section md-padding bg-grey">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="section-header">
                        <h2 class="title">{{ trans('messages.why_Hachinet') }}</h2>
                    </div>
                    <p>{{ trans('messages.birth_rate_reduction') }}</p>
                    <div class="feature">
                        <i class="fa fa-check"></i>
                        <p>{{ trans('messages.we_have_excellent_people') }}</p>
                    </div>
                    <div class="feature">
                        <i class="fa fa-check"></i>
                        <p>{{ trans('messages.because_of_low_labor_cost') }}</p>
                    </div>
                    <div class="feature">
                        <i class="fa fa-check"></i>
                        <p>{{ trans('messages.our_engineers_are_students') }}</p>
                    </div>
                    <div class="feature">
                        <i class="fa fa-check"></i>
                        <p>{{ trans('messages.this_environment_is') }}</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div id="about-slider" class="owl-carousel owl-theme owl-loaded owl-drag">
                        <div class="about-slider__item active">
                            <img class="img-fluid" src="{{ asset('web/img/why-hachinet-1.png') }}" alt=""></img>
                        </div>
                        <div class="about-slider__item">
                            <img class="img-fluid" src="{{ asset('web/img/why-hachinet-2.png') }}" alt=""></img>
                        </div>
                        <div class="about-slider__item">
                            <img class="img-fluid" src="{{ asset('web/img/rsz_why-hachinet-3.png') }}" alt=""></img>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </section>
        <!-- end feature -->

        <!-- begin congcuphattrien -->
        <section class="section-padding sections" style="padding: 65px 0;">
            <div class="head_title text-center">
                <h2>{{ trans('messages.development_tools') }}</h2>
            </div>
            <div class="container">
                <div class="row all-language">
                    <div class="all-language col-md-2 col-sm-4 col-6">
                        <img src="{{ asset('web/img/java.png') }}">
                    </div>
                    <div class="all-language col-md-2 col-sm-4 col-6">
                        <img src="{{ asset('web/img/c_sharp.png') }}">
                    </div>
                    <div class="all-language col-md-2 col-sm-4 col-6">
                        <img src="{{ asset('web/img/dotnet.png') }}">
                    </div>
                    <div class="all-language col-md-2 col-sm-4 col-6">
                        <img src="{{ asset('web/img/python.png') }}">
                    </div>
                    <div class="all-language col-md-2 col-sm-4 col-6">
                        <img src="{{ asset('web/img/php.png') }}">
                    </div>
                    <div class="d-md-block"></div>
                    <div class="all-language col-md-2 col-sm-4 col-6">
                        <img src="{{ asset('web/img/angular.png') }}">
                    </div>
                    <div class="all-language col-md-2 col-sm-4 col-6">
                        <img src="{{ asset('web/img/react.png') }}">
                    </div>
                    <div class="all-language col-md-2 col-sm-4 col-6">
                        <img src="{{ asset('web/img/redux.png') }}">
                    </div>
                    <div class="all-language col-md-2 col-sm-4 col-6">
                        <img src="{{ asset('web/img/fabricjs.png') }}">
                    </div>
                    <div class="all-language col-md-2 col-sm-4 col-6">
                        <img src="{{ asset('web/img/spring.png') }}">
                    </div>
                    <div class="all-language col-md-2 col-sm-4 col-6">
                        <img src="{{ asset('web/img/Swagger.png') }}">
                    </div>
                    <div class="d-md-block"></div>
                    <div class="all-language col-md-2 col-sm-4 col-6">
                        <img src="{{ asset('web/img/mysql.png') }}">
                    </div>
                    <div class="all-language col-md-2 col-sm-4 col-6">
                        <img src="{{ asset('web/img/oracle.png') }}">
                    </div>
                    <div class="all-language col-md-2 col-sm-4 col-6">
                        <img src="{{ asset('web/img/sql_server.png') }}">
                    </div>
                    <div class="all-language col-md-2 col-sm-4 col-6">
                        <img src="{{ asset('web/img/rabbit.png') }}">
                    </div>
                    <div class="all-language col-md-2 col-sm-4 col-6">
                        <img src="{{ asset('web/img/mongodb.png') }}">
                    </div>
                    <div class="d-md-block"></div>
                    <div class="all-language col-md-2 col-sm-4 col-6">
                        <img src="{{ asset('web/img/docker.png') }}">
                    </div>
                    <div class="all-language col-md-2 col-sm-4 col-6">
                        <img src="{{ asset('web/img/aws.png') }}">
                    </div>
                    <div class="all-language col-md-2 col-sm-4 col-6">
                        <img src="{{ asset('web/img/notejs.png') }}">
                    </div>
                    <div class="all-language col-md-2 col-sm-4 col-6">
                        <img src="{{ asset('web/img/firebase.png') }}">
                    </div>
                    <div class="all-language col-md-2 col-sm-4 col-6">
                        <img src="{{ asset('web/img/consul.png') }}">
                    </div>
                </div>
            </div>
        </section>
        <!-- end ccpt -->


        <!-- begin business -->
        <section id="business">
        <div class="container transbox">
            <div class="row">
            <div class="col-md-6 col-xs-12">
                <div class="row wapper margin-bottom">
                    <div class="col-sm-3" style="opacity: 1;">
                        <img style="max-width: 100%" src="{{ asset('web/img/logo-foot.png') }}">
                    </div>
                    <div class="col-sm-9">
                        <h2>{{ trans('messages.business_system_for') }}</h2>
                        <p>{{ trans('messages.strategy_implementation_by') }}</p>
                    </div>
                    <div style="clear: both"></div>
                </div>
            </div>
            <div class="col-md-6 col-xs-12">
                <div class="row wapper margin-bottom">
                    <div class="col-sm-3">
                        <img style="max-width: 100%" src="{{ asset('web/img/logo-foot.png') }}">
                    </div>
                    <div class="col-sm-9">
                        <h2>{{ trans('messages.high_speed_development') }}</h2>
                        <p>{{ trans('messages.we_are_now_developing') }}</p>
                    </div>
                    <div style="clear: both"></div>
                </div>
            </div>
        </div>
        </div>
    </section>
        <!-- end business -->

    <!-- begin package -->
    <section id="business-grid">
        <div class="container">
            <div class="row">
            <div class="col-sm-4 grid">
                <div class="package-web">
                    <div class="grid-header">
                        <h3>{{ trans('messages.erp_package') }}
                        </h3>
                    </div>
                    <div class="grid-image pading">
                        <img src="{{ asset('web/img/1.jpg') }}" class="img-fluid">
                    </div>
                    <div class="grid-content">
                        <p>{{ trans('messages.if_erp_is_introduced') }}</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 grid">
                <div class="package-web">
                    <div class="grid-header">
                        <h3>{{ trans('messages.crm_package') }}</h3>
                    </div>
                    <div class="grid-image pading">
                        <img src="{{ asset('web/img/2.jpg') }}" class="img-fluid">
                    </div>
                    <div class="grid-content">
                        <p>{{ trans('messages.by_having_a_wide_range') }}</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 grid">
                <div class="package-web">
                    <div class="grid-header">
                        <h3>{{ trans('messages.bi_package') }}</h3>
                    </div>
                    <div class="grid-image pading">
                        <img src="{{ asset('web/img/3.jpg') }}" class="img-fluid">
                    </div>
                    <div class="grid-content">
                        <p>{{ trans('messages.we_provide_a_intelligent') }}</p>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- end package -->

    <!-- begin price -->
    <section id="price" class="yellow sections" style="color: black">
        <div class="container">
            <div class="head_title text-center">
                <h2>{{ trans('messages.performance') }}</h2>
                <div class="separator"></div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title1 text-left center">
                        <h2>{{ trans('messages.achievement_in') }}</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="table-responsive">
                    <table border="1" bordercolor="#333" class="table table-language" cellpadding="0" cellspacing="0" style="border-collapse:collapse;overflow-x:100px ">
                        <tbody><tr>
                            <th>
                                <p></p>
                            </th>
                            <th>
                                <p>{{ trans('messages.medical_management') }}</p>
                            </th>
                            <th>
                                <p>{{ trans('messages.sales_management') }}</p>
                            </th>
                            <th>
                                <p>{{ trans('messages.erp_system') }}</p>
                            </th>
                            <th>
                                <p>{{ trans('messages.management_of_business') }}</p>
                            </th>
                            <th>
                                <p>{{ trans('messages.nonconformity_approval') }}</p>
                            </th>
                        </tr>
                        <tr>
                            <td>
                                <p>JAVA</p>
                            </td>
                            <td>
                                <p>◎</p>
                            </td>
                            <td>
                                <p>◎</p>
                            </td>
                            <td>
                                <p>◎</p>
                            </td>
                            <td>
                                <p>◎</p>
                            </td>
                            <td>
                                <p>◎</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>RUBY</p>
                            </td>
                            <td>
                                <p>◎</p>
                            </td>
                            <td>
                                <p>◎</p>
                            </td>
                            <td>
                                <p>◎</p>
                            </td>
                            <td>
                                <p>◎</p>
                            </td>
                            <td>
                                <p>◎</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>PHP</p>
                            </td>
                            <td>
                                <p>◎</p>
                            </td>
                            <td>
                                <p>✕</p>
                            </td>
                            <td>
                                <p>✕</p>
                            </td>
                            <td>
                                <p>✕</p>
                            </td>
                            <td>
                                <p>✕</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>.Net</p>
                            </td>
                            <td>
                                <p>◎</p>
                            </td>
                            <td>
                                <p>◎</p>
                            </td>
                            <td>
                                <p>◎</p>
                            </td>
                            <td>
                                <p>◎</p>
                            </td>
                            <td>
                                <p>◎</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>IOS</p>
                            </td>
                            <td>
                                <p>◎</p>
                            </td>
                            <td>
                                <p>✕</p>
                            </td>
                            <td>
                                <p>✕</p>
                            </td>
                            <td>
                                <p>✕</p>
                            </td>
                            <td>
                                <p>✕</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Android</p>
                            </td>
                            <td>
                                <p>◎</p>
                            </td>
                            <td>
                                <p>✕</p>
                            </td>
                            <td>
                                <p>✕</p>
                            </td>
                            <td>
                                <p>✕</p>
                            </td>
                            <td>
                                <p>✕</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>COBOL</p>
                            </td>
                            <td>
                                <p>◎</p>
                            </td>
                            <td>
                                <p>✕</p>
                            </td>
                            <td>
                                <p>✕</p>
                            </td>
                            <td>
                                <p>✕</p>
                            </td>
                            <td>
                                <p>✕</p>
                            </td>
                        </tr>
                    </tbody>
                    </table>
                    </div>
                </div>
            </div>
            <div class="row">
                    <div class="col-sm-6">
                        <div class="section-title text-left center">
                           <h2>{{ trans('messages.web_application') }}</h2>
                        </div>
                        <div class="table-responsive">
                        <table border="1" bordercolor="#333" class="table table-language" cellpadding="0" cellspacing="0" style="border-collapse:collapse; width:100%">
                            <tbody><tr>
                                <th>
                                    <p>{{ trans('messages.language_framework') }}</p>
                                </th>
                                <th>
                                    <p>{{ trans('messages.front_end_development') }}</p>
                                </th>
                            </tr>
                            <tr>
                                <td>
                                    <p>.NET , C# , MVC , MVC 3 4 5 , Entity</p>
                                </td>
                                <td>
                                    <p>◎</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>COBOL</p>
                                </td>
                                <td>
                                    <p>◎</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>JAVA Core ,Spring ,Hibernate </p>
                                </td>
                                <td>
                                    <p>◎</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>PHP/Laravel/Wordpress</p>
                                </td>
                                <td>
                                    <p>◎</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>RUBY ON RAILS</p>
                                </td>
                                <td>
                                    <p>◎</p>
                                </td>
                            </tr>
                        </tbody>
                        </table>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="section-title text-left center">
                           <h2>{{ trans('messages.front_end_development') }}</h2>
                        </div>
                        <div class="table-responsive">
                        <table border="1" bordercolor="#333" class="table table-language" cellpadding="0" cellspacing="0" style="border-collapse:collapse; width:100%">
                            <tbody><tr>
                                <th>
                                    <p>{{ trans('messages.technic') }}</p>
                                </th>
                                <th>
                                    <p>{{ trans('messages.performance') }}</p>
                                </th>
                            </tr>
                            <tr>
                                <td>
                                    <p>HTML/CSS</p>
                                </td>
                                <td>
                                    <p>◎</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>CSS object design</p>
                                </td>
                                <td>
                                    <p>◎</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>GLUSS</p>
                                </td>
                                <td>
                                    <p>◎</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>SaSS</p>
                                </td>
                                <td>
                                    <p>◎</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>JS : NodeJS , AgularJS, Monaca , ReactJS</p>
                                </td>
                                <td>
                                    <p>◎</p>
                                </td>
                            </tr>
                        </tbody>
                        </table>
                        </div>
                    </div>
            </div>
        </div>
    </section>
    <!-- end price -->

    <!-- begin hoptac -->
    <section id="features1" class="features1 sections portfolio">
        <div class="head_title head_title1 text-center">
            <h2>{{ trans('messages.cooperation_forms') }}</h2>
        </div>
        <div class="container">
            <div class="row">
            <div class="col-sm-4">
            <div class="grid">
                <div class="grid-header">
                    <h3>{{ trans('messages.on_site_offshore') }}</h3>
                </div>
                <div class="grid-modal">
                    <div class="grid-image process-border">
                        <img class="img-fluid" src="{{ asset('web/img/Hachinet-Offshore1.png') }}">
                    </div>
                    <div class="grid-content">
                        <ul class="cd-pricing-features">
                            <li><em><i class="fa fa-check-circle"></i></em>{{ trans('messages.move_member') }}</li>
                            <li><em><i class="fa fa-check-circle"></i></em>{{ trans('messages.upstream_process') }}</li>
                            <li><em><i class="fa fa-check-circle"></i></em>{{ trans('messages.deploy_and_cooperate') }}</li>
                        </ul>
                    </div>
                </div>
            </div>
            </div>
            <div class="col-sm-4">
                <div class="grid">
                    <div class="grid-header">
                        <h3>{{ trans('messages.full_offshore') }}</h3>
                    </div>
                    <div class="grid-modal">
                        <div class="grid-image process-border">
                            <img class="img-fluid" src="{{ asset('web/img/Hachinet-Offshore2.png') }}">
                        </div>
                        <div class="grid-content">
                            <ul class="cd-pricing-features">
                                <li><em><i class="fa fa-check-circle"></i></em>{{ trans('messages.all_members_of') }}</li>
                                <li><em><i class="fa fa-check-circle"></i></em>{{ trans('messages.bridge_engineers_and') }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="grid">
                    <div class="grid-header">
                        <h3>{{ trans('messages.customers_offshore') }}</h3>
                    </div>
                    <div class="grid-modal">
                        <div class="grid-image process-border">
                            <img class="img-fluid" src="{{ asset('web/img/Hachinet-offshore3.png') }}">
                        </div>
                        <div class="grid-content">
                            <ul class="cd-pricing-features">
                                <li><em><i class="fa fa-check-circle"></i></em>{{ trans('messages.customers_pm_will') }}</li>
                                <li><em><i class="fa fa-check-circle"></i></em>{{ trans('messages.communicate_with_pm') }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>
    <!-- end hoptac -->

    <!-- begin blog -->
    <div id="blog" class="section md-padding bg-grey">
        <!-- Container -->
        <div class="container">
             <!-- Section header -->
            <div class="section-header text-center">
                <h2 class="title">{{ trans('messages.news_s') }}</h2>
            </div>
            <!-- Row -->
            <div class="row">
                <!-- /Section header -->
                    @foreach($blog as $blogs)
                    <div class="col-md-4">
                        <div class="blog">
                            <div class="blog-img">
                                <img class="img-fluid" src="{{ url('/upload/blog') }}/{{ $blogs->images }}" alt="">
                            </div>
                            <div class="blog-content">
                                <ul class="blog-meta">
                                    <li><i class="fa fa-user"></i>{{ $blogs->name }}</li>
                                    <li><i class="fa fa-clock-o"></i>
                                        @php
                                            $locate = Session::get('locale');
                                            if ($locate == 'jp') {
                                                echo date('Y年m月d日', strtotime($blogs->blog_created_at));
                                            } else {
                                                echo date('Y-m-d', strtotime($blogs->blog_created_at));
                                            }
                                        @endphp
                                    </li>
                                    <li><i class="fa fa-eye"></i>12</li>
                                </ul>
                                <h3 style="height: 40px;"><a href="{{ url('/news/view') }}/{{ $blogs->blog_id }}/{{ Helper::seoname($blogs->title) }}">{{ $blogs->title }}</a></h3>
                                <p style="height: 60px;">{{ $blogs->description }}</p>
                                <div><a href="{{ url('/news/view') }}/{{ $blogs->blog_id }}/{{ Helper::seoname($blogs->title) }}"class="white_bg_btn view_more" style="font-size: 13px">{{ trans('messages.view_more') }}</a></div>
                            </div>
                        </div>
                    </div>
                    @endforeach
            </div>
            <!-- /Row -->
        </div>
        <!-- /Container -->
    </div>
    <!-- end blog -->


@endsection

@push('js')

@endpush
