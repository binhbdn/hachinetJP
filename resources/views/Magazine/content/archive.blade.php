@extends('Magazine.layouts.default')
@section('content')
<div class="container-fluid">
    <div class="row page-titles">
        <div class="col-md-12 col-12 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item font-medium"><a href="{{route('news')}}" class="text-warning">{{trans('messages.top_magazine')}}</a></li>
                <li class="breadcrumb-item active">{{$date_archive}}</li>
            </ol>
        </div>
    </div>
    <div class="row">
        @if(empty($posts))
        <div class="col-12">
            <p class="font-20 font-medium text-body text-center">Not found result</p>
            <div class="row">
                @foreach ($date as $d)
                    <div class="col-md-3 col-sm-4 mb-2">
                        <a href="{{route('magazine.archive', [date('Y', $d['unix']), date('m', $d['unix'])])}}" title="{{$d['date']}}" class="btn btn-warning w-100"><i class="ti-angle-double-right"></i>&nbsp;{{$d['date']}}</a>
                    </div>
                @endforeach
            </div>
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