<!DOCTYPE html>
<html lang="{{ Session::get('locale') }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noodp,index,follow" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{$posts->postTitle ? $posts->postTitle : $settings->title}}</title>
    <link rel="shortcut icon" href="{{asset('static/img/favicon.png')}}">
    <!-- Bootstrap Core CSS -->
    <link href="{{asset('assets/blogs/css/bootstrap.min.css')}}" rel="stylesheet">
        <link rel="canonical" href="{{url()->current()}}" />
    <!-- Custom CSS -->
    <link href="{{asset('assets/blogs/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/blogs/css/colors/blue.css')}}" rel="stylesheet">
    <link href="{{asset('assets/blogs/css/custom.css')}}" rel="stylesheet">
    <meta name="description" content="{{$posts->postDesc ? $posts->postDesc : $settings->description}}" />
    <meta name="keyword" content="{{$posts->postKeywords ? $posts->postKeywords : $settings->keywords}}" />
    <meta name="keywords" content="{{$posts->postKeywords ? $posts->postKeywords : $settings->keywords}}" />
    <meta property="og:locale" content="{{$settings->locale}}" />
    <meta property="og:type" content="{{$settings->type}}" />
    <meta property="og:title" content="{{$posts->postTitle ? $posts->postTitle : $settings->title}}" />
    <meta property="og:description" content="{{$posts->postDesc ? $posts->postDesc : $settings->description}}" />
    <meta property="og:url" content="{{url()->current()}}" />
    <meta property="og:site_name" content="{{$posts->postTitle ? $posts->postTitle : $settings->title}}" />
    <meta property="og:image" content="{{$posts->postThumb ? asset('upload/'.$posts->postThumb) : asset('upload/'.$settings->image)}}" />
    <meta property="og:image:secure_url" content="{{$posts->postThumb ? asset('upload/'.$posts->postThumb) : asset('upload/'.$settings->image)}}" />
    <meta property="og:image:width" content="470" />
    <meta property="og:image:height" content="246" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:description" content="{{$posts->postDesc ? $posts->postDesc : $settings->description}}" />
    <meta name="twitter:title" content="{{$posts->postTitle ? $posts->postTitle : $settings->title}}" />
    <meta name="twitter:site" content="{{$settings->twitter}}" />
    <meta name="twitter:image" content="{{$posts->postThumb ? asset('upload/'.$posts->postThumb) : asset('upload/'.$settings->image)}}" />
    <meta name="twitter:creator" content="{{$settings->twitter}}" />
    @yield('css-custom')
</head>

<body class="fix-header fix-sidebar card-no-border">
    <div id="fb-root"></div>
    @if (Session::get('locale') == 'en')
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v6.0"></script>
    @elseif (Session::get('locale') == 'jp')
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v6.0"></script>
    @else
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v6.0"></script>
    @endif
    <div id="main-wrapper">
    @include('Magazine.layouts.header')
    @include('Magazine.layouts.sidebar')
    <div class="page-wrapper">
        @yield('content')
    </div>

    @include('Magazine.layouts.footer')
    @include('Magazine.layouts.script')
    @yield('javascript-custom')
</body>
</html>