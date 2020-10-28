@extends('layouts.app')

@section('content')
<section class="banner-url">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p class="text-h1-java">{{trans('messages.net_systems_developer')}}</p>
                <p class="text-span-java">{{trans('messages.title_sub_net')}}</p>
            </div>
        </div>
    </div>
</section>

<section id="features" class="row d-flex justify-content-center" style="margin-bottom: 5em;">
    <div class="col-md-12">
	    <p class="net_p">{{trans('messages.net_provider_service')}}</p>
	    <div class="col-md-12 mb-3"><p class="line1a"></p><p class="line1b"></p></div>
	    <div class="col-md-12 d-flex justify-content-center">
	    	<div class="row">
	    		<div class="col-md-4">
	    			<div class="col-md-12">
		    			<p class="btn btn-net float-right btn-net2">{{ trans('messages.application_dev') }}</p>
		    			<p class="line line2 float-right"></p>
	    			</div>
	    			<div class="col-md-12">
		    			<p class="btn btn-net float-right btn-net3">{{trans('messages.custom_net_dev')}}</p>
		    			<p class="line line3 float-right"></p>
	    			</div>
	    			<div class="col-md-12">
		    			<p class="btn btn-net float-right btn-net4">MVC .NET</p>
		    			<p class="line line4 float-right"></p>
	    			</div>
	    			<div class="col-md-12">
		    			<p class="btn btn-net float-right btn-net5">{{trans('messages.net_migration_service')}}</p>
		    			<p class="line line5 float-right"></p>
	    			</div>
	    		</div>
	    		<div class="col-md-4 text-center">
	    			<img class="col-md-12 img_net mt-4" src="{{asset('web/img/rectangle-net.png')}}" alt="">
	    		</div>
	    		<div class="col-md-4">
	    			<div class="col-md-12">
		    			<p class="line line6 float-left"></p>
		    			<p class="btn btn-net float-left btn-net6">Website Development</p>	
	    			</div>
	    			<div class="col-md-12">
		    			<p class="line line7 float-left"></p>
		    			<p class="btn btn-net float-left btn-net7">ASP.NET</p>	
	    			</div>
	    			<div class="col-md-12">
		    			<p class="line line8 float-left"></p>
		    			<p class="btn btn-net float-left btn-net8">Visual Basic</p>	
	    			</div>
	    			<div class="col-md-12">
		    			<p class="line line9 float-left"></p>
		    			<p class="btn btn-net float-left btn-net9">VBScript</p>	
	    			</div>
	    		</div>
	    	</div>
	    </div>
    </div>
</section>
<section class="mb-5">
	<div class="col-md-12">
		<div class="col-md-12">
			<p class="net_p">{{trans('messages.dev_environment')}}</p>
		    <div class="col-md-12 mb-3"><p class="line1a"></p><p class="line1b"></p></div>
		    <div class="col-md-12 d-flex justify-content-center">
	    		<p class="net_p2">{{trans('messages.text_in_net')}}</p>
    		</div>
	</div>
	<div class="row d-flex justify-content-center">
		<div class="col-md-2 text-center">
			<img src="{{asset('web/img/icon/icons8-windows-10-480.png')}}" alt="" width="30%"><img src="">
			<p>Windows'</p>
			<p><strong>Windows OS</strong></p>
		</div>
		<div class="col-md-2 text-center">
			<img src="{{asset('web/img/icon/icons8-windows-10-480.png')}}" alt="" width="50%"><img src="">
			<p><strong>Windows Server</strong></p>
		</div>
		<div class="col-md-2 text-center">
			<img src="{{asset('web/img/icon/icons8-microsoft-sql-server-480.png')}}" alt="" width="50%">
			<p><strong>MS SQL Server</strong></p>
		</div>
		<div class="col-md-2 text-center">
			<img src="{{asset('web/img/icon/microsoft-dot-net.jpg')}}" alt="" width="50%">
			<p><strong>Microsoft .Net</strong></p>
		</div>
		<div class="col-md-2 text-center">
			<i class="fa fa-server" style="font-size: 70px; padding: 20px; color: #000;"></i>
			<p><strong>Internet Information Server</strong></p>
		</div>
	</div>
	<div class="row d-flex justify-content-center">
		<div class="col-md-2 text-center">
			<img src="{{asset('web/img/icon/icons8-c++.png')}}" alt="" width="50%"><img src="">
			<p><strong>C++</strong></p>
		</div>
		<div class="col-md-2 text-center">
			<img src="{{asset('web/img/icon/icons8-c-sharp-logo-2-480.png')}}" alt="" width="50%">
			<p><strong>C#</strong></p>
		</div>
		<div class="col-md-2 text-center">
			<img src="{{asset('web/img/icon/linq.png')}}" alt="" width="50%">
			<p><strong>LinQ</strong></p>
		</div>
		<div class="col-md-2 text-center">
			<img src="{{asset('web/img/icon/MicrosoftSilverlight.jpg')}}" alt="" width="50%">
			<p style="margin-top: 0.9em;"><strong>Microsoft Silverlight</strong></p>
		</div>
		<div class="col-md-2 text-center">
			<img src="{{asset('web/img/icon/icons8-microsoft-sharepoint-500.png')}}" alt="" width="50%">
			<p><strong>Sharepoint</strong></p>
		</div>
	</div>

</section>
<section class="mb-5">
	<div class="col-md-12">
		<div class="col-md-12">
			<p class="net_p">{{ trans('messages.products_solutions') }}</p>
		    <div class="col-md-12 mb-3"><p class="line1a"></p><p class="line1b"></p></div>
    	</div>
    	<div class="col-md-12 text-center">
    		<img src="{{asset('/web/img/rectangle36-net.png')}}" alt="">
    		<img src="{{asset('web/img/rectangle37-net.png')}}" alt="">
    		<img src="{{asset('web/img/rectangle38-net.png')}}" alt="">
    		<img src="{{asset('web/img/rectangle39-net.png')}}" alt="">
    	</div>
	</div>
</section>
<div class="section" id="pricing">
        <div class="container">
            <div class="col-md-12">
        	    <p class="net_p">{{trans('messages.choose_plan')}}</p>
        	    <div class="col-md-12 mb-3"><p class="line1a"></p><p class="line1b"></p></div>
         </div>
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
        <div class="container">
            <div class="col-md-12">
        	    <p class="net_p">{{trans('messages.faqw')}}</p>
        	    <div class="col-md-12 mb-3"><p class="line1a"></p><p class="line1b"></p></div>
         </div>
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

@push('js')

@endpush
<style type="text/css">
p{
	color: #000 !important;
}
.banner-url{        
    height: 650px;
    vertical-align:top;
    / Center and scale the image nicely /
    background-position: left;
    background-repeat: no-repeat;
    background-size: cover;
    background-image: url("{{asset('web/img/banner/banner-net2.jpg')}}");

}
.text-h1-java{
    font-family: Roboto;
    font-style: normal;
    font-weight: 500;
    font-size: 42px;
    line-height: 50px;
    text-indent: 1px;
    color: #fff !important;
    margin-left: 3%;
    margin-top: 15%;
    letter-spacing: 2px;
}
.text-span-java{
    font-family: Roboto;
    font-style: normal;
    color: #fff !important;
    font-size: 20px;
    line-height: 33px;
    margin-top: 4%;
    margin-left: 3%;
    letter-spacing: 0.7px;
}
.img_net{
    width: 373px !important;
    height: 343px;
}
.skin_net{
	width: 260px;
	height: 49px;
	left: 62px;
	top: 737px;
	background: #F6B940;
	border-radius: 50px;
}
.btn-net{
	font-size: 20px !important;
    line-height: 23px !important;
    color: #000000;
    background-color: #F6B940;
    border-radius: 50px !important;
    width: 260px;
    padding: 0.6em 0 !important;
}
.btn-net2, .btn-net3, .btn-net4, .btn-net5{
	float: right;
}
.btn-net2{
	margin-right: 1em;
}
.btn-net3{
	margin-right: 3em; 
	margin-top: 2.8em;
	margin-bottom: -0.7em;
}
.btn-net4{
	margin-top: 4.1em; 
	margin-right: 3em; 
	margin-bottom: -1.6em;
}
.btn-net5{
	margin-bottom: -4em; 
	margin-top: 4.7em; 
	margin-right: -1em;
}
.btn-net6, .btn-net7, .btn-net8, .btn-net9{
	float: left;
}
.btn-net7{
	margin-top: 4em; 
	margin-left: 2.5em;
}
.btn-net8{
	margin-top: 4em;
	margin-left: 2.5em;
}
.btn-net9{
	margin-top: 2.7em; 
	margin-left: -1.1em;
}
.line{
	width: 60px;
	margin-left: 300px;
    border-bottom: 1px solid #F6B940;
    border-top: 1px solid #F6B940;
    padding: 1px;
}
.line2{
	transform: matrix(0.99, 0.52, -0.14, 0.9, 0, 0);
	margin-right: -3em;
}
.line3{
	transform: rotate(4.91deg);
	margin-right: -1.3em;
}
.line4{
	transform: matrix(0.97, -0.18, 0.25, 0.98, 0, 0);
	margin-right: -1.3em;
}
.line5{
	transform: matrix(0.68, -0.61, 0.9, 0.66, 0, 0);
	margin-right: -5.5em;
}
.line6{
	transform: rotate(-42.76deg);
    margin-left: -5em;
    margin-top: 4.2em;
}
.line7{
	transform: rotate(-10.18deg);
	margin-top: 12.5em;
    margin-left: -21em;
}
.line8{
	transform: rotate(10.93deg);
	margin-top: 16.8em;
    margin-left: -25em;
}
.line9{
	transform: rotate(51.01deg);
	margin-top: 12em;
    margin-left: -28em;
}
@media(max-width: 1200px){
	.img_net{
	    width: 333px !important;
	    height: 303px;
	}
	.btn-net{
		font-size: 14px !important;
		width: 75%;
	}
	.line{
		max-width: 50px;
	}
	.line5{
		margin-top: 0;
	}
	.line7{
		margin-top: 10.5em;
    	margin-left: -21em;
	}
	.line8 {
	    margin-top: 13em;
    	margin-left: -22em;
    }
    .line9 {
    	margin-top: 10em;
    	margin-left: -23em;
    }
    .btn-net7{
		margin-left: 1em;
	}
	.btn-net8{
		margin-left: 1em;
	}
	.btn-net9{
		margin-top: 2.7em; 
		margin-left: -1.1em;
	}
}
@media (max-width: 1100px) {
	.line8 {
    	margin-left: -21em;
    }
    .line7{
    	margin-left: -17em;
    }
}
@media(max-width: 992px){
	.line{
		max-width: 40px;
	}
	.btn-net{
		font-size: 14px !important;
		width: 70%;
	}
    .line8 {
    	margin-left: -16em;
    }
    .line7{
    	margin-left: -15em;
    }
    .line9{
    	margin-top: 10em;
    	margin-left: -17em;
    }
}
@media(max-width: 768px){
	.line{
		display: none;
	}
	.img_net{
		display: none;
	}
	.btn-net2,.btn-net3,.btn-net4, .btn-net5, .btn-net6, .btn-net7, .btn-net8, .btn-net9{
		margin:2em 0 0;
	}
	.net_p2{
		font-size: 14px !important;
	}
	.net_p{
		font-style: 30px !important;
	}
	.btn-net2, .btn-net3, .btn-net4, .btn-net5, .btn-net6, .btn-net7, .btn-net8, .btn-net9{
		float: left;
    	margin: 5px;
    	width: 100%;
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
