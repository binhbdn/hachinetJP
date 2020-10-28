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
                        <table class="table table-bordered no-wrap table-news">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Image</th>
                                    <th>Created Date</th>
                                    <th>Show Home</th>
                                    <th class="text-nowrap">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $k => $product)
                                    <tr>
                                        <td>{{$k + 1}}</td>
                                        <td>
                                        @foreach ($product->productTitle as $p)
                                        {{$p}}<br />
                                        @endforeach
                                        </td>
                                        <td>
                                        <div class="box-thumb d-flex justify-content-center">
                                            <img src="{{asset('upload/'.$product->productImages[0])}}" alt="{{basename($product->productImages[0])}}" class="image-thumbnail">
                                        </div>
                                        </td>
                                        <td>{{$product->createdAt ? date('Y-m-d', (int)$product->createdAt) : date('Y-m-d')}}</td>
                                        <td>
                                            <div class="bt-switch d-flex justify-content-center">
                                            <input type="checkbox" {{$product->productStatus == 1 ? 'checked' : ''}} onchange="statusUpdate({{$product->productId}}, event)"
                                            id="switch{{$product->productId}}" class="status__update"/>
                                            <label for="switch{{$product->productId}}">Toggle</label>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="{{route('case-study.edit', $product->productId)}}"><i class="ti-pencil-alt fa-2x"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                @foreach ($arrPage as $k => $page)
                                    <li class="page-item @if((isset($_GET['page']) && $_GET['page'] == $page) || (!isset($_GET['page']) && $k == 0)) active @endif">
                                        <a class="page-link " href="{{route('case-study.index', ['page' => $page])}}">{{$page}}</a>
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
            url: "{{ route('case.status.upate') }}",
            method: 'post',
            data: _data,
            success: function(result){
                console.log(result);
            }
        });
    };
</script>
@endsection