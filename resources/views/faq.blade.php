@extends('layouts.app')

@section('content')

<section class="blog_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 faq" >
                <div class="question">
                    <h2>{{ trans('messages.question_1') }}</h2>
                    <div>
                        {{ trans('messages.answer_question_1') }}
                    </div>
                </div>
                <div class="question">
                    <h2>{{ trans('messages.question_2') }}</h2>
                    <div>
                        {!! trans('messages.answer_question_2') !!}
                    </div>
                </div>
                <div class="question">
                    <h2>{{ trans('messages.question_3') }}</h2>
                    <div>
                    {!! trans('messages.answer_question_3') !!}
                    </div>
                </div>
                <div class="question">
                    <h2>{{ trans('messages.question_4') }}</h2>
                    <div>
                    {!! trans('messages.answer_question_4') !!}
                    </div>
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
                        <h4 class="widget_title">Tag Clouds</h4>
                        <ul class="list">
                            <li><a href="{{ url('tag') }}">C# outsource</a></li>
                            <li><a href="{{ url('tag') }}">Offshore</a></li>
                            <li><a href="{{ url('tag') }}">Vietnam Offshore</a></li>
                            <li><a href="{{ url('tag') }}">Vietnam outsource</a></li>
                            <li><a href="{{ url('tag') }}">Java outsource</a></li>
                            <li><a href="{{ url('tag') }}">VB.NET</a></li>
                            <li><a href="{{ url('tag') }}">Android development</a></li>
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
