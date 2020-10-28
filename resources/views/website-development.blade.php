@extends('layouts.app')
@section('content')

<section>
	<div style="width: 1500px; height: 461px; left: -157px; top: 70px;">
		<div class="banner-development-1">
			<div class="banner-development-2">
				<div class="banner-develop-3">
		            <div class="col-md-12" style="margin-left: 37em; padding-top: 10em;">
		                <h1 class="text-h1-java">{{trans('messages.web_system')}}</h1>
		                <p class="text-span-java">{{trans('messages.web_sub')}}</p>
		            </div>
			    </div>
		    </div>
	    </div>
    </div>
</section>
<section class="secsion-dev">
	<div class="container">
		<h1 class="text-h1-dev">{{trans('messages.web_why')}}</h1>
		<div class="row">
			<p class="text-p-dev1"><i class="fa fa-circle icon-dev"></i> {{trans('messages.web_li_1')}}</p>
		</div>
		<div class="row">
			<p class="text-p-dev2"><i class="fa fa-circle icon-dev"></i> {{trans('messages.web_li_2')}}</p>
		</div>
		<div class="row">
			<p class="text-p-dev3"><i class="fa fa-circle icon-dev"></i> {{trans('messages.web_li_3')}}</p>
		</div>
		<div class="row">
			<p class="text-p-dev4"><i class="fa fa-circle icon-dev"></i> {{trans('messages.web_li_4')}}</p>
		</div>

	</div>
</section>
<section>
    <p class="net_p">{{trans('messages.web_fea')}}</p>
    <div class="col-md-12 mb-3"><p class="line1a"></p><p class="line1b"></p></div>  
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="mg-20-jv">
                    <span class="span-java">{{trans('messages.web_fea_1')}}</span>
                    <hr class="java-line-1"></hr>
                    <hr class="java-line-2"></hr>
                </div>
                <div class="mg-20-jv">
                    <span class="span-java-1">{{trans('messages.web_fea_2')}}</span>
                    <hr class="java-line-3"></hr>
                    <hr class="java-line-4"></hr>
                </div>
                <div class="mg-20-jv">
                    <span class="span-java-2">{{trans('messages.web_fea_3')}}</span>
                    <hr class="java-line-5"></hr>
                    <hr class="java-line-6"></hr>
                </div>
                <div class="mg-20-jv">
                    <span class="span-java-3">{{trans('messages.web_fea_4')}}</span>
                    <hr class="java-line-7"></hr>
                    <hr class="java-line-8"></hr>
                </div>
                <div class="mg-20-jv">
                    <span class="span-java-7">{{trans('messages.web_fea_5')}}</span>
                    <hr class="java-line-15"></hr>
                    <hr class="java-line-16"></hr>
                </div>
            </div>
            <div class="col-md-4">
                <img class="img-java-diagram" src="{{asset('web/img/rectangle-net.png')}}" width="100%"/>
            </div>
            <div class="col-md-4">
                <div class="mg-20-jv">
                    <span class="span-java-4">{{trans('messages.web_fea_6')}}</span>
                    <hr class="java-line-9"></hr>
                    <hr class="java-line-10"></hr>
                </div>
                <div class="mg-20-jv">
                    <span class="span-java-5">{{trans('messages.web_fea_7')}}</span>
                    <hr class="java-line-11"></hr>
                    <hr class="java-line-12"></hr>
                </div>
                <div class="mg-20-jv">
                    <span class="span-java-6">{{trans('messages.web_fea_8')}}</span>
                    <hr class="java-line-13"></hr>
                </div>
                <div class="mg-20-jv">
                    <span class="span-java-8">{{trans('messages.web_fea_9')}}</span>
                    <hr class="java-line-17"></hr>
                    <hr class="java-line-18"></hr>
                </div>
                <div class="mg-20-jv">
                    <span class="span-java-9">{{trans('messages.web_fea_10')}}</span>
                    <hr class="java-line-19"></hr>
                    <hr class="java-line-20"></hr>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="framework-url">
	<div class="container">
        <div class="col-md-12">
    		<p class="net_p">{{trans('messages.dev_environment')}}</p>
    		<div class="col-md-12 mb-3"><p class="line1a"></p><p class="line1b"></p></div>
    		<P class="net_p2 text-center">{{trans('messages.text_in_net')}}</P>
		</div>
	    <div class="row">
	    	<div class="col-md-3">
	    		<div class="shadow col-md-12">
	    			<p>{{trans('messages.os-system')}}</p>
	    			<div class="bt-ct"></div>
	        		<p>Windows Server</p>
	        		<p>Linux</p>
	        		<p>Unix Type</p>
	        		<p>Apache</p>
	        		<p>Nginx</p>
	        		<p>Internet Information Services</p>
	        		<p>IIS</p>
	    		</div>
	    	</div>
	    	<div class="col-md-3">
	    		<div class="shadow col-md-12">
	    			<p>{{trans('messages.language_framework')}}</p>
	    			<div class="bt-ct"></div>
	        		<p>Net, C#, MVC 3 4 5, Entity</p>
	        		<p>JAVA Core, Spring, Hibernate</p>
	        		<p>PHP/Laravel/Wordpress</p>
	        		<p>Javascrip Framework</p>
	        		<p>(Nodejs, Angular ...)</p>
	        		<p>Ruby on Rails</p>
	        		<p>Objecttive-C, Visual Basic, Cobol</p>
	    		</div>
	    	</div>
	    	<div class="col-md-3">
	    		<div class="shadow col-md-12">
	    			<p>{{trans('messages.db-system')}}</p>
	    			<div class="bt-ct"></div>
	        		<p>SQL Server</p>
	        		<p>MySql, NoSql</p>
	        		<p>MongoDB</p>
	        		<p>PostgreSQL</p>
	        		<p>Oracle</p>
	        		<p>Elasticsearch</p>
	    		</div>
	    	</div>
	    	<div class="col-md-3">
	    		<div class="shadow col-md-12">
	    			<p>{{trans('messages.others')}}</p>
	    			<div class="bt-ct"></div>
	        		<p>Git</p>
	        		<p>Bitbucket</p>
	        		<p>Jenkins</p>
	        		<p>TortoiseSVN</p>
	        		<p>Redmine</p>
	        		<p>CloudServices</p>
	    		</div>
	    	</div>
	    </div>  
    </div> 
</section>
<section>
    <p class="net_p">{{trans('messages.other-service')}}</p>
    <div class="col-md-12 mb-3"><p class="line1a"></p><p class="line1b"></p></div>
    <div class="text-center" style="padding: 2em;">
		<img src="{{asset('/web/img/erp-dev.png')}}" alt="">
		<img src="{{asset('web/img/mobile-dev.png')}}" alt="" style="margin: 0 1em;">
		<img src="{{asset('web/img/blockchain-dev.png')}}" alt="">
	</div>
</section>

@endsection
<style>
    .pd{
        padding: 0px;
    }
    .banner-development-1, .banner-development-2, .banner-development-3{
		vertical-align:top;
        / Center and scale the image nicely /
        background-position: left;
        background-repeat: no-repeat;
        background-size: cover;
    }
    .banner-development-2{        
        width: 780px;
		height: 658px;
		left: -157px;
		top: 69px;
        background-image: url("{{asset('web/img/banner/banner-development-2.png')}}");
    }
    .banner-development-1{        
        width: 675px;
		/*height: 780px;*/
		left: -157px;
		top: 71px;
        background-image: url("{{asset('web/img/banner/banner-development-3.png')}}");
    }
    .banner-develop-3{
    	width: 562px;
		height: 409px;
		left: 126px;
		top: 104px;
        background-image: url("{{asset('web/img/banner/banner-development-1.png')}}");
        margin-left: 22em;
    }
    .shadow{
	    height: 100%;
	    padding-bottom: 15px;
		padding-top: 15px;
		background: #f5f2f2;
		-webkit-box-shadow: 0px 5px 5px 1px rgba(173,171,173,1);
		-moz-box-shadow: 0px 5px 5px 1px rgba(173,171,173,1);
		box-shadow: 0px 5px 5px 1px rgba(173,171,173,1);
		text-align: center;
	    color: #000;
	    font-weight: 700;
	}
	.bt-ct{
		margin-bottom: 1rem;
		border-bottom: 2px solid #ffb701; 
	}
	.secsion-dev{
		height: 321px;
		left: -157px;
		top: 531px;background: rgba(255, 183, 1, 0.8);
		padding: 40px;
	}
	.text-h1-dev{
		width: 300px;
		height: 42px;
		left: 189px;
		top: 574px;

		font-family: Roboto;
		font-style: normal;
		font-weight: normal;
		font-size: 36px;
		line-height: 42px;
		text-indent: 1px;

		color: #000000;
	}
	.text-p-dev1{
		width: 608px;
		height: 21px;
		left: 203px;
		top: 632px;

		font-family: Roboto;
		font-style: normal;
		font-weight: normal;
		font-size: 18px;
		line-height: 21px;
		/* identical to box height */

		text-indent: 1px;

		color: #000000;
	}
	.text-p-dev2{
		width: 912.08px;
		height: 42px;
		left: 203.92px;
		top: 669px;

		font-family: Roboto;
		font-style: normal;
		font-weight: normal;
		font-size: 18px;
		line-height: 21px;
		text-indent: 1px;

		color: #000000;
	}
	.text-p-dev3{
		width: 907px;
		height: 21px;
		left: 203px;
		top: 727px;

		font-family: Roboto;
		font-style: normal;
		font-weight: normal;
		font-size: 18px;
		line-height: 21px;
		/* identical to box height */

		text-indent: 1px;

		color: #000000;
	}
	.text-p-dev4{
		width: 913px;
		height: 42px;
		left: 203px;
		top: 764px;

		font-family: Roboto;
		font-style: normal;
		font-weight: normal;
		font-size: 18px;
		line-height: 21px;
		text-indent: 1px;

		color: #000000;
	}
	.icon-dev{
		font-size: 10px !important;
		color: #000;
	    margin-top: 5px;
    	margin-left: 10px;
	}
    .text-h1-java{
        width: 460px;
		height: 75px;
		left: 652px;
		top: 197px;
		font-family: Roboto;
		font-style: normal;
		font-weight: normal;
		font-size: 36px;
		line-height: 1.2;
		text-indent: 1px;
        color: #FFB701;
    }
    .text-span-java{
        color: #FFB701;
        width: 445px;
		height: 113px;
		left: 688px;
		top: 286px;
		font-family: Roboto;
		font-style: normal;
		font-weight: normal;
		font-size: 24px;
		line-height: 28px;
		text-indent: 1px;
    }
    .framework-url{
        margin-top: 100px;
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
    .span-java-6, .span-java-7, .span-java-8, .span-java-9{
        font-family: Roboto;
        font-style: normal;
        font-weight: 500;
        font-size: 18px;
        line-height: 23px;
        text-indent: 1px;
        color: #000000;
        border-radius: 50px;        
        position: absolute;        
    }
    .span-java, .span-java-4{

    }
    .span-java-1, .span-java-5{
        top: 130px;
    }
    .span-java-2, .span-java-6{
        top: 260px;
    }
    .span-java-3, .span-java-8{
        top: 390px;
    }
    .span-java-7, .span-java-9{
    	top: 520px;
    }

    .span-java-4, .span-java-5, .span-java-6, 
    .span-java-8, .span-java-9{
		float: right;
		right: 10px;
    }

    .java-line-1, .java-line-2, .java-line-3, .java-line-4, .java-line-5,
    .java-line-6, .java-line-7, .java-line-8, .java-line-9, .java-line-10,
    .java-line-11, .java-line-12, .java-line-13, .java-line-14, .java-line-15, 
    .java-line-16, .java-line-17, .java-line-18, .java-line-19, .java-line-20{
        position: absolute;      
        height: 0px;
        border-top: 2px solid #FDC331      
    }
    .java-line-1{   
    	width: 165px;
	    top: 35px;
    }
    .java-line-2{   
	    width: 130px;
	    top: 67px;
	    right: 90px;  
        transform: rotate(29.95deg);
    }
    .java-line-3{ 
    	width: 165px;      
        top: 145px;
    }
    .java-line-4{   
    	width: 110px;     
        top: 156px;
    	right: 102px;  
		transform: rotate(11.78deg);

    }
    .java-line-5{
    	width: 165px;       
        top: 275px;
    }
    .java-line-6{  
    	width: 110px;      
        top: 275px;
        right: 100px;
    }
    .java-line-7{ 
    	width: 150px;
    	top: 400px;
    }
    .java-line-8{ 
    	width: 130px;
    	top: 379px;
    	right: 99px;  
        transform: rotate(-18.91deg);
    }
    .java-line-15{    
    	width: 150px;
    	top: 533px  
    }
    .java-line-16{        
        width: 150px;
	    top: 500px;
	    transform: rotate(-25.6deg);
	    right: 82px;
    }
    .java-line-9{
    	width: 167px;
    	top: 15px;
    	right: 0;
    }
    .java-line-10{
    	width: 120px;
		top: 55px;
    	right: 150px;
		transform: rotate(-42.83deg);
    }
    .java-line-11{   
    	width: 165px;     
        top: 140px;
        right: 0;  
    }
    .java-line-12{    
    	width: 100px;
    	top: 163px;
    	right: 159px;
        transform: rotate(-27.4deg);
    }
    .java-line-13{
    	width: 275px;           
        top: 275px;
        right: 0; 
    }
    .java-line-17{ 
    	width: 165px;
    	top: 402px;
    	right: 0;
        
    }
    .java-line-18{        
    	width: 100px;
    	top: 384px;
    	right: 162px;
        transform: rotate(20.11deg);
        
    }
    .java-line-19{
    	width: 220px;
    	top: 534px;
    	right: 0; 
        
    }
    .java-line-20{ 
    	width: 110px;
    	top: 510px;
    	right: 215px;
        transform: rotate(26.51deg);  
    }
    @media(max-width: 1200px){
        .text-span-java{        
        font-size: 17px;
        }
        .span-java, .span-java-1, .span-java-2, 
        .span-java-3, .span-java-4, .span-java-5,
        .span-java-6, .span-java-7, .span-java-9, .span-java-8{
            font-size: 15px;
        }
        .img-java-diagram {            
            margin-bottom: 140px;
        }
        .java-line-1{   
    		width: 165px;
	    	top: 35px;
	    }
	    .java-line-2{   
		    width: 130px;
		    top: 67px;
		    right: 20px;
	    }
	    .java-line-3{ 
	    	width: 165px;      
	        top: 145px;
	    }
	    .java-line-4{   
	    	width: 110px;     
	        top: 156px;
	    	right: 34px;

	    }
	    .java-line-5{
	    	width: 165px;       
	        top: 275px;
	    }
	    .java-line-6{  
	    	width: 130px;      
	        top: 275px;
	        right: 100px;
	    }
	    .java-line-7{ 
	    	width: 150px;
	    	top: 400px;
	    }
	    .java-line-8{ 
	    	width: 130px;
	    	top: 379px;
	    	right: 30px;  
	    }
	    .java-line-15{    
	    	width: 150px;
	    	top: 533px  
	    }
	    .java-line-16{        
	        width: 150px;
		    top: 500px;
		    right: 14px;
	    }
	    .java-line-9{
	    	width: 167px;
	    	top: 15px;
	    	right: 0;
	    }
	    .java-line-10{
	    	width: 120px;
			top: 55px;
	    	right: 150px;
			transform: rotate(-42.83deg);
	    }
	    .java-line-11{   
	    	width: 165px;     
	        top: 140px;
	        right: 0;  
	    }
	    .java-line-12{    
	    	width: 100px;
	    	top: 163px;
	    	right: 159px;
	        transform: rotate(-27.4deg);
	    }
	    .java-line-13{
	    	width: 275px;           
	        top: 275px;
	        right: 0; 
	    }
	    .java-line-17{ 
	    	width: 165px;
	    	top: 402px;
	    	right: 0;
	        
	    }
	    .java-line-18{        
	    	width: 100px;
	    	top: 384px;
	    	right: 162px;
	        transform: rotate(20.11deg);
	        
	    }
	    .java-line-19{
	    	width: 220px;
	    	top: 534px;
	    	right: 0; 
	        
	    }
	    .java-line-20{ 
	    	width: 110px;
	    	top: 510px;
	    	right: 215px;
	    }
    }
    @media(max-width: 992px){
    	.framework-url{
	        margin-top: 30px;
	    }
        .text-span-java{        
            font-size: 0px;
        }  
        .text-h1-java{
            margin-top: 50%;
        } 
        .text-h2 {
            font-size: 25px;
        }    
        .span-java, .span-java-1, .span-java-2, 
        .span-java-3, .span-java-4, .span-java-5,
        .span-java-6, .span-java-7, .span-java-8, .span-java-9{
            font-size: 13px;
        }
        .span-java{
            top: 10px;
        }
        .span-java-1, .span-java-5{
            top: 100px;    
        }
        .span-java-2, .span-java-6{
            top: 190px;
        }
        .span-java-3, .span-java-8{
            top: 280px;
        }
        .span-java-7, .span-java-9{
			top:370px;
        }
        .span-java-4{
            top: 20px;           
        }

        .java-line-1, .java-line-2, .java-line-3, .java-line-4, .java-line-5,
        .java-line-6, .java-line-7, .java-line-8, .java-line-9, .java-line-10,
        .java-line-11, .java-line-12, .java-line-13, .java-line-14, .java-line-19,
        .java-line-15, .java-line-16, .java-line-17, .java-line-18, .java-line-20{                
            width: 90px;           
        }
        .java-line-1 {
            top: 37px;            
        }
        .java-line-2 {
            top: 59px;
    		right: 51px;           
        }
        .java-line-3 {
            top: 104px;            
        }
        .java-line-4 {
            top: 113px;
    		right: 47px;            
        }
        .java-line-5 {
            top: 195px;            
        }
        .java-line-6 {
            top: 195px;
    		right: 70px;            
        }
        .java-line-7 {
            top: 288px;            
        }
        .java-line-8 {
            top: 274px;
    		right: 50px;            
        }
        .java-line-9 {
            top: 25px;
    		right: 10px;            
        }
        .java-line-10 {
            top: 55px;
    		right: 87px;            
        }
        .java-line-11 {
            top: 105px;
            right: 10px;           
        }
        .java-line-12 {
            top: 126px;
    		right: 95px;            
        }
        .java-line-13 {
        	width: 170px;
            top: 196px;
            right: 10px;            
        }
        .java-line-14 {
            top: 170px;
            left: 9px;            
        }
        .java-line-15{
        	top:380px;
        }
        .java-line-16{
        	top: 360px;
    		right: 50px;
        }
        .java-line-17{
        	top: 285px;
        	right: 10px;
        }
        .java-line-18{
        	top: 269px;
    		right: 97px;
        }
        .java-line-19{
        	width: 150px;
        	top:375px;
        	right: 10px;
        }
        .java-line-20{
        	top: 354px;
    		right: 154px;
        }
    }
    @media(max-width: 768px){
    	.icon-dev{
    		display: none;
    	}
    	.text-p-dev1, .text-p-dev2, .text-p-dev3, .text-p-dev4{
    		font-size: 16px;
    	}
        .text-span-java{        
            font-size: 0px;
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
        .span-java-6. .span-java-7, .span-java-8, .span-java-9{
            position: static;   
            padding: 0px;             
        }
        .span-java{
            top: 18px;
    		left: 170px; 
    		font-size: 16px !important;
        }
        .span-java-1{
        	font-size: 16px !important;
            top: 64px;
    		right: 224px;    
        }
        .span-java-2{
        	font-size: 16px !important;
            top: 110px;
    		right: 222px;
        }
        br{
        	display: none;
        }
        .span-java-3{
        	font-size: 16px !important;
            top: 155px;
    		right: 219px;
        }
        .span-java-4{
        	font-size: 16px !important;
            top: 17px;
            left: 25px;           
        }
        .span-java-5{
        	font-size: 16px !important;
            top: 64px;
            right: 200px;            
        }
        .span-java-6{
        	font-size: 16px !important;
            top: 110px;
    		right: 186px;           
        }
        .span-java-7{
        	font-size: 16px !important;
            top: 202px;
    		right: 215px;            
        }
        .span-java-8{
        	font-size: 16px !important;
            top: 155px;
    		right: 219px;           
        }
        .span-java-9{
        	font-size: 16px !important;
            top: 202px;
    		right: 175px;             
        }
        .img-java-diagram {            
            margin-bottom: 0px;
            margin-top: 0px;
        }
        .java-line-1, .java-line-2, .java-line-3, .java-line-4, .java-line-5,
        .java-line-6, .java-line-7, .java-line-8, .java-line-9, .java-line-10,
        .java-line-11, .java-line-12, .java-line-13, .java-line-14, .java-line-15,
        .java-line-16, .java-line-17, .java-line-18, .java-line-19, .java-line-20{                
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
        }
        
    }
</style>
@push('js')
@endpush