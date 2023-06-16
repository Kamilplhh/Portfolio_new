<html>

<head>
    <title>Kamil_PLHH @yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Annie+Use+Your+Telescope&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cherry+Bomb+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Source+Serif+Pro:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Philosopher:ital@1&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/js/app.js')
    @vite('resources/js/hover-click.js')
</head>

<body>
    @section('navbar')
    <marquee scrollamount="12" class="navbar top" direction="left">
        <a href="https://www.linkedin.com/in/kamil-czekotas-746684277/" target="_blank"> <i class="fa-brands fa-linkedin"></i> LINKEDIN <i class="fa-brands fa-linkedin"></i> </a>
        <i class="fa-solid fa-circle fa-2xs"></i>
        <a href="https://github.com/Kamilplhh" target="_blank"> <i class="fa-brands fa-github"></i> GITHUB <i class="fa-brands fa-github"></i> </a>
        <i class="fa-solid fa-circle fa-2xs"></i>
        <a href="https://www.instagram.com/kamil_plhh/" target="_blank"> <i class="fa-brands fa-instagram"></i> INSTAGRAM <i class="fa-brands fa-instagram"></i> </a>
    </marquee>

    <marquee scrollamount="12" class="navbar left" direction="down">
        <a href="https://www.linkedin.com/in/kamil-czekotas-746684277/" target="_blank"> <i class="fa-brands fa-linkedin fa-rotate-90"></i> LINKEDIN <i class="fa-brands fa-linkedin fa-rotate-90"></i> </a>
        <i class="fa-solid fa-circle fa-2xs"></i>
        <a href="https://github.com/Kamilplhh" target="_blank"> <i class="fa-brands fa-github fa-rotate-90"></i> GITHUB <i class="fa-brands fa-github fa-rotate-90"></i> </a>
        <i class="fa-solid fa-circle fa-2xs"></i>
        <a href="https://www.instagram.com/kamil_plhh/" target="_blank"> <i class="fa-brands fa-instagram fa-rotate-90"></i> INSTAGRAM <i class="fa-brands fa-instagram fa-rotate-90"></i> </a>
    </marquee>

    <marquee scrollamount="9" class="navbar right" direction="down">
        <a href="https://www.linkedin.com/in/kamil-czekotas-746684277/" target="_blank"> <i class="fa-brands fa-linkedin fa-rotate-90"></i> LINKEDIN <i class="fa-brands fa-linkedin fa-rotate-90"></i> </a>
        <i class="fa-solid fa-circle fa-2xs"></i>
        <a href="https://github.com/Kamilplhh" target="_blank"> <i class="fa-brands fa-github fa-rotate-90"></i> GITHUB <i class="fa-brands fa-github fa-rotate-90"></i> </a>
        <i class="fa-solid fa-circle fa-2xs"></i>
        <a href="https://www.instagram.com/kamil_plhh/" target="_blank"> <i class="fa-brands fa-instagram fa-rotate-90"></i> INSTAGRAM <i class="fa-brands fa-instagram fa-rotate-90"></i> </a>
    </marquee>

    <marquee scrollamount="10" class="navbar bottom" direction="right">
        <a href="https://www.linkedin.com/in/kamil-czekotas-746684277/" target="_blank"> <i class="fa-brands fa-linkedin"></i> LINKEDIN <i class="fa-brands fa-linkedin"></i> </a>
        <i class="fa-solid fa-circle fa-2xs"></i>
        <a href="https://github.com/Kamilplhh" target="_blank"> <i class="fa-brands fa-github"></i> GITHUB <i class="fa-brands fa-github"></i> </a>
        <i class="fa-solid fa-circle fa-2xs"></i>
        <a href="https://www.instagram.com/kamil_plhh/" target="_blank"> <i class="fa-brands fa-instagram"></i> INSTAGRAM <i class="fa-brands fa-instagram"></i> </a>
    </marquee>

    <div class="navbar Homebuttons">
        <div class="row home">
            <div class="col-2 navButton" id="navProject">PROJECTS</div>
            <div class="col-2 navButton" id="navAbout">ABOUT</div>
            <div class="col-4 navButton" id="navHome">HOME</div>
            <div class="col-2 navButton" id="navContact">CONTACT</div>
            <div class="col-2 navButton" id="navServices">SERVICES</div>
        </div>
    </div>
    @show
    <div class="content">
        @yield('content')

    </div>
</body>

</html>