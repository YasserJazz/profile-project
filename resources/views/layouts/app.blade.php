<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="no-js">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/vendor/simple-line-icons/css/simple-line-icons.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- PAGE LEVEL PLUGIN STYLES -->
    <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet">

    <!-- THEME STYLES -->
    <link href="{{ asset('assets/css/layout.min.css') }}" rel="stylesheet" type="text/css" />
</head>

<body id="body" data-spy="scroll" data-target=".header">

    <header class="header navbar-fixed-top">
        <!-- Navbar -->
        <nav class="navbar" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="menu-container js_nav-item">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="toggle-icon"></span>
                    </button>

                    <!-- Logo -->
                    <div class="logo">
                        <a class="logo-wrap" href="#body">
                            <img class="logo-img logo-img-main" src="{{ asset('assets/img/logo.png') }}" alt="Asentus Logo">
                            <img class="logo-img logo-img-active" src="{{ asset('assets/img/logo-dark.png') }}" alt="Asentus Logo">
                        </a>
                    </div>
                    <!-- End Logo -->
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse nav-collapse">
                    <div class="menu-container">
                        <ul class="nav navbar-nav navbar-nav-right">
                            <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="#body">Home</a></li>
                            <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="#about">About</a></li>
                            <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="#experience">Experience</a></li>
                            <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="#work">Work</a></li>
                            <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="#contact">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <!-- End Navbar Collapse -->
            </div>
        </nav>
        <!-- Navbar -->
    </header>

    <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <footer class="footer">
        <div class="content container">
            <div class="row">
                <div class="col-xs-6">
                    <img class="footer-logo" src="{{ asset('assets/img/logo-dark.png') }}" alt="Aircv Logo">
                </div>
                <div class="col-xs-6 text-right sm-text-left">
                    <p class="margin-b-0"><a class="fweight-700" href="http://keenthemes.com/preview/aircv/">Aircv</a> Theme Powered by: <a class="fweight-700" href="http://www.keenthemes.com/">KeenThemes.com</a></p>
                </div>
            </div>
            <!--// end row -->
        </div>
    </footer>

    <a href="javascript:void(0);" class="js-back-to-top back-to-top">Top</a>

    <!-- JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
    <!-- CORE PLUGINS -->
    <script src="{{ asset('assets/vendor/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendor/jquery-migrate.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>

    <!-- PAGE LEVEL PLUGINS -->
    <script src="{{ asset('assets/vendor/jquery.easing.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendor/jquery.back-to-top.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendor/jquery.smooth-scroll.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendor/jquery.wow.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendor/jquery.parallax.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendor/jquery.appear.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendor/masonry/jquery.masonry.pkgd.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendor/masonry/imagesloaded.pkgd.min.js') }}" type="text/javascript"></script>

    <!-- PAGE LEVEL SCRIPTS -->
    <script src="{{ asset('assets/js/layout.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/components/progress-bar.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/components/masonry.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/components/wow.min.js') }}" type="text/javascript"></script>


</body>

</html>