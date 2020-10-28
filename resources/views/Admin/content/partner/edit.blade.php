@extends('Admin.layouts.default')
@section('content')
<div class="container-fluid">
    @include('Admin.layouts.breadcrumb')
    <div class="row">
        <div class="col-12 col-md-6">
            <div class="card">
                <div class="card-body">
                    @if ($message = Session::get('error'))
                        <div class="alert alert-danger">
                            <p class="pb-0 mb-0">{{ $message }}</p>
                        </div>
                    @endif
                    @if(!empty($partner))
                    <form action="{{route('partner.update', $partner->id)}}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <input type="text" placeholder="Partner Name" required name="partnerName" 
                            value="{{$partner->partnerName}}"
                            class="@error('partnerName') is-invalid @enderror form-control">
                            @error('partnerName')
                                <div class="alert alert-danger">{{ 'The field is required.' }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Partner URL" required name="partnerUrl" 
                            value="{{$partner->partnerUrl}}"
                            class="@error('partnerUrl') is-invalid @enderror form-control">
                            @error('partnerUrl')
                                <div class="alert alert-danger">{{ 'The field is required.' }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="number" placeholder="Partner Piority" required name="partnerPiority" 
                            value="{{$partner->partnerPiority}}"
                            class="@error('partnerPiority') is-invalid @enderror form-control">
                            <small class="text-muted">* The smaller the value the higher the priority</small>
                            @error('partnerPiority')
                                <div class="alert alert-danger">{{ 'The field is required.' }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="text" name="textFile" id="textFile" hidden>
                            @if (!$partner->partnerImage)
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
                            <div class="box-upload" id="boxUpload" style="display: {{$partner->partnerImage ? 'none' : 'block'}}">
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
                                style="display: {{$partner->partnerImage ? 'flex' : 'none'}}">
                                <a href="javascript:removeFile();" class="btn-close position-absolute" style="right: 8px; top: 0; color: #f00">
                                    <i class="mdi mdi-close mdi-24px"></i>
                                </a>
                                <img style="height: 150px;" src="{{asset('upload/'.$partner->partnerImage)}}" id="imageShow">
                            </div>
                            @endif
                        </div>
                        <div class="form-group mb-0 text-right">
                            <button type="submit" class="btn btn-warning text-body"><i class="mdi mdi-check"></i>&nbsp;Submit</button>
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
<script>
    function selectedFile(e) {
        var files = e.target.files[0];
        var render = new FileReader();
        render.readAsDataURL(files);
        render.onload = () => {
            $('#textFile').attr('value', render.result.toString());
            $('#boxUpload').css('display','none');
            $('#boxShow').css('display','flex');
            $('#imageShow').attr('src',render.result.toString());
        }
    }

    function removeFile() {
        $('#textFile').attr('value', '');
        $('#boxUpload').css('display','block');
        $('#boxShow').css('display','none');
        $('#imageShow').attr('src', '#');
    }

</script>
@endsection