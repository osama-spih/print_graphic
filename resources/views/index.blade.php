<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Grayscale - Start Bootstrap Theme</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('google_fonts/fontface.css.tpl') }}" rel="stylesheet">
    <link href="{{ asset('google_fonts/index.js') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link {{ asset('href') }}="{{ asset('css/grayscale.min.css') }}" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">print graphic</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#projects">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#signup">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header -->
    @include('components.header')

    <!-- About Section -->
    @include('components.about')

    <!-- Projects Section -->
    @include('components.projects')

    <!-- Signup Section -->
    @include('components.signup')
    <!-- Contact Section -->
    <section class="contact-section bg-black">
        <div class="container">
            <div class="row">
                @include('components.contact', [
                    'icon' => 'fa-map-marked-alt',
                    'h4' => 'Address',
                    'div' => '4923 Market Street, Orlando FL',
                    'url' => '',
                ])
                @include('components.contact', [
                    'icon' => 'fa-envelope',
                    'h4' => 'Email',
                    'div' => '',
                    'url' => 'support@gmail.com',
                ])
                @include('components.contact', [
                    'icon' => 'fa-mobile-alt',
                    'h4' => 'Phone',
                    'div' => '+970 (059) 293-9164',
                    'url' => '',
                ])
            </div>
            {{-- Social Media  --}}
            @include('components.social')
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-black small text-center text-white-50">
        <div class="container">
            Copyright &copy; Your Print Graphic 2024
        </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Plugin JavaScript -->
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for this template -->
    <script src="{{ asset('js/grayscale.min.js') }}"></script>

</body>

</html>
