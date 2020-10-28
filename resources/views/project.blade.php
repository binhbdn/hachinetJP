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
                            <a href="{{ url('/partner') }}">{{ trans('messages.project') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        
        
        <!--================Builder Image Area =================-->
        <seciton class="builder_area" style="margin-top: -100px;">
            <div class="main_title">
                <h2>{{ trans('messages.out_partner') }}</h2>
                <!-- <p>Who are in extremely love with eco friendly system.</p> -->
            </div>
                <!-- <ul class="nav nav-pills justify-content-center">
                    @foreach($list_category as $key => $item_category)
                      <li class="nav-item"><a class="nav-link project-a {{ $key == '0' ? 'active' : '' }}" data-toggle="tab" href="#menu{{ $item_category->id }}">{{ $item_category->name }}</a></li>
                    @endforeach
                </ul>
                @foreach($list_category as $key => $item_category)
                <div id="menu{{ $item_category->id }}" class="tab-pane fade in {{ $key == '0' ? 'active show' : '' }}">
                    <div class="row m0 builder_inner">
                        @foreach($project as $item)
                        @if($item->id_category == $item_category->id)
                        <div class="builder_item">
                            <div class="builder_item-img">
                                <img src="{{ url('/upload/project') }}/{{ $item->images }}" alt="">
                            </div>
                            <div class="hover">
                                <h4>{{ $item->title }}</h4>
                                <p>{{ $item->description }}</p>
                            </div>
                        </div>
                        @endif
                        @endforeach
                    </div>
                </div>
                 @endforeach -->
            <div class="container">
                <div class="row partner">
                <div class="col-md-6 col-sm-4 col-6  partner-top">
                        <div class="all-partner">
                            <div class="img-partner"><a href="https://www.deha-soft.com/"><img src="{{ asset('web/img/logo-fixed-275x80.png') }}"></a></div>
                            <div class="txt-partner">DEHA SOLUTIONS</div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-4 col-6 partner-top">
                        <div class="all-partner">
                            <div class="img-partner"><a href="http://www.omnint.co.jp/"><img src="{{ asset('web/img/logo-omni.png') }}"  height="100%" ></a></div>
                            <div class="txt-partner">OMNI</div>
                        </div>
                    </div>
                    <div class="d-md-block"></div>
                    <div class="col-md-2 col-sm-4 col-6 all-partner partner-bottom">
                        <div class="img-partner"><a href="https://www.vietteltelecom.vn/"><img src="{{ asset('web/img/logo_viettel2.png') }}"></a></div>
                        <div class="txt-partner">VIETTEL</div>
                    </div>
                    <div class="col-md-2 col-sm-4 col-6 all-partner partner-bottom">
                        <div class="img-partner"><a href="https://ttc-solutions.com/"><img src="{{ asset('web/img/ttc-logo.png') }}" height="100%"></a></div>
                        <div class="txt-partner">TTC</div>
                    </div>
                    <div class="col-md-2 col-sm-4 col-6 all-partner partner-bottom">
                        <div class="img-partner"><a href="https://beetsoft.com.vn/"><img src="{{ asset('web/img/beetsoft-logo.png') }}"></a></div>
                        <div class="txt-partner">BEETSOFT</div>
                    </div>
                    
                    <div class="col-md-2 col-sm-4 col-6 all-partner partner-bottom">
                        <div class="img-partner"><a href="http://www.omnint.co.jp/"><img src="{{ asset('web/img/logo-gmoz.png') }}"></a></div>
                        <div class="txt-partner">GMO Runsystem</div>
                    </div>
                    <div class="col-md-2 col-sm-4 col-6 all-partner partner-bottom">
                        <div class="img-partner"><a href="http://www.itp-link.com/"><img src="http://www.itp-link.com/wp4/wp-content/themes/itp-theme/images/header_logo.svg"></a></div>
                        <div class="txt-partner">IT PARTNERS LINK</div>
                    </div>
                    <div class="d-md-block"></div>
                    <div class="col-md-2"></div>
                    <div class="all-partner col-md-2 col-sm-4 col-6 partner-bottom">
                        <div class="img-partner"><a href="https://nal.vn/"><img src="{{ asset('web/img/cropped-logo11.png') }}"></a></div>
                        <div class="txt-partner">NAL</div>
                    </div>
                    <div class="col-md-2 col-sm-4 col-6 all-partner partner-bottom">
                        <div class="img-partner"><a href="https://www.azet.jp/"><img src="{{ asset('web/img/logo-h60.png') }}" height="90%"></a></div>
                        <div class="txt-partner">AZET</div>
                    </div>
                    <div class="col-md-2 col-sm-4 col-6 all-partner partner-bottom">
                        <div class="img-partner"><a href="https://topica.edu.vn/"><img src="{{ asset('web/img/TOPICAL-logo.jpg') }}"></a></div>
                        <div class="txt-partner">TOPICAL</div>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
        </seciton>
        <!--================End Builder Image Area =================-->
        


@endsection

@push('js')

@endpush
