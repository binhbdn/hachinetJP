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
                                    <th>Tags Japan</th>
                                    <th>Tags English</th>
                                    <th>Tags Vietnam</th>
                                    <th>Tags Link</th>
                                    <th class="text-nowrap">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($tags as $tag)
                                    <tr>
                                        <td>{{$tag->keyJp}}</td>
                                        <td>{{$tag->keyEn}}</td>
                                        <td>{{$tag->keyVn}}</td>
                                        <td>{{$tag->tagsLink}}</td>
                                        <td>
                                            <a href="{{route('tagslink.edit', $tag->id)}}"><i class="ti-pencil-alt fa-2x"></i></a>
                                            <form action="{{ route('tagslink.destroy',$tag->id) }}" name="delete__form__{{$tag->id}}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <a class="text-danger delete__confirm" href="javascript:void(0);" data-id="{{$tag->id}}"><i class="ti-trash fa-2x"></i></a>
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
                        'Your tags link has been deleted.',
                        'success'
                    )
                }
            })
        });
    });
</script>
@endsection