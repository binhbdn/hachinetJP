@extends('Magazine.layouts.default')
@section('content')
<div class="container-fluid">
    <div class="row page-titles">
        <div class="col-md-12 col-12 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item font-medium"><a href="{{route('news')}}" class="text-warning">{{trans('messages.top_magazine')}}</a></li>
                <li class="breadcrumb-item active">{{trans('messages.search')}}</li>
            </ol>
        </div>
        <div class="clearfix"></div>
        <div class="col-12">
            <p class="font-24 font-medium text-body text-center">{{trans('messages.search_result')}} &nbsp;:&nbsp;&nbsp;"<span class="text-info font-20">{{$text_search}}</span>"</p>
        </div>
    </div>
    <div class="row">
        @if(empty($posts))
        <div class="col-12">
            <p class="font-20 font-medium text-body text-center">{{trans('messages.not_found')}}</p>
        </div>
        @endif
        @foreach ($posts as $post)
        <div class="col-sm-4 col-md-4 col-12 mb-3">
            <div class="box-news__hot">
                <div class="box__thumbnail position-relative">
                    <a href="{{route('magazine.show', $post->postSlug)}}" title="{{$post->postTitle}}" class="a__box" style="background-image: url('{{asset('upload/'.$post->postThumb)}}')"></a>
                    <h5 class="mb-0 position-absolute title_news w-100 p-3">
                        <a href="{{route('magazine.show', $post->postSlug)}}" class="font-weight-bold  text-body">
                            {{$post->postTitle}}
                        </a>
                        <span class=" font-13"><i class="mdi mdi-calendar-clock"></i>&nbsp;{{$post->createdAt}}</span>
                    </h5>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection