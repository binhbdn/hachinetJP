<!doctype html>
<html lang="{{ Session::get('locale') }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">    
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <title>{{$cobol['title'] ? $cobol['title'] : $settings->title}}</title>
        <link rel="shortcut icon" href="{{asset('static/img/favicon.png')}}">
        <link rel="stylesheet" href="{{ asset('website/css/default.css') }}">
        <link rel="stylesheet" href="{{ asset('website/css/responsive.css') }}">
        <meta name="description" content="{{$cobol['description'] ? $cobol['description'] : $settings->description}}" />
        <meta name="keyword" content="{{$cobol['keywords'] ? $cobol['keywords'] : $settings->keywords}}" />
        <meta name="keywords" content="{{$cobol['keywords'] ? $cobol['keywords'] : $settings->keywords}}" />
        <meta property="og:locale" content="{{$settings->locale}}" />
        <meta property="og:type" content="{{$settings->type}}" />
        <meta property="og:title" content="{{$cobol['title'] ? $cobol['title'] : $settings->title}}" />
        <meta property="og:description" content="{{$cobol['description'] ? $cobol['description'] : $settings->description}}" />
        <meta property="og:url" content="{{url()->current()}}" />
        <meta property="og:site_name" content="{{$cobol['title'] ? $cobol['title'] : $settings->title}}" />
        <meta property="og:image" content="{{asset('upload/'.$settings->image)}}" />
        <meta property="og:image:secure_url" content="{{asset('upload/'.$settings->image)}}" />
        <meta property="og:image:width" content="470" />
        <meta property="og:image:height" content="246" />
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:description" content="{{$cobol['description'] ? $cobol['description'] : $settings->description}}" />
        <meta name="twitter:title" content="{{$cobol['title'] ? $cobol['title'] : $settings->title}}" />
        <meta name="twitter:site" content="{{$settings->twitter}}" />
        <meta name="twitter:image" content="{{asset('upload/'.$settings->image)}}" />
        <meta name="twitter:creator" content="{{$settings->twitter}}" />
        @yield('custom-css')
    </head>
    <body class="translator-{{ Session::get('locale') }} light-version">
        <div id="fb-root"></div>
        @if (Session::get('locale') == 'en')
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v6.0"></script>
        @elseif (Session::get('locale') == 'jp')
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v6.0"></script>
        @else
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v6.0"></script>
        @endif
        @include('Website.layouts.header')
        @yield('content')
        @yield('content-contact')
        @include('Website.layouts.footer')
        @include('Website.layouts.script')
        @yield('javascript-custom')
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
    </body>
</html>
