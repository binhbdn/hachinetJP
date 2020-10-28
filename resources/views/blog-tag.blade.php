@extends('layouts.app')

@section('content')

<section class="blog_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 tags" >
                <div class="container">
                    <h2 class="tag-title">
                        <i class="fa fa-briefcase"></i>
                        Kĩ năng
                    </h2>
                </div>
                <div class="col-lg-12 tags_sidebar">
                    <aside class="single-sidebar-widget tag_cloud_widget">
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
    <div class="container">
        <div class="row">
            <div class="col-lg-12" style="padding-left: 0px; padding-right: 0px;">
                <div class="tags-detail">(Đang cập nhật)</div>
            </div>
        </div>
    </div>
</section>


@endsection

@push('js')

@endpush
