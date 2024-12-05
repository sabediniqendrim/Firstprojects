<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Physiotherapie</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Playfair+Display:wght@400;500;600&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="physiovital/lib/animate/animate.min.css" rel="stylesheet">
        <link href="physiovital/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="physiovital/css/bootstrap.min.css" rel="stylesheet">
        <!-- Template Stylesheet -->
        <link href="physiovital/css/style.css" rel="stylesheet">
    </head>

    <body>

    @include('/layout.header')
        <!-- Navbar & Hero Start -->
        <div class="container-fluid position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light bg-white px-4 px-lg-5 py-3 py-lg-0">
                <a href="/" class="navbar-brand p-0  mr-3">
                    <h1 class="text-primary m-0"><i class="fas fa-star-of-life me-3">Physio</i></h1> 
                    {{-- <img src="physiovital/img/logovital.png" alt="Logo"> --}}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a class="navbar-nav ms-auto">
                            <!-- Authentication Links -->
                            @guest
                            <a href="/" class="nav-item nav-link">Home</a>
                            <a href="/about" class="nav-item nav-link">Über Uns</a>
                            <a href="/contact" class="nav-item nav-link ">Kontakt</a>
                                @if (Route::has('login'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                @endif
                        
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="{{ route('reserve') }}">{{ __('Termine') }}</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="{{ route('alletermine') }}">{{ __('Alle Termine') }}</a>
                            </li>
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>
                        
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
                        
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </a>
                        {{-- <a onclick="openFullscreen();"><i class="fa fa-arrows-alt"></i></a> --}}
                    </div>
                    {{-- <a href="/reserve" class="btn btn-primary rounded-pill text-white py-2 px-4 flex-wrap flex-sm-shrink-0">Neue Termin Buchen</a> --}}
                </div>
            </nav>
        </div>
        <!-- Navbar & Hero End -->
         <!-- Book Appointment Start -->
         <div class="container-fluid appointment pt-5 pb-1">
            <div class="pt-5 pb-1 p-1">
                <main class="py-1">
                    @yield('content')
                </main>
            </div>
        </div>
        <!-- Book Appointment End -->

       
      
        <!-- Testimonial End -->

        @include('/layout.footer')
        
        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="physiovital/lib/wow/wow.min.js"></script>
        <script src="physiovital/lib/easing/easing.min.js"></script>
        <script src="physiovital/lib/waypoints/waypoints.min.js"></script>
        <script src="physiovital/lib/owlcarousel/owl.carousel.min.js"></script>
        

        <!-- Template Javascript -->
        <script src="physiovital/js/main.js"></script>
        
    </body>

</html>
