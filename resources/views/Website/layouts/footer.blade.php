<footer class="footer-area bg-img">

    <div class="footer-content-area spec">
        <div class="container">
            <div class="row ">
                <div class="col-12 col-lg-3 col-md-6">
                    <div class="footer-copywrite-info">
                        <!-- Copywrite -->
                        <div class="copywrite_text fadeInUp" data-wow-delay="0.2s">
                            <div class="footer-logo">
                                <a href="/"><img src="{{asset('static/img/footer-logo.png')}}" alt="logo"></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-3 col-md-6">
                    <div class="contact_info_area d-sm-flex justify-content-between">
                        <!-- Content Info -->
                        <div class="contact_info mt-x text-center fadeInUp" data-wow-delay="0.3s">
                            <h5>HACHINET.,JSC</h5>
                            <a href="{{route('about_us')}}"><p><i class="fa fa-angle-double-right"></i>&nbsp;{{trans('messages.about_us')}}</p></a>
                            <a href="{{route('news')}}"><p><i class="fa fa-angle-double-right"></i>&nbsp;{{trans('messages.magazine')}}</p></a>
                            <a href="{{route('services')}}"><p><i class="fa fa-angle-double-right"></i>&nbsp;{{trans('messages.services')}}</p></a>
                            <a href="{{route('case_study')}}"><p><i class="fa fa-angle-double-right"></i>&nbsp;{{trans('messages.case_study')}}</p></a>
                            <a href="{{route('faq')}}"><p><i class="fa fa-angle-double-right"></i>&nbsp;FAQs</p></a>
                            <a href="{{route('contact')}}"><p><i class="fa fa-angle-double-right"></i>&nbsp;{{trans('messages.contact_us')}}</p></a>
                        </div>
                    </div>
                </div>
                    
                <div class="col-12 col-lg-3 col-md-6 ">
                    <!-- Content Info -->
                    <div class="contact_info_area d-sm-flex justify-content-between">
                        <div class="contact_info mt-s text-center fadeInUp" data-wow-delay="0.2s">
                            <h5 class="text-uppercase">{{trans('messages.providing_services')}}</h5>
                            <a href="#"><p><i class="fa fa-angle-double-right"></i>&nbsp;{{trans('service.business_application')}}</p></a>
                            <a href="#"><p><i class="fa fa-angle-double-right"></i>&nbsp;{{trans('service.website_development')}}</p></a>
                            <a href="{{route('outsource_development')}}"><p><i class="fa fa-angle-double-right"></i>&nbsp;{{trans('service.outsource_front_end')}}</p></a>
                            <a href="{{route('java_system_dev')}}"><p><i class="fa fa-angle-double-right"></i>&nbsp;{{trans('service.java_system')}}</p></a>
                            <a href="{{route('mobile_app_development')}}"><p><i class="fa fa-angle-double-right"></i>&nbsp;{{trans('service.mobile_and_application')}}</p></a>
                            <a href="{{route('net_system_dev')}}"><p><i class="fa fa-angle-double-right"></i>&nbsp;{{trans('service.net_system')}}</p></a>
                        </div>
                    </div>
                </div>
                

                <div class="col-12 col-lg-3 col-md-6 ">
                    <div class="contact_info_area d-sm-flex justify-content-between">
                        <!-- Content Info -->
                        <div class="contact_info mt-s text-center fadeInUp" data-wow-delay="0.4s">
                            <h5 class="text-uppercase">{{trans('messages.contact_us')}}</h5>
                            <p>2F - 21B6, 234 Pham Van Dong</p>
                            <p>Hanoi. Vietnam</p>
                            <p>(+84) 24-6290-0388</p>
                            <p>contact@hachinet.com</p>
                        </div>
                    </div>

                    <div class="footer-social-info fadeInUp mt-3" data-wow-delay="0.4s">
                        <a href="{{$settings->facebook}}"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="{{$settings->twitter}}"> <i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="{{$settings->instagram}}"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        <a href="{{$settings->youtube}}"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                        <a href="{{$settings->linkedin}}"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
            
    </div>

    <div class="copyright">
        <div class="text-center bg-dark col-sm-12 mb1 wow fadeInUp pt-1 pb-1" data-wow-delay=".8s" data-wow-duration=".7s" 
        style="visibility: visible; animation-duration: 0.7s; animation-delay: 0.8s; 
        animation-name: fadeInUp; line-height: 35px;">
            <!-- column start -->
            <p class="mb-0 text-white">All rights reserved <a href="{{route('home')}}" class="template-color"><strong> HACHINET</strong></a> Copyright © 2018 - {{date('Y')}}</p>
        </div>
    </div>
</footer>