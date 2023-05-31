<html>

<head>
    <title>Kamil_PLHH @yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Annie+Use+Your+Telescope&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/js/app.js')
</head>

<body>
    @section('navbar')
        <marquee scrollamount="10" class="navbar top" direction="left">Linkedin github instagram</marquee>
        <marquee scrollamount="10" class="navbar bottom" direction="right">Linkedin github instagram</marquee>
        <marquee scrollamount="10" class="navbar left" direction="up">Linkedin github instagram</marquee>
        <marquee scrollamount="10" class="navbar right" direction="down">Linkedin github instagram</marquee>
    @show
    <div class="content">
        @yield('content')

    </div>
</body>

</html>