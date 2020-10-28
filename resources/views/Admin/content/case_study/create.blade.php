@extends('Admin.layouts.default')
@section('css-custom')
<style>
    .single_image {
        border: 1px solid #eee;
        width: 30%;
        padding: 10px;
        height: 150px;
        vertical-align: middle;
        text-align: center;
        margin-top: 15px;
        display: inline-block;
        margin-right: 20px;
    }
    .single_image .close__image {
        right: 5px;
        bottom: 0;
        z-index: 9;
    }
    .single_image img {
        max-width: 100%;
        height: 100%;
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
                    @if ($message = Session::get('no_image'))
                        <div class="alert alert-danger">
                            <p class="pb-0 mb-0">{{ $message }}</p>
                        </div>
                    @endif
                    @error('listImages')
                        <div class="alert alert-danger">
                            <p class="mb-0 pb-0">{{ 'Need upload picture, min one picture.' }}</p>
                        </div>
                    @enderror
                    <form method="POST" action="{{route('case-study.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-6">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#japan" role="tab" aria-selected="true"> <span class="hidden-xs-down">Japanese</span></a> </li>
                                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#english" role="tab" aria-selected="false"> <span class="hidden-xs-down">English</span></a> </li>
                                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#vietnamese" role="tab" aria-selected="false"> <span class="hidden-xs-down">Vietnamese</span></a> </li>
                                </ul>
                                <div class="tab-content tabcontent-border">
                                    <div class="tab-pane active p-3" id="japan" role="tabpanel">
                                        <div class="p-3">
                                            <div class="form-group">
                                                <input type="text" name="title_jp" id="title" placeholder="Title" value="{{old('title_jp')}}" required
                                                class="@error('title_jp') is-invalid @enderror form-control">
                                                @error('title_jp')
                                                    <div class="alert alert-danger">{{ 'The field is required.' }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <textarea id="product_content_jp" name="product_content_jp" placeholder="Content">{{old('product_content_jp')}}</textarea>
                                                @error('product_content_jp')
                                                    <div class="alert alert-danger">{{ 'The field is required.' }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <textarea type="text" cols="30" rows="3" name="responsibility_jp" id="responsibility" 
                                                placeholder="Responsibility" class="form-control">{{old('responsibility_jp')}}</textarea>
                                                @error('responsibility_jp')
                                                    <div class="alert alert-danger">{{ 'The field is required.' }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <textarea type="text" cols="30" rows="2" name="industry_jp" id="description" required
                                                placeholder="Industry" class="form-control">{{old('industry_jp')}}</textarea>
                                                @error('industry_jp')
                                                    <div class="alert alert-danger">{{ 'The field is required.' }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="overview_jp" id="keyword" placeholder="Overview" required
                                                class="form-control" value="{{old('overview_jp')}}">
                                                @error('overview_jp')
                                                    <div class="alert alert-danger">{{ 'The field is required.' }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group mb-0">
                                                <input type="text" name="tech_jp" id="keyword" placeholder="Technical information" required
                                                class="form-control" value="{{old('tech_jp')}}">
                                                @error('tech_jp')
                                                    <div class="alert alert-danger">{{ 'The field is required.' }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane p-3" id="english" role="tabpanel">
                                        <div class="p-3">
                                            <div class="form-group">
                                                <input type="text" name="title_en" id="title" placeholder="Title" class="form-control" value="{{old('title_en')}}">
                                            </div>
                                            <div class="form-group">
                                                <textarea id="product_content_en" name="product_content_en" placeholder="Content">{{old('product_content_en')}}</textarea>
                                            </div>
                                            <div class="form-group">
                                                <textarea type="text" cols="30" rows="3" name="responsibility_en" id="responsibility" placeholder="Responsibility" class="form-control">{{old('responsibility_en')}}</textarea>
                                            </div>
                                            <div class="form-group">
                                                <textarea type="text" cols="30" rows="3" name="industry_en" id="description" placeholder="Industry" class="form-control">{{old('industry_en')}}</textarea>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="overview_en" id="keyword" placeholder="Overview" class="form-control" value="{{old('overview_en')}}">
                                            </div>
                                            <div class="form-group mb-0">
                                                <input type="text" name="tech_en" id="keyword" placeholder="Technical information" class="form-control" value="{{old('tech_en')}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane p-3" id="vietnamese" role="tabpanel">
                                        <div class="p-3">
                                            <div class="form-group">
                                                <input type="text" name="title_vn" id="title" placeholder="Title"
                                                value="{{old('title_vn')}}"
                                                class="@error('title_vn') is-invalid @enderror form-control">
                                            </div>
                                            <div class="form-group">
                                                <textarea id="product_content_vn" name="product_content_vn" placeholder="Content">{{old('product_content_vn')}}</textarea>
                                            </div>
                                            <div class="form-group">
                                                <textarea type="text" cols="30" rows="3" name="responsibility_vn" id="responsibility" placeholder="Responsibility" class="form-control">{{old('responsibility_vn')}}</textarea>
                                            </div>
                                            <div class="form-group">
                                                <textarea type="text" cols="30" rows="3" name="industry_vn" id="description" placeholder="Industry" class="form-control">{{old('industry_vn')}}</textarea>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="overview_vn" id="keyword" placeholder="Overview" class="form-control" value="{{old('overview_vn')}}">
                                            </div>
                                            <div class="form-group mb-0">
                                                <input type="text" name="tech_vn" id="keyword" placeholder="Technical information" class="form-control" value="{{old('tech_vn')}}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="card mb-3">
                                    <div class="card-header bg-light">
                                        <span>List Images</span>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="form-group pt-2">
                                            <div class="box-upload" id="boxUpload">
                                                <input type="file" name="fileUpload[]" id="fileUpload" accept="image/*" multiple onchange="selectedFile(event)">
                                                <div class="">
                                                    <div class="box-slide">
                                                        <label for="fileUpload">
                                                            <i class="fa fa-plus-circle"></i>
                                                        </label>
                                                    </div>
                                                    <span class="box-bt">Choose Image</span>
                                                </div>
                                            </div>
                                        </div>
                                        <input type="text" name="listImages" id="txtListImages" hidden>
                                        <div class="box-list__images" id="list__images"></div>
                                    </div>
                                </div>
                                <div class="form-group text-right">
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
<script src="{{asset('admin/js/tinymce.min.js')}}"></script>
    <script>
        var listImages = [];
        function selectedFile(e) {
            var files = Array.from(e.target.files);
            files.forEach( (s) => {
                var reader = new FileReader();
                reader.readAsDataURL(s);
                reader.onload = () => {
                    listImages.push({'fileContent': reader.result.toString()});
                };
            })
            setTimeout(() => {
                loadListImages();
            }, 500);
        }

        function loadListImages() {
            var strHtml = '';
            listImages.forEach((s, i) => {
                strHtml += '<div class="single_image d-inline-block position-relative">';
                strHtml += '<img src="'+s.fileContent+'" alt="" />';
                strHtml += '<a href="javascript:removeImagesWithIndex('+i+');" class="text-danger position-absolute close__image" data-id="'+i+'">Remove</a>';
                strHtml += '</div>';
            });
            $('#list__images').html(strHtml);
            $('#txtListImages').attr('value', JSON.stringify(listImages));
        }
        
        function removeImagesWithIndex(e) {
            listImages.splice(e, 1);
            setTimeout(() => {
                loadListImages();
            }, 500);
        }


        $(document).ready(function() {
            
            if ($("#product_content_jp").length > 0) {
                tinymce.init({
                    selector: "textarea#product_content_jp",
                    theme: "modern",
                    height: 200,
                    plugins: [
                        "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                        "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                        "save table contextmenu directionality emoticons template paste textcolor"
                    ],
                    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",

                });
            }
            if ($("#product_content_en").length > 0) {
                tinymce.init({
                    selector: "textarea#product_content_en",
                    theme: "modern",
                    height: 200,
                    plugins: [
                        "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                        "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                        "save table contextmenu directionality emoticons template paste textcolor"
                    ],
                    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",

                });
            }
            if ($("#product_content_vn").length > 0) {
                tinymce.init({
                    selector: "textarea#product_content_vn",
                    theme: "modern",
                    height: 200,
                    plugins: [
                        "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                        "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                        "save table contextmenu directionality emoticons template paste textcolor"
                    ],
                    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",

                });
            }
        });
    </script>
@endsection