        <!--================Header Menu Area =================-->
        <header class="header_area">    
            <div class="main_menu">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="container">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <a class="navbar-brand logo_h" href="{{ url('home') }}"><img src="{{ url('/upload/setting') }}/{{ $settings->logo}}" alt=""></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                            <ul class="nav navbar-nav menu_nav ml-auto">
                                <li class="nav-item {{ Request::path() == 'home' || Request::path() == '/' ? 'active' : '' }}"><a class="nav-link" href="{{ url('home') }}">{{ trans('messages.home') }}</a></li> 
                                <li class="nav-item submenu">
                                    <div class="dropdown nav-link">
                                        <a class="dropdown-toggle" href="/" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> {{ trans('messages.service') }} </a>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="width: max-content;">
                                            <li><a href="{{url('business-systems')}}" aria-haspopup="true" aria-expanded="false">{{ trans('messages.Business_application') }}</a></li>
                                            <li><a href="{{url('website-development')}}" aria-haspopup="true" aria-expanded="false">{{ trans('messages.website_development') }}</a></li>
                                            <li><a href="{{url('outsourcing-angular-development')}}" aria-haspopup="true" aria-expanded="false">{{ trans('messages.outsourcing_angular') }}</a></li>
                                            <li><a href="{{url('java-systems-development')}}" aria-haspopup="true" aria-expanded="false">{{ trans('messages.java_systems_developer') }}</a></li>
                                            <li><a href="{{url('smartphone-application-development')}}" aria-haspopup="true" aria-expanded="false">{{ trans('messages.develope_smartphone') }}</a></li>
                                            <li><a href="{{url('net-systems-development')}}" aria-haspopup="true" aria-expanded="false">{{ trans('messages.net_systems_developer') }}</a></li>
                                        </ul>
                                    </div>
                                </li> 

                                <!-- <li class="nav-item"><a class="nav-link" href="#service">{{ trans('messages.service') }}</a></li>  -->
                                <li class="nav-item {{ Request::path() == 'blog' ? 'active' : '' }}"><a class="nav-link" href="{{ url('news') }}">{{ trans('messages.news') }}</a>
                                <li class="nav-item {{ Request::path() == 'project' ? 'active' : '' }}"><a class="nav-link" href="{{ url('partner') }}">{{ trans('messages.project') }}</a></li>
                                <li class="nav-item {{ Request::path() == 'contact' ? 'active' : '' }}"><a class="nav-link" href="{{ url('contact') }}">{{ trans('messages.contact') }}</a></li>
                                <li class="nav-item">
                                    <div class="dropdown nav-link">
                                        @if(Lang::locale() === 'vi')
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        {{ trans('messages.lang.vi') }} <img class="icon_language" src="{{ asset('static/img/flags/VietNam.png') }}">
                                      </a>
                                      @elseif(Lang::locale() === 'jp')
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        {{ trans('messages.lang.jp') }} <img class="icon_language" src="{{ asset('static/img/flags/Japan.png') }}">
                                      </a>
                                      @elseif(Lang::locale() === 'en')
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        {{ trans('messages.lang.en') }} <img class="icon_language" src="{{ asset('static/img/flags/USA.png') }}">
                                      </a>
                                      @endif
                                      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <li><a href="{{ url('language/vi') }}"><img class="icon_language" src="{{ asset('static/img/flags/VietNam.png') }}">{{ trans('messages.lang.vi') }}</a></li>
                                        <li><a href="{{ url('language/jp') }}"><img class="icon_language" src="{{ asset('static/img/flags/Japan.png') }}">{{ trans('messages.lang.jp') }}</a></li>
                                        <li><a href="{{ url('language/en') }}"><img class="icon_language" src="{{ asset('static/img/flags/USA.png') }}">{{ trans('messages.lang.en') }}</a></li>
                                      </ul>
                                    </div>
                                </li>
                            </ul>
                        </div> 
                    </div>
                </nav>
            </div>
        </header>
        <!--================Header Menu Area =================-->