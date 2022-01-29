<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html prefix="og: https://ogp.me/ns#">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        @yield('meta')
        <meta property="og:type" content="token.crypto.$HBREUM" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
        <link rel="stylesheet" href="{{ asset('css/swiper.css') }}"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" integrity="sha512-1cK78a1o+ht2JcaW6g8OXYwqpev9+6GqOkz9xmBN9iUUhIndKtxwILGWYOSibOKjLsEdjyjZvYDq/cZwNeak0w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        @yield('css')
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        @include('layouts.header')
        <div class="fixed-bottom d-flex align-items-center" style="top:0;bottom:0;left:auto;z-index:2">
            <div class="">
            <ul class="nav flex-column">
            <li class="nav-item align-self-center">
                <a class="nav-link" href="https://t.me/HenceutBeREUM_Global" target="_blank">
                    <div class="btn-icon bg-primary text-center">
                        <i class="bi bi-telegram text-white"></i>
                    </div>
                </a>
            </li>
            <li class="nav-item align-self-center">
                <a class="nav-link" href="https://twitter.com/henceutbereum5" target="_blank">
                    <div class="btn-icon bg-primary text-center">
                        <i class="bi bi-twitter text-white"></i>
                    </div>
                </a>
            </li>
            <li class="nav-item align-self-center text-white text-uppercase fw-semibold" style="transform:rotate(270deg);margin-top:3em">
                Community
            </li>
            </ul>
            </div>
        </div>
        @yield('content')
        @include('layouts.footer')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" integrity="sha512-3P8rXCuGJdNZOnUx/03c1jOTnMn3rP63nBip5gOP2qmUh5YAdVAvFZ1E+QLZZbC1rtMrQb+mah3AfYW11RUrWA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/7.4.1/swiper-bundle.min.js" integrity="sha512-pY1t/ADgTwbfGbw0+mRGd33EroA5YgRUWhQNFpPIAdBzyoSb38FsFrf4wBTcS3GFPdTfgtpRrbGCkdl2C2OXYA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js" integrity="sha512-A7AYk1fGKX6S2SsHywmPkrnzTZHrgiVT7GcQkLGDe2ev0aWb8zejytzS8wjo7PGEXKqJOrjQ4oORtnimIRZBtw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="{{ asset('js/main.js') }}"></script>
        @yield('js')
    </body>
</html>