<!DOCTYPE html>
<html class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/svg+xml" href="/favicon.svg">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link href="{{asset('img/favicon.ico')}}" rel="shortcut icon" />
    <!-- Fonts -->
    <link href="{{asset('fonts/cloudicon/cloudicon.css')}}" rel="stylesheet" />
    <link href="{{asset('fonts/fontawesome/css/all.css')}}" rel="stylesheet" />
    <link href="{{asset('fonts/opensans/opensans.css')}}" rel="stylesheet" />
    <!-- CSS styles -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('css/owl.carousel.css')}}" rel="stylesheet" />
    <link href="{{asset('css/magnific-popup.css')}}" rel="stylesheet">
    <link href="{{asset('css/filter.css')}}" rel="stylesheet">
    <link href="{{asset('css/mixitup.css')}}" rel="stylesheet">
    <link href="{{asset('css/idangerous.swiper.css')}}" rel="stylesheet" />
    <link href="{{asset('css/animate.min.css')}}" rel="stylesheet" />
    <link href="{{asset('css/style.css')}}" rel="stylesheet" />
    <link href="{{asset('css/slick.css')}}" rel="stylesheet" />
    <!-- Custom color styles -->
    <link href="{{asset('css/colors/pink.css')}}" rel="stylesheet" title="pink" />
    <link href="{{asset('css/colors/blue.css')}}" rel="stylesheet" title="blue" />
    <link href="{{asset('css/colors/green.css')}}" rel="stylesheet" title="green" />

    {{-- Inertia --}}
    <script src="https://polyfill.io/v3/polyfill.min.js?features=smoothscroll,NodeList.prototype.forEach,Promise,Object.values,Object.assign" defer></script>

    {{-- Ping CRM --}}
    <script src="https://polyfill.io/v3/polyfill.min.js?features=String.prototype.startsWith" defer></script>

    <script src="{{ mix('/js/app.js') }}" defer></script>
    <script src="{{ asset('/js/jquery.min.js')}}"></script>
    <script src="{{ asset('/js/typed.js')}}"></script>
    <script defer src="{{ asset('js/popper.min.js')}}"></script>
    <script defer src="{{ asset('js/bootstrap.min.js')}}"></script>
    <script defer src="{{ asset('js/idangerous.swiper.min.js')}}"></script>
    <script defer src="{{ asset('js/jquery.circliful.min.js')}}"></script>
    <script defer src="{{ asset('js/jquery.countdown.js')}}"></script>
    <script defer src="{{ asset('js/jquery.magnific-popup.min.js')}}"></script>
    <script defer src="{{ asset('js/slick.min.js')}}"></script>
    <script defer src="{{ asset('js/owl.carousel.min.js')}}"></script>
    <script defer src="{{ asset('js/isotope.min.js')}}"></script>
    <script src="{{ asset('js/wow.min.js')}}"></script>
    <script>new WOW().init();</script>
    <script defer src="{{ asset('js/scripts.js')}}"></script>
    <script>
    var typed3 = new Typed('#typed3', {
    strings: ["Premium hardware.", "Large performance.", "Fully dedicated."],
    typeSpeed: 50,
    backSpeed: 20,
    smartBackspace: true,
    loop: true
    });
    </script>
    <script>
        $("#nav-toggle").click(function(){
        $(".menu-wrap.mobile, .menu-toggle").toggleClass("active");
        });
        </script>
    @routes
</head>
<body class="font-sans leading-none text-gray-700 antialiased">

@inertia

</body>
</html>
