<div class="row page-titles">
    <div class="col-md-6 col-8 align-self-center">
        <h3 class="text-themecolor mb-0 mt-0">{{$breadcrumb->title}}</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('home__admin')}}">{{$breadcrumb->home}}</a></li>
            @if (isset($breadcrumb->parent))
            <li class="breadcrumb-item"><a href="{{route($breadcrumb->parent_name)}}">{{$breadcrumb->parent}}</a></li>
            @endif
            <li class="breadcrumb-item active">{{$breadcrumb->name}}</li>
        </ol>
    </div>
    @if (isset($breadcrumb->route_name))
    <div class="col-md-6 col-4 align-self-center">
        <button class="btn float-right hidden-sm-down btn-warning">
            <a href="{{route($breadcrumb->route_name)}}" class="text-body">
                @if(isset($breadcrumb->icon))
                <i class="mdi mdi-auto-upload"></i> {{$breadcrumb->btn_text}}
                @else
                <i class="mdi mdi-plus-circle"></i> {{$breadcrumb->btn_text}}
                @endif
            </a>
        </button>
    </div>
    @endif
</div>