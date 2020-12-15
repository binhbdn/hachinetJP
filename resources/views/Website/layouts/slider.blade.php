<section class="slider__slick" id="slider__slick">
    <div class="slider">
        <div>
            <div class="items-slider pt-5 pb-5" style="background-image: url({{asset('static/img/bg-system.jpg')}})">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="img-wrap">
                                <img src="{{asset('static/img/image-business-system.png')}}" alt="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="text-wrap">
                                <h4>{{trans('service.front_end_outsource')}}</h4>
                                <p class="text-body">{{trans('service.front_end_description_service')}}</p>
                            </div>
                            <div class="button-wrap">
                            <a class="btn dream-btn green-btn mt-30 fadeInUp" data-wow-delay="0.6s" href="{{route('outsource_development')}}">{{trans('messages.read_more')}}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="items-slider pt-5 pb-5" style="background-image: url({{asset('static/img/bg-mobile-app.jpg')}})">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="text-wrap">
                                <h4>{{trans('service.develope_smartphone')}}</h4>
                                <p class="text-body">{{trans('service.mobile_app_description_service')}} </p>
                            </div>
                            <div class="button-wrap">
                            <a class="btn dream-btn green-btn mt-30 fadeInUp" data-wow-delay="0.6s" href="{{route('mobile_app_development')}}" target="_blank">{{trans('messages.read_more')}}</a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="img-wrap">
                                <img src="{{asset('static/img/mobile-app-development.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div>
            <div class="items-application" style="background: url({{asset('static/img/banner-ba.jpg')}})">
                <div class="img-wrap">
                    <img src="{{asset('static/img/mobile-app-development.png')}}" alt="">
                </div>
                <div class="text-wrap"></div>
                <div class="button-wrap"></div>
            </div>
        </div> -->
    </div>
</section>
<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>
    window.fbAsyncInit = function() {
        FB.init({
        xfbml            : true,
        version          : 'v3.3'
        });
    };

    (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/ja_JP/sdk/xfbml.customerchat.js';
    fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

    <div class="fb-customerchat"
    attribution=setup_tool
    page_id="185234278694654"
    theme_color="#ffB701">
</div>