<!-- ##### Header Area Start ##### -->
<header class="header-area fadeInDown" data-wow-delay="0.2s">
        <div class="classy-nav-container light breakpoint-off">
            <div class="container">
                <!-- Classy Menu -->
                <nav class="classy-navbar light justify-content-between" id="dreamNav">

                    <!-- Logo -->
                    <a class="navbar-brand logo_h"  href="{{ url('/') }}"><img src="{{asset('static/img/logo-hachinet-alt2.png')}}" alt="WEB制作・業務システム開発・ベトナムソフトウウェアアウトソーーシング "></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler demo">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">

                        <!-- close btn -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul id="nav">
                                <li><a href="/">{{trans('messages.home')}}</a></li>
                                <li><a href="{{route('about_us')}}">{{trans('messages.about_us')}}</a></li>
                                <li><a href="{{route('services')}}">{{trans('messages.services')}}</a></li>
                                <li><a href="{{route('news')}}">{{trans('messages.magazine')}}</a></li>
                                <li><a href="{{route('case_study')}}">{{trans('messages.case_study')}}</a></li>
                                <li><a href="{{route('contact')}}">{{trans('messages.contact_us')}}</a></li>
                                <li class="cn-dropdown-item">
                                    @if(Lang::locale() === 'vn')
                                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      {{ trans('messages.lang.vn') }} <img class="icon_language" alt="Hachinet Vietnamese" src="{{ asset('static/img/flags/VietNam.png') }}">
                                    </a>
                                    @elseif(Lang::locale() === 'jp')
                                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      {{ trans('messages.lang.jp') }} <img class="icon_language" alt="Hachinet Japanese" src="{{ asset('static/img/flags/Japan.png') }}">
                                    </a>
                                    @elseif(Lang::locale() === 'en')
                                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      {{ trans('messages.lang.en') }} <img class="icon_language" alt="Hachinet English" src="{{ asset('static/img/flags/USA.png') }}">
                                    </a>
                                    @endif
                                    <ul class="dropdown">
                                      <li><a href="{{ url('language/vn') }}"><img class="icon_language" alt="Hachinet Vietnamese" src="{{ asset('static/img/flags/VietNam.png') }}">{{trans('messages.lang.vn')}}</a></li>
                                      <li><a href="{{ url('language/jp') }}"><img class="icon_language" alt="Hachinet Japanese" src="{{ asset('static/img/flags/Japan.png') }}">{{trans('messages.lang.jp')}}</a></li>
                                      <li><a href="{{ url('language/en') }}"><img class="icon_language" alt="Hachinet English" src="{{ asset('static/img/flags/USA.png') }}">{{trans('messages.lang.en')}}</a></li>
                                    </ul>
                                </li>
                            </ul>

                            <!-- Button -->
                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->