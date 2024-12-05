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
                        <a href="/" class="nav-item nav-link active">Home</a>
                        <a href="/about" class="nav-item nav-link">Über Uns</a>
                        <a href="/contact" class="nav-item nav-link ">Kontakt</a>
                        {{-- <a onclick="openFullscreen();"><i class="fa fa-arrows-alt"></i></a> --}}
                    </div>
                    <a href="/login" class="btn btn-primary rounded-pill text-white py-2 px-4 flex-wrap flex-sm-shrink-0">Termin Buchen</a>
                </div>
            </nav>
        </div>
        <!-- Navbar & Hero End -->
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
                                            <h1 class="display-4 mb-4">Willkommen bei Physiotherapie: Für Ihre Gesundheit</h1>
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

        <!-- Services Start -->
        <div class="container-fluid service py-5">
            <div class="container py-5">
                <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="sub-style">
                        <h4 class="sub-title px-3 mb-0">Was Wir Tun</h4>
                    </div>
                    <h1 class="display-3 mb-4">Unser Service erfolgt durch Physiotherapie durch Experten</h1>
                    <p class="mb-0">Bei Physiotherapie bieten wir maßgeschneiderte physiotherapeutische Behandlungen an, um Ihre Genesung und 
                        Ihr Wohlbefinden zu fördern. Unser erfahrenes Team hilft Ihnen, sich von Verletzungen zu erholen, postoperative 
                        Rehabilitation durchzuführen und chronische Schmerzen zu lindern. Vertrauen Sie auf unsere Expertise für Ihre Gesundheit.</p>
                </div>
                <div class="row g-4 justify-content-center">
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item rounded">
                           <div class="service-img rounded-top">
                                <img src="physiovital/img/rs/image.png" class="img-fluid rounded-top w-100" alt="">
                           </div>
                            <div class="service-content rounded-bottom bg-light p-4">
                                <div class="service-content-inner">
                                    <h5 class="mb-4">Message Therapy</h5>
                                    <!-- <p class="mb-4">Dolor, sit amet consectetur adipisicing elit. Soluta inventore cum accusamus, dolor qui ullam</p> -->
                                    {{-- <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-2">mehr lesen</a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item rounded">
                           <div class="service-img rounded-top">
                                <img src="physiovital/img/rs/image1.png" class="img-fluid rounded-top w-100" alt="">
                           </div>
                            <div class="service-content rounded-bottom bg-light p-4">
                                <div class="service-content-inner">
                                    <h5 class="mb-4">Physiotherapy</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item rounded">
                           <div class="service-img rounded-top">
                                <img src="physiovital/img/rs/image2.png" class="img-fluid rounded-top w-100" alt="">
                           </div>
                            <div class="service-content rounded-bottom bg-light p-4">
                                <div class="service-content-inner">
                                    <h5 class="mb-4">Heat & Cold Therapy</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="service-item rounded">
                           <div class="service-img rounded-top">
                                <img src="physiovital/img/rs/image3.png" class="img-fluid rounded-top w-100" alt="">
                           </div>
                            <div class="service-content rounded-bottom bg-light p-4">
                                <div class="service-content-inner">
                                    <h5 class="mb-4">Chiropatic Therapy</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item rounded">
                           <div class="service-img rounded-top">
                                <img src="physiovital/img/rs/image4.png" class="img-fluid rounded-top w-100" alt="">
                           </div>
                            <div class="service-content rounded-bottom bg-light p-4">
                                <div class="service-content-inner">
                                    <h5 class="mb-4">Work Injuries</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item rounded">
                           <div class="service-img rounded-top">
                                <img src="physiovital/img/rs/image5.png" class="img-fluid rounded-top w-100" alt="">
                           </div>
                            <div class="service-content rounded-bottom bg-light p-4">
                                <div class="service-content-inner">
                                    <h5 class="mb-4">Spot Injuries</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item rounded">
                           <div class="service-img rounded-top">
                                <img src="physiovital/img/rs/image6.png" class="img-fluid rounded-top w-100" alt="">
                           </div>
                            <div class="service-content rounded-bottom bg-light p-4">
                                <div class="service-content-inner">
                                    <h5 class="mb-4">Regular Therapy</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="service-item rounded">
                           <div class="service-img rounded-top">
                                <img src="physiovital/img/rs/image7.png" class="img-fluid rounded-top w-100" alt="">
                           </div>
                            <div class="service-content rounded-bottom bg-light p-4">
                                <div class="service-content-inner">
                                    <h5 class="mb-4">Back Pain</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.2s">
                        <a class="btn btn-primary rounded-pill text-white py-3 px-5" href="#">mehr lesen</a>
                    </div> --}}
                </div>
            </div>
        </div>
        <!-- Services End -->


        <!-- About Start -->
        <div class="container-fluid about bg-light py-0">
            <div class="container py-2">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-5 wow fadeInLeft pb-5" data-wow-delay="0.2s">
                        <div class="about-img pb-5 ps-5">
                            <img src="physiovital/img/ph1.jpg" class="img-fluid rounded w-100" style="object-fit: cover;" alt="Image">
                            <div class="about-experience ps-5 ms-4">15 Jahre Erfahrung</div>
                        </div>
                    </div>
                    <div class="col-lg-7 wow fadeInRight" data-wow-delay="0.4s">
                        <div class="section-title text-start mb-5">
                            <h4 class="sub-title pe-3 mb-0">Über uns</h4>
                            <h3 class="mb-4">Wir sind bereit, Sie bei der Verbesserung Ihrer Behandlung zu unterstützen.</h3>
                            <p class="mb-4">
                                Meine langjährige Erfahrung und mein fundiertes Fachwissen ermöglichen es mir, 
                                individuelle Behandlungspläne zu erstellen, die auf die spezifischen Bedürfnisse meiner Patienten abgestimmt sind. 
                                In meiner Behandlung steht die Ursache des Problems im Vordergrund, um langfristige Ergebnisse zu erzielen.
                                Meine offene und humorvolle Art schafft eine positive und vertrauensvolle Atmosphäre, die für die Genesung wichtig ist. 
                                Ich helfe Ihnen, Ihre Gesundheitsziele zu erreichen und ein schmerzfreies Leben zu führen. 
                                Kontaktieren Sie mich gerne, um einen Termin zu vereinbaren oder bei Fragen. Ich freue mich auf Sie
                                !</p>
                            <div class="mb-4">
                                <p class="text-secondary"><i class="fa fa-check text-primary me-2"></i> Erfrischend, eine so persönliche Note zu bekommen.</p>
                                <p class="text-secondary"><i class="fa fa-check text-primary me-2"></i> Fortschrittliche Physiotherapie-Dienstleistungen in Kreuzlingen</p>
                                <p class="text-secondary"><i class="fa fa-check text-primary me-2"></i> Erholung und Rehabilitation bei Physiotherapie</p>
                            </div>
                            <a href="#" class="btn btn-primary rounded-pill text-white py-3 px-5">mehr lesen</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

        <!-- Feature Start -->
        <div class="container-fluid feature py-5">
            <div class="container py-5">
                <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="sub-style">
                        <h4 class="sub-title px-3 mb-0">WARUM UNS <br> WÄHLEN</h4>
                    </div>
                    <h1 class="display-3 mb-4">Warum uns wählen? Holen Sie sich Ihren Lebensstil zurück</h1>
                    <p class="mb-0">Wählen Sie Physiotherapie für eine maßgeschneiderte physiotherapeutische Betreuung, die Ihnen hilft, Ihre Gesundheit und Lebensqualität wiederzuerlangen!</p>
                </div>
                <div class="row g-4 justify-content-center">
                    <div class="col-md-2 col-lg-4 col-xl-3 wow fadeInUp " data-wow-delay="0.1s">
                        <div class="row-cols-1 feature-item p-4">
                            <div class="col-12">
                                <div class="feature-icon mb-4">
                                    <div class="p-3 d-inline-flex bg-white rounded">
                                        <i class="fas fa-diagnoses fa-4x text-primary"></i>
                                    </div>
                                </div>
                                <div class="feature-content d-flex flex-column">
                                    <h5 class="mb-4">Lizenzierter Therapeut</h5>
                                    <p class="mb-0">Unsere Therapeuten sind staatlich lizenziert und hochqualifiziert, um Ihnen die beste Pflege zu bieten.</p><br>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="row-cols-1 feature-item p-4">
                            <div class="col-12">
                                <div class="feature-icon mb-4">
                                    <div class="p-3 d-inline-flex bg-white rounded">
                                        <i class="fas fa-briefcase-medical fa-4x text-primary"></i>
                                    </div>
                                </div>
                                <div class="feature-content d-flex flex-column">
                                    <h5 class="mb-4">Personalisierte Behandlung</h5>
                                    <p class="mb-0">Wir erstellen maßgeschneiderte Behandlungspläne, die auf Ihre individuellen Bedürfnisse und Ziele abgestimmt sind.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="row-cols-1 feature-item p-4">
                            <div class="col-12">
                                <div class="feature-icon mb-4">
                                    <div class="p-3 d-inline-flex bg-white rounded">
                                        <i class="fas fa-hospital-user fa-4x text-primary"></i>
                                    </div>
                                </div>
                                <div class="feature-content d-flex flex-column">
                                    <h5 class="mb-4">Therapieziele</h5>
                                    <p class="mb-0">Gemeinsam setzen wir klare Therapieziele, um Ihre Genesung und Ihr Wohlbefinden zu fördern.</p><br>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="row-cols-1 feature-item p-4">
                            <div class="col-12">
                                <div class="feature-icon mb-4">
                                    <div class="p-3 d-inline-flex bg-white rounded">
                                        <i class="fas fa-users fa-4x text-primary"></i>
                                    </div>
                                </div>
                                <div class="feature-content d-flex flex-column">
                                    <h5 class="mb-4">Praktiker-Netzwerk</h5>
                                    <p class="mb-0">Unser umfassendes Netzwerk von Fachleuten stellt sicher, dass Sie jederzeit die bestmögliche Betreuung erhalten.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="row-cols-1 feature-item p-4">
                            <div class="col-12">
                                <div class="feature-icon mb-4">
                                    <div class="p-3 d-inline-flex bg-white rounded">
                                        <i class="fas fa-spa fa-4x text-primary"></i>
                                    </div>
                                </div>
                                <div class="feature-content d-flex flex-column">
                                    <h5 class="mb-4">Komfortables Zentrum</h5>
                                    <p class="mb-0">DUnser modernes und komfortables Zentrum bietet eine entspannende Umgebung für Ihre Behandlungen.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="row-cols-1 feature-item p-4">
                            <div class="col-12">
                                <div class="feature-icon mb-4">
                                    <div class="p-3 d-inline-flex bg-white rounded">
                                        <i class="fas fa-heart fa-4x text-primary"></i>
                                    </div>
                                </div>
                                <div class="feature-content d-flex flex-column">
                                    <h5 class="mb-4">Erfahrenes Personal</h5>
                                    <p class="mb-0">Unser Team besteht aus erfahrenen Fachkräften, die sich leidenschaftlich um Ihre Gesundheit kümmern.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="row-cols-1 feature-item p-4">
                            <div class="col-12">
                                <div class="feature-icon mb-4">
                                    <div class="p-3 d-inline-flex bg-white rounded">
                                        <i class="fab fa-pied-piper fa-4x text-primary"></i>
                                    </div>
                                </div>
                                <div class="feature-content d-flex flex-column">
                                    <h5 class="mb-4">Viele Arten von Therapien</h5>
                                    <p class="mb-0">Wir bieten eine Vielzahl von Therapiemethoden an, um gezielt auf Ihre spezifischen Beschwerden einzugehen.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="row-cols-1 feature-item p-4">
                            <div class="col-12">
                                <div class="feature-icon mb-4">
                                    <div class="p-3 d-inline-flex bg-white rounded">
                                        <i class="fas fa-user-md fa-4x text-primary"></i>
                                    </div>
                                </div>
                                <div class="feature-content d-flex flex-column">
                                    <h5 class="mb-4">Lizenzierter Therapeut</h5>
                                    <p class="mb-0">Unsere Therapeuten sind staatlich lizenziert und hochqualifiziert, um Ihnen die beste Pflege zu bieten.</p><br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Feature End -->




        <!-- Testimonial Start -->
        <div class="container-fluid testimonial py-2 wow zoomInDown" data-wow-delay="0.1s">
            <div class="container py-2">
                <div class="section-title mb-1">
                    <div class="sub-style">
                        <h4 class="sub-title text-white px-3 mb-0">Referenzen</h4>
                    </div>
                    <h1 class="display-3 mb-4">Was Kunden sagen</h1>
                </div>
                <div class="testimonial-carousel owl-carousel">
                    <div class="testimonial-item">
                        <div class="testimonial-inner p-5">
                            <div class="testimonial-inner-img mb-4">
                                <img src="physiovital/img/rs/arzt2.png" class="img-fluid rounded-circle" alt="">
                            </div>
                            <p class="text-white fs-7">Ich bin sehr zufrieden mit Physiotherapie. 
                                Das Team ist unglaublich freundlich und professionell. Dank ihrer maßgeschneiderten Behandlungspläne habe ich mich nach meiner Verletzung schneller als erwartet erholt. 
                                Die Atmosphäre ist angenehm und entspannend. Absolut empfehlenswert!
                            </p>
                            <div class="text-center">
                                <h5 class="mb-2">Qendrim Sabeini</h5>
                                <p class="mb-2 text-white-50">Kreuzlingen</p>
                                <div class="d-flex justify-content-center">
                                    <i class="fas fa-star text-secondary"></i>
                                    <i class="fas fa-star text-secondary"></i>
                                    <i class="fas fa-star text-secondary"></i>
                                    <i class="fas fa-star text-secondary"></i>
                                    <i class="fas fa-star text-secondary"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-inner p-5">
                            <div class="testimonial-inner-img mb-4">
                                <img src="physiovital/img/rs/arzt2.png" class="img-fluid rounded-circle" alt="">
                            </div>
                            <p class="text-white fs-7">Die Therapien bei Physiotherapie haben mir sehr geholfen, meine chronischen Rückenschmerzen zu lindern. Die Therapeuten sind äußerst kompetent und aufmerksam. 
                                Ich schätze besonders ihre individuelle Herangehensweise und das Engagement für meine Gesundheit.
                            </p>
                            <div class="text-center">
                                <h5 class="mb-2">Sabedini Qendrim</h5>
                                <p class="mb-2 text-white-50">Weinfelden</p>
                                <div class="d-flex justify-content-center">
                                    <i class="fas fa-star text-secondary"></i>
                                    <i class="fas fa-star text-secondary"></i>
                                    <i class="fas fa-star text-secondary"></i>
                                    <i class="fas fa-star text-secondary"></i>
                                    <i class="fas fa-star text-secondary"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-inner p-5">
                            <div class="testimonial-inner-img mb-4">
                                <img src="physiovital/img/rs/arztin2.png" class="img-fluid rounded-circle" alt="">
                            </div>
                            <p class="text-white fs-7">Physiotherapie hat mein Leben verändert. Die Behandlung war nicht nur effektiv, sondern auch sehr angenehm.
                                 Das Personal ist erfahren und freundlich, und das Zentrum ist modern und komfortabel. Ich fühle mich hier immer in guten Händen.
                            </p>
                            <div class="text-center">
                                <h5 class="mb-2">Qendrim Sabedini 2</h5>
                                <p class="mb-2 text-white-50">Frauenfeld</p>
                                <div class="d-flex justify-content-center">
                                    <i class="fas fa-star text-secondary"></i>
                                    <i class="fas fa-star text-secondary"></i>
                                    <i class="fas fa-star text-secondary"></i>
                                    <i class="fas fa-star text-secondary"></i>
                                    <i class="fas fa-star text-secondary"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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