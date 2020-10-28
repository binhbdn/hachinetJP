@extends('Website.layouts.default')
@section('content')
@include('Website.layouts.breadcrumb')
<section class="about-us-area pt-5 pb-5 clearfix" id="about__us">
    <div class="container">
        <div class="section-heading text-center pb-5">
            <h3 class="bl-text fadeInUp text-uppercase" data-wow-delay="0.3s">{{trans('messages.about_us')}}</h3>
            <p class="fadeInUp font-weight-light" data-wow-delay="0.4s">{{trans('messages.birth_rate_about')}}</p>
            <span class="line"></span>
        </div>
        <div class="clearfix"></div>
        <div class="row align-items-center">
            <div class="col-12 col-lg-6">
                <div class="who-we-contant mt-s">
                    <div class="list-wrap align-items-center">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="side-feature-list-item d-flex align-items-center flex-row mb-2">
                                    <p class="text-why mr-2 mb-0"><i class="fa fa-check"></i></p>
                                    <p class="mb-0">{{trans('messages.about_li_1')}}</p>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="side-feature-list-item d-flex align-items-center flex-row mb-2">
                                    <p class="text-why mr-2 mb-0"><i class="fa fa-check"></i></p>
                                    <p class="mb-0">{{trans('messages.about_li_2')}}</p>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="side-feature-list-item d-flex align-items-center flex-row mb-2">
                                    <p class="text-why mr-2 mb-0"><i class="fa fa-check"></i></p>
                                    <p class="mb-0">{{trans('messages.about_li_3')}}</p>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="side-feature-list-item d-flex align-items-center flex-row mb-2">
                                    <p class="text-why mr-2 mb-0"><i class="fa fa-check"></i></p>
                                    <p class="mb-0">{{trans('messages.about_li_4')}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 ">
                <div class="border fadeInUp p-3 welcome-meter" data-wow-delay="0.7s">
                    <div class="about__slider mb-0">
                        <div>
                            <div class="img-wrap">
                                <img src="{{asset('images/why-hachinet-1.png')}}" alt="">
                            </div>
                        </div>
                        <div>
                            <div class="img-wrap">
                                <img src="{{asset('images/why-hachinet-2.png')}}" alt="">
                            </div>
                        </div>
                        <div>
                            <div class="img-wrap">
                                <img src="{{asset('images/why-hachinet-3.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="company-info-area pt-5 pb-5 clearfix bg-light" id="company__info">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8">
                <h4 class="bl-text fadeInUp mb-4" data-wow-delay="0.3s">{{trans('messages.company_profile')}}</h4>
                <table class="table table-stripped table-hovered table-responsive-sm">
                    <tbody>
                        <tr>
                            <td colspan="2">{{trans('messages.company_name')}}</td>
                            <td colspan="5"><span class="font-weight-bold">{{trans('messages.company_name_text')}}</span></td>
                        </tr>
                        <tr>
                            <td colspan="2">{{trans('messages.establishment')}}</td>
                            <td colspan="5">{{trans('messages.establishment_text')}}</td>
                        </tr>
                        <tr>
                            <td colspan="2">{{trans('messages.representative')}}</td>
                            <td colspan="5">{{trans('messages.representative_text')}}</td>
                        </tr>
                        <tr>
                            <td colspan="2">{{trans('messages.street_address')}}</td>
                            <td colspan="5">
                                <div class="box-address">
                                    <span class="d-block font-weight-bold">{{trans('messages.hachinet_hanoi')}}</span>
                                    <p class="mb-0">2F-B6, GreenStars 234 Pham van Dong, Hanoi, Vietnam</p>
                                    <p>{{trans('messages.tel_text')}}: (+84) 24-6290-0388</p>
                                    <span class="d-block font-weight-bold">{{trans('messages.hachinet_usa')}}</span>
                                    <p class="mb-0" >1301 Jonathan St, Santa Clara, California, 95050</p>
                                    <p>{{trans('messages.tel_text')}}: + 1-650-289-8192</p>
                                    <span class="d-block font-weight-bold">{{trans('messages.hachinet_vinh')}}</span>
                                    <p class="mb-0">87 Minh Khai, Vinh, Nghe An, Việt Nam</p>
                                    <p>{{trans('messages.tel_text')}}: (+84) 24-6290-0388</p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">{{trans('messages.employees')}}</td>
                            <td colspan="5">{{trans('messages.employees_text')}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-12 col-lg-4">
                <div class="d-flex flex-column h-100 align-items-center thumbnail">
                    <img src="{{asset('images/img-ceo.jpg')}}" alt="" style="width: 240px;">
                    <div class="caption text-center pt-2">
                        <h5>TRAN HUY HOANG</h5>
                        <h5>{{trans('messages.representative_text')}}</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="how pt-4 pb-5 relative bub-left  hex-pat-2">

    <div class="container">

        <div class="section-heading text-center pb-5">
            <h3 class="bl-text fadeInUp" data-wow-delay="0.3s">{{trans('messages.business_desc')}}</h3>
            <span class="line"></span>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-12 col-md-6 col-lg-4">
                <!-- Content -->
                <div class="service_single_content box-shadow mb-100 wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                    <!-- Icon -->
                    <div class="how_icon text-center">
                        <img src="{{asset('website/img/services/s1.png')}}" class="colored-icon" alt="">
                    </div>
                    <div class="service_content mt-3">
                        <h6 class="d-block text-center">{{trans('messages.system_integration')}}</h6>
                        <p><i class="fa fa-check-circle-o"></i>&nbsp;{{trans('messages.package_implement')}}</p>
                        <p><i class="fa fa-check-circle-o"></i>&nbsp;{{trans('messages.cloud_migration')}}</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <!-- Content -->
                <div class="service_single_content box-shadow mb-100 wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                    <!-- Icon -->
                    <div class="how_icon text-center">
                        <img src="{{asset('website/img/services/s2.png')}}" class="colored-icon" alt="">
                    </div>
                    <div class="service_content mt-3">
                        <h6 class="d-block text-center">{{trans('messages.software_dev')}}</h6>
                        <p><i class="fa fa-check-circle-o"></i>&nbsp;{{trans('messages.legacy_migration')}}</p>
                        <p><i class="fa fa-check-circle-o"></i>&nbsp;{{trans('messages.software_maintenance')}}</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <!-- Content -->
                <div class="service_single_content box-shadow mb-100 wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                    <!-- Icon -->
                    <div class="how_icon text-center">
                        <img src="{{asset('website/img/services/s3.png')}}" class="colored-icon" alt="">
                    </div>
                    <div class="service_content mt-3">
                        <h6 class="d-block text-center">{{trans('messages.others')}}</h6>
                        <p><i class="fa fa-check-circle-o"></i>&nbsp;{{trans('messages.offshore_dev')}}</p>
                        <p><i class="fa fa-check-circle-o"></i>&nbsp;{{trans('messages.testing')}}</p>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>
<section class="how pt-4 pb-5 relative bub-left hex-pat-2">

    <div class="container">

        <div class="section-heading text-center pb-5">
            <h3 class="bl-text fadeInUp" data-wow-delay="0.3s">{{trans('messages.partner')}}</h3>
            <span class="line"></span>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-12 col-md-6 mb-4">
                <!-- Content -->
                <div class="box-partner box-shadow fadeInUp mb-100 p-2 wow" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                    <!-- Icon -->
                    <div class="img_partner text-center">
                        <a href="#">
                            <img src="{{asset('images/partner/logo-deha.png')}}" class="colored-icon" alt="">
                        </a>
                    </div>
                    <div class="service_content mt-3">
                        <h6 class="d-block text-center text-uppercase">DEHA SOLUTIONS</h6>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 mb-4">
                <!-- Content -->
                <div class="box-partner box-shadow fadeInUp mb-100 p-2 wow" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                    <!-- Icon -->
                    <div class="img_partner text-center">
                        <a href="#">
                            <img src="{{asset('images/partner/logo-omni.png')}}" class="colored-icon" alt="">
                        </a>
                    </div>
                    <div class="service_content mt-3">
                        <h6 class="d-block text-center text-uppercase">OMNI</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-3 col-sm-6 mb-4">
                <!-- Content -->
                <div class="box-partner box-shadow fadeInUp mb-100 p-2 wow" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                    <!-- Icon -->
                    <div class="img_partner text-center">
                        <a href="#">
                            <img src="{{asset('images/partner/logo_viettel2.png')}}" class="colored-icon" alt="">
                        </a>
                    </div>
                    <div class="service_content mt-3">
                        <h6 class="d-block text-center text-uppercase">Viettel</h6>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 col-sm-6 mb-4">
                <!-- Content -->
                <div class="box-partner box-shadow fadeInUp mb-100 p-2 wow" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                    <!-- Icon -->
                    <div class="img_partner text-center">
                        <a href="#">
                            <img src="{{asset('images/partner/ttc-logo.png')}}" class="colored-icon" alt="">
                        </a>
                    </div>
                    <div class="service_content mt-3">
                        <h6 class="d-block text-center text-uppercase">TTC</h6>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 col-sm-6 mb-4">
                <!-- Content -->
                <div class="box-partner box-shadow fadeInUp mb-100 p-2 wow" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                    <!-- Icon -->
                    <div class="img_partner text-center">
                        <a href="#">
                            <img src="{{asset('images/partner/beetsoft-logo.png')}}" class="colored-icon" alt="">
                        </a>
                    </div>
                    <div class="service_content mt-3">
                        <h6 class="d-block text-center text-uppercase">BEETSOFT</h6>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 col-sm-6 mb-4">
                <!-- Content -->
                <div class="box-partner box-shadow fadeInUp mb-100 p-2 wow" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                    <!-- Icon -->
                    <div class="img_partner text-center">
                        <a href="#">
                            <img src="{{asset('images/partner/logo-gmoz.png')}}" class="colored-icon" alt="">
                        </a>
                    </div>
                    <div class="service_content mt-3">
                        <h6 class="d-block text-center text-uppercase">GMO Runsystem</h6>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 col-sm-6 mb-4">
                <!-- Content -->
                <div class="box-partner box-shadow fadeInUp mb-100 p-2 wow" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                    <!-- Icon -->
                    <div class="img_partner text-center">
                        <a href="#">
                            <img src="{{asset('images/partner/itplink-logo.svg')}}" class="colored-icon" alt="">
                        </a>
                    </div>
                    <div class="service_content mt-3">
                        <h6 class="d-block text-center text-uppercase">IT PARTNERS LINK</h6>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 col-sm-6 mb-4">
                <!-- Content -->
                <div class="box-partner box-shadow fadeInUp mb-100 p-2 wow" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                    <!-- Icon -->
                    <div class="img_partner text-center">
                        <a href="#">
                            <img src="{{asset('images/partner/nal-logo.png')}}" class="colored-icon" alt="">
                        </a>
                    </div>
                    <div class="service_content mt-3">
                        <h6 class="d-block text-center text-uppercase">NAL</h6>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 col-sm-6 mb-4">
                <!-- Content -->
                <div class="box-partner box-shadow fadeInUp mb-100 p-2 wow" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                    <!-- Icon -->
                    <div class="img_partner text-center">
                        <a href="#">
                            <img src="{{asset('images/partner/logo-azet.png')}}" class="colored-icon" alt="">
                        </a>
                    </div>
                    <div class="service_content mt-3">
                        <h6 class="d-block text-center text-uppercase">AZET</h6>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 col-sm-6 mb-4">
                <!-- Content -->
                <div class="box-partner box-shadow fadeInUp mb-100 p-2 wow" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                    <!-- Icon -->
                    <div class="img_partner text-center">
                        <a href="#">
                            <img src="{{asset('images/partner/logo-hachix.png')}}" class="colored-icon" alt="">
                        </a>
                    </div>
                    <div class="service_content mt-3">
                        <h6 class="d-block text-center text-uppercase">HACHI-X</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection