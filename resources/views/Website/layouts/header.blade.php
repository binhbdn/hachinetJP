<header>
    <nav class="navbar">
        <a class="navbar-brand logo_h"  href="{{ url('/') }}"><img src="{{asset('static/img/logo-hachinet-alt2.png')}}" alt="WEB制作・業務システム開発・ベトナムソフトウウェアアウトソーーシング "></a>
            <div class="navbar-menu">
                <a href="tel:+842462900388" class="span-1 text-body white-text"><i class="fa fa-phone"></i>&nbsp;(+84) 24-6290-0388</a>
                <a href="{{route('contact')}}"><span class="span-2">{{trans('messages.contact_us')}}</span></a>
                <a href="{{ url('language/vn') }}"><img class="icon_language" alt="Hachinet Vietnamese" src="{{ asset('static/img/flags/VietNam.png') }}"></a>
                <a href="{{ url('language/jp') }}"><img class="icon_language" alt="Hachinet Japanese" src="{{ asset('static/img/flags/Japan.png') }}"></a>
                <a href="{{ url('language/en') }}"><img class="icon_language" alt="Hachinet English" src="{{ asset('static/img/flags/USA.png') }}"></a>
            </div>
    </nav>
</header>
            <nav class="nav">
                <a class="navbar-brand logo_h"  href="{{ url('/') }}"><img class="img-logo" src="{{asset('static/img/logo-hachinet-alt2.png')}}" alt="WEB制作・業務システム開発・ベトナムソフトウウェアアウトソーーシング "></a>
                <div class="inner-width">
                <input type="checkbox" id="res-menu">
                <label for="res-menu">
                    <i class="fa fa-bars" id="sign-one"></i>
                    <i class="fa fa-times" id="sign-two"></i>
                </label>
                    <ul class="ul1">
                        <li class="li1"><a href="/">{{trans('messages.home')}}</a></li>
                        <li class="li1"><a href="{{route('about_us')}}">{{trans('messages.about_us')}}</a></li>
                       <li class="li1"><a href="{{route('services')}}">{{trans('messages.services')}}<i style="margin-left:5px" class="fa-1 fa fa-caret-down" aria-hidden="true"></i></a>
                            <ul class="ul2">
                                <li class="li2"><a href="">{{trans('service.business_application')}}</a></li>
                                <li class="li2"><a href="">{{trans('service.website_development')}}</a></li>
                                <li class="li2"><a href="https://hachinet.jp/outsourcing-angular-development">{{trans('service.front_end_outsource')}}</a></li>
                                <li class="li2"><a href="https://hachinet.jp/smartphone-application-development">{{trans('service.develope_smartphone')}}</a></li>
                                <li class="li2"><a href="https://hachinet.jp/java-systems-development">{{trans('service.java_system')}}</a></li>
                                <li class="li2"><a href="https://hachinet.jp/net-systems-development">{{trans('service.net_system')}}</a></li>
                                <li class="li2"><a href="https://hachinet.jp/cobol-systems-development">{{trans('service.cobol_system_dev')}}</a></li>
                                <li class="li2"><a href="https://hachinet.jp/service-of-human-resources">{{trans('service.haken_title')}}</a></li>
                            </ul>
                        </li>
                       <li class="li1"><a href="{{route('news')}}">{{trans('messages.magazine')}}</a></li>
                        <li class="li1"><a href="{{route('case_study')}}">{{trans('messages.case_study')}}</a>
                        <!-- <ul class="ul2">
                                <li class="li2"><a href="case-study/he-thong-icm">Hệ thống ICM</a></li>
                                <li class="li2"><a href="case-study/varsanjp">Varsan.jp</a></li>
                                <li class="li2"><a href="case-study/bccs">BCCS</a></li>
                                <li class="li2"><a href="https://hachinet.jp/smartphone-application-development">Mobile & Application Development</a></li>
                                <li class="li2"><a href="https://hachinet.jp/java-systems-development">Java System Development</a></li>
                                <li class="li2"><a href="https://hachinet.jp/net-systems-development">.NET System Development</a></li>
                                <li class="li2"><a href="https://hachinet.jp/cobol-systems-development">Cobol System</a></li>
                                <li class="li2"><a href="https://hachinet.jp/service-of-human-resources">The "overall service of human resources" trusted from everybody</a></li>
                            </ul> -->
                        </li>
                        <li class="li1" style="border:none"><a href="{{route('contact')}}">{{trans('messages.contact_us')}}</a></li>
                    </ul>
                    <!-- Button -->
                </div>
            </nav>
    <!-- Nav End -->

