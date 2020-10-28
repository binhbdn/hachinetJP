@extends('layouts.app')

@section('content')

<section class="blog_area">
            <div class="container ">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="blog_left_sidebar">
                            @foreach($search_blog as $item)
                            <article class="row blog_item">
                               <div class="col-md-3 img">
                                    <img width="100%" src="{{ url('/upload/blog') }}/{{ $item->images }}" alt="{{ $item->title }}">
                               </div>
                                <div class="col-md-9">
                                    <div class="blog_post">
                                        <div class="blog_details">
                                            <a href="{{ url('/news/view') }}/{{ $item->id }}/{{ Helper::seoname($item->title) }}"><h2>{{ $item->title }}</h2></a>
                                            <p>{!! $item->description !!}</p>
                                            <a href="{{ url('/news/view') }}/{{ $item->id }}/{{ Helper::seoname($item->title) }}" class="white_bg_btn">{{ trans('messages.view_more') }}</a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            @endforeach
                            <nav class="blog-pagination justify-content-center d-flex">
                                @if (isset($list_blog) && $list_blog->lastPage() > 1)
                                <ul class="pagination">
                                    <?php
                                    $interval = isset($interval) ? abs(intval($interval)) : 3 ;
                                    $from = $list_blog->currentPage() - $interval;
                                    if($from < 1){
                                        $from = 1;
                                    }
                                    
                                    $to = $list_blog->currentPage() + $interval;
                                    if($to > $list_blog->lastPage()){
                                        $to = $list_blog->lastPage();
                                    }
                                    ?>
                                    @if($list_blog->currentPage() > 1)
                                    <li class="page-item">
                                        <a href="{{ $list_blog->url(1) }}" aria-label="First" class="page-link">
                                            <span aria-hidden="true"></span>
                                        </a>
                                    </li>
                                    <li class="page-item">
                                        <a href="{{ $list_blog->url($list_blog->currentPage() - 1) }}" aria-label="Previous" class="page-link">
                                            <span aria-hidden="true" style="font-size: 20px; line-height: 10px;">&lsaquo;</span>
                                        </a>
                                    </li>
                                    @endif
                                    @for($i = $from; $i <= $to; $i++)
                                        <?php 
                                        $isCurrentPage = $list_blog->currentPage() == $i;
                                        ?>
                                        <li class="{{ $isCurrentPage ? 'active' : '' }} page-item">
                                            <a href="{{ !$isCurrentPage ? $list_blog->url($i) : '#' }}" class="page-link">
                                                {{ $i }}
                                            </a>
                                        </li>
                                    @endfor
                                    @if($list_blog->currentPage() < $list_blog->lastPage())
                                        <li class="page-item">
                                            <a href="{{ $list_blog->url($list_blog->currentPage() + 1) }}" aria-label="Next" class="page-link">
                                                <span aria-hidden="true" style="font-size: 20px;line-height: 10px;">&rsaquo;</span>
                                            </a>
                                        </li>

                                        <li class="page-item">
                                            <a href="{{ $list_blog->url($list_blog->lastpage()) }}" aria-label="Last" class="page-link">
                                                <span aria-hidden="true" style="font-size: 20px;line-height: 10px;">&raquo;</span>
                                            </a>
                                        </li>
                                    @endif
                                </ul>
                                @endif
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog_right_sidebar">
                            <aside class="single_sidebar_widget search_widget">
                                <form class="input-group" method="get" action="{{ url('search') }}">
                                    <input type="text" class="form-control" placeholder="Search Posts" name="txtSearch">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button"><i class="lnr lnr-magnifier"></i></button>
                                    </span>
                                </form>
                                <div class="br"></div>
                            </aside>
                            <aside class="single-sidebar-widget tag_cloud_widget">
                                <h4 class="widget_title">{{ trans('messages.tag_clouds') }}</h4>
                                <ul class="list">
                                    <li><a href="{{ url('tag') }}">C# outsource</a></li>
                                    <li><a href="{{ url('tag') }}">Offshore</a></li>
                                    <li><a href="{{ url('tag') }}">Vietnam Offshore</a></li>
                                    <li><a href="{{ url('tag') }}">Vietnam outsource</a></li>
                                    <li><a href="{{ url('tag') }}">Java outsource</a></li>
                                    <li><a href="{{ url('tag') }}">VB.NET</a></li>
                                    <li><a href="{{ url('tag') }}">Android-development</a></li>
                                    <li><a href="{{ url('tag') }}">Angular outsource</a></li>
                                    <li><a href="{{ url('tag') }}">Nodejs outsource</a></li>
                                    <li><a href="{{ url('tag') }}">MVC outsource</a></li>
                                    <li><a href="{{ url('tag') }}">php outsource</a></li>
                                    <li><a href="{{ url('tag') }}">Blockchain outsource</a></li>
                                    <li><a href="{{ url('tag') }}">ベトナムアウトソーシング</a></li>
                                    <li><a href="{{ url('tag') }}">オフショア開発</a></li>
                                    <li><a href="{{ url('tag') }}">VB開発</a></li>
                                </ul>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection

@push('js')

@endpush
