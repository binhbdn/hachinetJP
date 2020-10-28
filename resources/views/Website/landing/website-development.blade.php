@extends('Website.layouts.landing_layout')
@section('custom-css')
<!-- <link rel="stylesheet" href="{{ asset('landing/webdev/css/style.css') }}"> -->
@endsection
@section('content')
<section>
	<div style="width: 1500px; height: 461px; left: -157px; top: 70px;">
		<div class="banner-development-1">
			<div class="banner-development-2">
				<div class="banner-develop-3">
		            <div class="col-md-12" style="margin-left: 37em; padding-top: 10em;">
		                <h1 class="text-h1-java">{{trans('landing.web_system')}}</h1>
		                <p class="text-span-java">{{trans('landing.web_sub')}}</p>
		            </div>
			    </div>
		    </div>
	    </div>
    </div>
</section>
<section class="secsion-dev">
	<div class="container">
		<h1 class="text-h1-dev">{{trans('landing.web_why')}}</h1>
		<div class="row">
			<p class="text-p-dev1"><i class="fa fa-circle icon-dev"></i> {{trans('landing.web_li_1')}}</p>
		</div>
		<div class="row">
			<p class="text-p-dev2"><i class="fa fa-circle icon-dev"></i> {{trans('landing.web_li_2')}}</p>
		</div>
		<div class="row">
			<p class="text-p-dev3"><i class="fa fa-circle icon-dev"></i> {{trans('landing.web_li_3')}}</p>
		</div>
		<!-- <div class="row">
			<p class="text-p-dev4"><i class="fa fa-circle icon-dev"></i> We consult & apply the most appropriate technology to the project from front-end to back-end to develop, based on customer’s requirements.</p>
		</div> -->

	</div>
</section>
@endsection
@section('javascript-custom')
<script></script>
@endsection
