@extends('Website.layouts.default')
@section('content')
@include('Website.layouts.breadcrumb')
<div class="faq-timeline-area transparent pb-5 pt-5" id="faq">
    <div class="container">
        <div class="section-heading text-center mb-4">
            <h2 class="d-blue bold fadeInUp" data-wow-delay="0.3s"> Frequently Questions</h2>
        </div>
        <div class="row">
            <div class="col-12 col-lg-6 offset-lg-0 col-md-8 offset-md-2 col-sm-10 offset-sm-1">
                <img src="{{asset('website/img/about3.svg') }}" alt="" class="center-block img-responsive">
            </div>
            <div class="col-12 col-lg-6 col-md-12">
                <div class="dream-faq-area mt-s ">
                    <dl style="margin-bottom:0">
                        @foreach ($faqs as $faq)
                        <dt class="wave fadeInUp" data-wow-delay="0.2s">{{$faq->faqsTitle}}</dt>
                        <dd class="fadeInUp" data-wow-delay="0.3s">
                            <p>
                                @php
                                    echo $faq->faqsContent;
                                @endphp
                            </p>
                        </dd>
                        @endforeach
                    </dl>
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection