<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Kodinger">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>LPA | @yield('title')</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
</head>

<body>

    <div class="container mt-4">
        @yield('content')
    </div>

    <link rel="stylesheet" href="{{ asset('js/app.js') }}">
</body>

</html>
