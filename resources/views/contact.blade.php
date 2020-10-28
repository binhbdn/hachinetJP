@extends('layouts.app')

@section('content')
        <!--================Home Banner Area =================-->
        <section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
                <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
                <div class="container">
                    <div class="banner_content text-center">
                        <div class="page_link">
                            <a href="{{ url('/home') }}">{{ trans('messages.home') }}</a>
                            <a href="{{ url('/contact') }}">{{ trans('messages.contact') }}</a>
                        </div>
                        <h2>{{ trans('messages.contact') }}</h2>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        
        <!--================Contact Area =================-->
    <section id="company_intro" style="margin-bottom: 50px;">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-xs-12">
                    <h1 style="font-size: 22px">
                        会社概要
                    </h1>
                    <table class="table">
                        <tbody>
                        <tr>
                            <td class="l_col2">社名</td>
                            <td>株式会社<b>HACHINET</b></td>
                        </tr>
                        <tr>
                            <td class="l_col2">設立</td>
                            <td>2018年1月</td>
                        </tr>
                        <tr>
                            <td class="l_col2">代表者</td>
                            <td>代表取締役社長　TRAN HUY HOANG</td>
                        </tr>
                        <tr>
                            <td class="l_col2">住所</td>
                            <td>
                                <strong>HACHINETベトナム</strong><br>
                                2F - B6 , GreenStars 234 Pham van Dong , Hanoi , Vietnam<br>
                                Tel: (+84) 24-6290-0388
                                <br><br>
                                <strong>HACHINET米国</strong><br>
                                1301 Jonathan St, Santa Clara, California - CODE : 95050<br>
                                Tel: +1-650-289-8192
                                <br><br>
                                <strong>Hachinet Vinh</strong><br>
                                87 Minh Khai , Vinh , Nghe An , Việt Nam<br>
                                Tel: (+84) 24-6290-0388
                                <br><br>
                            </td>
                        </tr>
                        <tr>
                            <td class="l_col2">従業員数</td>
                            <td>40名(2018/05/1現在)</td>
                        </tr>
                        <tr>
                            <td class="l_col2">事業内容</td>
                            <td><strong>システムインテグレーションサービス</strong><br>
                                – パッケージ実装<br>
                                – クラウドコンサルティング及びマイグレーション<br>
                                <strong>ソフトウェア開発サービス</strong><br>
                                – オフショア開発<br>
                                – レガシーマイグレーション<br>
                                – ソフトウェアのメンテナンス
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-sm-4 col-xs-12">
                    <div class="thumbnail">
                        <img src="{{asset('web/img/ceo.png')}}" alt="">
                        <div class="caption">
                            <h5>代表取締役社長　TRAN HUY HOANG</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="content">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xs-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.4946561722927!2d105.77781461541106!3d21.052896792328756!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab4b54698fad%3A0xdc6d73d2030fac0d!2sHachinet!5e0!3m2!1svi!2s!4v1562312402060!5m2!1svi!2s" width="100%" height="595px" frameborder="0" style="border-radius:6px;" allowfullscreen></iframe>
                    <!-- <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
                    <div style="overflow:hidden;height:500px;width:100%;">
                        <div id="gmap_canvas" style="height:500px;width:100%;"></div>
                        <style>
                            #gmap_canvas img {
                                max-width: none !important;
                                background: none !important
                            }
                        </style>
                        <a class="google-map-code" href="http://www.trivoo.net" id="get-map-data">trivoo</a></div>
                    <script type="text/javascript">
                        function init_map() {
                            var myOptions = {
                                zoom: 16,
                                center: new google.maps.LatLng(21.0528918,105.7794561),
                                mapTypeId: google.maps.MapTypeId.ROADMAP
                            };
                            map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);
                            marker = new google.maps.Marker({
                                map: map,
                                position: new google.maps.LatLng(21.0528918,105.7794561)
                            });
                            infowindow = new google.maps.InfoWindow({
                                content: "<b>株式会社Hachinet</b><br/>234 Pham Van Dong<br/> Hanoi"
                            });
                            google.maps.event.addListener(marker, "click", function () {
                                infowindow.open(map, marker);
                            });
                            infowindow.open(map, marker);
                        }
                        google.maps.event.addDomListener(window, 'load', init_map);
                    </script> -->
                </div>
                <div class="col-md-6 col-xs-12">
                    <h2  style="font-size: 18px" class="pageTitle">お問合わせ</h2>
                    <!-- Form itself -->
                    <p>以下の内容を参考にご記載ください</p>
                    <p>・ご依頼の背景や目的</p>
                    <p>・弊社に期待すること</p>
                    <p>・機能や仕様の概要</p>
                    <p>・ご依頼の開発範囲 (企画・設計・デザイン・実装・運用)</p>
                    <!-- Form itself -->
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="control-group">
                            <div class="controls">
                                <input type="text" class="form-control" placeholder="会社名" id="name" required
                                       data-validation-required-message="Please enter company name"/>
                                <p class="help-block"></p>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="controls">
                                <input type="email" class="form-control" placeholder="メールアドレス" id="email" required
                                       data-validation-required-message="Please enter your email"/>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="controls">
                                <textarea rows="10" cols="100" class="form-control" placeholder="お問合わせ内容" id="message"
                                          required data-validation-required-message="Please enter your message"
                                          minlength="5" data-validation-minlength-message="Min 5 characters"
                                          maxlength="999" style="resize:none; margin-top: 17px;"></textarea>
                            </div>
                        </div>
                        <div id="success"></div>
                        <!-- For success/fail messages -->
                        <div class="control-group">
                            <div class="controls" style="text-align: center; padding: 10px">
                                <button  class="btn btn-primary">送信</button>
                            </div>
                        </div>
                        <br/>
                    </form>
                </div>
            </div>
        </div>
    </section>
        <!--================Contact Area =================-->


@endsection

@push('js')

@endpush
