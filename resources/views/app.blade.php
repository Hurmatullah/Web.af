<!DOCTYPE html>
<html class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/svg+xml" href="/favicon.svg">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    {{-- Inertia --}}
    <script src="https://polyfill.io/v3/polyfill.min.js?features=smoothscroll,NodeList.prototype.forEach,Promise,Object.values,Object.assign" defer></script>

    {{-- Ping CRM --}}
    <script src="https://polyfill.io/v3/polyfill.min.js?features=String.prototype.startsWith" defer></script>

    <script src="{{ mix('/js/app.js') }}" defer></script>
    <script src="js/jquery.min.js"></script>
    <script src="{{URL::asset('/js/typed.js')}}"></script>
    <script defer src="js/popper.min.js"></script>
    <script defer src="js/bootstrap.min.js"></script>
    <script defer src="js/idangerous.swiper.min.js"></script>
    <script defer src="js/jquery.countdown.js"></script>
    <script defer src="js/jquery.magnific-popup.min.js"></script>
    <script defer src="js/slick.min.js"></script>
    <script defer src="js/owl.carousel.min.js"></script>
    <script defer src="js/isotope.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script>new WOW().init();</script>
    <script defer src="js/scripts.js"></script>
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
