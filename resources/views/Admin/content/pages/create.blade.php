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
                    <form action="{{route('pages.store')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <input type="text" name="title" id="title" class="form-control" value="{{old('title')}}" placeholder="Title">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-7">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#japan" role="tab" aria-selected="true"> <span class="hidden-xs-down">Japanese</span></a> </li>
                                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#english" role="tab" aria-selected="false"> <span class="hidden-xs-down">English</span></a> </li>
                                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#vietnamese" role="tab" aria-selected="false"> <span class="hidden-xs-down">Vietnamese</span></a> </li>
                                </ul>
                                <div class="tab-content tabcontent-border">
                                    <div class="tab-pane active p-0" id="japan" role="tabpanel">
                                        <div class="p-0">
                                            <div class="form-group mb-0">
                                                <textarea id="post_content_jp" name="post_content_jp" placeholder="Code HTML">{{old('post_content_jp')}}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane p-0" id="english" role="tabpanel">
                                        <div class="p-0">
                                            <div class="form-group mb-0">
                                                <textarea id="post_content_en" name="post_content_en" placeholder="Code HTML">{{old('post_content_en')}}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane p-0" id="vietnamese" role="tabpanel">
                                        <div class="p-0">
                                            <div class="form-group mb-0">
                                                <textarea id="post_content_vn" name="post_content_vn" placeholder="Code HTML">{{old('post_content_vn')}}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-5">
                                <div class="form-group">
                                    <textarea id="css_content"  name="css_content" placeholder="Code CSS" class="form-control" rows="15" cols="30">{{old('css_content')}}</textarea>
                                </div>
                                <div class="form-group">
                                    <textarea id="js_content"  name="js_content" placeholder="Code Javascript" class="form-control" rows="15" cols="30">{{old('js_content')}}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-12 text-right">
                            <button class="btn btn-warning text-body"><i class="mdi mdi-check"></i>&nbsp;Submit</button>
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
                    height: 700,
                    plugins: [
                        "preview image media code",
                        "save emoticons template paste textcolor"
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
                    height: 700,
                    plugins: [
                        "preview image media code",
                        "save emoticons template paste textcolor"
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
                    height: 700,
                    plugins: [
                        "preview image media code",
                        "save emoticons template paste textcolor"
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