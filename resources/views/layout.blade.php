<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>Cengizhan Yavuz</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">


    <link rel="stylesheet" type="text/css" href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('lib/lightbox/css/lightbox.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}">

</head>

<body data-spy="scroll" data-target=".navbar" data-offset="51">
<!-- Navbar Start -->
<nav class="navbar fixed-top shadow-sm navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-lg-5">
    <a href="{{url('/')}}" class="navbar-brand ml-lg-3">
        <h1 class="m-0 display-5">{!! __('general.homePage') !!}</h1>
    </a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse px-lg-3" id="navbarCollapse">
        <div class="navbar-nav m-auto py-0">
            <a href="#home" class="nav-item nav-link active">{!!  __('general.header.home') !!}</a>
            <a href="#about" class="nav-item nav-link">{!!  __('general.header.about') !!}</a>
            <a href="#qualification" class="nav-item nav-link">{!!  __('general.header.qualification') !!}</a>
            <a href="#skill" class="nav-item nav-link">{!!  __('general.header.skill') !!}</a>
            <a href="#blog" class="nav-item nav-link">{!!  __('general.header.blog') !!}</a>
            <a href="#contact" class="nav-item nav-link">{!!  __('general.header.contact') !!}</a>
        </div>
        <a href="" class="btn btn-outline-primary d-none d-lg-block">{!!  __('general.header.hireMe') !!}</a>

        <div class="dropdown language-dropdown">
            <button class="btn" type="button" id="languageDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{ Config::get('languages')[App::getLocale()] }}
            </button>

            <div class="dropdown-menu" aria-labelledby="languageDropdown">
                @foreach (Config::get('languages') as $lang => $language)
                    @if ($lang != App::getLocale())
                <a class="dropdown-item" href="{{ url('lang', $lang) }}"> {{$language}}</a>
                    @endif
                @endforeach
            </div>
        </div>

    </div>
</nav>
<!-- Navbar End -->


<!-- Header Start -->
<div class="container-fluid bg-primary d-flex align-items-center mb-5 py-5" id="home" style="min-height: 100vh;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 px-5 pl-lg-0 pb-5 pb-lg-0">
                <img class="img-fluid w-100 rounded-circle shadow-sm" src="img/profile.jpg" alt="">
            </div>
            <div class="col-lg-7 text-center text-lg-left">
                <h3 class="text-white font-weight-normal mb-3">I'm</h3>
                <h1 class="display-3 text-uppercase text-primary mb-2" style="-webkit-text-stroke: 2px #ffffff;">
                    Cengizhan Yavuz</h1>
                <h1 class="typed-text-output d-inline font-weight-lighter text-white"></h1>
                <div class="typed-text d-none">{!! __('general.myTitle') !!}</div>
                <div class="d-flex align-items-center justify-content-center justify-content-lg-start pt-5">
                    <a href="{!! __('general.cv') !!}"
                       target="_blank" class="btn btn-outline-light mr-3">{!! __('general.cvButton') !!}</a>
                    <a href="{{ __('general.linkedin') }}" target="_blank" class="btn btn-info">
                        <i class="fab fa-linkedin"></i> LinkedIn</a>
                    <a href="{{ __('general.github') }}" target="_blank" class="btn btn-dark ml-3">
                        <i class="fab fa-github"></i> GitHub</a>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Header End -->

@yield('content')


<!-- Footer Start -->
<div class="container-fluid bg-primary text-white mt-5 py-5 px-sm-3 px-md-5">
    <div class="container text-center py-5">
        <div class="d-flex justify-content-center mb-4">
            <a class="btn btn-light btn-social mr-2 {{ strlen(__('general.cv')) > 14 ? 'btn-block text-truncate' : '' }}" target="_blank" href="{{ __('general.cv') }}"><i class="fas fa-arrow-alt-circle-down"></i></a>
            <a class="btn btn-light btn-social mr-2" target="_blank" href="{{ __('general.instagram') }}"><i class="fab fa-instagram"></i></a>
            <a class="btn btn-light btn-social mr-2" target="_blank" href="{{ __('general.linkedin') }}"><i class="fab fa-linkedin-in"></i></a>
            <a class="btn btn-light btn-social" target="_blank" href="{{ __('general.github') }}"><i class="fab fa-github"></i></a>
        </div>



{{--        <div class="d-flex justify-content-center mb-3">--}}
{{--            <a class="text-white" href="#">{!! __('general.footer.privacy') !!}</a>--}}
{{--            <span class="px-3">|</span>--}}
{{--            <a class="text-white" href="#">{!! __('general.footer.terms') !!}</a>--}}
{{--            <span class="px-3">|</span>--}}
{{--            <a class="text-white" href="#">{!! __('general.footer.faqs') !!}</a>--}}
{{--        </div>--}}
        <p class="m-0">&copy; <a class="text-white font-weight-bold" href="#">{{ __('general.footer.domainName') }}</a>
            {{ __('general.footer.allRightsReserved') }}
        </p>

    </div>
</div>
<!-- Footer End -->

<!-- Scroll to Bottom -->
<i class="fa fa-2x fa-angle-down text-white scroll-to-bottom"></i>

<!-- Back to Top -->
<a href="#" class="btn btn-outline-dark px-0 back-to-top"><i class="fa fa-angle-double-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>

<script src="{{ asset('lib/typed/typed.min.js') }}"></script>
<script src="{{ asset('lib/easing/easing.min.js') }}"></script>
<script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
<script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('lib/isotope/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('lib/lightbox/js/lightbox.min.js') }}"></script>

<script src="{{ asset('mail/jqBootstrapValidation.min.js') }}"></script>
<script src="{{ asset('mail/contact.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>


</body>
</html>
