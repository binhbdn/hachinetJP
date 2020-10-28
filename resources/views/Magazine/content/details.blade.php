@extends('Magazine.layouts.d_default')
@section('content')
<div class="container-fluid">
    <div class="row page-titles">
        <div class="col-md-12 col-12 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item font-medium"><a href="{{route('news')}}" class="text-warning">{{trans('messages.top_magazine')}}</a></li>
                <li class="breadcrumb-item active">{{$posts->postTitle}}</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="card-title blogs-title">{{$posts->postTitle}}</h1>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-md-6 col-6 text-left mb-2">
                                    <p class="font-13"><i class="mdi mdi-calendar-clock"></i>&nbsp;{{$posts->createdAt}}</p>
                                </div>
                                <div class="col-md-6 col-6 text-right mb-2">
                                    <div class="fb-like" data-href="{{route('magazine.show', $posts->postSlug)}}" data-width="" data-layout="button_count" data-action="like" data-size="small" data-share="true"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-image__post text-center mb-2">
                        <img src="{{asset('upload/'.$posts->postThumb)}}" alt="{{$posts->postTitle}}">
                    </div>
                    <div class="row mt-4">
                        <div class="col-12 col-md-8 posts-content">
                            @php
                                echo $posts->postContent;
                            @endphp
                            <div class="form-group mb-1 text-left">
                                @php
                                    $arrTags = explode(',', $posts->postTags);
                                    foreach ($arrTags as $val) {
                                        echo '<a href="https://hachinet.com/blogs/search?s='.$val.'" title="'.$val.'" class="badge text-black mr-1 p-2 badge-pill badge-warning">'.$val.'</a>';
                                    }
                                @endphp
                                
                            </div>
                            <div class="form-group mt-3 text-right">
                                <div class="fb-like" data-href="{{route('magazine.show', $posts->postSlug)}}" data-width="" data-layout="button_count" data-action="like" data-size="small" data-share="true"></div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 border-left">
                            @include('Magazine.layouts.subscribe')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 