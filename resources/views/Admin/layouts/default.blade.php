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
    <link href="{{asset('admin/css/custom.css')}}" rel="stylesheet">
    <link href="{{asset('admin/css/bootstrap-wysihtml5.css')}}" rel="stylesheet">

    @yield('css-custom')
</head>

<body class="fix-header fix-sidebar card-no-border">
    <div id="main-wrapper">
    @include('Admin.layouts.header')
    @include('Admin.layouts.sidebar')
    <div class="page-wrapper">
        @yield('content')
    </div>

    @include('Admin.layouts.footer')
    @include('Admin.layouts.script')
    @yield('javascript-custom')
</body>
</html>