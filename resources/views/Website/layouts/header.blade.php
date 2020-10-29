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
                        <div class="classynav" id="nav1">
                            <ul>
                                <li><a href=""><i class="fa fa-phone"><span></i>&nbsp;(+84) 24-6290-0388</p></span></a></li>
                                <li><a href="{{route('contact')}}"><span style="border:solid black 1px;border-radius:5px; padding:5px; margin-right:10px">{{trans('messages.contact_us')}}</span></a></li>
                                <li><a href="{{ url('language/vn') }}"><img class="icon_language" alt="Hachinet Vietnamese" src="{{ asset('static/img/flags/VietNam.png') }}"></a></li>
                                <li><a href="{{ url('language/jp') }}"><img class="icon_language" alt="Hachinet Japanese" src="{{ asset('static/img/flags/Japan.png') }}"></a></li>
                                <li><a href="{{ url('language/en') }}"><img class="icon_language" alt="Hachinet English" src="{{ asset('static/img/flags/USA.png') }}"></a></li>
                            </ul>
                        </div>           
                    </div>
                </nav>
                                
                <!-- Nav Start -->
                    <div class="v-classynav" id="v-sticky">
                            <ul id="v-nav">
                                <div class="col-md-2"><li><a href="/">{{trans('messages.home')}}</a></li></div>
                                <div class="col-md-2"><li><a href="{{route('about_us')}}">{{trans('messages.about_us')}}</a></li></div>
                                <div class="col-md-2"><li><a href="{{route('services')}}">{{trans('messages.services')}}</a></li></div>
                                <div class="col-md-2"><li><a href="{{route('news')}}">{{trans('messages.magazine')}}</a></li></div>
                                <div class="col-md-2"><li><a href="{{route('case_study')}}">{{trans('messages.case_study')}}</a></li></div>
                                <div class="col-md-2"><li class="v"><a href="{{route('contact')}}">{{trans('messages.contact_us')}}</a></li></div>
                            </ul>
                            <!-- Button -->
                        </div>
                        <!-- Nav End -->
                        
            </div>
            <div class="hr"></div>
        </div>
        
    </header>
    
    <!-- ##### Header Area End ##### -->
    <!-- <script>
        window.onscroll = function() {myFunction()};

        var navbar = document.getElementById("v-sticky");
        var sticky = navbar.offsetTop;

        function myFunction() {
        if (window.pageYOffset >= sticky) {
            
            navbar.classList.add("sticky")
        } else {
            navbar.classList.remove("sticky");
            }
        }
    </script> -->

    <style>
        .sticky{
            position: fixed;
            top:0;
            right:0;
            width: 100%;
        }
        .sticky  {
            
            }
        .v-classynav{
            padding: 5px 15px ;
        }
        #v-nav{
            display: flex;
        }
        .hr{
            position: relative;
            top: -35px;
            border:none;
            border-top: 1px solid black !important;
        }
        .v-classynav ul li{
            border-right:1px solid black;
        }
        #v-nav .col-md-2{
            text-align:center;
            padding-left:0 !important;
            padding-right:0 !important;
        }
        .v-classynav ul .v{
            border-right:none;
        }
        .v-sticky{
            padding:18px;
            background:white;
        }
    </style>
 