<!DOCTYPE html>
<html lang="en">
<head>
    <!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Dashboard')</title>
    <!-- FAVI ICON -->
    <link rel="icon" type="image/png" href="{{ asset('frontend/assets/images/favi.png') }}" sizes="32x32">
    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/bootstrap/css/bootstrap.min.css') }}">
    <!-- ALL GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,400i,700,700i|Bungee+Inline" rel="stylesheet" type="text/css">
    <!-- FONT AWESOME CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/fonts/linear-fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/fonts/font-awesome.css') }}">
    <!-- OWL CAROSEL CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/owlcarousel/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/owlcarousel/css/owl.theme.css') }}">
    <!-- LIGHTBOX CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/lightbox.min.css') }}">
    <!-- MAGNIFIC CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/magnific-popup.css') }}">
    <!-- ANIMATE CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/animate.min.css') }}">
    <!-- MAIN STYLE CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
    <!-- RESPONSIVE CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/responsive.css') }}">
    <style>
        .auth-wrapper {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .auth-card {
            background: rgba(144, 238, 144, 0.15);
            border: 1px solid rgba(144, 238, 144, 0.4);
            backdrop-filter: blur(10px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            border-radius: .75rem;
        }
    </style>
</head>
<body>
    @yield('content')

    <!-- LOCAL COPY OF LATEST JQUERY -->
    <script type="text/javascript" src="{{ asset('frontend/assets/js/jquery.min.js') }}"></script>
    <!-- BOOTSTRAP JS -->
    <script src="{{ asset('frontend/assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- PROGRESS JS  -->
    <script src="{{ asset('frontend/assets/js/jquery.appear.js') }}"></script>
    <!-- OWL CAROUSEL JS  -->
    <script src="{{ asset('frontend/assets/owlcarousel/js/owl.carousel.min.js') }}"></script>
    <!-- MIXITUP JS -->
    <script src="{{ asset('frontend/assets/js/jquery.mixitup.js') }}"></script>
    <!-- MAGNIFICANT JS -->
    <script src="{{ asset('frontend/assets/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- STEALLER JS -->
    <script src="{{ asset('frontend/assets/js/jquery.stellar.min.js') }}"></script>
    <!-- YOUTUBE JS -->
    <script src="{{ asset('frontend/assets/js/jquery.mb.YTPlayer.min.js') }}"></script>
    <script type="text/javascript">
        $('.player').mb_YTPlayer();
    </script>
    <!-- COUNTER UP JS -->
    <script src="{{ asset('frontend/assets/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.counterup.min.js') }}"></script>
    <!-- LIGHTBOX JS -->
    <script src="{{ asset('frontend/assets/js/lightbox.min.js') }}"></script>
    <!-- WOW JS -->
    <script src="{{ asset('frontend/assets/js/wow.min.js') }}"></script>
    <!-- scripts js -->
    <script src="{{ asset('frontend/assets/js/scripts.js') }}"></script>
</body>
</html>
