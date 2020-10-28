@extends('Website.layouts.default')
@section('content')
@include('Website.layouts.breadcrumb')
<section class="products_area pt-5 pb-5" id="products">
    <div class="d-block pb-4"></div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-12">
                <div class="row">
                    @foreach ($products as $product)
                    <div class="col-12 col-md-4 col-sm-6 mb-3">
                        <div class="single-product-area wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                            <!-- Post Thumbnail -->
                            <div class="product_thumbnail mb-2 position-relative">
                                <a href="{{route('case_study_read', $product->productSlug)}}" title="{{$product->productTitle}}" class="shadow a__box h-100 w-100 d-block"  style="background-image: url('{{asset('upload/'.$product->productImages[0])}}')"></a>
                            </div>
                            <!-- Post Content -->
                            <div class="product-content pt-2">
                                <a href="{{route('case_study_read', $product->productSlug)}}" class="post-title">
                                    <h5>{{$product->productTitle}}</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@endsection