<header class="topbar">
    <nav class="navbar top-navbar navbar-expand-md navbar-light">
        <!-- ============================================================== -->
        <!-- Logo -->
        <!-- ============================================================== -->
        <div class="navbar-header">
            <a class="navbar-brand" href="{{route('home')}}">
            <img src="{{asset('static/img/logo-hachinet-alt.png')}}" alt="Hachinet JSC" class="dark-logo" />
            </a>
        </div>
        <!-- ============================================================== -->
        <!-- End Logo -->
        <!-- ============================================================== -->
        <div class="navbar-collapse">
            <!-- ============================================================== -->
            <!-- toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav mr-auto mt-md-0 ml-4">
                <li class="nav-item dropdown">
                    <span class="nav-link dropdown-toggle  mdi-24px text-body waves-effect waves-dark" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
                        <i class="mdi mdi-download text-body mdi-18px"></i>{{trans('messages.profile')}}
                    </span>
                    <div class="dropdown-menu mailbox animated bounceInDown">
                        <a class="dropdown-item" target="_blank" href="{{url('profile/Hachinet_Profile_JA.pdf')}}"><i class="flag-icon flag-icon-jp"></i> {{trans('messages.profile')}}</a> 
                        <a class="dropdown-item" target="_blank" href="{{url('profile/Hachinet_Profile_EN.pdf')}}"><i class="flag-icon flag-icon-us"></i> {{trans('messages.profile')}}</a> 
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <span class="nav-link dropdown-toggle  mdi-24px text-body waves-effect waves-dark" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
                        <i class="mdi mdi-menu text-body mdi-24px"></i>
                    </span>
                    <div class="dropdown-menu mailbox animated bounceInDown">
                        <a href="{{route('news')}}" aria-expanded="false" class="dropdown-item font-weight-bolder">{{trans('messages.top_magazine')}}</a>
                        <a href="{{route('about_us')}}" aria-expanded="false" class="dropdown-item font-weight-bolder">{{trans('messages.about_us')}}</a>
                        <a href="{{route('contact')}}" aria-expanded="false" class="dropdown-item font-weight-bolder">{{trans('messages.contact_us')}}</a>
                        <a href="{{route('faq')}}" aria-expanded="false" class="dropdown-item font-weight-bolder">FAQs</a>
                    </div>
                </li>
            </ul>
            <!-- ============================================================== -->
            <!-- User profile and search -->
            <!-- ============================================================== -->
            <ul class="navbar-nav my-lg-0">
                <li class="nav-item hidden-sm-down">
                    <form class="app-search" action="{{route('magazine.show', 'search')}}" method="GET">
                        <input type="text" class="form-control" name="s" placeholder="{{trans('messages.searching')}}..."> <a class="srh-btn"><i class="ti-search"></i></a> 
                    </form>
                </li>
                <li class="nav-item dropdown">
                    @if(Lang::locale() === 'en')
                    <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="javascript:void(0);" 
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
                    <i class="flag-icon flag-icon-us"></i></a>
                    @elseif (Lang::locale() === 'jp')
                    <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="javascript:void(0);" 
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
                    <i class="flag-icon flag-icon-jp"></i></a>
                    @elseif (Lang::locale() === 'vn')
                    <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="javascript:void(0);" 
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
                    <i class="flag-icon flag-icon-vn"></i></a>
                    @endif
                    <div class="dropdown-menu dropdown-menu-right animated bounceInDown"> 
                        <a class="dropdown-item" href="{{ url('language/vn') }}"><i class="flag-icon flag-icon-vn"></i> {{trans('messages.lang.vn')}}</a> 
                        <a class="dropdown-item" href="{{ url('language/jp') }}"><i class="flag-icon flag-icon-jp"></i> {{trans('messages.lang.jp')}}</a> 
                        <a class="dropdown-item" href="{{ url('language/en') }}"><i class="flag-icon flag-icon-us"></i> {{trans('messages.lang.en')}}</a> 
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</header>