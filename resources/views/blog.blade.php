@extends('layouts.app')

@section('content')
<!--         <section class="home_banner_area blog_banner">
            <div class="banner_inner d-flex align-items-center">
                <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
                <div class="container">
                    <div class="blog_b_text text-center">
                        <h2>Dude You’re Getting <br /> a Telescope</h2>
                        <p>There is a moment in the life of any aspiring astronomer that it is time to buy that first</p>
                        <a class="white_bg_btn" href="#">View More</a>
                    </div>
                </div>
            </div>
        </section> -->
        <!--================End Home Banner Area =================-->
        
        <!--================Blog Categorie Area =================-->
<!--         <section class="blog_categorie_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="categories_post">
                            <img src="img/blog/cat-post/cat-post-3.jpg" alt="post">
                            <div class="categories_details">
                                <div class="categories_text">
                                    <a href="blog-details.html"><h5>Social Life</h5></a>
                                    <div class="border_line"></div>
                                    <p>Enjoy your social life together</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="categories_post">
                            <img src="img/blog/cat-post/cat-post-2.jpg" alt="post">
                            <div class="categories_details">
                                <div class="categories_text">
                                    <a href="blog-details.html"><h5>Politics</h5></a>
                                    <div class="border_line"></div>
                                    <p>Be a part of politics</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="categories_post">
                            <img src="img/blog/cat-post/cat-post-1.jpg" alt="post">
                            <div class="categories_details">
                                <div class="categories_text">
                                    <a href="blog-details.html"><h5>Food</h5></a>
                                    <div class="border_line"></div>
                                    <p>Let the food be finished</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!--================Blog Categorie Area =================-->
        
        <!--================Blog Area =================-->
        <section class="blog_area">
            <div class="container ">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="blog_left_sidebar">
                            @foreach($list_blog as $item)
                            <article class="row blog_item">
                               <div class="col-md-3 img">
                                    <img width="100%" src="{{ url('/upload/blog') }}/{{ $item->images }}" alt="{{ $item->title }}">
                               </div>
                                <div class="col-md-9">
                                    <div class="blog_post">
                                        <div class="blog_details">
                                            <a href="{{ url('/news/view') }}/{{ $item->id }}/{{ Helper::seoname($item->title) }}"><h2>{{ $item->title }}</h2></a>
                                            <p style="height: 90px;">{!! $item->description !!}</p>
                                            <a href="{{ url('/news/view') }}/{{ $item->id }}/{{ Helper::seoname($item->title) }}" class="white_bg_btn">{{ trans('messages.view_more') }}</a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            @endforeach
                            <nav class="blog-pagination justify-content-center d-flex">
                            <!-- {!! $list_blog->links() !!} -->
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
                                <!-- <ul class="pagination">
                                    <li class="page-item">
                                        <a href="#" class="page-link" aria-label="Previous">
                                            <span aria-hidden="true">
                                                <span class="lnr lnr-chevron-left"></span>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="page-item active"><a href="#" class="page-link">01</a></li>
                                    <li class="page-item"><a href="#" class="page-link">02</a></li>
                                    <li class="page-item"><a href="#" class="page-link">03</a></li>
                                    <li class="page-item"><a href="#" class="page-link">04</a></li>
                                    <li class="page-item"><a href="#" class="page-link">09</a></li>
                                    <li class="page-item">
                                        <a href="#" class="page-link" aria-label="Next">
                                            <span aria-hidden="true">
                                                <span class="lnr lnr-chevron-right"></span>
                                            </span>
                                        </a>
                                    </li>
                                </ul> -->
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
                                <!-- <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search Posts" name="txtSearch">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button"><i class="lnr lnr-magnifier"></i></button>
                                    </span>
                                </div>/input-group -->
                                <div class="br"></div>
                            </aside>
                            <!-- <aside class="single_sidebar_widget author_widget">
                                <img class="author_img rounded-circle" src="img/blog/author.png" alt="">
                                <h4>{{$settings->from_name }}</h4>
                                <p>Page blog</p>
                                <div class="social_icon">
                                    <a href="{{$settings->facebook }}"><i class="fa fa-facebook"></i></a>
                                    <a href="{{$settings->twitter }}><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-github"></i></a>
                                    <a href="#"><i class="fa fa-behance"></i></a>
                                </div>
                                <p>Boot camps have its supporters andit sdetractors. Some people do not understand why you should have to spend money on boot camp when you can get. Boot camps have itssuppor ters andits detractors.</p>
                                <div class="br"></div>
                            </aside> -->
<!--                             <aside class="single_sidebar_widget popular_post_widget">
                                <h3 class="widget_title">Popular Posts</h3>
                                <div class="media post_item">
                                    <img src="img/blog/popular-post/post1.jpg" alt="post">
                                    <div class="media-body">
                                        <a href="blog-details.html"><h3>Space The Final Frontier</h3></a>
                                        <p>02 Hours ago</p>
                                    </div>
                                </div>
                                <div class="media post_item">
                                    <img src="img/blog/popular-post/post2.jpg" alt="post">
                                    <div class="media-body">
                                        <a href="blog-details.html"><h3>The Amazing Hubble</h3></a>
                                        <p>02 Hours ago</p>
                                    </div>
                                </div>
                                <div class="media post_item">
                                    <img src="img/blog/popular-post/post3.jpg" alt="post">
                                    <div class="media-body">
                                        <a href="blog-details.html"><h3>Astronomy Or Astrology</h3></a>
                                        <p>03 Hours ago</p>
                                    </div>
                                </div>
                                <div class="media post_item">
                                    <img src="img/blog/popular-post/post4.jpg" alt="post">
                                    <div class="media-body">
                                        <a href="blog-details.html"><h3>Asteroids telescope</h3></a>
                                        <p>01 Hours ago</p>
                                    </div>
                                </div>
                                <div class="br"></div>
                            </aside>
                            <aside class="single_sidebar_widget ads_widget">
                                <a href="#"><img class="img-fluid" src="img/blog/add.jpg" alt=""></a>
                                <div class="br"></div>
                            </aside> -->
<!--                             <aside class="single_sidebar_widget post_category_widget">
                                <h4 class="widget_title">Post Catgories</h4>
                                <ul class="list cat-list">
                                    <li>
                                        <a href="#" class="d-flex justify-content-between">
                                            <p>Technology</p>
                                            <p>37</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex justify-content-between">
                                            <p>Lifestyle</p>
                                            <p>24</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex justify-content-between">
                                            <p>Fashion</p>
                                            <p>59</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex justify-content-between">
                                            <p>Art</p>
                                            <p>29</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex justify-content-between">
                                            <p>Food</p>
                                            <p>15</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex justify-content-between">
                                            <p>Architecture</p>
                                            <p>09</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex justify-content-between">
                                            <p>Adventure</p>
                                            <p>44</p>
                                        </a>
                                    </li>                                                           
                                </ul>
                                <div class="br"></div>
                            </aside> -->
<!--                             <aside class="single-sidebar-widget newsletter_widget">
                                <h4 class="widget_title">Newsletter</h4>
                                <p>
                                Here, I focus on a range of items and features that we use in life without
                                giving them a second thought.
                                </p>
                                <div class="form-group d-flex flex-row">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                                        </div>
                                        <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Enter email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email'">
                                    </div>
                                    <a href="#" class="bbtns">Subcribe</a>
                                </div>  
                                <p class="text-bottom">You can unsubscribe at any time</p>  
                                <div class="br"></div>                          
                            </aside> -->
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
        <!--================Blog Area =================-->


@endsection

@push('js')

@endpush
