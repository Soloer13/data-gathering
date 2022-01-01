<!DOCTYPE HTML>
<head>
    <title>My Site | @yield('title', 'Home Page')</title>
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
    @section('footerScript')
        <script src="app.js"></script>
    @show
</body>

</html>
