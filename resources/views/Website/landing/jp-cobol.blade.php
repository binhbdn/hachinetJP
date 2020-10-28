@extends('Website.layouts.landing_layout')
@section('custom-css')
    <link rel="stylesheet" href="{{ asset('landing/cobol/css/style.css') }}">
    <style>

    </style>
@endsection
@section('content')
    <section class="header" style="background-image: url({{asset('landing/cobol/images/demo.png')}})">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-12">
                    <div class="box__title mb-5 mt-5 pb-5 pt-5">
                        <h1 class="title text-body mb-5">COBOL 開発</h1>
                        <p class="text-body">企業のビジネス、金融、管理システムで使用されているCOBOLは、レガシーアプリケーションで広く使用されているため、 2002年まではJava、PHP、.NETなどの最新テクノロジーほど普及していない。</p>
                    </div>
                </div>
                <div class="col-md-7 col-sm-12">
                    <div class="box__img mb-5 mt-5 pb-5 pt-5">
                        <img src="{{asset('landing/cobol/images/cobol-image-header.png')}}" alt="cobol systems development">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="why-choose" class="pb-3 pt-3">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="title-why-choose text-center">COBOL 開発の為、なぜHachinetを選ぶか？</h2>
                </div>
                <div class="col-md-10 col-md-offset-1">
                    <p class="text-center text-body">Hachinetは、テクノロジーに関する深い知識を持つ経験豊富なチームが支援するCOBOL開発および保守サービスを提供する。 当社のCOBOL開発専門家は、ビジネスプロセスを前進させる分析、コンサルティング、開発、およびアプリケーション導入ソリューションを提供している。</p>
                </div>
                <div class="clearfix"></div>
                <div class="d-flex mb-3 w-100 box__why">
                    <div class="col-md-7 col-sm-12">
                        <div class="box__why_text__left p-3">
                            <p class="text-body mb-0">過去と現在のプロジェクトは我々の専門家に刺激を与える。</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-md-offset-1">
                        <div class="box__why_text__right position-left p-3 justify-content-center text-center">
                            <h3>優秀な<br />開発者</h3>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="d-flex mb-3 w-100 box__why">
                    <div class="col-md-4 col-sm-12">
                        <div class="box__why_text__right p-3 justify-content-center text-center">
                            <h3>メンテナンス<br />＆サポート</h3>
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-12 col-md-offset-1">
                        <div class="box__why_text__left position-left p-3">
                            <p class="text-body  mb-0">アプリケーションをより深く理解し、適切なコミュニケーションと技術的洞察を提供するチームによって、リクエストが解決されることを常に確信している。</p>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="d-flex mb-3 w-100 box__why">
                    <div class="col-md-7 col-sm-12">
                        <div class="box__why_text__left p-3">
                            <p class="text-body mb-0">COBOLアプリケーション分析の以前の経験は、予算の遵守を確保しながら互換性の問題を軽減する。</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-md-offset-1">
                        <div class="box__why_text__right position-left p-3 justify-content-center text-center">
                            <h3>時間の通り<br />＆予算の通り</h3>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="d-flex mb-3 w-100 box__why">
                    <div class="col-md-4 col-sm-12">
                        <div class="box__why_text__right p-3 justify-content-center text-center">
                            <h3>シームレスなコミュニケーション</h3>
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-12 col-md-offset-1">
                        <div class="box__why_text__left position-left p-3">
                            <p class="text-body mb-0">お客様は、GoToMeeting、WebEx、Skype、その他のツールなどの多様なコミュニケーションチャネルを通じて、お客様のチームやHachinetのチームと自由に連絡できる。</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="service_provided" class="pb-5 pt-3" style="background-image: url({{asset('landing/cobol/images/bg-service-provide.png')}})">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="title_service_provided text-center text-white">Hachinetが提供するCOBOL 開発サービス</h2>
                </div>
            </div>
            <div class="clearfix d-block mt-3"></div>
            <div class="row">
                <div class="col-md-3 col-sm-6 col-6 mb-3">
                    <div class="box__icon">
                        <span class="d-flex h-50 m-auto w-50 icon-development"></span>
                        <h3 class="text-center mt-3">アプリケーションの開発</h3>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-6 mb-3">
                    <div class="box__image w-100">
                        <img src="{{asset('landing/cobol/images/image-app-development.png')}}" alt="" class=" w-100">
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-6 mb-3">
                    <div class="box__icon">
                        <span class="d-flex h-50 m-auto w-50 icon-maintenance"></span>
                        <h3 class="text-center mt-3">アプリケーションのメンテナンス</h3>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-6 mb-3">
                    <div class="box__image w-100">
                        <img src="{{asset('landing/cobol/images/image-app-maintenance.png')}}" alt="" class=" w-100">
                    </div>
                </div>
                <div class="clearfix d-flex mt-2 w-100"></div>
                <div class="col-md-3 col-sm-6 col-6 mb-3">
                    <div class="box__image w-100">
                        <img src="{{asset('landing/cobol/images/image-deployment.png')}}" alt="" class=" w-100">
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-6 mb-3">
                    <div class="box__icon">
                        <span class="d-flex h-50 m-auto w-50 icon-deployment"></span>
                        <h3 class="text-center mt-3">アプリケーションのデプロイメント</h3>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-6 mb-3">
                    <div class="box__image w-100">
                        <img src="{{asset('landing/cobol/images/image-report.png')}}" alt="" class=" w-100">
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-6 mb-3">
                    <div class="box__icon">
                        <span class="d-flex h-50 m-auto w-50 icon-report"></span>
                        <h3 class="text-center mt-3">カスタムレポートツール</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="product_solutions" class="pt-3 pb-5" style="background-image: url({{asset('landing/cobol/images/bg-solutions.svg')}})">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="text-center">COBOL 開発ソリューション</h3>
                </div>
            </div>
            <div class="clearfix w-100 d-flex mt-2"></div>
            <div class="row">
                <div class="col-md-3 col-sm-6 col-12 mb-3">
                    <div class="box__solutions text-center h-100 shadow p-2 bg-white pt-4">
                        <span><i class="fa fa-5x fa-question-circle-o"></i></span>
                        <h5 class="text-center mt-3">専門家と相談</h5>
                        <p>あなたの案件開発の為、テクノロジーソリューションを弊社の専門家と相談する。</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-12 mb-3">
                    <div class="box__solutions text-center h-100 shadow p-2 bg-white pt-4">
                        <span><i class="fa fa-5x fa-line-chart"></i></span>
                        <h5 class="text-center mt-3">毎日のコミュニーケーション</h5>
                        <p>通勤時間中の毎日や毎週のコミュニーケーションを取る。</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-12 mb-3">
                    <div class="box__solutions text-center h-100 shadow p-2 bg-white pt-4">
                        <span><i class="fa fa-5x fa-commenting-o"></i></span>
                        <h5 class="text-center mt-3">開発者との作業</h5>
                        <p>Hachinetの開発者と作業する時、時間のと通り、予算の通りに案件を進める。</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-12 mb-3">
                    <div class="box__solutions text-center h-100 shadow p-2 bg-white pt-4">
                        <span><i class="fa fa-5x fa-code"></i></span>
                        <h5 class="text-center mt-3">コードを所有する</h5>
                        <p>あなたの完全なソースコードをライセンス、料金、義務無しでリリースする。</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container pt-5">
            <div class="text-center">
                <h3 class="text-body limited">{{trans('landing.faqw')}}</h3>
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
    </section>
@endsection
@section('content-contact')
    <section id="need-contact" class="pb-3">
        <div class="container">
            <div class="row">
                <div class="d-flex mb-3 w-100 box__why">
                    <div class="col-sm-12 col-md-8 col-md-offset-2">
                        <div class="box__why_text__center p-3 mb-4">
                            <h4 class="text-body mb-0">{{trans('service.cobol_contact')}}</h4>
                        </div>
                        <div class="p-3 box__btn_contact justify-content-center text-center">
                            <a class="btn dream-btn more-btn mt-30" href="{{route('contact')}}">{{trans('messages.contact_us')}}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('javascript-custom')
    <script></script>
@endsection
