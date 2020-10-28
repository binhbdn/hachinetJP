@extends('Website.layouts.landing_layout')
@section('custom-css')
<link rel="stylesheet" href="{{ asset('landing/angular/css/style.css') }}">
<style></style>
@endsection
@section('content')

    <!-- ##### Welcome Area Start ##### -->
    <section class="hero-section main-page section-padding" id="home">
       
        <!-- Hero Content -->
        <div class="hero-section-content">
            
            <div class="container ">
                <div class="row align-items-center">
                    <!-- Welcome Content -->
                    <div class="col-12 col-lg-6 col-md-12">
                        <div class="welcome-content">
                            <h1 class="fadeInUp bold" data-wow-delay="0.2s">Angularアウトソーシン開発サービス</h1>
                            <p class="w-text fadeInUp" data-wow-delay="0.3s">ビジネスネットワークアプリケーションを開発する為、Angularの開発者を雇う。</p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 col-md-12 ">
                        <div class="mt-30 fadeInUp relative" style="" data-wow-delay="0.5s">
                            <img src="{{ asset('landing/angular/img/core-img/banner.png') }}" alt="" class="img-responsive center-block">
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Welcome Area End ##### -->

    <div class="clearfix"></div>

    <section class="about-us-area section-padding-70-70">
        
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-3 col-md-12 ">
                   
                    <div class="col-xs-12">
                        <div class="article special box-shadow">
                            <h3 class="article__title">20+　開発者のプロフィール</h3> 
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="article special box-shadow">
                            <h3 class="article__title">4年間以上の開発経験</h3> 
                        </div>
                    </div>
                    
                </div>

                <div class="col-12 col-lg-3 col-md-12">
                    
                    <div class="col-xs-12">
                        <div class="article special box-shadow mts-50">
                            <h3 class="article__title">24/7<br>サポートタイム</h3> 
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="article special box-shadow">
                            <h3 class="article__title">最適なソリューション</h3> 
                        </div>
                    </div>
                    
                </div>
                
                <div class="col-12 col-lg-6 offset-lg-0 col-md-10 offset-md-1">
                    <div class="who-we-contant mt-s">
                        
                        <h4 class="bl-text fadeInUp bold" data-wow-delay="0.3s">時間や費用を節約する為、ベトナムHachinetのAngularの開発チームを選ぶ</h4>
                        <p class="fadeInUp" data-wow-delay="0.4s">あなたがAngularの開発サービスを探していれば、Hachinetへようこそ。
Hachinetが優れたAngularの開発者を提供しています。我々のオフィスで、お客様の満足性を満たす開発チームを行い、開発を進めさせて頂きます。</p>
                        <p class="fadeInUp" data-wow-delay="0.5s">我々の開発者はMean.io, Bootstrap, Protractor, LumX,などのAngularのフレームワークが得意です。</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Start what we do section -->
    <section class="what-we-do features section-padding-0-70 hex-pat-1" id="services">
      <div class="container">
         <div class="section-heading text-center">
            <h2 class=" bl-text limited">Hachinetを選ぶ理由？</h2>
            <p class=" fadeInUp" >Hachinetはベトナムにおける最も活発なソフトウェア会社の一つです。
ベトナムのアウトソーシンサービスで企業や会社のデジタルソリューションを提供しています。</p>
        </div>
        <div class="clearfix"></div>

            <div class="row">
                <div class="col-12 col-md-6 col-lg-4">
                    <!-- Content -->
                    <div class="service_single_content text-center mb-100 fadeInUp" data-wow-delay="0.2s">
                        <!-- Icon -->
                        <div class="service_icon max">
                            <img src="{{ asset('landing/angular/img/services/w1.png')}}" alt="">
                        </div>
                        <h6 class="d-blue bold">優遇単価</h6>
                        <p>3ヶ月以上</p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <!-- Content -->
                    <div class="service_single_content text-center mb-100 fadeInUp" data-wow-delay="0.3s">
                        <!-- Icon -->
                        <div class="service_icon max">
                            <img src="{{ asset('landing/angular/img/services/w2.png')}}" alt="">
                        </div>
                        <h6 class="d-blue bold">100% 明確</h6>
                        <p>単価  &　費用</p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <!-- Content -->
                    <div class="service_single_content text-center mb-100 fadeInUp" data-wow-delay="0.4s">
                        <!-- Icon -->
                        <div class="service_icon max">
                            <img src="{{ asset('landing/angular/img/services/w3.png')}}" alt="">
                        </div>
                        <h6 class="d-blue bold">勤務タイム</h6>
                        <p>コミュニケーションが簡易</p>
                    </div>
                </div>

            </div>
       
      </div>
    </section>
    <!-- End what we do section -->

    <!-- ##### About Us Area Start ##### -->
    <section class="about-us-area section-padding-0-100 clearfix" id="about">
        
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-6 ">
                    <div class="welcome-meter fadeInUp" data-wow-delay="0.7s">
                        <img src="{{ asset('landing/angular/img/core-img/about.png')}}"  alt="">
                    </div>
                </div>
                
                <div class="col-12 col-lg-6">
                    <div class="who-we-contant mt-s">
                        
                        <h4 class="bl-text fadeInUp" data-wow-delay="0.3s">独自の機能</h4>
                        <div class="list-wrap align-items-center">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="side-feature-list-item">
                                        <img src="{{ asset('landing/angular/img/features/feature-1.svg') }}" class="check-mark-icon" alt="">
                                        <div class="foot-c-info">対応が良い</div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="side-feature-list-item">
                                        <img src="{{ asset('landing/angular/img/features/feature-2.svg') }}" class="check-mark-icon" alt="">
                                        <div class="foot-c-info">最新なデザイン</div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="side-feature-list-item">
                                        <img src="{{ asset('landing/angular/img/features/feature-3.svg') }}" class="check-mark-icon" alt="">
                                        <div class="foot-c-info">多様端末でのテスティング </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="side-feature-list-item">
                                        <img src="{{ asset('landing/angular/img/features/feature-4.svg') }}" class="check-mark-icon" alt="">
                                        <div class="foot-c-info">ユーザー体験が良い</div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="side-feature-list-item">
                                        <img src="{{ asset('landing/angular/img/features/feature-5.svg') }}" class="check-mark-icon" alt="">
                                        <div class="foot-c-info">想像的なレイアウト</div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="side-feature-list-item">
                                        <img src="{{ asset('landing/angular/img/features/feature-6.svg') }}" class="check-mark-icon" alt="">
                                        <div class="foot-c-info">100% 対応</div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="side-feature-list-item">
                                        <img src="{{ asset('landing/angular/img/features/feature-5.svg') }}" class="check-mark-icon" alt="">
                                        <div class="foot-c-info">ソーシャルメディアに簡単にアクセス</div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="side-feature-list-item">
                                        <img src="{{ asset('landing/angular/img/features/feature-5.svg') }}" class="check-mark-icon" alt="">
                                        <div class="foot-c-info">多言語</div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-1 offset-lg-0"></div>

            </div>
        </div>
    </section>
    <!-- ##### About Us Area End ##### -->

    <section class="what-we-do features section-padding-0-70 hex-pat-1" id="services">
      <div class="container">
         <div class="section-heading text-center">
            <h2 class=" bl-text limited">プランの選択</h2>
        </div>
        <div class="clearfix"></div>

            <div class="row">
                <div class="col-12 col-md-6 col-lg-4">
                    <!-- Content -->
                    <div class="service_single_content text-center mb-100 fadeInUp" data-wow-delay="0.2s">
                        <div class="pricing-table position-relative text-center rounded-lg transition ">
                            <span class="badge badge-pill badge-warning font-weight-medium mb-3 py-2 px-4">レベル 2</span>
                            <div class="h1 text-dark">15万円 <span class="paragraph text-lowercase"> / 月</span></div>
                            <h5 class="mb-4 font-weight-normal text-color">小企業に最適</h5>
                            <hr>
                            <ul class="list-unstyled my-4">
                              <li class="my-3">ラボ契約</li>
                              <li class="my-3">3ヶ月以下</li>
                            </ul>
                            <a href="#" class="btn btn-outline-warning">プラン選択</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <!-- Content -->
                    <div class="service_single_content text-center mb-100 fadeInUp" data-wow-delay="0.3s">
                        <div class="pricing-table position-relative text-center rounded-lg transition">
                            <span class="badge badge-pill badge-warning font-weight-medium mb-3 py-2 px-4">レベル 3</span>
                            <div class="h1 text-dark">20万円 <span class="paragraph text-lowercase"> / 月</span></div>
                            <h5 class="mb-4 font-weight-normal text-color">中企業に最適</h5>
                            <hr>
                            <ul class="list-unstyled my-4">
                              <li class="my-3">ラボ契約</li>
                              <li class="my-3">3-6ヶ月</li>
                            </ul>
                            <a href="#" class="btn btn-outline-warning">プラン選択</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <!-- Content -->
                    <div class="service_single_content text-center mb-100 fadeInUp" data-wow-delay="0.4s">
                        <!-- Icon -->
                        <div class="pricing-table position-relative text-center rounded-lg transition ">
                            <span class="badge badge-pill badge-warning font-weight-medium mb-3 py-2 px-4">レベル 4</span>
                            <div class="h1 text-dark">25万円 <span class="paragraph text-lowercase"> / 月</span></div>
                            <h5 class="mb-4 font-weight-normal text-color">大企業に最適</h5>
                            <hr>
                            <ul class="list-unstyled my-4">
                              <li class="my-3">ラボ契約</li>
                              <li class="my-3">6ヶ月以上</li>
                            </ul>
                            <a href="#" class="btn btn-outline-warning">プラン選択</a>
                        </div>
                    </div>
                </div>

            </div>
      </div>
    </section>
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