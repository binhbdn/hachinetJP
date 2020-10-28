@extends('Admin.layouts.default')
@section('content')
<div class="container-fluid">
    @include('Admin.layouts.breadcrumb')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    @if ($message = Session::get('error'))
                        <div class="alert alert-success">
                            <p class="pb-0 mb-0">{{ $message }}</p>
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-8">
                            <form action="{{route('tagslink.store')}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="">Tags Japanese</label>
                                    <input type="text" name="tagsJp" id="tagsJp" class="form-control" placeholder="Text Tags" value="{{old('tagsJp')}}">
                                    @error('tagsJp')
                                        <div class="alert alert-danger">{{ 'The field is required.' }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="">Tags English</label>
                                    <input type="text" name="tagsEn" id="tagsEn" class="form-control" placeholder="Text Tags" value="{{old('tagsEn')}}">
                                </div>
                                <div class="form-group">
                                    <label for="">Tags Vietnamese</label>
                                    <input type="text" name="tagsVn" id="tagsVn" class="form-control" placeholder="Text Tags" value="{{old('tagsVn')}}">
                                </div>
                                <div class="form-group">
                                    <label for="">Tags Link</label>
                                    <input type="text" name="tagsLink" id="tagsLink" class="form-control" placeholder="Text Link" value="{{old('tagsLink')}}">
                                    @error('tagsLink')
                                        <div class="alert alert-danger">{{ 'The field is required.' }}</div>
                                    @enderror
                                </div>
                                <div class="form-group text-right">
                                    <button class="btn btn-warning text-body"><i class="mdi-check mdi"></i>&nbsp;Submit</button>
                                </div>
                            </form>
                        </div>
                        <div class="col-4">
                            <p class="font-bolder">Toàn bộ những text tags sẽ được gắn thêm link cho content bài viết khi view bài viết ngoài trang chủ.</p>
                            <p class="font-bolder">Mỗi text tags là 1 từ/câu và không tính sử dụng dấu câu</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
