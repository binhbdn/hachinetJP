        <!--================ start footer Area  =================-->    
        <footer style="padding-top: 40px" class="footer t-burger dark-template-bg2">
            <div class="container">
            <!-- column end -->
            <div class="row footer-links">
            <div class="col-sm-3 col-lg-3 wow fadeInUp" data-wow-delay=".4s" data-wow-duration=".4s" style="visibility: visible; animation-duration: 0.4s; animation-delay: 0.4s; animation-name: fadeInUp;">
                <a href="javascript:void(0);" class=""><img src="{{ url('/upload/setting') }}/{{ $settings->logofooter}}" alt="" class="img-fluid mt2 footer-logo"></a>
            </div>
            <div class="col-sm-3 links wow fadeInUp" data-wow-delay=".5s" data-wow-duration=".5s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.5s; animation-name: fadeInUp;">
                <h3 style="color: #cecece">{{ trans('messages.company_s') }}</h3>
                <ul class="list-unstyled mt2">
                    <li><i class="fa fa-angle-right"></i><a href="#about">{{ trans('messages.about_HACHINET') }}</a></li>
                    <li><i class="fa fa-angle-right"></i><a href="#service">{{ trans('messages.services') }}</a></li>
                    <li><i class="fa fa-angle-right"></i><a href="https://goo.gl/maps/weJ38rxWhmLW16Fw5">{{ trans('messages.road_map') }}</a></li>
                    <li><i class="fa fa-angle-right"></i><a href="{{ url('faq') }}">Faq</a></li>
                    <li><i class="fa fa-angle-right"></i><a href="{{ url('contact') }}">{{ trans('messages.contact') }}</a></li>
                </ul>
            </div>
            <div class="col-sm-3 wow fadeInUp" data-wow-delay=".7s" data-wow-duration=".7s" style="visibility: visible; animation-duration: 0.7s; animation-delay: 0.7s; animation-name: fadeInUp;">
                <h3 style="color: #cecece">{{ trans('messages.social_media') }}</h3>
                <ul class="social list-unstyled mt2">
                    <li><a href="https://twitter.com/hachinetvietnam" target="_blank"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="https://www.facebook.com/hachinet.jsc/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://www.youtube.com/channel/UCmIQuop1hhz5dpSCEKKacCw" target="_blank"><i class="fa fa-youtube"></i></a></li>
                </ul>
            </div>
            <div class="col-sm-3">
                <div class="footer-wg">
                    <h4 style="color: #cecece">{{ trans('messages.album') }}</h4>
                    <ul class="userFeed" id="instagram">
                        <li><a href="https://www.instagram.com/p/BqwzhyXA4_e/" target="_blank"><img src="https://hachinet.com/uploads/images/hachinet_1.jpg"></a>
                        </li>
                        <li><a href="https://www.instagram.com/p/Bqz50-eA9IW/" target="_blank" title=""><img src="https://hachinet.com/uploads/images/hachinet_2.jpg"></a>
                        </li>
                        <li><a href="https://www.instagram.com/p/BvoYagwlVar" target="_blank" title=""><img src="https://hachinet.com/uploads/images/hachinet_3.jpg"></a>
                        </li>
                        <li><a href="https://www.instagram.com/p/BwSIPWQlgvW" target="_blank" title=""><img src="https://hachinet.com/uploads/images/hachinet_4.jpg"></a>
                        </li>
                        <li><a href="https://www.instagram.com/p/BwSIAaflRyv" target="_blank" title=""><img src="https://hachinet.com/uploads/images/hachinet_5.jpg"></a>
                        </li>
                        <li><a href="https://www.instagram.com/p/BwUOMlzFudi" target="_blank" title=""><img src="https://hachinet.com/uploads/images/hachinet_6.jpg"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div style="background-color: #222;">
        <div class="text-center col-sm-12 mb1 wow fadeInUp" data-wow-delay=".8s" data-wow-duration=".5s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.8s; animation-name: fadeInUp; height: 35px; line-height: 35px;">
            <!-- column start -->
            <p style="font-size: 13px; color: #cecece;" class="copyright">All rights reserved <a href="hachinet.com" class="template-color"><strong> {{$settings->from_name }}</strong></a> Copyright © 2018 - 2019</p>
        </div>
    </div>
        <!-- row-end -->
    <!-- container-end -->
</footer>
        <!--================ End footer Area  =================-->