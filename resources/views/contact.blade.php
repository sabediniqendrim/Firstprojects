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

       @include('layout.header')


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
                        <a href="/" class="nav-item nav-link ">Home</a>
                        <a href="/about" class="nav-item nav-link">Über Uns</a>
                        <a href="/contact" class="nav-item nav-link active">Kontakt</a>
                    </div>
                    <a href="/login" class="btn btn-primary rounded-pill text-white py-2 px-4 flex-wrap flex-sm-shrink-0">Termin Buchen</a>
                </div>
            </nav>
        </div>
        <!-- Navbar End -->


        <!-- Book Appointment Start -->
        <div class="container-fluid appointment pt-5 pb-2">
            <div class="container pt-5 pb-2">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2">
                        <div class="section-title text-start">
                            <div class="row g-6">
                                <div class="col-sm-12">
                                    <div class="d-flex flex-column h-100">
                                        <div class="mb-4">
                                            <h4 class="sub-title pe-3 mb-0">Physiotherapie</h4>
                                            <h1 class="display-4 mb-4">Physiotherapie: Professionelle Physiotherapie für Ihre Gesundheit</h1>
                                            {{-- <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et deserunt qui cupiditate veritatis enim ducimus.</p> --}}
                                        </div>
                                        <div class="text-start mb-4">
                                            <a href="/about" class="btn btn-primary rounded-pill text-white py-3 px-5">Über Uns</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.4s">
                            <img src="physiovital/img/ph15.png" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- Book Appointment End -->


         <!-- Book Appointment Start -->
         <div class="container-fluid py-5">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2">
                        <div class="appointment-form rounded p-5">
                            <h1 class="display-5 mb-4">Termin Vereinbaren</h1>
                            <form>
                                <div class="row gy-3 gx-4">
                                    <div class="col-xl-6">
                                        <input type="text" class="form-control py-3 border-primary bg-transparent text-white" placeholder="Vorname und Nachname">
                                    </div>
                                    <div class="col-xl-6">
                                        <input type="email" class="form-control py-3 border-primary bg-transparent text-white" placeholder="Email">
                                    </div>
                                    <div class="col-xl-6">
                                        <input type="phone" class="form-control py-3 border-primary bg-transparent" placeholder="Handynummer">
                                    </div>
                                    <div class="col-xl-6">
                                        <select class="form-select py-3 border-primary bg-transparent" aria-label="">
                                            <option selected>Ihr Geschlecht</option>
                                            <option value="1">Männlich</option>
                                            <option value="2">Weiblich</option>
                                            <option value="3">Andere</option>
                                        </select>
                                    </div>
                                    <div class="col-xl-6">
                                        <input type="date" class="form-control py-3 border-primary bg-transparent">
                                    </div>
                                    <div class="col-xl-6">
                                        <select class="form-select py-3 border-primary bg-transparent" aria-label="">
                                            <option selected>Abteilung</option>
                                            <option value="1">Physiotherapie</option>
                                            <option value="2">Physikalisch</option>
                                            <option value="2">Behandlungen</option>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <textarea class="form-control border-primary bg-transparent text-white" name="text" id="area-text" cols="30" rows="5" placeholder="Kommentar schreiben"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <button type="button" class="btn btn-primary text-white w-50 py-3 px-5">Senden</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.4s">
                        <div class="section-title text-start">
                            <h4 class="sub-title pe-3 mb-0">LÖSUNGEN FÜR <br> IHRE SCHMERZEN</h4>
                            <h1 class="display-4 mb-4">Dienstleistungen höchster Qualität mit minimaler Schmerzrate</h1>
                            <div class="row g-4">
                                <div class="col-sm-6">
                                    <div class="d-flex flex-column h-100">
                                        <div class="mb-4">
                                            <h5 class="mb-3"><i class="fa fa-check text-primary me-2"></i>Körperentspannung</h5>
                                            <p class="mb-0">Unsere Therapien fördern die vollständige Körperentspannung, helfen Stress abzubauen und das allgemeine Wohlbefinden zu verbessern.</p>
                                        </div>
                                        <div class="mb-4">
                                            <h5 class="mb-3"><i class="fa fa-check text-primary me-2"></i> Muskelentspannung</h5>
                                            <p class="mb-0">Unsere Therapien fördern die Muskelentspannung, lindern Verspannungen und verbessern Ihre Beweglichkeit und Ihr Wohlbefinden.</p>
                                        </div>
                                        <div class="text-start mb-4">
                                            <a href="#" class="btn btn-primary rounded-pill text-white py-3 px-5">Termin Buchen</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="video h-100">
                                        <img src="physiovital/img/ph4.jpg" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                        <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                            <span></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Video -->
        <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- 16:9 aspect ratio -->
                        <div class="ratio ratio-16x9">
                            <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always"
                                allow="autoplay"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Book Appointment End -->

 @include('layout.footer')
        
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