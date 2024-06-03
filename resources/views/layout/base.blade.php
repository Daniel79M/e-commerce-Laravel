<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href=" {{ URL::asset('assets/css/style.css') }} ">
    <link rel="stylesheet" href=" {{ URL::asset('assets/bootstrapp/css/bootstrap.min.css') }}">
    <title>{{isset($title) ? $title : 'Site E-Commerce' }} </title>
</head>

<body>
    @include('includes.menu')
    @yield('content')
    <script src="{{ URL::asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('assets/bootstrapp/js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('assets/bootstrapp/js/bootstrap.bundle.min.js') }}"></script>
   
</body>
</html>