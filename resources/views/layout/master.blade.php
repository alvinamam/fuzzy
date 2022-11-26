<html lang="en">
<head>
    <title>@yield('title')</title>
    @include('layout.header')
</head>
<body>
    @include('layout.navbar')
    <header>
        @yield('content')
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </header>
</body>
</html>