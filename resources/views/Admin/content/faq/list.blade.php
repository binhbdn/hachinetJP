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
                        <table class="table table-bordered no-wrap">
                            <thead>
                                <tr>
                                    <th>Title Japan</th>
                                    <th>Title English</th>
                                    <th>Title Vietnam</th>
                                    <th>Show Home</th>
                                    <th class="text-nowrap">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($faqs as $faq)
                                    <tr>
                                        <td>{{$faq->TitleJP}}</td>
                                        <td>{{$faq->TitleEn}}</td>
                                        <td>{{$faq->TitleVN}}</td>
                                        <td>
                                            <div class="bt-switch d-flex justify-content-center">
                                                <input type="checkbox" {{$faq->faqStatus == 1 ? 'checked' : ''}} onchange="statusUpdate({{$faq->faqsId}}, event)"
                                                id="switch{{$faq->faqsId}}" class="status__update"/>
                                                <label for="switch{{$faq->faqsId}}">Toggle</label>
                                            </div>
                                        </td>
                                        <td>
                                        <a href="{{route('faqs.edit', $faq->faqsId)}}"><i class="ti-pencil-alt fa-2x"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
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
            url: "{{ route('faqs.status.update') }}",
            method: 'post',
            data: _data,
            success: function(result){
                console.log(result);
            }
        });
    };
</script>
@endsection