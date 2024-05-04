<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <title>@yield('title','CAFETERIA')</title>
    @include('layouts.header')

</head>
<body>
    <div class="m-5 text-center">
        <div class="row align-items-start">
            <div>@yield('main')</div>
            <div class="col">@yield('content-1')</div>
            <div class="col">@yield('content-2')</div>
    <</div>
    </div>
</body>
<footer>
    @include('layouts.footer')
</footer>
</html>
