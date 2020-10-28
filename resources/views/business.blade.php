@extends('layouts.app')

@section('content')
<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
        <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
        <div class="container">
            <div class="banner_content text-center">
            	<h2>{{trans('messages.business-system')}}</h2>
                <h3 style="color: #000;">{{trans('messages.sub-business-system')}}</h3>
            </div>
        </div>
    </div>
</section>
<section id="features" class="mr-50">
    <div class="container">
        <div class="feature">
        	<div class="col-md-12" style="margin-bottom: 20px;">
	            <i class="fa fa-circle"></i>
	            <h4 class="cl-0">{{trans('messages.ul1')}}</h4>
	            <p class="pd-l-80 cl-0">{{trans('messages.li1-1')}}</p>
	            <p class="pd-l-80 cl-0">{{trans('messages.li1-2')}}</p>
            </div>
            <div class="col-md-12">
	            <i class="fa fa-circle"></i>
	            <h4 class="cl-0">{{trans('messages.ul2')}}</h4>
	            <p class="pd-l-80 cl-0">{{trans('messages.li2-1')}}</p>
	            <p class="pd-l-80 cl-0">{{trans('messages.li2-2')}}</p>
            </div>
        </div>
    </div>
</section>
<section id="features" class="section bg-grey mr-50">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img class="col-md-12" src="{{asset('web/img/erp.jpg')}}" alt="" height="100%">
            </div>
            <div class="col-md-6 md-pd-25">
                <div class="section-header">
                    <h2 class="title">"{{trans('messages.erp-package')}}"</h2>
                </div>
                <p>{{trans('messages.erp-content')}}</p>
            </div>
        </div>
    </div>
</section>
<section id="features" class="mr-50">
    <div class="container">
        <div class="row">
            <div class="col-md-6 md-pd-25">
                <div class="section-header">
                    <h2 class="title">"{{trans('messages.crm-package')}}"</h2>
                </div>
                <p>{{trans('messages.crm-content')}}</p>
            </div>
            <div class="col-md-6">
                <img class="col-md-12" src="{{asset('web/img/crm5.jpg')}}" alt="" height="100%">
            </div>
        </div>
    </div>
</section>
<section id="features" class="section bg-grey mr-50">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img class="col-md-12" src="{{asset('web/img/bi.jpg')}}" alt="" height="100%">
            </div>
            <div class="col-md-6 md-pd-25">
                <div class="section-header">
                    <h2 class="title">"{{trans('messages.bi-package')}}"</h2>
                </div>
                <p>{{trans('messages.bi-content')}}</p>
            </div>
        </div>
    </div>
</section>
<section class="mb-4 text-center">
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
	        		<p>>Net, C#, MVC 3 4 5, Entity</p>
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
        <div class="col-md-12 mt-5">
            <p class="net_p">{{trans('messages.other-service')}}</p>
            <div class="col-md-12 mb-3"><p class="line1a"></p><p class="line1b"></p></div>
            <div class="col-md-12 text-center">
                <img src="{{asset('web/img/otherservices.png')}}" alt="" width="100%">
            </div>   
        </div>
    </div>
</section>
@endsection

@push('js')

@endpush
<style type="text/css">
.md-pd-25{
	padding-top: 25px !important;
	padding-bottom: 25px !important;
}
.mr-50{
	margin: 50px;
}
.shadow{
    height: 100%;
    padding-bottom: 15px;
	padding-top: 15px;
	background: #f5f2f2;
	-webkit-box-shadow: 0px 5px 5px 1px rgba(173,171,173,1);
	-moz-box-shadow: 0px 5px 5px 1px rgba(173,171,173,1);
	box-shadow: 0px 5px 5px 1px rgba(173,171,173,1);
}
.bt-ct{
	margin-bottom: 1rem;
	border-bottom: 2px solid #ffb701; 
}
.pd-l-80{
	padding-left: 70px;
    margin-bottom: 0;
}
.cl-0{
	color: #000;
}
</style>