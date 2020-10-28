@extends('Admin.layouts.default')
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
                    @if ($message = Session::get('error'))
                        <div class="alert alert-danger">
                            <p class="pb-0 mb-0">{{ $message }}</p>
                        </div>
                    @endif
                    <form action="{{route('settings.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card mb-3">
                                    <div class="card-header bg-light">
                                        <span>Header Logo</span>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="form-group pt-2 mb-0">
                                            <input type="text" name="textFile__header" id="textFile__header" hidden>
                                            <input type="text" name="textFile__header_old" id="textFile__meta" hidden value="{{$dataJp->logo_header}}">
                                            <div class="box-upload" id="boxUpload__header" style="display: {{$dataJp->logo_header ? 'none' : 'block'}};">
                                                <input type="file" name="logoHeader" id="logoHeader" accept="image/*" onchange="selectedFile(event, 'header')">
                                                <div class="">
                                                    <div class="box-slide">
                                                        <label for="logoHeader">
                                                            <i class="fa fa-plus-circle"></i>
                                                        </label>
                                                    </div>
                                                    <span class="box-bt">Choose Image</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="border box-show p-2 justify-content-center position-relative" id="boxShow__header" style="display: {{$dataJp->logo_header ? 'flex' : 'none'}};">
                                            <a href="javascript:removeFile('header');" class="btn-close position-absolute" style="right: 8px; top: 0; color: #f00">
                                                <i class="mdi mdi-close mdi-24px"></i>
                                            </a>
                                            <img style="height: 150px;" src="{{asset('upload/'.$dataJp->logo_header)}}" id="imageShow__header">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card mb-3">
                                    <div class="card-header bg-light">
                                        <span>Footer Logo</span>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="form-group pt-2 mb-0">
                                            <input type="text" name="textFile__footer" id="textFile__footer" hidden>
                                            <input type="text" name="textFile__footer_old" id="textFile__meta" hidden value="{{$dataJp->logo_footer}}">
                                            <div class="box-upload" id="boxUpload__footer" style="display: {{$dataJp->logo_footer ? 'none' : 'block'}};">
                                                <input type="file" name="logoFooter" id="logoFooter" accept="image/*" onchange="selectedFile(event, 'footer')">
                                                <div class="">
                                                    <div class="box-slide">
                                                        <label for="logoFooter">
                                                            <i class="fa fa-plus-circle"></i>
                                                        </label>
                                                    </div>
                                                    <span class="box-bt">Choose Image</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="border box-show p-2 justify-content-center position-relative" id="boxShow__footer" style="display: {{$dataJp->logo_footer ? 'flex' : 'none'}};">
                                            <a href="javascript:removeFile('footer');" class="btn-close position-absolute" style="right: 8px; top: 0; color: #f00">
                                                <i class="mdi mdi-close mdi-24px"></i>
                                            </a>
                                            <img style="height: 150px;" src="{{asset('upload/'.$dataJp->logo_footer)}}" id="imageShow__footer">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card mb-3">
                                    <div class="card-header bg-light">
                                        <span>Images Meta</span>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="form-group pt-2 mb-0">
                                            <input type="text" name="textFile__meta" id="textFile__meta" hidden>
                                            <input type="text" name="textFile__meta_old" id="textFile__meta" hidden value="{{$dataJp->image}}">
                                            <div class="box-upload" id="boxUpload__meta" style="display: {{$dataJp->image ? 'none' : 'block'}};">
                                                <input type="file" name="imageMeta" id="imageMeta" accept="image/*" onchange="selectedFile(event, 'meta')">
                                                <div class="">
                                                    <div class="box-slide">
                                                        <label for="imageMeta">
                                                            <i class="fa fa-plus-circle"></i>
                                                        </label>
                                                    </div>
                                                    <span class="box-bt">Choose Image</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="border box-show p-2 justify-content-center position-relative" id="boxShow__meta" style="display: {{$dataJp->image ? 'flex' : 'none'}};">
                                            <a href="javascript:removeFile('meta');" class="btn-close position-absolute" style="right: 8px; top: 0; color: #f00">
                                                <i class="mdi mdi-close mdi-24px"></i>
                                            </a>
                                            <img style="height: 150px;" src="{{asset('upload/'.$dataJp->image)}}" id="imageShow__meta">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="row">
                            <div class="col-12">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#japan" role="tab" aria-selected="true"> <span class="hidden-xs-down">Japanese</span></a> </li>
                                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#english" role="tab" aria-selected="false"> <span class="hidden-xs-down">English</span></a> </li>
                                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#vietnamese" role="tab" aria-selected="false"> <span class="hidden-xs-down">Vietnamese</span></a> </li>
                                </ul>
                                <div class="tab-content tabcontent-border">
                                    <div class="tab-pane active p-3" id="japan" role="tabpanel">
                                        <div class="p-3">
                                            <div class="form-group">
                                                <label for="">Title</label>
                                                <input type="text" name="title_jp" id="title" placeholder="Title" value="{{$dataJp->title}}"
                                                class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Description</label>
                                                <textarea type="text" cols="30" rows="2" name="description_jp" id="description"
                                                placeholder="Description" class="form-control">{{$dataJp->description}}</textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Keywords</label>
                                                <textarea type="text" name="keyword_jp" id="keyword" placeholder="Keyword"
                                                class="form-control" cols="30" rows="2">{{$dataJp->keywords}}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane p-3" id="english" role="tabpanel">
                                        <div class="p-3">
                                            <div class="form-group">
                                                <label for="">Title</label>
                                                <input type="text" name="title_en" id="title" placeholder="Title" value="{{$dataEn->title}}"
                                                class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Description</label>
                                                <textarea type="text" cols="30" rows="2" name="description_en" id="description"
                                                placeholder="Description" class="form-control">{{$dataEn->description}}</textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Keywords</label>
                                                <textarea type="text" name="keyword_en" id="keyword" placeholder="Keyword"
                                                class="form-control" cols="30" rows="2">{{$dataEn->keywords}}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane p-3" id="vietnamese" role="tabpanel">
                                        <div class="p-3">
                                            <div class="form-group">
                                                <label for="">Title</label>
                                                <input type="text" name="title_vn" id="title" placeholder="Title" value="{{$dataVn->title}}"
                                                class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Description</label>
                                                <textarea type="text" cols="30" rows="2" name="description_vn" id="description"
                                                placeholder="Description" class="form-control">{{$dataVn->description}}</textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Keywords</label>
                                                <textarea type="text" name="keyword_vn" id="keyword" placeholder="Keyword"
                                                class="form-control" cols="30" rows="2">{{$dataVn->keywords}}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-12 mt-3">
                                <div class="form-group">
                                    <label for="">Facebook</label>
                                    <input type="text" name="facebook" id="facebook" placeholder="Facebook" class="form-control" value="{{$dataJp->facebook}}">
                                </div>
                                <div class="form-group">
                                    <label for="">Twitter</label>
                                    <input type="text" name="twitter" id="twitter" placeholder="Twitter" class="form-control" value="{{$dataJp->twitter}}">
                                </div>
                                <div class="form-group">
                                    <label for="">Instagram</label>
                                    <input type="text" name="instagram" id="instagram" placeholder="Instagram" class="form-control" value="{{$dataJp->instagram}}">
                                </div>
                                <div class="form-group">
                                    <label for="">Linkedin</label>
                                    <input type="text" name="linkedin" id="linkedin" placeholder="Linkedin" class="form-control" value="{{$dataJp->linkedin}}">
                                </div>
                                <div class="form-group">
                                    <label for="">Youtube</label>
                                    <input type="text" name="youtube" id="youtube" placeholder="Youtube" class="form-control" value="{{$dataJp->youtube}}">
                                </div>
                                <div class="form-group text-right mt-3">
                                    <button type="submit" class="btn btn-warning text-body"><i class="mdi mdi-check"></i> Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('javascript-custom')
<script>
    function selectedFile(e, type) {
        var files = e.target.files[0];
        var render = new FileReader();
        render.readAsDataURL(files);
        render.onload = () => {
            $('#textFile__'+type).attr('value', render.result.toString());
            $('#boxUpload__'+type).css('display','none');
            $('#boxShow__'+type).css('display','flex');
            $('#imageShow__'+type).attr('src',render.result.toString());
        }
    }

    function removeFile(type) {
        $('#textFile__'+type).attr('value', '');
        $('#boxUpload__'+type).css('display','block');
        $('#boxShow__'+type).css('display','none');
        $('#imageShow__'+type).attr('src', '#');
    }
</script>
@endsection