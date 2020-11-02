<header>
    <nav class="navbar">
        <a class="navbar-brand logo_h"  href="{{ url('/') }}"><img src="{{asset('static/img/logo-hachinet-alt2.png')}}" alt="WEB制作・業務システム開発・ベトナムソフトウウェアアウトソーーシング "></a>
            <div class="navbar-menu">
                <a href="tel:+842462900388" class="v-text text-body white-text" style="margin-right:10px"><i class="fa fa-phone"></i>&nbsp;(+84) 24-6290-0388</a>
                <a href="{{route('contact')}}"><span style="border:solid black 1px;border-radius:5px; padding:5px; margin-right:10px">{{trans('messages.contact_us')}}</span></a>
                <a href="{{ url('language/vn') }}"><img class="icon_language" alt="Hachinet Vietnamese" src="{{ asset('static/img/flags/VietNam.png') }}"></a>
                <a href="{{ url('language/jp') }}"><img class="icon_language" alt="Hachinet Japanese" src="{{ asset('static/img/flags/Japan.png') }}"></a>
                <a href="{{ url('language/en') }}"><img class="icon_language" alt="Hachinet English" src="{{ asset('static/img/flags/USA.png') }}"></a>
            </div>
    </nav>
</header>
            <nav class="v-nav">
                <a class="navbar-brand logo_h"  href="{{ url('/') }}"><img class="img-v" src="{{asset('static/img/logo-hachinet-alt2.png')}}" alt="WEB制作・業務システム開発・ベトナムソフトウウェアアウトソーーシング "></a>
                <div class="inner-width">
                <input type="checkbox" id="res-menu">
                <label for="res-menu">
                    <i class="fa fa-bars" id="sign-one"></i>
                    <i class="fa fa-times" id="sign-two"></i>
                </label>
                    <ul class="ul1">
                        <li class="li1"><a href="/">{{trans('messages.home')}}</a></li>
                        <li class="li1"><a href="{{route('about_us')}}">{{trans('messages.about_us')}}</a></li>
                       <li class="li1"><a href="{{route('services')}}">{{trans('messages.services')}}<i style="margin-left:5px" class="fa fa-caret-down" aria-hidden="true"></i></a>
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
<style>
label{
    display:none;
}
label #sign-one,
label #sign-two{
    margin-left:30px;
    cursor:pointer;
    display:none;
    width:100%;
    transition: 0.2s linear;
}
#res-menu{
    display:none;
}
.v-nav .navbar-brand{
    display:none;
}
    .navbar{
        position:relative;
        background:#ffb701;
        width:100%;
        height:60px;
        top:0;
        z-index:99;
        padding:5px 200px 5px 221px;
    }
    .inner-width{
        max-width:1300px;
        margin: auto;
        width:100%;
    }
    .navbar .inner-width{
        display:flex;
        align-items:center;
        justify-content:space-between;
        width:100%;
    }
    .navbar-menu a{
        color:black;
        transition: 0.2 linear;
    }
    .navbar-menu a:hover{
        color: white;

    }
    @media only screen and (max-width:1450px){
        .navbar{
            padding: 5px 100px !important;
        }
    }
    @media only screen and (max-width:992px){
        .navbar{
            padding: 5px 40px !important;
        }
    }
    @media only screen and (max-width:767px){
        label{
            display:block;
            float: right;
            margin-right: 31px;
            margin-top: 12px;
            font-size: 32px;
        }
        label #sign-one{
            display:block;
        }
        .inner-width{
            height:60px;
            padding:0 !important;
        }
        .img-v{
            position:absolute;
            top:5px;
            left:25px;
        }
        .v-nav .ul1{
            position:fixed;
            top:51px;
            width:100%;
            height:100vh;
            background: #ffb701;
            max-width:300px;
            left:-100%;
            text-align:center;
            transition: 0.5s;
            z-index:10;
            display: inline-block !important;
        }
        .v-nav .ul1 .li1{
            display:block;
            border-bottom: 1px solid #b08282;
            border-right:none !important;
            position: relative;
            width: 274px !important;
            margin-left: 13px !important;
            line-height: 45px;
        }
        .v-nav .ul1 .ul2{
            display:none;
        }
        #res-menu:checked ~ .ul1{
            left:0;
        }
        #res-menu:checked ~ label #sign-one{
            display:none;
        }
        #res-menu:checked ~ label #sign-two{
            display:block;
        }
        .inner-width{
            padding:0;
        }
        .menu-toggle{
            display:block;
        }
        .navbar{
            padding: 5px 20px !important;
            z-index:9999;
            display: flex;
    justify-content: center;
        }
        .navbar-brand{
            display:none;
        }
         .v-nav{
            
        }
        .v-nav .navbar-brand{
            display:block;
        } 
    }
    @media only screen and (max-width:480px){
        .navbar-brand{
            display:none;
        }
        .navbar{
            padding:5px 0px !important;
            display: flex;
            z-index: 9999;
            justify-content: space-evenly;
        }
    }
    @media only screen and (max-width:386px){
        .v-nav .ul1{
            top:0 !important;
        }
        .navbar a{
            margin:0 !important;
            
        }
    }
   
    @media only screen and (max-width:330px){
        .navbar-menu a img{
            margin-left: 65px !important;
        }
        a.v-text.text-body.white-text {
    margin-left: 34px !important;
}
        
    }
    .v-nav .col-md-2{
        padding-left:0 !important;
        padding-right:0 !important;
        border-right: 1px solid #b08282;
    }
    .v{
        border-right: none !important;
    }
    .v-nav{
       position: sticky;
       top:0;
       z-index:99;
       
       background: #ffb701;
       border-top: solid 1px #b08282;

    }
    .v-nav::after{
        content: '';
        clear: both;
        display: table;
    }
        .v-nav .ul1{ 
        list-style: none;
        position: relative;
        text-align:center;
        width:100%;
        padding:10px 0;
        display: flex;
    }
        .v-nav .ul1 .li1{
        float: left;
        display: inline-block;
        margin: 0 5px;
        width:100%;
        border-right: 1px #b08282 solid;
    }
        .v-nav .ul1 .li1 a{
        text-decoration: none;
        padding: 8px 0;
        color:black;
        transition: 0.5s;
    }
    .v-nav .ul1 .li1 a:hover{
        color:white;
    }
        .v-nav .ul1 .ul2{
        position: absolute;
        top:190px;
        opacity: 0;
        visibility: hidden;
        transition: top 1s;
    }
        .v-nav .ul1 .li1:hover > .ul2{
        top:35px;
        opacity: 1;
        color:black;
        visibility: visible;
    }
        .v-nav .ul1 .ul2 .li2{
        position: relative;
        padding:5px 3px;
        margin: 0;
        right:15px;
        width: 230px;
        color:black;
        background:#ffb701;
        float: none;
        display: list-item;
        border-bottom:1px solid #b08282;
    }
</style>
 