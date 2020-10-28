
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Admin</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{asset('admin/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{asset('admin/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('admin/css/colors/blue.css')}}" rel="stylesheet">

    @yield('css-custom')
</head>

<body>
    <section id="wrapper" class="login-register login-sidebar"  
    style="background-image:url({{asset('images/bg-login.jpg')}});">
    <div class="login-box card">
        <div class="card-body">
            
            <form class="form-horizontal form-material" id="loginform" action="{{ route('login.store') }}" method="POST">
                {{ csrf_field() }}
                <a href="javascript:void(0)" class="text-center db">
                    <img src="{{asset('static/img/logo-hachinet-alt.png')}}" alt="Home" />
                </a>  
                
                <div class="form-group mt-5">
                    <div class="col-xs-12">
                        <input class="form-control" type="text" name="txtUsername" required placeholder="Username">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12">
                        <input class="form-control" type="password" name="txtPassword" required placeholder="Password">
                    </div>
                </div>
                <div class="form-group text-center mt-3">
                    <div class="col-xs-12">
                        <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Log In</button>
                    </div>
                </div>
            </form>
            @if (count($errors) >0)
                <ul>
                    @foreach($errors->all() as $error)
                        <li class="text-danger"> {{ $error }}</li>
                    @endforeach
                </ul>
            @endif
            @if (session('status'))
                <p class="text-danger">{{ session('status') }}</p>
            @endif
        </div>
    </div>
</section>
<script src="{{asset('admin/js/jquery.min.js')}}"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="{{asset('admin/js/popper.min.js')}}"></script>
<script src="{{asset('admin/js/bootstrap.min.js')}}"></script>
</body>

</html>