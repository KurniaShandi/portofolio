<!DOCTYPE html>
<html lang="en">

<head>
    <title>Portofolio - ShandiLogic</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @include('layouts.frontend.css')
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    @include('layouts.frontend.navbar')

    @yield('content')

    @include('layouts.frontend.footer')

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="3rem" height="3rem">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke-miterlimit="10" stroke="#F96D00" />
        </svg></div>


    @include('layouts.frontend.js')

</body>

</html>
