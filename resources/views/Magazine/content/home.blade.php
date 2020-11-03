@extends('Magazine.layouts.default')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 mt-3">
            <div class="row">
                @foreach ($top as $key => $post)
                    @if ($key > 5)
                        @break
                    @endif
                    @if ($key == 0) 
                    <div class="col-sm-4 col-md-6 col-12 mb-3">
                        <div class="box-news__hot">
                            <div class="box__thumbnail position-relative">
                                <a href="{{route('magazine.show', $post->postSlug)}}" title="{{$post->postTitle}}" class="a__box" style="background-image: url('{{asset('upload/'.$post->postThumb)}}')"></a>
                                <h1 class="mb-0 position-absolute title_news w-100 p-3">
                                    <a href="{{route('magazine.show', $post->postSlug)}}" class="font-weight-bold  text-body">
                                        {{$post->postTitle}}
                                    </a>
                                    <span class=" font-13"><i class="mdi mdi-calendar-clock"></i>&nbsp;{{$post->createdAt}}</span>
                                </h1>
                            </div>
                        </div>
                    </div>
                    @elseif ($key == 1 || $key == 2) 
                    <div class="col-sm-4 col-md-3 col-12 mb-3 pl-md-0">
                        <div class="box-news__hot">
                            <div class="box__thumbnail position-relative">
                                <a href="{{route('magazine.show', $post->postSlug)}}" title="{{$post->postTitle}}" class="a__box" style="background-image: url('{{asset('upload/'.$post->postThumb)}}')"></a>
                                <h2 class="mb-0 position-absolute title_news w-100 p-3">
                                    <a href="{{route('magazine.show', $post->postSlug)}}" class="font-weight-bold  text-body">
                                        {{$post->postTitle}}
                                    </a>
                                    <span class=" font-13"><i class="mdi mdi-calendar-clock"></i>&nbsp;{{$post->createdAt}}</span>
                                </h2>
                            </div>
                        </div>
                    </div>
                    @else
                    <div class="col-sm-4 col-md-4 col-12 mb-3 {{$key == 4 || $key == 5 ? 'pl-md-0' : ''}}">
                        <div class="box-news__hot">
                            <div class="box__thumbnail position-relative">
                                <a href="{{route('magazine.show', $post->postSlug)}}" title="{{$post->postTitle}}" class="a__box" style="background-image: url('{{asset('upload/'.$post->postThumb)}}')"></a>
                                <h2 class="mb-0 position-absolute title_news w-100 p-3">
                                    <a href="{{route('magazine.show', $post->postSlug)}}" class="font-weight-bold  text-body">
                                        {{$post->postTitle}}
                                    </a>
                                    <span class=" font-13"><i class="mdi mdi-calendar-clock"></i>&nbsp;{{$post->createdAt}}</span>
                                </h2>
                            </div>
                        </div>
                    </div>
                    @endif
                @endforeach
            </div>
            <div class="clearfix mt-3"></div>
            <div class="card list_blogs">
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-sm-6 col-md-8 col-12">
                            <div class="card list_blogs">
                                <div class="card-body">
                                @foreach ($posts as $key => $post)
                                    <div class="border-bottom box-news__list mb-3 pb-3 row">
                                        <div class="col-md-4 col-12 col-sm-6">
                                            <div class="box__thumbnail h-100">
                                                <a href="{{route('magazine.show', $post->postSlug)}}" title="{{$post->postTitle}}" class="a__box" style="background-image: url('{{asset('upload/'.$post->postThumb)}}')"></a>
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-12 col-sm-6">
                                            <h3 class="mb-0 title_news w-100 pl-3 mb-1">
                                                <a href="{{route('magazine.show', $post->postSlug)}}" title="{{$post->postTitle}}" class="font-weight-bold text-body a-title__list">
                                                    {{$post->postTitle}}
                                                </a>
                                            </h3>
                                            <p class="pl-3 mb-2 font-13"><i class="mdi mdi-calendar-clock"></i>&nbsp;{{$post->createdAt}}</p>
                                            <p class="text-body font-13 pl-3 text__desc mb-2">{{$post->postDesc}}</p>
                                            <p class="mb-0 text-right"><a href="{{route('magazine.show', $post->postSlug)}}" title="{{$post->postTitle}}" class="btn btn-warning text-body">{{trans('messages.read_more')}}</a></p>
                                        </div>
                                    </div>
                                @endforeach
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination justify-content-center">
                                            @foreach ($arrPage as $k => $page)
                                                <li class="page-item @if((isset($_GET['page']) && $_GET['page'] == $page) || (!isset($_GET['page']) && $k == 0)) active @endif">
                                                    <a class="page-link " href="{{route('news', ['page' => $page])}}">{{$page}}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-12">
                            @include('Magazine.layouts.subscribe')
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection
