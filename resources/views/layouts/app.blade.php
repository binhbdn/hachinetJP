<!doctype html>
<html lang="{{ Session::get('locale') }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">    
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <meta name="author" content="Jobboard">
        
        <title>{{$settings->seo_title }}</title>    
        <!-- You can use Open Graph tags to customize link previews.
        Learn more: https://developers.facebook.com/docs/sharing/webmasters -->
          <meta name="description" content="{{$settings->seo_description }}"/>
          <meta name="keywords" content="{{$settings->seo_keyword }}"/>
          <meta name="robots" content="index,follow"/>
          <meta http-equiv=”content-language” content=”vi” />
          <link href="{{url('/upload/setting')}}/{{$settings->favicon }}" rel="shortcut icon" type="image/x-icon"/>
          <meta name="revisit-after" content="1 days"/>
          <meta property="og:url"           content="{{url('/')}}" />
          <meta property="og:type"          content="website" />
          <meta property="og:title"         content="{{$settings->seo_title }}" />
          <meta property="og:description"   content="{{$settings->seo_description }}" />
          <meta property="og:image"         content="{{url('/upload/setting')}}/{{$settings->logo }}" />
          <meta name="google-site-verification" content="WwouA3EXWhKmqx0_i2L8UB19TGLkDX_NLrqJhCr24Ls" />
          <meta property="fb:app_id" content="439645536463134" />
        <!-- Favicon -->
        <link rel="shortcut icon" href="{{url('/upload/setting')}}/{{$settings->favicon }}">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('web/css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('web/vendors/linericon/style.css') }}">
        <link rel="stylesheet" href="{{ asset('web/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('web/vendors/owl-carousel/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('web/vendors/lightbox/simpleLightbox.css') }}">
        <link rel="stylesheet" href="{{ asset('web/vendors/nice-select/css/nice-select.css') }}">
        <link rel="stylesheet" href="{{ asset('web/vendors/animate-css/animate.css') }}">
        <!-- main css -->
        <link rel="stylesheet" href="{{ asset('web/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('web/css/responsive.css') }}">
        <script defer type="application/ld+json">
        {
          "@context": "http://schema.org",
          "@type": "WebSite",
          "url": "https://www.hachinet.com/",
          "potentialAction": {
            "@type": "SearchAction",
            "target": "https://www.hachinet.com/search?txtSearch={search_term_string}",
            "query-input": "required name=search_term_string"
          }
        }
        </script>  
        <script defer type="application/ld+json">
          {
            "@context": "http://schema.org",
            "@type": "NewsArticle",
            "headline": "Open-source framework for publishing content",
            "datePublished": "2015-10-07T12:02:41Z",
            "author": "hachinet",
            "publisher":{"id":"https://hachinet.com/"},
            "image": [
              "logo.jpg"
            ]
          }
        </script>      
    </head>
    <body>
        @include('layouts.header')
        @yield('content')
        @include('layouts.footer')

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="{{ asset('web/js/jquery-3.2.1.min.js') }}"></script>
        <script src="{{ asset('web/js/popper.js') }}"></script>
        <script src="{{ asset('web/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('web/js/stellar.js') }}"></script>
        <script src="{{ asset('web/vendors/lightbox/simpleLightbox.min.js') }}"></script>
        <script src="{{ asset('web/vendors/nice-select/js/jquery.nice-select.min.js') }}"></script>
        <script src="{{ asset('web/vendors/isotope/imagesloaded.pkgd.min.js') }}"></script>
        <script src="{{ asset('web/vendors/isotope/isotope-min.js') }}"></script>
        <script src="{{ asset('web/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('web/js/jquery.ajaxchimp.min.js') }}"></script>
        <script src="{{ asset('web/vendors/counter-up/jquery.waypoints.min.js') }}"></script>
        <script src="{{ asset('web/vendors/counter-up/jquery.counterup.js') }}"></script>
        <script src="{{ asset('web/js/mail-script.js') }}"></script>
        <script src="{{ asset('web/js/theme.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/velocity/0.11.9/jquery.velocity.min.js"></script>
        <script type="text/javascript">
            var $orbs = $('.orbs span');
        $('.end-right').css('left' , '-10%');
        $('.end-left').css('left', '110%');
        $orbs.velocity({'top': '-300px', scaleX: '.2', scaleY: '.2', color: '#9f9f9f'},0);
        var orb = 0;
        var numOrbs = $orbs.length;

        $('.end-right').velocity({left : '50%'}, 'easeOutExpo', 1200);
        $('.end-left').velocity({left : '50%'}, 'easeOutExpo',  1200);


        dropOrbs = function(){
          $orbs.eq(orb).velocity({top: '-90px'}, 400).velocity({scaleX: 1, scaleY: 1, color: '#ffb701'}, 1000).css('position', 'relative');
          orb = orb + 1;
          if(orb < numOrbs){
            setTimeout(dropOrbs, 100);
          }
          else{
            setTimeout(function(){$('.glow').velocity({opacity: 1}, 1200);}, 1200);

          }
          
        }

        setTimeout(dropOrbs, 400);
        </script>
        <script src="{{ asset('web/js/particles.js') }}"></script>
        <script src="{{ asset('web/js/app.js') }}"></script>

        <!-- stats.js -->
        <script src="{{ asset('web/js/lib/stats.js') }}"></script>
        @stack('js')
    </body>
</html>
