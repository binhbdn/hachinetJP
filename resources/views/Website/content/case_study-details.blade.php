@extends('Website.layouts.default')
@section('content')
@include('Website.layouts.breadcrumb')
<section class="products_area pt-5 pb-5" id="products">
    <div class="container">
        <div class="row">
            <div class="col-7">
                <h2 class="title">{{$product->productTitle}}</h2>
            </div>
            <div class="col-5 text-right">
                <div class="fb-like" data-href="{{route('case_study_read', $product->productSlug)}}" data-width="" data-layout="button_count" data-action="like" data-size="small" data-share="true"></div>
            </div>
            <div class="clearfix d-block mt-2 mb-2"></div>
            <div class="col-12 col-md-6">
                <div class="card border-0">
                    <div class="card-body">
                        <div class="w-100 product-image clearfix">
                            <div class="sp-wrap">
                                @foreach ($product->productImages as $image)
                                <a href="{{asset('upload/'.$image)}}" title="{{basename($image)}}">
                                    <img src="{{asset('upload/'.$image)}}" alt="{{basename($image)}}">
                                </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="card border-0">
                    <div class="card-body">
                        <table class="table-bordered table-stripped table-responsive-sm">
                            <tbody>
                                <tr>
                                    <th class="p-2">{{trans('messages.prod_industry')}}</th>
                                    <td class="p-2">{{$product->productIndustry}}</td>
                                </tr>
                                <tr>
                                    <th class="p-2">{{trans('messages.prod_overview')}}</th>
                                    <td class="p-2">{{$product->productOverview}}</td>
                                </tr>
                                <tr>
                                    <th class="p-2">{{trans('messages.prod_function')}}</th>
                                    <td class="p-2">
                                        @php
                                            echo $product->productContent;
                                        @endphp
                                    </td>
                                </tr>
                                <tr>
                                    <th class="p-2">{{trans('messages.prod_responsibility')}}</th>
                                    <td class="p-2">{{$product->productResponsibility}}</td>
                                </tr>
                                <tr>
                                    <th class="p-2">{{trans('messages.prod_tech')}}</th>
                                    <td class="p-2">{{$product->productTech}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="clearfix d-block mt-2 mb-2"></div>
            <div class="col-12">
                <div class="form-group mb-0 text-center">
                    <a href="{{route('case_study')}}" class="btn dream-btn more-btn fadeInUp mt-30" 
                    data-wow-delay="0.6s"><i class="fa fa-reply"></i>&nbsp;{{trans('messages.back_to_list')}}</a>
                </div>
            </div>
        </div>  
    </div>
</section>
@endsection
@section('javascript-custom')
<script>
    $('.sp-wrap').smoothproducts();
</script>
@endsection