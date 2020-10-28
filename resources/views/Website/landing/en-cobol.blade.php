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
                        <h1 class="title text-body mb-5">COBOL DEVELOPMENT</h1>
                        <p class="text-body">Being used in business, finance, and administrative systems for companies, COBOL is widely used in legacy applications, which makes it not as popular as modern technologies like Java, PHP or .NET. As of 2002</p>
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
                    <h2 class="title-why-choose text-center">Why choose Hachinet for your COBOL projects</h2>
                </div>
                <div class="col-md-10 col-md-offset-1">
                    <p class="text-center text-body">Hachinet provides COBOL development & maintenance services, backed by an experienced
                        team with in-depth knowledge of the technology. Our COBOL development professionals will
                        provide analysis, consultancy, development and application deployment solutions
                        that will advance your businesses process.</p>
                </div>
                <div class="clearfix"></div>
                <div class="d-flex mb-3 w-100 box__why">
                    <div class="col-md-7 col-sm-12">
                        <div class="box__why_text__left p-3">
                            <p class="text-body mb-0">past & current projects that still provide an inspiring challenge for our professionals</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-md-offset-1">
                        <div class="box__why_text__right position-left p-3 justify-content-center text-center">
                            <h3>Experienced<br />Developers</h3>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="d-flex mb-3 w-100 box__why">
                    <div class="col-md-4 col-sm-12">
                        <div class="box__why_text__right p-3 justify-content-center text-center">
                            <h3>Maintenance<br />& Support</h3>
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-12 col-md-offset-1">
                        <div class="box__why_text__left position-left p-3">
                            <p class="text-body  mb-0">you’re always sure that your requests are solved by a team that has a deeper understanding of the application, providing proper communication and technical insight</p>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="d-flex mb-3 w-100 box__why">
                    <div class="col-md-7 col-sm-12">
                        <div class="box__why_text__left p-3">
                            <p class="text-body mb-0">prior experience with COBOL application analysis will reduce any compatibillity issues, while ensuring budget compliance</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-md-offset-1">
                        <div class="box__why_text__right position-left p-3 justify-content-center text-center">
                            <h3>On Time<br />& On Budget</h3>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="d-flex mb-3 w-100 box__why">
                    <div class="col-md-4 col-sm-12">
                        <div class="box__why_text__right p-3 justify-content-center text-center">
                            <h3>Seamless Communication</h3>
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-12 col-md-offset-1">
                        <div class="box__why_text__left position-left p-3">
                            <p class="text-body mb-0">our customers are always free to contact us and their team at Hachinet, through our diverse communication channels like GoToMeeting, WebEx, Skype and other tools.</p>
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
                    <h2 class="title_service_provided text-center text-white">The COBOL services provided by Hachinet</h2>
                </div>
            </div>
            <div class="clearfix d-block mt-3"></div>
            <div class="row">
                <div class="col-md-3 col-sm-6 col-6 mb-3">
                    <div class="box__icon">
                        <span class="d-flex h-50 m-auto w-50 icon-development"></span>
                        <h3 class="text-center mt-3">Application Development</h3>
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
                        <h3 class="text-center mt-3">Application Maintenance</h3>
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
                        <h3 class="text-center mt-3">Application Deployment</h3>
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
                        <h3 class="text-center mt-3">Custom Reporting Tools</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="product_solutions" class="pt-3 pb-5" style="background-image: url({{asset('landing/cobol/images/bg-solutions.svg')}})">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="text-center">COBOL Development Solutions</h3>
                </div>
            </div>
            <div class="clearfix w-100 d-flex mt-2"></div>
            <div class="row">
                <div class="col-md-3 col-sm-6 col-12 mb-3">
                    <div class="box__solutions text-center h-100 shadow p-2 bg-white pt-4">
                        <span><i class="fa fa-5x fa-question-circle-o"></i></span>
                        <h5 class="text-center mt-3">Consult Our Experts</h5>
                        <p>Contact our industry and technology solutions experts for a personalized consultation.</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-12 mb-3">
                    <div class="box__solutions text-center h-100 shadow p-2 bg-white pt-4">
                        <span><i class="fa fa-5x fa-line-chart"></i></span>
                        <h5 class="text-center mt-3">Get Daily Insights</h5>
                        <p>We ensure daily, weekly, and on-demand communications, always during your business hours.</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-12 mb-3">
                    <div class="box__solutions text-center h-100 shadow p-2 bg-white pt-4">
                        <span><i class="fa fa-5x fa-commenting-o"></i></span>
                        <h5 class="text-center mt-3">Work with Developers</h5>
                        <p>When you work with COBOL developers from Hachinet, you receive built-in benefits including integrated QA and on-time, on-budget project management.</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-12 mb-3">
                    <div class="box__solutions text-center h-100 shadow p-2 bg-white pt-4">
                        <span><i class="fa fa-5x fa-code"></i></span>
                        <h5 class="text-center mt-3">Own Your Code</h5>
                        <p>We release your complete source code with no licensing, no fees, and no obligations!</p>
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
