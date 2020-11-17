@extends('Magazine.layouts.d_default')
@section('content')
<div class="container">
    <div class="row page-titles mt-3 pb-0">
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
                           @if ($posts->postTableContent != NULL)
                            <div class="form-group mb-4 text-left table-contents">
                                <div>
                                    <b class="font-bold">{{ trans('messages.table_contents') }}</b>
                                    <span>
                                        <input type="checkbox" name="toggle" id="toggle" data-toggle="collapse" href="#collapseExample"  aria-expanded="false" aria-controls="collapseExample"/>
                                        <label class="fs-8" for="toggle"></label>
                                    </span>
                                </div>
                                <div class="collapse body-content" id="collapseExample">
                                    @php
                                        echo $posts->postTableContent;
                                    @endphp
                                </div>
                            </div> 
                           @endif
                            @php
                                echo $posts->postContent;
                            @endphp
                            <div class="form-group mb-1 text-left">
                                @php
                                    $arrTags = explode(',', $posts->postTags);
                                    foreach ($arrTags as $val) {
                                        if (Session::get('locale') == 'jp'){ 
                                            echo '<a href="https://hachinet.jp/blogs/search?s='.$val.'" title="'.$val.'" class="badge text-black mr-1 p-2 badge-pill tag-news badge-warning">'.$val.'</a>';
                                        }
                                        else {
                                            echo '<a href="https://hachinet.com/blogs/search?s='.$val.'" title="'.$val.'" class="badge text-black mr-1 p-2 badge-pill tag-news badge-warning">'.$val.'</a>';
                                        }
                                    }
                                @endphp
                                
                            </div>
                            {{-- <div class="form-group mt-3 text-right">
                                <div class="fb-like" data-href="{{route('magazine.show', $posts->postSlug)}}" data-width="" data-layout="button_count" data-action="like" data-size="small" data-share="true"></div>
                            </div> --}}
                        </div>
                        <div class="col-12 col-md-4 border-left">
                            <div class="card mb-0">
                                <div class="card-header bg-warning border-radius-0">
                                    <h4 class="card-title mb-0">{{trans('messages.new_post')}}</h4>
                                </div>
                                <div class="pr-0 pl-0 mb-2 mt-2">
                                    @foreach ($top as $item)
                                        <div class="mb-1 mt-1 d-flex box-news__hot">
                                            <div class="col-md-5 box__thumbnail position-relative h-auto">
                                                <a href="{{route('magazine.show', $item->postSlug)}}" title="{{$item->postTitle}}" style="background-image: url('{{asset('upload/'.$item->postThumb)}}')"></a>
                                            </div>
                                            <div class="col-md-7">
                                                <a class="el-2 text-body" href="{{route('magazine.show', $item->postSlug)}}" class="font-weight-bold">
                                                    {{$item->postTitle}}
                                                </a>
                                                <p class="font-13"><i class="mdi mdi-calendar-clock"></i>&nbsp;{{$item->createdAt}}</p>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            @include('Magazine.layouts.subscribe')
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="col-md-12">
                    <div class="fb-comments" data-href="{{route('magazine.show', $posts->postSlug)}}" data-numposts="5" data-width="100%" ></div>
               </div>
            </div>
        </div>
    </div>
</div>
@endsection 