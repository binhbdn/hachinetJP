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
                    <h4 class="card-title">New Translate</h4>
                    <form action="{{route('translate.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-4 col-sm-4 col-12">
                                    <input type="text" placeholder="Key Translate" required name="keytranslate" class="@error('keytranslate') is-invalid @enderror form-control">
                                    @error('keytranslate')
                                        <div class="alert alert-danger">{{ 'The field is required.' }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 col-sm-4 col-12">
                                    <div class="form-group mt-3">
                                        <label>Japanese</label>    
                                        <textarea cols="30" rows="2" type="text" placeholder="Japanese" required name="jp_value" class="@error('jp_value') is-invalid @enderror form-control">{{old('jp_value')}}</textarea>
                                        @error('jp_value')
                                            <div class="alert alert-danger">{{ 'The field is required.' }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-12">
                                    <div class="form-group mt-3">
                                        <label>English</label>    
                                        <textarea cols="30" rows="2" type="text" placeholder="English" required name="en_value" class="@error('en_value') is-invalid @enderror form-control">{{old('en_value')}}</textarea>
                                        @error('en_value')
                                            <div class="alert alert-danger">{{ 'The field is required.' }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-12">
                                    <div class="form-group mt-3">
                                        <label>Vietnamese</label>    
                                        <textarea cols="30" rows="2" type="text" placeholder="Vietnamese" required name="vn_value" class="@error('vn_value') is-invalid @enderror form-control">{{old('vn_value')}}</textarea>
                                        @error('vn_value')
                                            <div class="alert alert-danger">{{ 'The field is required.' }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-0 text-right">
                            <button type="submit" class="btn btn-warning text-body"><i class="mdi mdi-check"></i>&nbsp;Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6"><h4 class="card-title">List Translate</h4></div>
                        <div class="col-md-6 text-right">
                            <button class="btn float-right hidden-sm-down btn-warning" id="upgrade__home">
                                <a href="javascript:void(0);" class="text-body">
                                    <i class="mdi mdi-auto-upload"></i> Upgrade To Home
                                </a>
                            </button>
                        </div>
                    </div>
                    <div class="table-responsive mt-3">
                        <table class="table table-bordered no-wrap">
                            <thead>
                                <tr>
                                    <th>Key</th>
                                    <th>Japanese</th>
                                    <th>English</th>
                                    <th>Vietnamese</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $dt)
                                <tr>
                                    <td>{{$dt->key_trans}}</td>
                                    <td>{{$dt->japan}}</td>
                                    <td>{{$dt->english}}</td>
                                    <td>{{$dt->vietnam}}</td>
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
    $(function() {
        $('#upgrade__home').on('click', function (e) {
            e.preventDefault();
            Swal.fire({
                title: 'Đang hoàn thiện tính năng !',
                type: 'warning',
                text: 'Tính năng sẽ được cập nhật sớm',
            })
        });
    });
</script>
@endsection