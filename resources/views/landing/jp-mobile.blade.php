<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <title>Hachinet Mobile Application Development</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Mobile Application,Application Development, mobile, app, landing, ios, android, responsive">
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
    <!-- Font -->
    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('landing/mobile/css/bootstrap.min.css') }}">
    <!-- Themify Icons -->
    <link rel="stylesheet" href="{{ asset('landing/mobile/css/themify-icons.css') }}">
    <!-- Owl carousel -->
    <link rel="stylesheet" href="{{ asset('landing/mobile/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('web/css/font-awesome.min.css') }}">
    <!-- Main css -->
    <link href="{{ asset('landing/mobile/css/style.css') }}" rel="stylesheet">
    <style>
    .logo_h img {
        height: 50px;
    }
    </style>
</head>

<body data-spy="scroll" data-target="#navbar" data-offset="30">

    <!-- Nav Menu -->

    <div class="nav-menu fixed-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-dark navbar-expand-lg">
                        <a class="navbar-brand logo_h"  href="{{ url('home') }}"><img src="{{ url('/upload/setting') }}/{{ $settings->logo}}" alt="hachinet jsc"></a> <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                        <div class="collapse navbar-collapse" id="navbar">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item"> <a class="nav-link active" href="#home">HOME <span class="sr-only">(current)</span></a> </li>
                                <li class="nav-item"> <a class="nav-link" href="#features">FEATURES</a> </li>
                                <li class="nav-item"> <a class="nav-link" href="#gallery">GALLERY</a> </li>
                                <li class="nav-item"> <a class="nav-link" href="#pricing">PRICING</a> </li>
                                <li class="nav-item"> <a class="nav-link" href="#contact">CONTACT</a> </li>
                                <li class="nav-item"><a href="{{asset('Profile_Hachinet.pdf')}}" target="_blank" class="btn btn-outline-light my-3 my-sm-0 ml-lg-3">Download PROFILE</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>


    <header class="bg-gradient" id="home">
        <div class="container mt-5">
            <h1>モバイル開発 , アプリ開発</h1>
            <p class="tagline">お客様の業務内容を理解する上で、企画・発案～設計・開発～運用・マーケット申請・保守・管理といった一連のアプリ開発を提供いたします。</p>
        </div>
        <div class="img-holder mt-3"><img src="{{ asset('landing/mobile/images/iphonex.png') }}" alt="phone" class="img-fluid"></div>
    </header>

    <!--<div class="client-logos my-5">
        <div class="container text-center">
            <img src="{{ asset('landing/mobile/images/client-logos.png') }}" alt="client logos" class="img-fluid">
        </div>
    </div> -->

    <div class="section light-bg" id="features">


        <div class="container">

            <div class="section-title">
                <small>Hachinet Application Development</small>
                <h3>このようなお悩みはございませんか？</h3>
            </div>


            <div class="row">
                <div class="col-12 col-lg-4">
                    <div class="card features">
                        <div class="card-body">
                            <div class="media">
                                <span class="ti-face-smile gradient-fill ti-3x mr-3"></span>
                                <div class="media-body">
                                    <h4 class="card-title">Simple</h4>
                                    <p class="card-text">操作性が良く、仕様変更にも柔軟に対応できるモバイルアプリを作りたい。 </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="card features">
                        <div class="card-body">
                            <div class="media">
                                <span class="ti-settings gradient-fill ti-3x mr-3"></span>
                                <div class="media-body">
                                    <h4 class="card-title">Customize</h4>
                                    <p class="card-text">開発コストを抑えて、開発効率を追求したい</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="card features">
                        <div class="card-body">
                            <div class="media">
                                <span class="ti-lock gradient-fill ti-3x mr-3"></span>
                                <div class="media-body">
                                    <h4 class="card-title">Secure</h4>
                                    <p class="card-text">国内で優秀なスマホアプリ開発エンジニアが不足している。 </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>



    </div>
    <!-- // end .section -->
    <div class="section">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-6">
                    <div class="box-icon"><span class="ti-mobile gradient-fill ti-3x"></span></div>
                    <h2>スマホアプリ開発における強み</h2>
                    <p class="mb-4">iOS、Androidのネーティブ アプリ開発からReactNativeやIonic、Cordovaなどのハイブリッドアプリ開発までの長年経験を活かして、お客様のニーズに最も適した手段を選択し、快適な動作と保守管理性の高い理想的な業務アプリケーションを実現いたします。お客様の業務内容を理解する上で、企画・発案～設計・開発～運用・マーケット申請・保守・管理といった一連のアプリ開発を提供いたします。</p>
                </div>
            </div>
            <div class="perspective-phone">
                <img src="{{ asset('landing/mobile/images/perspective.png') }}" alt="mobile application outsource" class="img-fluid">
            </div>
        </div>

    </div>
    <!-- // end .section -->


    <div class="section light-bg">
        <div class="container">
            <div class="section-title">
                <small>開発実績</small>
                <h3>サービスに関するご相談やご質問など、</h3><h3>こちらからお問い合わせください。</h3>
            </div>

            <ul class="nav nav-tabs nav-justified" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#communication">我々が有すること</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#schedule">あなたが取得できること</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#messages">開発技術</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#livechat">開発したアプリケーション</a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="communication">
                    <div class="d-flex flex-column flex-lg-row">
                        <img src="{{ asset('landing/mobile/images/graphic.png') }}" alt="graphic" class="img-fluid rounded align-self-start mr-lg-5 mb-5 mb-lg-0">
                        <div>

                            <h2>我々が有すること</h2>
                            <ul>
                            	<li>モバイルアプリケーションの開発における経験が多いメンバー</li>
                            	<li>設計の要求により、アプリケーションのコンサルティング・開発</li>
                            	<li>セキュリティー基準でモバイルアプリケーションの開発</li>
                            	<li>全てのプラットフォーム（Android、IOS)でのモバイルアプリケーションの構築</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="schedule">
                    <div class="d-flex flex-column flex-lg-row">
                        <div>
                            <h2>あなたが取得できること:</h2>
                            <ul>
                            	<li>求める製品</li>
                            	<li>仕様書を作り、計画を立てることから実装・テストまでの国際基準に従い、あなたが欲しいアプリケーションを開発</li>
                            	<li>お客様の要求によりメンテナンスのサービス</li>
                            	<li>開発の前、お客様に見せる製品のデモを作る</li>
                            	<li>App Store, Google Play,…へのデプロイ・アップロードをサポート</li>
                            </ul>
                        </div>
                        <img src="{{ asset('landing/mobile/images/graphic.png') }}" alt="graphic" class="img-fluid rounded align-self-start mr-lg-5 mb-5 mb-lg-0">
                    </div>
                </div>
                <div class="tab-pane fade" id="messages">
                    <div class="d-flex flex-column flex-lg-row">
                        <img src="{{ asset('landing/mobile/images/graphic.png') }}" alt="graphic" class="img-fluid rounded align-self-start mr-lg-5 mb-5 mb-lg-0">
                        <div>
                            <h2>開発技術</h2>
                            <ul>
                            	<li>Android</li>
                            	<li>IOS</li>
                            	<li>Cross Platform: Xamarin, Titanium, Phonegap, Meteor.</li>
                            	<li>Unity</li>
                            	<li>Cocos2dx,…</li>
                            	<li>Maps, GPS, sensor, socket,…</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="livechat">
                    <div class="d-flex flex-column flex-lg-row">
                        <div>
                            <h2>開発したアプリケーション</h2>
                            <ul>
                            <li>ヘルスケア</li>
                            <li>採用・募集</li>
                            <li>モバイルゲーム2D , 3D</li>
                            <li>企業内のアプリケーション</li>
                            <li>旅行</li>
                            </ul>
                        </div>
                        <img src="{{ asset('landing/mobile/images/graphic.png') }}" alt="graphic" class="img-fluid rounded align-self-start mr-lg-5 mb-5 mb-lg-0">
                    </div>
                </div>
            </div>


        </div>
    </div>
    <!-- // end .section -->

    <div class="section">

        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ asset('landing/mobile/images/dualphone.png') }}" alt="dual phone" class="img-fluid">
                </div>
                <div class="col-md-6 d-flex align-items-center">
                    <div>
                        <div class="box-icon"><span class="ti-rocket gradient-fill ti-3x"></span></div>
                        <h2>あなたのアプリケーショを開発</h2>
                        <p class="mb-4">アプリケーショ開発の長期間のパートナーを探していれば、我々にご連絡ください。</p>
                        <a href="#" class="btn btn-primary">見積要求</a></div>
                </div>
            </div>

        </div>

    </div>
    <!-- // end .section -->


    <div class="section light-bg">

        <div class="container">
            <div class="row">
                <div class="col-md-8 d-flex align-items-center">
                    <ul class="list-unstyled ui-steps">
                        <li class="media">
                            <div class="circle-icon mr-4">1</div>
                            <div class="media-body">
                                <h5>要求を明確にする</h5>
                                <p>まず、あなたが求めるアプリケーショの概要を共有して、我々が見積書を提案する。</p>
                            </div>
                        </li>
                        <li class="media my-4">
                            <div class="circle-icon mr-4">2</div>
                            <div class="media-body">
                                <h5>実装計画を立てる</h5>
                                <p>お客様と契約した後、我々が実装計画を提案する。その計画があなたの要求に最適なものです。</p>
                            </div>
                        </li>
                        <li class="media">
                            <div class="circle-icon mr-4">3</div>
                            <div class="media-body">
                                <h5>実装</h5>
                                <p>モバイルアプリケーションの実装が完了したら、契約の通りに納品する。</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('landing/mobile/images/iphonex.png') }}" alt="iphone" class="img-fluid">
                </div>

            </div>

        </div>

    </div>
    <!-- // end .section -->


    <div class="section light-bg" id="gallery">
        <div class="container">
            <div class="section-title">
                <small>GALLERY</small>
                <h3>製品の画像</h3>
            </div>

            <div class="img-gallery owl-carousel owl-theme">
                <img src="{{ asset('landing/mobile/images/screen1.jpg') }}" alt="image">
                <img src="{{ asset('landing/mobile/images/screen2.jpg') }}" alt="image">
                <img src="{{ asset('landing/mobile/images/screen3.jpg') }}" alt="image">
                <img src="{{ asset('landing/mobile/images/screen1.jpg') }}" alt="image">
            </div>

        </div>

    </div>
    <!-- // end .section -->





    <div class="section" id="pricing">
        <div class="container">
            <div class="section-title">
                <small>見積書</small>
                <h3>開発単価</h3>
            </div>

            <div class="card-deck">
                <div class="card pricing">
                    <div class="card-head">
                        <small class="text-primary">一般プロジェクト</small>
                        <span class="price">25万<sub>/MM</sub></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <div class="list-group-item">一般プロジェクト</div>
                        <div class="list-group-item">1名のプロジェクト</div>
                        <div class="list-group-item">３ヶ月以下の契約書</div>
                    </ul>
                    <div class="card-body">
                        <a href="#" class="btn btn-primary btn-lg btn-block">お問合わせ</a>
                    </div>
                </div>
                <div class="card pricing popular">
                    <div class="card-head">
                        <small class="text-primary">ラボプロジェク</small>
                        <span class="price">240万<sub>/年</sub></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <div class="list-group-item">６ヶ月以上の契約書</div>
                        <div class="list-group-item">長期間の契約書</div>
                        <div class="list-group-item">２名以上のチーム</div>
                    </ul>
                    <div class="card-body">
                        <a href="#" class="btn btn-primary btn-lg btn-block">お問合わせ</a>
                    </div>
                </div>
                <div class="card pricing ">
                    <div class="card-head">
                        <small class="text-primary">ラボプロジェク</small>
                        <span class="price">22万<sub>/MM</sub></span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <div class="list-group-item">３名以上の契約書</div>
                        <div class="list-group-item">ラボの契約書</div>
                        <div class="list-group-item">３ヶ月以上の契約書</div>
                    </ul>
                    <div class="card-body">
                        <a href="#" class="btn btn-primary btn-lg btn-block">お問合わせ</a>
                    </div>
                </div>
                
            </div>
            <!-- // end .pricing -->


        </div>

    </div>
    <!-- // end .section -->


    <div class="section pt-0">
        <div class="container">
            <div class="section-title">
                <small>FAQ</small>
                <h3>よくある質問</h3>
            </div>

            <div class="row pt-4">
                <div class="col-md-6">
                    <h4 class="mb-3">メンテナンス期間はどのくらいですか？</h4>
                    <p class="light-font mb-5">Hachinetのモバイルアプリケーションのメンテナンス期間は永遠です。不具合が発生する場合、Hachinetが不具合がなくなるまで、無料に修理する。</p>
                    <h4 class="mb-3">セキュリティーはどのように契約しますか？</h4>
                    <p class="light-font mb-5">プロジェクトの開始時点でNDAを契約する。第3者にプロジェクトの情報を見せ事は禁止</p>

                </div>
                <div class="col-md-6">
                    <h4 class="mb-3">開発側は遅刻する場合、どうしますか？</h4>
                    <p class="light-font mb-5">契約書の通り、Hachinetが遅刻する場合、罰金を支払わなければなりません（ 8 JPY/分）</p>
                    <h4 class="mb-3">支払い手続きはどうですか？</h4>
                    <p class="light-font mb-5"> Hachinetが毎月の請求書をお客様に送って、お客様が支払い手続きを行います。</p>

                </div>
            </div>
        </div>

    </div>
    <!-- // end .section -->
    @include('layouts.footer')

    <!-- jQuery and Bootstrap -->
    <script src="{{ asset('landing/mobile/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('landing/mobile/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Plugins JS -->
    <script src="{{ asset('landing/mobile/js/owl.carousel.min.js') }}"></script>
    <!-- Custom JS -->
    <script src="{{ asset('landing/mobile/js/script.js') }}"></script>

</body>

</html>
