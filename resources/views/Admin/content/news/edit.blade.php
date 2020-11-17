@extends('Admin.layouts.default')
@section('content')
<div class="container-fluid">
    @include('Admin.layouts.breadcrumb')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    @if ($message = Session::get('error'))
                        <div class="alert alert-danger">
                            <p class="pb-0 mb-0">{{ $message }}</p>
                        </div>
                    @endif
                    @error('title_vn')
                        <div class="alert alert-danger">
                            <p class="mb-0 pb-0">{{ 'The title vietnamese is required.' }}</p>
                        </div>
                    @enderror
                    @if(!empty($dataJp) && !empty($dataEn) && !empty($dataVn))
                    <form method="POST" action="{{route('news.update', $dataJp->postId)}}">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-9">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#japan" role="tab" aria-selected="true"> <span class="hidden-xs-down">Japanese</span></a> </li>
                                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#english" role="tab" aria-selected="false"> <span class="hidden-xs-down">English</span></a> </li>
                                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#vietnamese" role="tab" aria-selected="false"> <span class="hidden-xs-down">Vietnamese</span></a> </li>
                                </ul>
                                <div class="tab-content tabcontent-border">
                                    <div class="tab-pane active p-3" id="japan" role="tabpanel">
                                        <div class="p-3">
                                            <div class="form-group">
                                                <input type="text" name="title_jp" id="title" placeholder="Title" value="{{$dataJp->postTitle}}"
                                                class="@error('title_jp') is-invalid @enderror form-control">
                                                @error('title_jp')
                                                    <div class="alert alert-danger">{{ 'The field is required.' }}</div>
                                                @enderror
                                            </div>
                                            <label for="table_content_jp">Table Of Content:</label>
                                            <div class="form-group">
                                                <textarea id="table_content_jp" name="table_content_jp" placeholder="Content">{{$dataJp->postTableContent}}</textarea>
                                            </div>
                                            <label for="post_content_jp">Content:</label>
                                            <div class="form-group">
                                                <textarea id="post_content_jp" name="post_content_jp" placeholder="Content">{{$dataJp->postContent}}</textarea>
                                                @error('post_content_jp')
                                                    <div class="alert alert-danger">{{ 'The field is required.' }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <textarea type="text" cols="30" rows="3" name="description_jp" id="description" 
                                                placeholder="Description" class="form-control">{{$dataJp->postDesc}}</textarea>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="keyword_jp" value="{{$dataJp->postKeywords}}" id="keyword" placeholder="Keywords" class="form-control">
                                            </div>
                                            <div class="form-group mb-0">
                                                <input type="text" name="tags_jp" value="{{$dataJp->postTags}}" id="tags" placeholder="Tags" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane p-3" id="english" role="tabpanel">
                                        <div class="p-3">
                                            <div class="form-group">
                                                <input type="text" name="title_en" id="title" placeholder="Title" class="form-control" value="{{$dataEn->postTitle}}">
                                            </div>
                                            <label for="table_content_en">Table Of Content:</label>
                                            <div class="form-group">
                                                <textarea id="table_content_en" name="table_content_en" placeholder="Content">{{$dataEn->postTableContent}}</textarea>
                                            </div>
                                            <label for="post_content_en">Content:</label>
                                            <div class="form-group">
                                                <textarea id="post_content_en" name="post_content_en" placeholder="Content">{{$dataEn->postContent}}</textarea>
                                            </div>
                                            <div class="form-group">
                                                <textarea type="text" cols="30" rows="3" name="description_en" id="description" 
                                                placeholder="Description" class="form-control">{{$dataEn->postDesc}}</textarea>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="keyword_en" id="keyword" placeholder="Keywords" class="form-control" value="{{$dataEn->postKeywords}}">
                                            </div>
                                            <div class="form-group mb-0">
                                                <input type="text" name="tags_en" id="tags" placeholder="Tags" class="form-control" value="{{$dataEn->postTags}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane p-3" id="vietnamese" role="tabpanel">
                                        <div class="p-3">
                                            <div class="form-group">
                                                <input type="text" name="title_vn" id="title" placeholder="Title" 
                                                value="{{$dataVn->postTitle}}"
                                                class="@error('title_jp') is-invalid @enderror form-control">
                                            </div>
                                            <label for="table_content_vn">Table Of Content:</label>
                                            <div class="form-group">
                                                <textarea id="table_content_vn" name="table_content_vn" placeholder="Content">{{$dataVn->postTableContent}}</textarea>
                                            </div>
                                            <label for="post_content_vn">Content:</label>
                                            <div class="form-group">
                                                <textarea id="post_content_vn" name="post_content_vn" placeholder="Content">{{$dataVn->postContent}}</textarea>
                                            </div>
                                            <div class="form-group">
                                                <textarea type="text" cols="30" rows="3" name="description_vn" id="description" 
                                                placeholder="Description" class="form-control">{{$dataVn->postDesc}}</textarea>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="keyword_vn" id="keyword" placeholder="Keywords" class="form-control" value="{{$dataVn->postKeywords}}">
                                            </div>
                                            <div class="form-group mb-0">
                                                <input type="text" name="tags_vn" id="tags" placeholder="Tags" class="form-control" value="{{$dataVn->postTags}}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                  
                            </div>
                            <div class="col-3">
                                <div class="card mb-3">
                                    <div class="card-header bg-light">
                                        <span>Image Thumbnail</span>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="form-group pt-2">
                                            <input type="text" name="thumbnail" id="thumbnail" hidden>
                                            <input type="text" name="old_thumbnail" id="old_thumbnail" hidden value="{{$dataJp->postThumb}}">
                                            @if (!$dataJp->postThumb)
                                            <div class="box-upload" id="boxUpload">
                                                <input type="file" name="fileUpload" id="fileUpload" onchange="selectedFile(event)" accept="image/*">
                                                <div class="">
                                                    <div class="box-slide">
                                                        <label for="fileUpload">
                                                            <i class="fa fa-plus-circle"></i>
                                                        </label>
                                                    </div>
                                                    <span class="box-bt">Choose Image</span>
                                                </div>
                                            </div>
                                            <div class="border box-show p-2 justify-content-center position-relative" id="boxShow" style="display: none;">
                                                <a href="javascript:removeFile();" class="btn-close position-absolute" style="right: 8px; top: 0; color: #f00">
                                                    <i class="mdi mdi-close mdi-24px"></i>
                                                </a>
                                                <img style="height: 150px;" src="#" id="imageShow">
                                            </div>
                                            @else
                                            <div class="box-upload" id="boxUpload" style="display: {{$dataJp->postThumb ? 'none' : 'block'}}">
                                                <input type="file" name="fileUpload" id="fileUpload" onchange="selectedFile(event)" accept="image/*">
                                                <div class="">
                                                    <div class="box-slide">
                                                        <label for="fileUpload">
                                                            <i class="fa fa-plus-circle"></i>
                                                        </label>
                                                    </div>
                                                    <span class="box-bt">Choose Image</span>
                                                </div>
                                            </div>
                                            <div class="border box-show p-2 justify-content-center position-relative" id="boxShow" 
                                                style="display: {{$dataJp->postThumb ? 'flex' : 'none'}}">
                                                <a href="javascript:removeFile();" class="btn-close position-absolute" style="right: 8px; top: 0; color: #f00">
                                                    <i class="mdi mdi-close mdi-24px"></i>
                                                </a>
                                                <img style="height: 150px;" src="{{asset('upload/'.$dataJp->postThumb)}}" id="imageShow">
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group text-right">
                                    <button type="submit" class="btn btn-warning text-body"><i class="mdi mdi-check"></i> Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('javascript-custom')
    <script src="{{asset('admin/js/tinymce.min.js')}}"></script>
    <script>
        function selectedFile(e) {
            var files = e.target.files[0];
            var render = new FileReader();
            render.readAsDataURL(files);
            render.onload = () => {
                $('#thumbnail').attr('value', render.result.toString());
                $('#boxUpload').css('display','none');
                $('#boxShow').css('display','flex');
                $('#imageShow').attr('src',render.result.toString());
            }
        }

        function removeFile() {
            $('#thumbnail').attr('value', '');
            $('#boxUpload').css('display','block');
            $('#boxShow').css('display','none');
            $('#imageShow').attr('src', '#');
        }
        $(document).ready(function() {
            function uploadImage(blobInfo, success, failure) {
                formData = new FormData();
                formData.append('file', blobInfo.blob(), blobInfo.filename());
                formData.append('fileName', document.getElementById('title').value);
                $.ajax({
                    method: 'POST',
                    url: "{{route('media_upload')}}",
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(result) {
                        if (!result || typeof result.location != 'string') {
                            failure('Invalid JSON: ');
                            return;
                        }
                        success(result.location);
                    },
                    error: function(err) {
                        console.log('e', err);
                    }
                })
            }
            
            if ($("#post_content_jp").length > 0) {
                tinymce.init({
                    selector: "textarea#post_content_jp",
                    theme: "modern",
                    height: 300,
                    plugins: [
                        "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                        "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                        "save table contextmenu directionality emoticons template paste textcolor"
                    ],
                    image_title: true,
                    automatic_uploads: true,
                    images_upload_url: '/upload',
                    file_picker_types: 'image',
                    images_upload_credentials: true,
                    images_upload_handler: uploadImage,
                    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",

                });
            }
            if ($("#post_content_en").length > 0) {
                tinymce.init({
                    selector: "textarea#post_content_en",
                    theme: "modern",
                    height: 300,
                    plugins: [
                        "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                        "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                        "save table contextmenu directionality emoticons template paste textcolor"
                    ],
                    image_title: true,
                    automatic_uploads: true,
                    images_upload_url: '/upload',
                    file_picker_types: 'image',
                    images_upload_credentials: true,
                    images_upload_handler: uploadImage,
                    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",

                });
            }
            if ($("#post_content_vn").length > 0) {
                tinymce.init({
                    selector: "textarea#post_content_vn",
                    theme: "modern",
                    height: 300,
                    plugins: [
                        "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                        "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                        "save table contextmenu directionality emoticons template paste textcolor"
                    ],
                    image_title: true,
                    automatic_uploads: true,
                    images_upload_url: '/upload',
                    file_picker_types: 'image',
                    images_upload_credentials: true,
                    images_upload_handler: uploadImage,
                    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",

                });
            }
            if ($("#table_content_jp").length > 0) {
                tinymce.init({
                    selector: "textarea#table_content_jp",
                    theme: "modern",
                    height: 300,
                    plugins: [
                        "advlist autolink link image media lists charmap print preview hr anchor pagebreak spellchecker",
                        "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                        "save table contextmenu directionality emoticons template paste textcolor"
                    ],
                    image_title: true,
                    automatic_uploads: true,
                    images_upload_url: '/upload',
                    file_picker_types: 'image',
                    images_upload_credentials: true,
                    images_upload_handler: uploadImage,
                    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",
                });
            }
            if ($("#table_content_en").length > 0) {
                tinymce.init({
                    selector: "textarea#table_content_en",
                    theme: "modern",
                    height: 300,
                    plugins: [
                        "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                        "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                        "save table contextmenu directionality emoticons template paste textcolor"
                    ],
                    image_title: true,
                    automatic_uploads: true,
                    images_upload_url: '/upload',
                    file_picker_types: 'image',
                    images_upload_credentials: true,
                    images_upload_handler: uploadImage,
                    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",

                });
            }
            if ($("#table_content_vn").length > 0) {
                tinymce.init({
                    selector: "textarea#table_content_vn",
                    theme: "modern",
                    height: 300,
                    plugins: [
                        "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                        "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                        "save table contextmenu directionality emoticons template paste textcolor"
                    ],
                    image_title: true,
                    automatic_uploads: true,
                    images_upload_url: '/upload',
                    file_picker_types: 'image',
                    images_upload_credentials: true,
                    images_upload_handler: uploadImage,
                    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",

                });
            }
        });
    </script>
@endsection