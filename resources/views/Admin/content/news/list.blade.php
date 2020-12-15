@extends('Admin.layouts.default')
@section('css-custom')
<style>
    input[type=checkbox]{
        height: 0;
        width: 0;
        visibility: hidden;
    }

    label {
        cursor: pointer;
        text-indent: -9999px;
        width: 70px;
        height: 35px;
        background: grey;
        display: block;
        border-radius: 100px;
        position: relative;
    }

    label:after {
        content: '';
        position: absolute;
        top: 0;
        left: 1px;
        width: 35px;
        height: 35px;
        background: #fff;
        border-radius: 90px;
        transition: 0.3s;
    }

    input:checked + label {
        background: #ffbc34;
    }

    input:checked + label:after {
        left: calc(100% - 1px);
        transform: translateX(-100%);
    }

    label:active:after {
        width: 130px;
    }
    .table-news td {
        vertical-align: middle;
    }
</style>
@endsection
@section('content')
<div class="container-fluid">
    @include('Admin.layouts.breadcrumb')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p class="pb-0 mb-0">{{ $message }}</p>
                        </div>
                    @endif
                    <div class="table-responsive">
                        <table class="table table-bordered mb-nowrap table-news">
                            <thead>
                                <tr>
                                	<th width="10%">#</th>
                                    <th width="20%">News Thumbnail</th>
                                    <th width="40%">News Title</th>
                                    <th width="14%">Created Date</th>
                                    <th width="10%">Show Home</th>
                                    <th width="6%" class="text-nowrap" >Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($news as $k => $new)
                                <tr>
                                	<td width="10%">{{$k + 1}}</td>
                                    <td width="20%">
                                        <div class="box-thumb d-flex justify-content-center">
                                            @if($new->postThumb)
                                            <img src="{{asset('upload/'.$new->postThumb)}}" alt="Hachinet JSC" class="image-thumbnail" />
                                            @else
                                            <img src="{{asset('static/img/logo-hachinet-alt.png')}}" alt="Hachinet JSC" class="image-thumbnail" />
                                            @endif
                                        </div>
                                    </td>
                                    <td width="40%" class="title-posts">
                                        @foreach ($new->postTitle as $p)
                                        {{$p}}<br />
                                        @endforeach
                                    </td>
                                    <td width="10%">{{$new->createdAt ? date('Y-m-d', (int)$new->createdAt) : date('Y-m-d')}}</td>
                                    <td width="14%">
                                        <div class="bt-switch d-flex justify-content-center">
                                        <input type="checkbox" {{$new->postStatus == 1 ? 'checked' : ''}} onchange="statusUpdate({{$new->postId}}, event)"
                                        id="switch{{$new->postId}}" class="status__update"/>
                                        <label for="switch{{$new->postId}}">Toggle</label>
                                        </div>
                                    </td>
                                    <td width="6%" class="icon-center">
                                        <a href="{{route('news.edit', $new->postId)}}"><i class="ti-pencil-alt fa-2x"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                @foreach ($arrPage as $k => $page)
                                    <li class="page-item @if((isset($_GET['page']) && $_GET['page'] == $page) || (!isset($_GET['page']) && $k == 0)) active @endif">
                                        <a class="page-link " href="{{route('news.index', ['page' => $page])}}">{{$page}}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('javascript-custom')
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    function statusUpdate(id,e) {
        var _data = {
            id: id,
            status: e.target.checked
        }
        $.ajax({
            url: "{{ route('update__status') }}",
            method: 'post',
            data: _data,
            success: function(result){
                console.log(result);
            }
        });
    };
</script>
@endsection