<!doctype html>
<html lang="{{ Session::get('locale') }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{$settings->title}} | {{trans('design.design')}} Website - Mobile App</title>
    <meta name="keywords" content="{{$settings->title}}, {{trans('design.design')}} Website, {{trans('design.design')}} Mobile App">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon -->
    <link rel="shortcut icon" href="static/img/favicon.png">

    <!-- all css here -->
    <!-- bootstrap v3.3.6 css -->
    <link rel="stylesheet" href="landing/serminar/css/bootstrap.min.css">
    <!-- font-awesome css -->
    <link rel="stylesheet" href="website/css/font-awesome.min.css">
    <!-- style.css -->
    <link rel="stylesheet" href="landing/vn-web-app-design/css/style.css">
    <!-- animate.css -->
    <link rel="stylesheet" href="admin/css/animate.css">
</head>

<body class = "translator-vn" data-spy="scroll">
    <!-- Load Facebook SDK for JavaScript -->
    <div id="fb-root"></div>
    <script>
        window.fbAsyncInit = function() {
        FB.init({
            xfbml            : true,
            version          : 'v9.0'
        });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
    </script>
    <!-- Your Chat Plugin code -->
    <div class="fb-customerchat"
        attribution=setup_tool
        page_id="111625737415468"
        theme_color="#FFB701"
        logged_in_greeting="Xin chào! HACHINET có thể giúp gì bạn?"
        logged_out_greeting="Xin chào! HACHINET có thể giúp gì bạn?">
    </div>
    <div id="preloader"></div>
    <!-- header-area start -->
    <header>
        <section id="sticker" class="header-area default-header hidden-xs">
            <div class="container-fluid">
                <div class="row">
                    <!-- logo start -->
                    <div class="col-sm-6 col-sm-offset-3">
                        <div class="logo">
                            <!-- Brand -->
                            <a class="navbar-brand page-scroll" href="https://hachinet.com/">
                                <img class="center-block" src="landing/serminar/img/logo/hachinet.png" alt="hachinet logo">
                            </a>
                            <a class="navbar-brand page-scroll sticky-logo" href="https://hachinet.com/">
                                <img class="center-block" src="landing/serminar/img/logo/hachine.png" alt="hachinet sticky logo">
                            </a>
                        </div>
                    </div>
                    <!-- logo end -->
                    <div class="col-sm-3">
                        <!-- mainmenu start -->
                        <nav class="navbar navbar-default">
                            <div class="collapse navbar-collapse">
                                <div class="main-menu">
                                    <ul class="nav navbar-nav navbar-right">
                                        <li>
                                            <a>
                                                {{trans('messages.lang.lang')}}
                                                @if(Lang::locale() === 'en')<img class="icon_language" src="{{ asset('static/img/flags/USA.png') }}" />
                                                @elseif(Lang::locale() === 'jp')<img class="icon_language" src="{{ asset('static/img/flags/Japan.png') }}" />
                                                @elseif (Lang::locale() === 'vn')<img class="icon_language" src="{{ asset('static/img/flags/VietNam.png') }}" />
                                                @endif
                                            </a>
                                            <ul class="sub-menu sub-1">
                                                <li>
                                                    <a href="{{ url('language/vn') }}">
                                                        {{trans('messages.lang.vn')}}
                                                        <img class="icon_language_sub" alt="Hachinet Vietnamese" src="{{ asset('static/img/flags/VietNam.png') }}" />
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ url('language/jp') }}">
                                                        {{trans('messages.lang.jp')}}
                                                        <img class="icon_language_sub" alt="Hachinet Japanese" src="{{ asset('static/img/flags/Japan.png') }}" />
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ url('language/en') }}">
                                                        {{trans('messages.lang.en')}}
                                                        <img class="icon_language_sub" alt="Hachinet English" src="{{ asset('static/img/flags/USA.png') }}" />
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                        <!-- mainmenu end -->
                    </div>
                </div>
            </section>
        </div>
    </header>
    <!-- header-area end -->

    <!-- Start Slider Area -->
    <section id="home" class="slide-area parallax-bg fix" data-stellar-background-ratio="0.5">
        <div class="display-table">
            <div class="display-table-cell">
                <div class="container">
                    <div class="row">
                        <!-- Start Slider content -->
                        <div class="text-center">
                            <div class="slide-content">
                                <h1 class="title1 wow rotateIn" data-wow-delay="1s">{{trans('design.design_devlop')}}</h1>
                                <h2 class="title2">Website, Mobile app, {{trans('design.software')}}</h2>
                                <h2 class="title2" style="animation-delay: 2s;">{{trans('design.pro_and_reputable')}}</h2>
                                <button type="button" class="slide-btn wow fadeInLeftBig" data-wow-delay="1s" data-toggle="modal"
                                    data-target="#exampleModal">
                                    {{trans('design.sign_up_now')}}
                                </button>
                            </div>
                        </div>
                        <!-- End Slider content -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Slider Area -->

    <!-- Start Service Area -->
    <section class="area-padding">
        <div class="container">
            <!-- Providing services content -->
            <div class="row">
                <div class="col-xs-12 section-head text-center">
                    <h3>{{trans('design.providing')}} <span class="color">{{trans('design.services')}}</span></h3>
                </div>
                <div class="col-xs-12">
                    <p class="text-center"><em>{{trans('design.services_txt_1a')}} <strong class="color">HACHINET</strong> {{trans('design.services_txt_1b')}}</em></p>
                </div>
            </div>
            <div class="row equal-md-cols mb-5">
                <div class="col-md-4">
                    <div class="service_content wow fadeInLeftBig" data-wow-delay=".2s">
                        <a class="text-center" href="#">
                            <div class="mb-2">
                                <img src="{{ asset('website/img/services/s5.png') }}" alt="{{trans('design.design')}} {{trans('design.service_1.title')}}">
                            </div>
                            <h4>{{trans('design.design')}}<br>{{trans('design.service_1.title')}}</h4>
                        </a>
                        <ul>
                            <li>{{trans('design.service_1.txt_1')}}</li>
                            <li>{{trans('design.service_1.txt_2')}}</li>
                            <li>{{trans('design.service_1.txt_3')}}</li>
                            <li>{{trans('design.service_1.txt_4')}}</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service_content wow fadeInDownBig" data-wow-delay=".2s">
                        <a class="text-center" href="#">
                            <div class="mb-2">
                                <img src="{{ asset('website/img/services/s2.png') }}" alt="{{trans('design.design')}} {{trans('design.service_2.title')}}">
                            </div>
                            <h4>{{trans('design.design')}}<br>{{trans('design.service_2.title')}}</h4>
                        </a>
                        <ul>
                            <li>{{trans('design.service_2.txt_1')}}</li>
                            <li>{{trans('design.service_2.txt_2')}}</li>
                            <li>{{trans('design.service_2.txt_3')}}</li>
                            <li>{{trans('design.service_2.txt_4')}}</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service_content wow fadeInRightBig" data-wow-delay=".2s">
                        <a class="text-center" href="#">
                            <div class="mb-2">
                                <img src="{{ asset('website/img/services/s4.png') }}" alt="{{trans('design.design')}} {{trans('design.service_3.title')}}">
                            </div>
                            <h4>{{trans('design.design')}}<br>{{trans('design.service_3.title')}}</h4>
                        </a>
                        <ul>
                            <li>{{trans('design.service_3.txt_1')}}</li>
                            <li>{{trans('design.service_3.txt_2')}}</li>
                            <li>{{trans('design.service_3.txt_3')}}</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Other services content -->
            <div class="row equal-md-cols mb-5">
                <div class="col-md-3">
                    <div class="more-service_content text-center wow rollIn" data-wow-delay=".2s">
                        <div class="box-circle">
                            <a href="#">
                                <span class="circle-item" style="background-image: url('landing/vn-web-app-design/img/1.png');"></span>
                            </a>
                        </div>
                        <h2>
                            <a href="#">{{trans('design.other_service_1.title')}}</a>
                        </h2>
                        <p>
                        {{trans('design.other_service_1.txt_1')}}
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="more-service_content text-center wow rollIn" data-wow-delay=".2s">
                        <div class="box-circle">
                            <a href="#">
                                <span class="circle-item" style="background-image: url('landing/vn-web-app-design/img/2.png');"></span>
                            </a>
                        </div>
                        <h2>
                            <a href="#">{{trans('design.other_service_2.title')}}</a>
                        </h2>
                        <p>
                            <strong class="color">HACHINET</strong> {{trans('design.other_service_2.txt_1')}}
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="more-service_content text-center wow rollIn" data-wow-delay=".2s">
                        <div class="box-circle">
                            <a href="#">
                                <span class="circle-item" style="background-image: url('landing/vn-web-app-design/img/3.png');"></span>
                            </a>
                        </div>
                        <h2>
                            <a href="#">{{trans('design.other_service_3.title')}}</a>
                        </h2>
                        <p>
                            <strong class="color">HACHINET</strong> {{trans('design.other_service_3.txt_1')}}
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="more-service_content text-center wow rollIn" data-wow-delay=".2s">
                        <div class="box-circle">
                            <a href="#">
                                <span class="circle-item" style="background-image: url('landing/vn-web-app-design/img/4.png');"></span>
                            </a>
                        </div>
                        <h2>
                            <a href="#">{{trans('design.other_service_4.title')}}</a>
                        </h2>
                        <p>
                        {{trans('design.other_service_4.txt_1')}}
                        </p>
                    </div>
                </div>
            </div>
            <!-- Completed products content -->
            <div class="row">
                <div class="col-xs-12 section-head text-center">
                    <h3>{{trans('design.completed_products.title_1')}} <span class="color">{{trans('design.completed_products.title_2')}}</span></h3>
                </div>
                <div class="col-xs-12">
                    <p class="text-center"><em>{{trans('design.completed_products.txt_1')}} <strong class="color">HACHINET</strong>{{trans('design.completed_products.txt_2')}}</em></p>
                </div>
            </div>
            <div class="row equal-md-cols mb-5">
                @foreach ([0,4,6] as $index)
                    <div class="col-md-4">
                        <div class="service_content wow fadeInUp" data-wow-delay=".2s">
                            <a class="text-center" href="{{route('case_study_read', $products[$index]->productSlug)}}" title="{{$products[$index]->productTitle}}" target="_blank">
                                <div class="product_thumbnail_box w-100 mb-2">
                                    <div class="product_thumbnail w-100 h-100" style="background-image: url('{{asset('upload/'.$products[$index]->productImages[0])}}')"></div>
                                </div>
                                <h4>{{$products[$index]->productTitle}}</h4>
                            </a>
                            <ul>
                                <li>{{$products[$index]->productOverview}}</li>
                                <li><a href="case-study/devworkvn" target="_blank">{{trans('messages.read_more')}}...</a></li>
                            </ul>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row equal-md-cols mb-5">
                @foreach ([7,8,9] as $index)
                    <div class="col-md-4">
                        <div class="service_content wow fadeInUp" data-wow-delay=".2s">
                            <a class="text-center" href="{{route('case_study_read', $products[$index]->productSlug)}}" title="{{$products[$index]->productTitle}}" target="_blank">
                                <div class="product_thumbnail_box w-100 mb-2">
                                    <div class="product_thumbnail w-100 h-100" style="background-image: url('{{asset('upload/'.$products[$index]->productImages[0])}}')"></div>
                                </div>
                                <h4>{{$products[$index]->productTitle}}</h4>
                            </a>
                            <ul>
                                <li>{{$products[$index]->productOverview}}</li>
                                <li><a href="case-study/devworkvn" target="_blank">{{trans('messages.read_more')}}...</a></li>
                            </ul>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row equal-md-cols mb-5">
                @foreach ([12,14] as $index)
                    <div class="col-md-6">
                        <div class="service_content wow fadeInUp" data-wow-delay=".2s">
                            <a class="text-center" href="{{route('case_study_read', $products[$index]->productSlug)}}" title="{{$products[$index]->productTitle}}" target="_blank">
                                <div class="product_thumbnail_box w-100 mb-2">
                                    <div class="product_thumbnail w-100 h-100" style="background-image: url('{{asset('upload/'.$products[$index]->productImages[0])}}')"></div>
                                </div>
                                <h4>{{$products[$index]->productTitle}}</h4>
                            </a>
                            <ul>
                                <li>{{$products[$index]->productOverview}}</li>
                                <li><a href="case-study/devworkvn" target="_blank">{{trans('messages.read_more')}}...</a></li>
                            </ul>
                        </div>
                    </div>
                @endforeach
            </div>
            <!-- Why choose HACHINET content -->
            <div class="row">
                <div class="col-xs-12 section-head text-center">
                    <h3>{{trans('design.why_choose_us.title')}} <span class="color">HACHINET</span></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="why-choose-us wow swing" data-wow-delay=".2s">
                        <em>
                            <p>
                                <strong>HACHINET</strong> {{trans('design.why_choose_us.txt_1')}}
                            </p>
                            <p>
                                {{trans('design.why_choose_us.txt_2')}} <strong>HACHINET</strong> {{trans('design.why_choose_us.txt_3')}}
                            </p>
                            <p>
                                {{trans('design.why_choose_us.txt_4')}}
                            </p>
                        </em>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="pt-4 pb-5">
        <div class="container">
            <!-- Our partner content -->
            <div class="row">
                <div class="col-xs-12 section-head text-center">
                    <h3>{{trans('design.our_partner.title_1')}} <span class="color">{{trans('design.our_partner.title_2')}}</span></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="box-partner p-2 wow fadeInUp" data-wow-delay=".2s">
                        <div class="img_partner text-center">
                            <a href="#">
                                <img src="{{asset('images/partner/logo-deha.png')}}" class="colored-icon" alt="">
                            </a>
                        </div>
                        <div class="mt-3">
                            <h6 class="text-center">DEHA SOLUTIONS</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="box-partner p-2 wow fadeInUp" data-wow-delay=".2s">
                        <div class="img_partner text-center">
                            <a href="#">
                                <img src="{{asset('images/partner/logo-omni.png')}}" class="colored-icon" alt="">
                            </a>
                        </div>
                        <div class="mt-3">
                            <h6 class="text-center">OMNI</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-3 col-sm-6 mb-4">
                    <div class="box-partner p-2 wow fadeInUp" data-wow-delay=".2s">
                        <div class="img_partner text-center">
                            <a href="#">
                                <img src="{{asset('images/partner/logo_viettel2.png')}}" class="colored-icon" alt="">
                            </a>
                        </div>
                        <div class="mt-3">
                            <h6 class="text-center">VIETTEL</h6>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3 col-sm-6 mb-4">
                    <div class="box-partner p-2 wow fadeInUp" data-wow-delay=".2s">
                        <div class="img_partner text-center">
                            <a href="#">
                                <img src="{{asset('images/partner/ttc-logo.png')}}" class="colored-icon" alt="">
                            </a>
                        </div>
                        <div class="mt-3">
                            <h6 class="text-center">TTC</h6>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3 col-sm-6 mb-4">
                    <div class="box-partner p-2 wow fadeInUp" data-wow-delay=".2s">
                        <div class="img_partner text-center">
                            <a href="#">
                                <img src="{{asset('images/partner/beetsoft-logo.png')}}" class="colored-icon" alt="">
                            </a>
                        </div>
                        <div class="mt-3">
                            <h6 class="text-center">BEETSOFT</h6>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3 col-sm-6 mb-4">
                    <div class="box-partner p-2 wow fadeInUp" data-wow-delay=".2s">
                        <div class="img_partner text-center">
                            <a href="#">
                                <img src="{{asset('images/partner/logo-gmoz.png')}}" class="colored-icon" alt="">
                            </a>
                        </div>
                        <div class="mt-3">
                            <h6 class="text-center">GMO RUNSYSTEM</h6>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3 col-sm-6 mb-4">
                    <div class="box-partner p-2 wow fadeInUp" data-wow-delay=".2s">
                        <div class="img_partner text-center">
                            <a href="#">
                                <img src="{{asset('images/partner/itplink-logo.svg')}}" class="colored-icon" alt="">
                            </a>
                        </div>
                        <div class="mt-3">
                            <h6 class="text-center">IT PARTNERS LINK</h6>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3 col-sm-6 mb-4">
                    <div class="box-partner p-2 wow fadeInUp" data-wow-delay=".2s">
                        <div class="img_partner text-center">
                            <a href="#">
                                <img src="{{asset('images/partner/nal-logo.png')}}" class="colored-icon" alt="">
                            </a>
                        </div>
                        <div class="mt-3">
                            <h6 class="text-center">NAL</h6>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3 col-sm-6 mb-4">
                    <div class="box-partner p-2 wow fadeInUp" data-wow-delay=".2s">
                        <div class="img_partner text-center">
                            <a href="#">
                                <img src="{{asset('images/partner/logo-azet.png')}}" class="colored-icon" alt="">
                            </a>
                        </div>
                        <div class="mt-3">
                            <h6 class="text-center">AZET</h6>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3 col-sm-6 mb-4">
                    <div class="box-partner p-2 wow fadeInUp" data-wow-delay=".2s">
                        <div class="img_partner text-center">
                            <a href="#">
                                <img src="{{asset('images/partner/logo-hachix.png')}}" class="colored-icon" alt="">
                            </a>
                        </div>
                        <div class="mt-3">
                            <h6 class="text-center">HACHI-X</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Service Area -->

    <!-- Start contact Area -->
    <section id="contact" class="contact-page area-padding img-contact">
        <div class="container">
            <!-- Contact us content -->
            <div class="row">
                <div class="col-xs-12 section-head text-center">
                    <h3>{{trans('design.contact_us.title_1')}} <span class="color">{{trans('design.contact_us.title_2')}}</span></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="contact-head">
                        <div class="contact-icon">
                            <div class="single-contact">
                                <br /><br />
                                <h5>{{trans('design.contact_us.txt_1')}} :</h5>
                                <a><i class="fa fa-map"></i><span>2F - 21B6, 234 Pham Van Dong, Hanoi,
                                    Vietnam</span></a>
                                <a><i class="fa fa-phone"></i><span>(+84) 24-6290-0388</span></a>
                                <a><i class="fa fa-envelope"></i><span>contact@hachinet.com</span></a>
                                <br />
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Start contact Form -->
                <div class="col-sm-6">
                        <div class="row">
                            <form id="contactForm" method="POST" class="contact-form">
                                <div class="col-sm-6">
                                    <input type="text" id="nameSuccess" class="form-control" placeholder="{{trans('service.haken_txt_message_1')}}" required
                                        data-error="Please enter your name">
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="col-sm-6">
                                    <input type="email" class="email form-control" id="emailSuccess" placeholder="{{trans('service.haken_txt_message_2')}}"
                                        required data-error="Please enter your email">
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="col-xs-12">
                                    <input type="text" id="msg_subject" class="form-control" placeholder="{{trans('service.haken_txt_message_3')}}"
                                        required data-error="Please enter your message subject">
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="col-xs-12">
                                    <textarea id="message" rows="7" placeholder="{{trans('service.haken_txt_message_5')}}in" class="form-control" required
                                        data-error="Write your message"></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="col-xs-12 text-center">
                                    <button type="button" id="submit" 
                                    data-loading-text="<i class='fa fa-spinner fa-spin '></i> {{trans('messages.sending')}}"    
                                    class="contact-btn1" onclick="sendSuccess()">{{trans('service.haken_txt_send_message')}}</button>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </form>
                        </div>
                </div>
                <!-- End contact Form -->
            </div>
        </div>
    </section>
    <!-- End contact Area -->

    <!-- Start Footer Area -->
    <footer>
        <div class="footer-top-area area-padding img-footer">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="footer-content text-center">
                            <div class="single-footer">
                                <div class="footer-logo text-center">
                                    <a>
                                        <img src="landing/serminar/img/logo/footer-logo.png" alt="hachinet footer logo">
                                    </a>
                                </div>
                            </div>
                            <div class="footer-social">
                                <ul class="social-link">
                                    <li><a href="https://www.facebook.com/hachinet.jsc/" target="_blank"><i
                                                class="fa fa-facebook"></i></a></li>
                                    <li><a href="https://www.linkedin.com/company/hachinet-software1/"
                                            target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="https://www.instagram.com/hachinet.software/" target="_blank"><i
                                                class="fa fa-instagram"></i></a></li>
                                    <li><a href="https://www.facebook.com/hachinet.jsc/" target="_blank"><i
                                                class="fa fa-youtube-play"></i></a></li>
                                </ul>
                            </div>
                            <div class="copyright">
                                <p>
                                    All rights reserved HACHINET Copyright © 2018 - 2020
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true" style="z-index: 9999999;">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form class="needs-validation" id="myForm" novalidate>
                            @csrf
                            <div class="form-group">
                                <label for="name">{{trans('service.haken_txt_message_1')}}*</label>
                                <input type="text" class="form-control" id="name" aria-describedby="emailHelp"
                                    placeholder="{{trans('service.haken_txt_message_1')}}" required>
                            </div>
                            <div class="form-group">
                                <label for="email">{{trans('service.haken_txt_message_2')}}*</label>
                                <input type="email" class="form-control" id="email" aria-describedby="emailHelp"
                                    placeholder="{{trans('service.haken_txt_message_2')}}" required>
                            </div>
                            <div class="form-group">
                                <label for="company">{{trans('messages.company_name')}}*</label>
                                <input type="text" class="form-control" id="company" aria-describedby="emailHelp"
                                    placeholder="{{trans('messages.company_name')}}" required>
                            </div>
                            <div class="form-group">
                                <label for="address">{{trans('design.contact_us.txt_1')}}*</label>
                                <input type="text" class="form-control" id="address" placeholder="{{trans('design.contact_us.txt_1')}}" required>
                            </div>
                            <button type="button" onclick="sendEmail()"
                            data-loading-text="<i class='fa fa-spinner fa-spin '></i> {{trans('messages.sending')}}"
                            value="Send An Email" class="slide-btn" id="slide-btn1">{{trans('design.modal.send')}}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Modal -->
    </footer>
    <!-- End Footer Area -->

    <!-- all js here -->
    <script type="text/javascript">
        function sendEmail() {
            var name = $("#name");
            var email = $("#email");
            var address = $("#address");
            var company = $("#company");

            if (isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(address) && isNotEmpty(company)) {
                $('.slide-btn').button('loading');
                $.ajax({
                    url: 'online-seminar',
                    method: 'POST',
                    dataType: 'json',
                    data: {
                        "_token": "{{ csrf_token() }}",
                        name: name.val(),
                        email: email.val(),
                        address: address.val(),
                        company: company.val()
                    }, success: function (response) {
                        swal("", "Cảm ơn bạn đã đăng ký, chúng tôi sẽ liên lạc với bạn trong thời gian sớm nhất", "success", { button: false });
                        $('#myForm')[0].reset();
                        $('.modal').hide();
                        $('.slide-btn').button('reset');
                    }
                });
            }
        }

        function sendSuccess() {
            // alert('internal');
            var nameSuccess = $("#nameSuccess");
            var emailSuccess = $("#emailSuccess");
            var msg_subject = $("#msg_subject");
            var message = $("#message");
            if (isNotEmpty(nameSuccess) && isNotEmpty(emailSuccess) && isNotEmpty(msg_subject) && isNotEmpty(message)) {
                $('.contact-btn1').button('loading');
                $.ajax({
                    url: 'online-seminar-success',
                    method: 'POST',
                    dataType: 'json',
                    data: {
                        "_token": "{{ csrf_token() }}",
                        nameSuccess: nameSuccess.val(),
                        emailSuccess: emailSuccess.val(),
                        msg_subject: msg_subject.val(),
                        message: message.val()
                    }, success: function (response) {
                        swal("", "Thư của bạn đã được gửi thành công, cảm ơn bạn đã liên hệ với chúng tôi", "success");
                        $('#contactForm')[0].reset();
                        $('.contact-btn1').button('reset');
                        // $('.modal').modal('hide');
                    }
                });
            }
        }

        function isNotEmpty(caller) {
            if (caller.val() == "") {
                caller.css('border', '1px solid red');
                return false;
            } else
                caller.css('border', '');

            return true;
        }

    </script>
    <script src="landing/serminar/js/vendor/app.js"></script>
    <!-- jquery latest version -->
    <script src="landing/serminar/js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap js -->
    <script src="landing/serminar/js/bootstrap.min.js"></script>
    <!-- stellar js -->
    <script src="landing/serminar/js/jquery.stellar.min.js"></script>
    <!-- plugins js -->
    <script src="landing/serminar/js/plugins.js"></script>
    <!-- wow.js -->
    <script src="landing/vn-web-app-design/js/wow.min.js"></script>
    <!-- main js -->
    <script src="landing/vn-web-app-design/js/main.js"></script>
</body>

</html>