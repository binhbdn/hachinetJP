@extends('layouts.app')
@section('content')

<section class="banner-url">
    <!-- <img class="" src="{{asset('web/img/banner/java_banner.png')}}" width="100%" height="90%";/> -->
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1 class="text-h1-java">JAVA SYSTEM<br>DEVELOPMENT</h1>
                <!-- <p class="text-span-java">Java of Hachinet is the end-to-end software<br>development services (form consultancy to support)</p> -->
                <p class="text-span-java">{{ trans('messages.title_sub') }}</p>
            </div>
            <div class="col-md-6">
            </div>
        </div>
    </div>
</section>
<section>
    <h2 class="text-h2">{{ trans('messages.java_provider_service') }}</h2>
    <center>
        <hr class="line_1"></hr>
        <hr class="line_2"></hr>
    </center>    
    <br>
    <div class="container"">
        <div class="row">
            <div class="col-md-4">
                <div class="mg-20-jv">
                    <span class="span-java">{{ trans('messages.application_dev') }}</span>
                    <hr class="java-line-1"></hr>
                    <hr class="java-line-2"></hr>
                </div>
                <div class="mg-20-jv">
                    <span class="span-java-1">{{ trans('messages.custom_java_dev') }}</span>
                    <hr class="java-line-3"></hr>
                    <hr class="java-line-4"></hr>
                </div>
                <div class="mg-20-jv">
                    <span class="span-java-2">{{ trans('messages.java_consultancy') }}</span>
                    <hr class="java-line-5"></hr>
                    <hr class="java-line-6"></hr>
                </div>
                <div class="mg-20-jv">
                    <span class="span-java-3">{{ trans('messages.mobile_services') }}</span>
                    <hr class="java-line-7"></hr>
                    <hr class="java-line-8"></hr>
                </div>
            </div>
            <div class="col-md-4">
                <img class="img-java-diagram" src="{{asset('web/img/rectangle24-java.png')}}" width="100%"/>
            </div>
            <div class="col-md-4">
                 <div class="mg-20-jv">
                    <span class="span-java-4">{{ trans('messages.java_web_dev') }}</span>
                    <hr class="java-line-9"></hr>
                    <hr class="java-line-10"></hr>
                </div>
                <div class="mg-20-jv">
                    <span class="span-java-5">{{ trans('messages.desktop_app') }}</span>
                    <hr class="java-line-11"></hr>
                    <hr class="java-line-12"></hr>
                </div>
                <div class="mg-20-jv">
                    <span class="span-java-6">{{ trans('messages.social_secutiry') }}</span>
                    <hr class="java-line-13"></hr>
                    <hr class="java-line-14"></hr>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="framework-url">
    <h2 class="text-h2" style="padding-top: 20px;">{{ trans('messages.java_framework') }}</h2>
    <center>
        <hr class="line_1"></hr>
        <hr class="line_2"></hr>
    </center>   
    <br><br> 
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <img class="" src="{{asset('web/img/rectangle34-java.png')}}" width="100%"/>
        </div>
    </div>
    <br><br>    
</section>
<section>
    <h2 class="text-h2" style="padding-top: 20px;">{{ trans('messages.products_solutions') }}</h2>
    <center>
        <hr class="line_1"></hr>
        <hr class="line_2"></hr>
    </center>   
    <br><br> 
    <div class="container">
        <div class="row">
            <div class="col-md-3" style="padding: 0px;">
                <div>
                    <img class="" src="{{asset('web/img/rectangle36-java.png')}}" width="100%"/>
                </div>
            </div>
            <div class="col-md-3" style="padding: 0px;">
                <div>
                    <img class="" src="{{asset('web/img/rectangle37-java.png')}}" width="100%"/>
                </div>
            </div>
            <div class="col-md-3" style="padding: 0px;">
                <div>
                    <img class="" src="{{asset('web/img/rectangle38-java.png')}}" width="100%"/>
                </div>
            </div>
            <div class="col-md-3" style="padding: 0px;">
                <div>
                    <img class="" src="{{asset('web/img/rectangle39-java.png')}}" width="100%"/>
                </div>
            </div>
        </div>
    </div>    
    <br><br>
</section>
<div class="section" id="pricing">
        <h2 class="text-h2" style="padding-top: 20px">{{trans('messages.choose_plan')}}</h2>
        <center>
            <hr class="line_1"></hr>
            <hr class="line_2"></hr>
        </center>   
        <br><br> 
        <div class="container">
            <div class="card-deck">
                <div class="card pricing">
                    <div class="card-head">
                        <small class="badge-pill badge-warning d-inline p-2 text-black">{{trans('messages.proj_base')}}</small>
                        <span class="price mt-3">25,000 USD<sub>/MM</sub></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <div class="list-group-item">{{trans('messages.proj_base')}}</div>
                        <div class="list-group-item">{{trans('messages.1-person')}}</div>
                        <div class="list-group-item">{{trans('messages.under-3m')}}</div>
                    </ul>
                    <div class="card-body">
                        <a href="#" class="btn btn-warning btn-lg btn-block">{{trans('messages.contact-us')}}</a>
                    </div>
                </div>
                <div class="card pricing popular">
                    <div class="card-head">
                        <small class="badge-pill badge-warning d-inline p-2 text-black">{{trans('messages.labo_proj')}}</small>
                        <span class="price mt-3">21,700 USD<sub>/Year</sub></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <div class="list-group-item">{{trans('messages.over-6m')}}</div>
                        <div class="list-group-item">{{trans('messages.long-term')}}</div>
                        <div class="list-group-item">{{trans('messages.team-of-people')}}</div>
                    </ul>
                    <div class="card-body">
                        <a href="#" class="btn btn-warning btn-lg btn-block">{{trans('messages.contact-us')}}</a>
                    </div>
                </div>
                <div class="card pricing ">
                    <div class="card-head">
                        <small class="badge-pill badge-warning d-inline p-2 text-black">{{trans('messages.labo_proj')}}</small>
                        <span class="price mt-3">2000 USD<sub>/MM</sub></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <div class="list-group-item">{{trans('messages.from-people')}}</div>
                        <div class="list-group-item">{{trans('messages.labo-contract')}}</div>
                        <div class="list-group-item">{{trans('messages.over-3m')}}</div>
                    </ul>
                    <div class="card-body">
                        <a href="#" class="btn btn-warning btn-lg btn-block">{{trans('messages.contact-us')}}</a>
                    </div>
                </div>
                
            </div>
            <!-- // end .pricing -->


    </div>

</div>
<div class="section pt-0">
        <h2 class="text-h2" style="padding-top: 20px">{{trans('messages.faqw')}}</h2>
        <center>
            <hr class="line_1"></hr>
            <hr class="line_2"></hr>
        </center>   
        <br><br> 
        <div class="container">
            <div class="row pt-4">
                <div class="col-md-6">
                    <h4 class="mb-3">{{trans('messages.faq1')}}</h4>
                    <p class="light-font mb-5">{{trans('messages.faw1')}}</p>
                    <h4 class="mb-3">{{trans('messages.faq2')}}</h4>
                    <p class="light-font mb-5">{{trans('messages.faw2')}}</p>

                </div>
                <div class="col-md-6">
                    <h4 class="mb-3">{{trans('messages.faq3')}} </h4>
                    <p class="light-font mb-5">{{trans('messages.faw3')}}</p>
                    <h4 class="mb-3">{{trans('messages.faq4')}}</h4>
                    <p class="light-font mb-5">{{trans('messages.faw4')}}</p>

                </div>
            </div>
        </div>

    </div>

@endsection
<style>
    .pd{
        padding: 0px;
    }
    .banner-url{        
        height: 583px;
        vertical-align:top;
        / Center and scale the image nicely /
        background-position: left;
        background-repeat: no-repeat;
        background-size: cover;
        background-image: url("{{asset('web/img/banner/java_banner.png')}}");

    }
    .text-h1-java{
        font-family: Roboto;
        font-style: normal;
        font-weight: 500;
        font-size: 42px;
        line-height: 50px;
        text-indent: 1px;
        color: #fff;
        margin-left: 3%;
        margin-top: 15%;
        letter-spacing: 2px;
    }
    .text-span-java{
        font-family: Roboto;
        font-style: normal;
        color: #fef8ef;
        font-size: 20px;
        line-height: 33px;
        margin-top: 4%;
        margin-left: 3%;
        letter-spacing: 0.7px;
    }
    .framework-url{
        background-position: left;
        background-repeat: no-repeat;
        background-size: cover;
        background-image: url("{{asset('web/img/rectangle33-java.png')}}");
    }
    .text-h2{
        font-family: Roboto;
        font-style: normal;
        font-weight: 500;
        font-size: 36px;
        line-height: 42px;
        text-indent: 1px;
        color: #000000;
        text-align: center;
        margin-top: 20px;
    }
    .line_1{
        width: 260px;
        height: 0px;
        border: 1px solid #FFB701; 
        padding: 0;
        margin: 0;       
    }
    .line_2{
        width: 83px;
        height: 0px;
        border: 1px solid #FFB701;
        padding: 0;
        margin: 0;
    }
    .img-java-diagram{
        margin-top: 70px;
        margin-bottom: 100px;
    }
    .span-java, .span-java-1, .span-java-2, 
    .span-java-3, .span-java-4, .span-java-5,
     .span-java-6{
        font-family: Roboto;
        font-style: normal;
        font-weight: 500;
        font-size: 20px;
        line-height: 23px;
        text-indent: 1px;
        color: #000000;
        background: #F6B940;
        border-radius: 50px;        
        position: absolute;        
    }
    .span-java{
        top: 10px;
        left: 35px;
        padding: 15px;
    }
    .span-java-1{
        top: 150px;
        left: -30px;
        padding: 15px;
    }
    .span-java-2{
        top: 285px;
        left: -30px;
        padding: 15px 55px;
    }
    .span-java-3{
        top: 430px;
        left: 80px;
        padding: 15px 55px;
    }
    .span-java-4{
        top: 55px;
        left: 113px;
        padding: 15px 20px;
    }
    .span-java-5{
        top: 200px;
        right: -13px;
        padding: 15px 40px;
    }
    .span-java-6{
        top: 357px;
        right: 5px;
        padding: 15px 40px;
    }

    .java-line-1, .java-line-2, .java-line-3, .java-line-4, .java-line-5,
    .java-line-6, .java-line-7, .java-line-8, .java-line-9, .java-line-10,
    .java-line-11, .java-line-12, .java-line-13, .java-line-14{
        position: absolute;      
        width: 69.06px;
        height: 0px;
        border: 1px solid #F6B940;        
    }
    .java-line-1{       
        top: 64px;
        right: 32px;
        transform: matrix(0.99, 0.53, -0.13, 0.91, 0, 0);
    }
    .java-line-2{        
        top: 60px;
        right: 30px;  
        transform: matrix(0.99, 0.53, -0.13, 0.91, 0, 0);
    }
    .java-line-3{       
        top: 165px;
        right: 50px;
        transform: matrix(1, 0.09, -0.08, 1, 0, 0);
    }
    .java-line-4{        
        top: 160px;
        right: 50px;  
        transform: matrix(1, 0.09, -0.08, 1, 0, 0);
    }
    .java-line-5{       
        top: 290px;
        right: 50px;
        transform: matrix(0.97, -0.19, 0.24, 0.98, 0, 0);
    }
    .java-line-6{        
        top: 285px;
        right: 50px;  

        transform: matrix(0.97, -0.19, 0.24, 0.98, 0, 0);
    }
    .java-line-7{       
        top: 408px;
        right: -10px;
        transform: matrix(0.68, -0.63, 0.87, 0.66, 0, 0);
    }
    .java-line-8{        
        top: 400px;
        right: -10px;  
        transform: matrix(0.68, -0.63, 0.87, 0.66, 0, 0);
    }
    .java-line-9{        
        top: 104px;
        left: 30px;  
        transform: matrix(0.74, -0.7, 0.66, 0.73, 0, 0);
    }
    .java-line-10{        
        top: 100px;
        left: 27px;  
        transform: matrix(0.74, -0.7, 0.66, 0.73, 0, 0);
    }
    .java-line-11{        
        top: 220px;
        left: 50px;  
        transform: matrix(0.98, -0.18, 0.17, 0.98, 0, 0);
    }
    .java-line-12{        
        top: 225px;
        left: 50px;  
        transform: matrix(0.98, -0.18, 0.17, 0.98, 0, 0);
    }
    .java-line-13{        
        top: 326px;
        left: 37px;  
        transform: matrix(0.94, 0.36, -0.33, 0.93, 0, 0);
    }
    .java-line-14{        
        top: 330px;
        left: 30px;  
        transform: matrix(0.94, 0.36, -0.33, 0.93, 0, 0);
    }
    @media(max-width: 1200px){
        .text-span-java{        
        font-size: 17px;
        }
        .span-java, .span-java-1, .span-java-2, 
        .span-java-3, .span-java-4, .span-java-5,
        .span-java-6{
            font-size: 15px;
        }
        .img-java-diagram {            
            margin-bottom: 140px;
        }
        .java-line-1 {
            top: 66px;
            right: 14px;            
        }
        .java-line-2 {
            top: 62px;
            right: 11px;            
        }
        .java-line-3 {
            top: 165px;
            right: 50px;            
        }
        .java-line-4 {
            top: 160px;
            right: 50px;            
        }
        .java-line-5 {
            top: 282px;
            right: 37px;            
        }
        .java-line-6 {
            top: 277px;
            right: 39px;            
        }
        .java-line-7 {
            top: 378px;
            right: -24px;            
        }
        .java-line-8 {
            top: 376px;
            right: -34px;            
        }
        .java-line-11 {
            top: 210px;
            left: 32px;            
        }
        .java-line-12 {
            top: 214px;
            left: 37px;            
        }
        .java-line-13 {
            top: 347px;
            left: 6px;            
        }
        .java-line-14 {
            top: 342px;
            left: 9px;            
        }
    }
    @media(max-width: 992px){
        .text-span-java{        
            font-size: 16px;
        }  
        .text-h1-java{
            margin-top: 50%;
        } 
        .text-h2 {
            font-size: 25px;
        }    
        .span-java, .span-java-1, .span-java-2, 
        .span-java-3, .span-java-4, .span-java-5,
        .span-java-6{
            font-size: 13px;
        }
        .span-java{
            top: 10px;
            left: 35px; 
        }
        .span-java-1{
            top: 93px;
            left: -30px;     
        }
        .span-java-2{
            top: 192px;
            left: -30px;
        }
        .span-java-3{
            top: 312px;
            left: 51px;
            padding: 14px 40px;
        }
        .span-java-4{
            top: 47px;
            left: 55px;            
        }
        .span-java-5{
            top: 151px;
            right: -13px;            
        }
        .span-java-6{
            top: 260px;
            right: -16px;            
        }
        .java-line-1, .java-line-2, .java-line-3, .java-line-4, .java-line-5,
        .java-line-6, .java-line-7, .java-line-8, .java-line-9, .java-line-10,
        .java-line-11, .java-line-12, .java-line-13, .java-line-14{                
            width: 20px;           
        }
        .java-line-1 {
            top: 47px;
            right: 3px;            
        }
        .java-line-2 {
            top: 45px;
            right: 0px;            
        }
        .java-line-3 {
            top: 113px;
            right: 41px;            
        }
        .java-line-4 {
            top: 109px;
            right: 41px;            
        }
        .java-line-5 {
            top: 202px;
            right: 20px;            
        }
        .java-line-6 {
            top: 199px;
            right: 23px;            
        }
        .java-line-7 {
            top: 298px;
            right: -11px;            
        }
        .java-line-8 {
            top: 303px;
            right: -12px;            
        }
        .java-line-11 {
            top: 162px;
            left: 20px;            
        }
        .java-line-12 {
            top: 167px;
            left: 21px;            
        }
        .java-line-13 {
            top: 256px;
            left: 6px;            
        }
        .java-line-14 {
            top: 253px;
            left: 9px;            
        }
    }
    @media(max-width: 768px){
        .text-span-java{        
            font-size: 16px;
        }  
        .text-h1-java{
            margin-top: 50%;
            font-size: 35px;
        } 
        .text-h2 {
            font-size: 20px;
        }    
        .line_1 {
            width: 173px;
        }
        .line_2 {
            width: 44px;
        }        
        .span-java, .span-java-1, .span-java-2, 
        .span-java-3, .span-java-4, .span-java-5,
        .span-java-6{
            font-size: 18px;
            position: static;   
            padding: 0px;     
            background: none !important;      
            width: 100%;  
        }
        .span-java{
            top: 10px;
            left: 35px; 
        }
        .span-java-1{
            top: 93px;
            left: -30px;     
        }
        .span-java-2{
            top: 192px;
            left: -30px;
        }
        .span-java-3{
            top: 312px;
            left: 51px;
            /*padding: 14px 40px;*/
        }
        .span-java-4{
            top: 47px;
            left: 55px;            
        }
        .span-java-5{
            top: 151px;
            right: -13px;            
        }
        .span-java-6{
            top: 260px;
            right: -16px;            
        }
        .img-java-diagram {            
            margin-bottom: 0px;
            margin-top: 0px;
        }
        .java-line-1, .java-line-2, .java-line-3, .java-line-4, .java-line-5,
        .java-line-6, .java-line-7, .java-line-8, .java-line-9, .java-line-10,
        .java-line-11, .java-line-12, .java-line-13, .java-line-14{                
            width: 0px;  
            position: static;         
            border: 0px solid #F6B940;  
            word-wrap: break-word;   
        }
        .mg-20-jv{          
            margin: 10px 0px;    
            padding: 10px 0;  
            text-align: center;                 
            background: #F6B940;
            border-radius: 50px;
    display: flex;
    align-items: center;
        }
        
    }
    
    
/*  PRICING
----------------------*/

@media (max-width:992px) {
    .card-deck {
        -ms-flex-direction: column;
        flex-direction: column;
    }
    .card-deck .card {
        margin-bottom: 15px;
    }
}

.card.pricing {
    border: 1px solid #f1eef1;
}

.card.pricing.popular {
    border-top-width: 3px;
    border-color: #ffb701 #faf6fb #FFF;
    box-shadow: 0px 12px 59px 0px rgba(36, 7, 31, 0.11);
    color: #000;
}

.card.pricing .card-head {
    text-align: center;
    padding: 40px 0 20px;
}

.card.pricing .card-head .price {
    display: block;
    font-size: 30px;
    font-weight: 500;
    color: #000;
}

.card.pricing .card-head .price sub {
    bottom: 0;
    font-size: 55%;
    color: #000;
}

.card.pricing .list-group-item {
    border: 0;
    text-align: center;
    color: #959094;
    padding: 1.05rem 1.25rem;
}

.card.pricing .list-group-item del {
    color: #d9d3d8;
}

.card.pricing .card-body {
    padding: 1.75rem;
}

</style>
@push('js')
@endpush

