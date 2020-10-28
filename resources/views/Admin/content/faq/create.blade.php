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
                    <form method="POST" action="{{route('faqs.store')}}">
                        @csrf
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
                                                <input type="text" name="title_jp" id="title" placeholder="Question" value="{{old('title_jp')}}" required
                                                class="@error('title_jp') is-invalid @enderror form-control">
                                                @error('title_jp')
                                                    <div class="alert alert-danger">{{ 'The field is required.' }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <textarea id="post_content_jp" name="post_content_jp" placeholder="Content">{{old('post_content_jp')}}</textarea>
                                                @error('post_content_jp')
                                                    <div class="alert alert-danger">{{ 'The field is required.' }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane p-3" id="english" role="tabpanel">
                                        <div class="p-3">
                                            <div class="form-group">
                                                <input type="text" name="title_en" id="title" placeholder="Question" class="form-control" value="{{old('title_en')}}">
                                            </div>
                                            <div class="form-group">
                                                <textarea id="post_content_en" name="post_content_en" placeholder="Content">{{old('post_content_en')}}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane p-3" id="vietnamese" role="tabpanel">
                                        <div class="p-3">
                                            <div class="form-group">
                                                <input type="text" name="title_vn" id="title" placeholder="Question" value="{{old('title_vn')}}"
                                                class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <textarea id="post_content_vn" name="post_content_vn" placeholder="Content">{{old('post_content_vn')}}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mt-3 text-right">
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

        $(document).ready(function() {
            
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
                    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",

                });
            }
        });
    </script>
@endsection