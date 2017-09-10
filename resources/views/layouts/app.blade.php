<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{config('app.name', 'Marvella Consultancy Uganda - Real Estate')}}</title>

    {{--sytles--}}
    <link rel="stylesheet" href="{{asset('/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{mix('/css/app.css')}}">
    <style type="text/css">
        .confirm{
          background-color: rgb(140, 245, 158);
        }
        .nav-item a:not(.button), a.nav-item:not(.button) {
            color: #ef584d;
        }
        .nav-item a:not(.button):hover, a.nav-item:not(.button):hover {
            color: #3273dc;
        }
    </style>
    <!-- sweet alert -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<!-- end of sweet alert -->
</head>
<body>
<div id="app">
    @include('menus.header')
    @yield('content')
    @include('menus.footer')
</div>
{{--scripts--}}
<script src="{{mix('/js/app.js')}}" type="application/javascript"></script>
</body>
</html>