@extends('Website.layouts.landing_layout')
@section('custom-css')
<link rel="stylesheet" href="{{ asset('landing/net/css/style.css') }}">
<style>
</style>
@endsection
@section('content')
<section class="banner-url">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1 class="text-h1-java">.NETシステム開発</h1>
                <p class="text-span-java">.NET技術を取り入れ、開発コストの削減、アプリケーションの精度の向上、より価値のあるシステム構築をお手伝いします。</p>
                <p class="text-span-java">弊社では、.NETなど、Microsoft社製品ベースによる開発実績として、大手コンビニエンスストアチェーンの契約書管理、Exceｌによる独自の帳票フレームワークを用いた輸出入業務アプリケーションなど数多くの開発実績があります。</p>
            </div>
            <div class="col-md-6">
            </div>
        </div>
    </div>
</section>
<section>
    <h2 class="text-h2">.NET開発サービスの提供</h2>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="mg-20-jv">
                    <span class="span-java">アプリケーションの開発</span>
                    <hr class="java-line-1">
                    <hr class="java-line-2">
                </div>
                <div class="mg-20-jv">
                    <span class="span-java-1">カスタマイズ.NETの開発</span>
                    <hr class="java-line-3">
                    <hr class="java-line-4">
                </div>
                <div class="mg-20-jv">
                    <span class="span-java-2">MVC .NET</span>
                    <hr class="java-line-5">
                    <hr class="java-line-6">
                </div>
                <div class="mg-20-jv">
                    <span class="span-java-3">.NETマイグレーションサービス</span>
                    <hr class="java-line-7">
                    <hr class="java-line-8">
                </div>
            </div>
            <div class="col-md-4">
                <img class="img-java-diagram" src="{{asset('landing/net/img/rectangle-net.png')}}" width="100%">
            </div>
            <div class="col-md-4">
                 <div class="mg-20-jv">
                    <span class="span-java-4">Website Development</span>
                    <hr class="java-line-9">
                    <hr class="java-line-10">
                </div>
                <div class="mg-20-jv">
                    <span class="span-java-5">ASP.NET</span>
                    <hr class="java-line-11">
                    <hr class="java-line-12">
                </div>
                <div class="mg-20-jv">
                    <span class="span-java-6">Visual Basic</span>
                    <hr class="java-line-13">
                    <hr class="java-line-14">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="mb-5 mt-4">
	<div class="col-md-12">
		<div class="col-md-12">
			<p class="net_p">開発環境</p>
		    <div class="col-md-12 d-flex justify-content-center">
	    		<p class="net_p2">全てのテクノロジーを使って、お客様の要求を満たすシステムを提供する。</p>
    		</div>
	</div>
	<div class="row d-flex justify-content-center">
		<div class="col-md-2 text-center">
			<img src="{{asset('landing/net/img/icon/icons8-windows-10-480.png')}}" alt="" width="30%"><img src="">
			<p>Windows'</p>
			<p><strong>Windows OS</strong></p>
		</div>
		<div class="col-md-2 text-center">
			<img src="{{asset('landing/net/img/icon/icons8-windows-10-480.png')}}" alt="" width="50%"><img src="">
			<p><strong>Windows Server</strong></p>
		</div>
		<div class="col-md-2 text-center">
			<img src="{{asset('landing/net/img/icon/icons8-microsoft-sql-server-480.png')}}" alt="" width="50%">
			<p><strong>MS SQL Server</strong></p>
		</div>
		<div class="col-md-2 text-center">
			<img src="{{asset('landing/net/img/icon/microsoft-dot-net.jpg')}}" alt="" width="50%">
			<p><strong>Microsoft .Net</strong></p>
		</div>
		<div class="col-md-2 text-center">
			<i class="fa fa-server" style="font-size: 70px; padding: 20px; color: #000;"></i>
			<p><strong>Internet Information Server</strong></p>
		</div>
	</div>
	<div class="row d-flex justify-content-center">
		<div class="col-md-2 text-center">
			<img src="{{asset('landing/net/img/icon/icons8-c++.png')}}" alt="" width="50%"><img src="">
			<p><strong>C++</strong></p>
		</div>
		<div class="col-md-2 text-center">
			<img src="{{asset('landing/net/img/icon/icons8-c-sharp-logo-2-480.png')}}" alt="" width="50%">
			<p><strong>C#</strong></p>
		</div>
		<div class="col-md-2 text-center">
			<img src="{{asset('landing/net/img/icon/linq.png')}}" alt="" width="50%">
			<p><strong>LinQ</strong></p>
		</div>
		<div class="col-md-2 text-center">
			<img src="{{asset('landing/net/img/icon/MicrosoftSilverlight.jpg')}}" alt="" width="50%">
			<p style="margin-top: 0.9em;"><strong>Microsoft Silverlight</strong></p>
		</div>
		<div class="col-md-2 text-center">
			<img src="{{asset('landing/net/img/icon/icons8-microsoft-sharepoint-500.png')}}" alt="" width="50%">
			<p><strong>Sharepoint</strong></p>
		</div>
	</div>

</div>
</section>
<section>
    <h2 class="text-h2" style="padding-top: 20px;">プロジェクト &amp;ソリューション</h2>
    <br><br> 
    <div class="container">
        <div class="row">
            <div class="col-md-3" style="padding: 0px;">
                <div>
                    <img class="" src="{{asset('landing/java/img/rectangle36-java.png')}}" width="100%">
                </div>
            </div>
            <div class="col-md-3" style="padding: 0px;">
                <div>
                    <img class="" src="{{asset('landing/java/img/rectangle37-java.png')}}" width="100%">
                </div>
            </div>
            <div class="col-md-3" style="padding: 0px;">
                <div>
                    <img class="" src="{{asset('landing/java/img/rectangle38-java.png')}}" width="100%">
                </div>
            </div>
            <div class="col-md-3" style="padding: 0px;">
                <div>
                    <img class="" src="{{asset('landing/java/img/rectangle39-java.png')}}" width="100%">
                </div>
            </div>
        </div>
    </div>    
    <br><br>
</section>
<div class="section mb-3" id="pricing">
        <h2 class="text-h2" style="padding-top: 20px">プランの選択</h2>
        <br><br>
        <div class="container">
            <div class="card-deck">
                <div class="card pricing">
                    <div class="card-head">
                        <small class="badge-pill badge-warning d-inline p-2 text-black">一般プロジェクト</small>
                        <span class="price mt-3">25万<sub>/MM</sub></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <div class="list-group-item">一般プロジェクト</div>
                        <div class="list-group-item">1名のプロジェクト</div>
                        <div class="list-group-item">３ヶ月以下の契約書</div>
                    </ul>
                    <div class="card-body">
                        <a href="#" class="btn btn-warning btn-lg btn-block">お問合わせ</a>
                    </div>
                </div>
                <div class="card pricing shadow">
                    <div class="card-head">
                        <small class="badge-pill badge-warning d-inline p-2 text-black">ラボプロジェク</small>
                        <span class="price mt-3">240万<sub>/Year</sub></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <div class="list-group-item">６ヶ月以上の契約書</div>
                        <div class="list-group-item">長期間の契約書</div>
                        <div class="list-group-item">２名以上のチーム</div>
                    </ul>
                    <div class="card-body">
                        <a href="#" class="btn btn-warning btn-lg btn-block">お問合わせ</a>
                    </div>
                </div>
                <div class="card pricing ">
                    <div class="card-head">
                        <small class="badge-pill badge-warning d-inline p-2 text-black">ラボプロジェク</small>
                        <span class="price mt-3">22万<sub>/MM</sub></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <div class="list-group-item">３名以上の契約書</div>
                        <div class="list-group-item">ラボの契約書</div>
                        <div class="list-group-item">３ヶ月以上の契約書</div>
                    </ul>
                    <div class="card-body">
                        <a href="#" class="btn btn-warning btn-lg btn-block">お問合わせ</a>
                    </div>
                </div>
                
            </div>
            <!-- // end .pricing -->


    </div>

</div>
<div class="section pt-0">
    <div class="container">
        <div class="text-center">
            <h2 class=" bl-text limited">{{trans('landing.faqw')}}</h2>
        </div>
        <div class="clearfix"></div>
        <div class="row pt-4">
            <div class="col-md-6">
                <h4 class="mb-3">{{trans('landing.faq1')}}</h4>
                <p class="light-font mb-5">{{trans('landing.faw1')}}</p>
                <h4 class="mb-3">{{trans('landing.faq2')}}</h4>
                <p class="light-font mb-5">{{trans('landing.faw2')}}</p>

            </div>
            <div class="col-md-6">
                <h4 class="mb-3">{{trans('landing.faq3')}} </h4>
                <p class="light-font mb-5">{{trans('landing.faw3')}}</p>
                <h4 class="mb-3">{{trans('landing.faq4')}}</h4>
                <p class="light-font mb-5">{{trans('landing.faw4')}}</p>

            </div>
        </div>
    </div>

</div>
@endsection
@section('javascript-custom')
<script></script>
@endsection
