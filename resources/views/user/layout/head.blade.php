<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="watch">
    <meta name="keywords" content="film , movies,tv show,tv series,play,watch now">
    <meta name="description"
        content="film is a website to show different type of movies, play,tv shows and tv series for kids and adult">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Watch @yield('title')</title>
    <!-- inclue icon -->
    <link rel="shortcut icon" href="{{asset('user/images/logo3.png')}}" type="image/x-icon">
    <!-- include file css for font awesome icon -->
    {{-- <link rel="stylesheet" href="{{asset('user/css/all.min.css')}}"> --}}
    <link rel="stylesheet" href="{{asset('user/css/all.min.css')}}">
    <!-- include file css for bootstrap -->
    <link href="{{ asset('user/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- include slick css files  -->
    <link rel="stylesheet" href="{{ asset('user/css/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('user/css/slick/slick-theme.css') }}">
    <!-- include file css for responsive -->
    <link rel="stylesheet" href="{{ asset('user/css/responsive.css') }}">
    <!-- include the main  file css  -->
    <link rel="stylesheet" href="{{asset('user/css/style.css')}}">

    <link rel="stylesheet" href="{{asset('user/css/style.css')}}">

    @yield('head')

</head>
