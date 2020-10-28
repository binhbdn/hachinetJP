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
                    <div class="table-responsive">
                        <table class="table table-bordered no-wrap table_partner-custom">
                            <thead>
                                <tr>
                                    <th>Partner Name</th>
                                    <th>Partner Url</th>
                                    <th>Partner Image</th>
                                    <th class="text-nowrap">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($partnerList as $partner)
                                    <tr>
                                        <td>{{$partner->partnerName}}</td>
                                        <td>
                                            <a href="{{$partner->partnerUrl}}" target="_blank" class="text-body">
                                                {{$partner->partnerUrl}}
                                            </a>
                                        </td>
                                        <td>
                                            <div class="part_image">
                                                @if ($partner->partnerImage)
                                                <img src="{{asset('upload/'.$partner->partnerImage)}}" alt="{{basename($partner->partnerImage)}}">
                                                @else
                                                <i class="mdi mdi-close mdi-48px"></i>
                                                @endif
                                            </div>
                                        </td>
                                        <td>
                                            <a href="{{route('partner.edit', $partner->id)}}"><i class="ti-pencil-alt fa-2x"></i></a>
                                            <form action="{{ route('partner.destroy',$partner->id) }}" name="delete__form__{{$partner->id}}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <a class="text-danger delete__confirm" href="javascript:void(0);" data-id="{{$partner->id}}"><i class="ti-trash fa-2x"></i></a>
                                            </form>
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
    $(function() {
        $('.delete__confirm').on('click', function (e) {
            var $id = $(this).attr('data-id');
            e.preventDefault();
            Swal.fire({
                title: 'Are you sure?',
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#ffbc34',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!',
            }).then((result) => {
                if (result.value) {
                    $('form[name="delete__form__'+$id+'"]').submit();
                    Swal.fire(
                        'Deleted!',
                        'Your partner has been deleted.',
                        'success'
                    )
                }
            })
        });
    });

// !function ($) {
//     "use strict";

//     var SweetAlert = function () { };

//     //examples 
//     SweetAlert.prototype.init = function () {},
//     $.SweetAlert = new SweetAlert, $.SweetAlert.Constructor = SweetAlert
// }(window.jQuery),

// function ($) {
//     "use strict";
//     $.SweetAlert.init()
// }(window.jQuery);
</script>
@endsection