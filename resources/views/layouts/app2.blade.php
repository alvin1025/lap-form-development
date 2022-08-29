<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Kodinger">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>LPA | @yield('title')</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap4/dist/css/bootstrap.min.css') }}" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>

    <div class="container mt-4">
        @yield('content')
    </div>

    <link rel="stylesheet" href="{{ asset('js/app.js') }}">
    
    <script src="{{ asset('bootstrap4/dist/js/jquery.min.js') }}"></script>
    <script src="{{ asset('bootstrap4/dist/js/popper.min.js') }}"></script>
    <script src="{{ asset('bootstrap4/dist/js/bootstrap.min.js') }}"></script>




</html>
